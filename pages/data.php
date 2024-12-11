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
            $query = "SELECT launchNumber FROM launchmeasurements";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['launchNumber']}'>{$row['launchNumber']}</option>";
            }
            ?>
        </select>
    </form>

    <!-- Data and Graph Section -->
    <div id="launchData" class="mt-5 text-center text-gray-600">
        <p>Select a launch to view data.</p>
    </div>
</div>
<?php
include_once('../includes/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.getElementById('launchNumber').addEventListener('change', function() {
        const launchNumber = this.value;

        fetch(`backend/getLaunchData.php?launchNumber=${launchNumber}`)
            .then(response => response.json())
            .then(data => {
                displayLaunchData(data);
            })
            .catch(error => console.error('Error fetching data:', error));
    });

    function displayLaunchData(data) {
        const container = document.getElementById('launchData');
        container.innerHTML = '';

        if (!data.success) {
            container.innerHTML = '<p class="text-danger">No data available for the selected launch.</p>';
            return;
        }

        // Data Tables
        container.innerHTML += `<h3 class="text-center">Launch Data</h3>`;

        for (const [table, rows] of Object.entries(data.tables)) {
            let tableHTML = `<h4>${table}</h4><table class="table table-bordered"><thead><tr>`;
            if (rows.length > 0) {
                Object.keys(rows[0]).forEach(column => {
                    tableHTML += `<th>${column}</th>`;
                });
                tableHTML += `</tr></thead><tbody>`;

                rows.forEach(row => {
                    tableHTML += `<tr>`;
                    Object.values(row).forEach(value => {
                        tableHTML += `<td>${value}</td>`;
                    });
                    tableHTML += `</tr>`;
                });

                tableHTML += `</tbody></table>`;
            } else {
                tableHTML += `<p>No data available.</p>`;
            }
            container.innerHTML += tableHTML;
        }

        // Graphs
        const graphData = data.graphs;
        for (const [graphTitle, graph] of Object.entries(graphData)) {
            container.innerHTML += `<h4>${graphTitle}</h4><canvas id="${graph.id}"></canvas>`;
            const ctx = document.getElementById(graph.id).getContext('2d');
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
                    }
                }
            });
        }
    }
</script>