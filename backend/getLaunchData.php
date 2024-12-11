<?php
include ('../database/db_conn.php');

$launchNumber = intval($_GET['launchNumber']);
$response;

if ($launchNumber) {

    // Get all of the accelerometer data cause it's the only sensor we're really using.
    $accelerometerQuery = "SELECT * FROM accelerometer WHERE launchId = $launchNumber";
    $accelerometerResult = $conn->query($accelerometerQuery);

    if ($accelerometerResult) {
        // Prepare the data for Chart.js
        $accelerationX = [];
        $accelerationY = [];
        $accelerationZ = [];
        $gyroX = [];
        $gyroY = [];
        $gyroZ = [];
        $sensorTemperature = [];
        $timestamps = [];

        // Fetch the rows from the accelerometer table
        while ($row = $accelerometerResult->fetch_assoc()) {
            $accelerationX[] = $row['acceleration_x'];
            $accelerationY[] = $row['acceleration_y'];
            $accelerationZ[] = $row['acceleration_z'];
            $gyroX[] = $row['gyro_x'];
            $gyroY[] = $row['gyro_y'];
            $gyroZ[] = $row['gyro_z'];
            $sensorTemperature[] = $row['sensor_temperature'];
            $timestamps[] = $row['timestamp']; // This is the timestamp for the X axis
        }

        // Prepare the response data for Chart.js
        $response['graphs']['Accelerometer Data'] = [
            'id' => 'accelerometerGraph',
            'labels' => $timestamps, // Use timestamps as labels
            'datasets' => [
                [
                    'label' => 'Acceleration X',
                    'data' => $accelerationX,
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                ],
                [
                    'label' => 'Acceleration Y',
                    'data' => $accelerationY,
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                ],
                [
                    'label' => 'Acceleration Z',
                    'data' => $accelerationZ,
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                ],
                [
                    'label' => 'Gyro X',
                    'data' => $gyroX,
                    'borderColor' => 'rgba(153, 102, 255, 1)',
                    'backgroundColor' => 'rgba(153, 102, 255, 0.2)',
                ],
                [
                    'label' => 'Gyro Y',
                    'data' => $gyroY,
                    'borderColor' => 'rgba(255, 159, 64, 1)',
                    'backgroundColor' => 'rgba(255, 159, 64, 0.2)',
                ],
                [
                    'label' => 'Gyro Z',
                    'data' => $gyroZ,
                    'borderColor' => 'rgba(255, 205, 86, 1)',
                    'backgroundColor' => 'rgba(255, 205, 86, 0.2)',
                ],
                [
                    'label' => 'Sensor Temperature (°C)',
                    'data' => $sensorTemperature,
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                ],
            ]
        ];
    }
}

echo json_encode($response);
?>
