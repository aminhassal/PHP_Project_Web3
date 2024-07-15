<!DOCTYPE html>
<html>

<head>
    <title>Delete page</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "MyDatabase");
        
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $id =  $_REQUEST['id'];
        
        $sql = "DELETE from tbl WHERE id = $id";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3> حذف السجل $id بنجاح"; 
            // echo nl2br("\n$id");
            echo ' للرجوع اضغط ';
            echo '<a href="insertPage.php"> هنا </a> <br>';
        } else{
            echo "خطأ في تنفيذ $sql. " 
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>