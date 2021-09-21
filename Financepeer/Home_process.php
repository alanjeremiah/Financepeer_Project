<?php
    include('db_connection.php');
    session_start();
    if(isset($_POST['Upload'])) {
        $query = '';
        $table_data = '';

        // json file name

        // Read the JSON file in PHP

        $data = file_get_contents($_FILES['File']['tmp_name']);

        // Convert the JSON String into PHP Array
        $array = json_decode($data, true);

        // Extracting row by row
        foreach($array as $row) {

            // Database query to insert data
            // into database Make Multiple
            // Insert Query
            $query .=
            "INSERT INTO Sample VALUES
            ('".$row["userId"]."', '".$row["id"]."',
            '".$row["title"]."','".$row["body"]."'); ";

            $table_data .= '
            <tr>
                <td>'.$row["userId"].'</td>
                <td>'.$row["id"].'</td>
                <td>'.$row["title"].'</td>
                <td>'.$row["body"].'</td>
            </tr>
            '; // Data for display on Web page
        }

        if(mysqli_multi_query($connect, $query)) {
            echo '<h3>Inserted JSON Data</h3><br />';
            echo '
            <table class="table table-bordered">
            <tr>
                <th width="10%">userId</th>
                <th width="10%">id</th>
                <th width="30%">title</th>
                <th width="50%">body</th>
            </tr>
            ';
            echo $table_data;
            echo '</table>';
        }              
    }
?>