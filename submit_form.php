<html>
    <body>
        <?php
            require 'review.php';
            include 'database_connection.php';

            $name = $_POST["name"];
            $email = $_POST["email"];
            $level = $_POST["level"];
            $review = $_POST["review"];

            $rev = new Review($name, $email, $level, $review);

            $command = 'INSERT INTO reviews (name, email, level, review) VALUES ( \'' . $name . '\', \'' . $email . '\', \'' . $level . '\', \''. $review .'\')';

            if ($conn->query($command) == true) {echo 'SUCCESS';} else {die('error in completing \'' . $command . ' query');};

            echo "<h1> Thank You, " . $rev->get_name() . "! </h1><br>";

            echo "<p> Your Message Reads: </p><br>";

            echo "<p>" . $rev->get_review() . "</p><br>";

            echo "<p> If we will have any other questions, we will contact you through your e-mail: " . $rev->get_email() . "! </p>"
        ?>
        <button onClick="window.location.href='index.html'">Go Back</button>
    </body>
</html>