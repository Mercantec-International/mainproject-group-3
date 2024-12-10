<?php
include('functions.php');
$conn = db_connect();

$launchNumber = intval($_GET['launchNumber']);
$response = ['success' => false];

if ($launchNumber) {
    // Fetch launchId
    $launchQuery = "SELECT id FROM launchmeasurements WHERE launchNumber = $launchNumber";
    $launchResult = $conn->query($launchQuery);

    if ($launchResult && $launchRow = $launchResult->fetch_assoc()) {
        $launchId = $launchRow['id'];

        $response['success'] = true;
        $response['tables'] = [];
        $response['graphs'] = [];

        // Fetch Data from Each Table
        $tables = ['hy521']; // 'bme280', 'gygps6mv2', 
        foreach ($tables as $table) {
            $dataQuery = "SELECT * FROM $table WHERE launchId = $launchId";
            $dataResult = $conn->query($dataQuery);

            $tableData = [];
            while ($row = $dataResult->fetch_assoc()) {
                $tableData[] = $row;
            }
            $response['tables'][$table] = $tableData;
        }

        // Prepare Graph Data
        $graphQuery = "SELECT accelerateX, accelerateY, accelerateZ, gyroX, gyroY, gyroZ, temperature, timestamp FROM hy521 WHERE launchId = $launchId";
        $graphResult = $conn->query($graphQuery);

        $accelerateX = [];
        $accelerateY = [];
        $accelerateZ = [];
        $gyroX = [];
        $gyroY = [];
        $gyroZ = [];
        $temperature = [];
        $timestamps = [];

        while ($row = $graphResult->fetch_assoc()) {
            $accelerateX[] = $row['accelerateX'];
            $accelerateY[] = $row['accelerateY'];
            $accelerateZ[] = $row['accelerateZ'];
            $gyroX[] = $row['gyroX'];
            $gyroY[] = $row['gyroY'];
            $gyroZ[] = $row['gyroZ'];
            $temperature[] = $row['temperature'];
            $timestamps[] = $row['timestamp'];
        }

        if (!empty($timestamps)) {
            $response['graphs']['Environmental Data'] = [
                'id' => 'environmentGraph',
                'labels' => $timestamps,
                'datasets' => [
                    [
                        'label' => 'AccelerateX',
                        'data' => $accelerateX,
                        'borderColor' => 'red',
                        'backgroundColor' => 'rgba(255, 0, 0, 0.2)',
                    ],
                    [
                        'label' => 'AccelerateY',
                        'data' => $accelerateY,
                        'borderColor' => 'blue',
                        'backgroundColor' => 'rgba(0, 0, 255, 0.2)',
                    ],
                    [
                        'label' => 'AccelerateZ',
                        'data' => $accelerateZ,
                        'borderColor' => 'green',
                        'backgroundColor' => 'rgba(0, 255, 0, 0.2)',
                    ],
                    [
                        'label' => 'GyroX',
                        'data' => $gyroX,
                        'borderColor' => 'orange',
                        'backgroundColor' => 'rgba(255, 165, 0, 0.2)',
                    ],
                    [
                        'label' => 'GyroY',
                        'data' => $gyroY,
                        'borderColor' => 'purple',
                        'backgroundColor' => 'rgba(128, 0, 128, 0.2)',
                    ],
                    [
                        'label' => 'GyroZ',
                        'data' => $gyroZ,
                        'borderColor' => 'brown',
                        'backgroundColor' => 'rgba(165, 42, 42, 0.2)',
                    ],
                    [
                        'label' => 'Temperature',
                        'data' => $temperature,
                        'borderColor' => 'cyan',
                        'backgroundColor' => 'rgba(0, 255, 255, 0.2)',
                    ],
                ]
            ];
        }
    }
}

echo json_encode($response);
?>
