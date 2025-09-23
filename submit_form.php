<html>
    <body>
        <?php

            class Review {
                private $name;
                private $email;
                private $level;
                private $review;

                public function __construct($name, $email, $level, $review) {
                    $this->name = $name;
                    $this->email = $email;
                    $this->level = $level;
                    $this->review = $review;
                }

                public function set_name ($name) {
                    $this -> name = $name;
                }

                public function set_email ($email) {
                    $this -> email = $email;
                }

                public function set_level ($level) {
                    $this -> level = $level;
                }

                public function set_review ($review) {
                    $this -> review = $review;
                }

                public function get_name () {
                    return $this -> name;
                }

                public function get_email () {
                     return $this -> email;
                }

                public function get_level () {
                    return $this -> level;
                }

                public function get_review () {
                    return $this -> review;
                }
            };

            $name = $_POST["name"];
            $email = $_POST["email"];
            $level = $_POST["level"];
            $review = $_POST["review"];

            $rev = new Review($name, $email, $level, $review);

            echo "<h1> Thank You, " . $rev->get_name() . "! </h1><br>";

            echo "<p> Your Message Reads: </p><br>";

            echo "<p>" . $rev->get_review() . "</p><br>";

            echo "<p> If we will have any other questions, we will contact you through your e-mail: " . $rev->get_email() . "! </p>"
        ?>
    </body>
</html>