<html>
    <head>
        <title>Reviews</title>
        <link rel="stylesheet" href="./style.css" />
        <script src="./script.js"></script>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
        <?php
            include "database_connection.php";

            $command = "SELECT * FROM reviews";

            $res = $conn->query($command);



            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["r_id"] . '</td>';
                    echo '<td>' . $row["name"] . '</td>';
                    echo '<td>' . $row["email"] . '</td>';
                    echo '<td>' . $row["level"] . '</td>';
                    echo '<td>' . $row["created_at"] . '</td>';
                    echo '<td>' . $row["review"] . '</td>';
                    echo '</tr>';
                }
            }
        ?>
            </tbody>
        </table>

    </body>
</html>