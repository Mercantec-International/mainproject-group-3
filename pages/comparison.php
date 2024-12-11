<?php
session_start();

include('../includes/header.php');
include_once('../database/db_conn.php');
$page = 'Data';

?>

<!-- Tailwind CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto my-5 p-4">

    <h2 class="text-center text-2xl font-bold mb-4">Compare Launch Data</h2>

    <!-- Launch Selection -->
    <form id="launchForm" class="grid grid-cols-2 gap-4">
        <!-- Left Launch Selection -->
        <div>
            <label for="launchNumber1" class="block text-lg font-medium mb-2">Select Launch 1:</label>
            <select id="launchNumber1" name="launchNumber1" class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="" disabled selected>Select a Launch</option>
                <?php
                $query = "SELECT launchId FROM launches";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['launchId']}'>{$row['launchId']}</option>";
                }
                ?>
            </select>
        </div>

        <!-- Right Launch Selection -->
        <div>
            <label for="launchNumber2" class="block text-lg font-medium mb-2">Select Launch 2:</label>
            <select id="launchNumber2" name="launchNumber2" class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="" disabled selected>Select a Launch</option>
                <?php
                $query = "SELECT launchId FROM launches";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['launchId']}'>{$row['launchId']}</option>";
                }
                ?>
            </select>
        </div>
    </form>

    <!-- Data and Graph Section -->
    <div class="grid grid-cols-2 gap-4 mt-5">
        <!-- Left Launch Data -->
        <div id="launchData1" class="text-center text-gray-600">
            <p>Select a launch to view data.</p>
        </div>

        <!-- Right Launch Data -->
        <div id="launchData2" class="text-center text-gray-600">
            <p>Select a launch to view data.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Fetch data and display for Launch 1
    document.getElementById('launchNumber1').addEventListener('change', function () {
        const launchNumber1 = this.value;

        // Disable selected option in Launch 2 dropdown
        updateDropdownOptions('launchNumber2', launchNumber1);

        // Fetch data
        fetchLaunchData(launchNumber1, 'launchData1');
    });

    // Fetch data and display for Launch 2
    document.getElementById('launchNumber2').addEventListener('change', function () {
        const launchNumber2 = this.value;

        // Disable selected option in Launch 1 dropdown
        updateDropdownOptions('launchNumber1', launchNumber2);

        // Fetch data
        fetchLaunchData(launchNumber2, 'launchData2');
    });

    // Fetch data from the backend and render the graphs
    function fetchLaunchData(launchNumber, containerId) {
        fetch(`../backend/getLaunchData.php?launchNumber=${launchNumber}`)
            .then(response => response.json())
            .then(data => {
                displayLaunchData(data, containerId);
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Display the launch data graphs
    function displayLaunchData(data, containerId) {
        const container = document.getElementById(containerId);
        container.innerHTML = ''; // Clear existing content

        if (!data.graphs) {
            container.innerHTML = '<p class="text-danger">No data available for the selected launch.</p>';
            return;
        }

        // Render graphs
        const graphData = data.graphs;
        for (const [graphTitle, graph] of Object.entries(graphData)) {
            container.innerHTML += `<h4>${graphTitle}</h4><canvas id="${graph.id}-${containerId}" class="mb-4"></canvas>`;
            const ctx = document.getElementById(`${graph.id}-${containerId}`).getContext('2d');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: graph.labels,
                    datasets: graph.datasets
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: graphTitle
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Timestamp'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Sensor Values'
                            }
                        }
                    }
                }
            });
        }
    }

    // Update dropdown options to disable the selected launch
    function updateDropdownOptions(otherDropdownId, selectedValue) {
        const otherDropdown = document.getElementById(otherDropdownId);
        Array.from(otherDropdown.options).forEach(option => {
            if (option.value === selectedValue) {
                option.disabled = true;
            } else {
                option.disabled = false;
            }
        });
    }
</script>

<?php
include_once('../includes/footer.php');
?>
