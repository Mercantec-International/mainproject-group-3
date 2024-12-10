<?php
include('php/functions.php');
$conn = db_connect();

headerHTML("Launch Data");
?>

<div class="container my-5">
    <h2 class="text-center mb-4">View Launch Data</h2>
    
    <!-- Launch Selection -->
    <form id="launchForm" class="mb-4">
        <label for="launchNumber" class="form-label">Select a Launch Number:</label>
        <select id="launchNumber" name="launchNumber" class="form-select">
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
    <div id="launchData" class="mt-5">
        <p class="text-center text-muted">Select a launch to view data.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.getElementById('launchNumber').addEventListener('change', function() {
        const launchNumber = this.value;

        fetch(`php/getLaunchData.php?launchNumber=${launchNumber}`)
            .then(response => response.json())
            .then(data => {
                displayLaunchData(data);
            })
            .catch(error => console.error('Error fetching data:', error));
    });

    function displayLaunchData(data) {
        console.log("Graphs:", data.graphs);
        
        const container = document.getElementById('launchData');
        container.innerHTML = '';

        if (!data.success) {
            container.innerHTML = '<p class="text-danger">No data available for the selected launch.</p>';
            return;
        }

        // Data Title
        container.innerHTML += `<h3 class="text-center">Launch Data</h3>`;

        const graphData = data.graphs;

        for (const [graphTitle, graph] of Object.entries(graphData)) {
            // Create and append chart container
            const titleElement = document.createElement('h4');
            titleElement.textContent = graphTitle;

            const canvasElement = document.createElement('canvas');
            canvasElement.id = graph.id;

            container.appendChild(titleElement);
            container.appendChild(canvasElement);

            // Initialize Chart.js
            const ctx = canvasElement.getContext('2d');
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
    }
</script>

<?php footerHTML(); ?>
