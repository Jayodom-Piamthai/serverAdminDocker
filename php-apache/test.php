

    <?php
        $host = 'mysql';
        $user = 'root';
        $pass = 'pasta';
        $db = 'studentData';

        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected to MySQL server successfully!";
        }
        echo"asdfghjk";
    ?>
