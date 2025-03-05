
<?php
    $db_server = "mysql"; //set the same name as docker container for mysql
    $db_user = "root";
    $db_pass = "pasta";
    $db_name = "studentData";

    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);


    if($conn){
        echo "connected!";
    }
    else{
        echo "not connected";
    }
?>

<?php  
echo '<script type="text/JavaScript">  
     prompt("JS ใช้งานแค่นี"); 
     </script>' 
; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="table.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>asdrtyu</div>
    
    <div class="table">
        <div> รหัสนักศึกษา</div>
        <div> ชื่อนามสกุล</div>
        <div> สาขาวิชา</div>
        <?php
            $sql = "SELECT student_id,full_name,major_name FROM students INNER JOIN major on students.major_id = major.major_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div> id: ". $row["student_id"]. "</div> <div>". $row["full_name"]. "</div> <div>".$row["major_name"]."</div>";
                }
            } else {
                echo "0 results";
            }
        ?>
    </div>
</body>
</html>