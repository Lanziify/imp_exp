<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Export data from MySQL table to CSV file using php</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
$select = "SELECT * FROM `employee` ";
$result = $conn->query($select);
if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<tr><th>Employee Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '<th>Enabled</th>';
    echo '</tr>';
    while ($row = $result->fetch_object()) {
        $status = ($row->is_enabled == '1') ? 'Yes' : 'No';
        echo '<tr>';
        echo '<td>' . $row->emp_name . '</td>';
        echo '<td>' . $row->email . '</td>';
        echo '<td>' . $row->phone . '</td>';
        echo '<td>' . $status . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
        <a href="exportdata.php" class="btn btn-primary">Export Data</a>
    </div>
</body>

</html>