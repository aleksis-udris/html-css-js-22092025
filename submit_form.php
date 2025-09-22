<html>
    <body>
        <?php
            $arr = [];

            $name = $_POST["name"];
            $email = $_POST["email"];
            $level = $_POST["level"];
            $review = $_POST["review"];

            $arr.push([$name, $email, $level, $review]);

            echo "<h1> Thank You" . $arr[0][0] . "! </h1><br>";

            echo "<p> Your Message Reads: </p><br>";

            echo "<p>" . $arr[0][3] . "</p><br>";

            echo "<p> If we will have any other questions, we will contact you through your e-mail: " . $arr[0][1] . "! </p>"
        ?>
    </body>
</html>