<?php
session_start();

include('../includes/header.php');
include_once('../database/db_conn.php');
$page = 'Data';

?>

<!-- Tailwind CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto my-5 p-4">

    <h2 class="text-center text-2xl font-bold mb-4">View Launch Data</h2>

    <!-- Launch Selection -->
    <form id="launchForm" class="mb-4">
        <label for="launchNumber" class="block text-lg font-medium mb-2">Select a Launch Number:</label>
        <select id="launchNumber" name="launchNumber" class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="" disabled selected>Select a Launch</option>
            <?php
            $query = "SELECT launchId FROM launches";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['launchId']}'>{$row['launchId']}</option>";
            }
            ?>
        </select>
    </form>

    <!-- Data and Graph Section -->
    <div id="launchData" class="mt-5 text-center text-gray-600">
        <p>Select a launch to view data.</p>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.getElementById('launchNumber').addEventListener('change', function() {
        const launchNumber = this.value;

        // Fetch the accelerometer data for the selected launch
        fetch(`../backend/getLaunchData.php?launchNumber=${launchNumber}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                displayLaunchData(data); // Display the retrieved data
            })
            .catch(error => console.error('Error fetching data:', error));
    });

    function displayLaunchData(data) {
        const container = document.getElementById('launchData');
        container.innerHTML = ''; // Clear any existing content

        if (!data.graphs) {
            container.innerHTML = '<p class="text-danger">No data available for the selected launch.</p>';
            return;
        }

        // Graphs Section
        const graphData = data.graphs;
        for (const [graphTitle, graph] of Object.entries(graphData)) {
            // Create a section for each graph
            container.innerHTML += `<h4>${graphTitle}</h4><canvas id="${graph.id}" class="mb-4"></canvas>`;
            const ctx = document.getElementById(graph.id).getContext('2d');
            
            // Render the graph using Chart.js
            new Chart(ctx, {
                type: 'line', // Line chart for accelerometer data
                data: {
                    labels: graph.labels,  // Timestamps as X-axis labels
                    datasets: graph.datasets // Data from accelerometer
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: graphTitle // Title for the chart
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
</script>


<?php
include_once('../includes/footer.php')
?>