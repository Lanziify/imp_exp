<?php
include 'config.php';
include 'import.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Export data from MySQL table to CSV file using php</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
        <span >$response</span>
        <form class="md-form" action='#' method="post" enctype="multipart/form-data">
            <a href="exportdata.php" class="btn btn-primary">Export Data</a>
            <div class="footer-left">
                <div class="file-field">
                    <div class="btn btn-primary btn-sm float-left">
                        <input type="file" name="file">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

</html>