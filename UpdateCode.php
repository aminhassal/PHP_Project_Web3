<!DOCTYPE html>
<html>

<head>
    <title>Update Page page</title>
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
        $full_name =  $_REQUEST['full_name'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        
        $sql = "UPDATE tbl SET
            full_name = '$full_name' ,
            address = '$address' ,
            email = '$email'
            WHERE id = $id";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>تم تعديل البينات بنجاح"; 
            echo "  <h3>  اليبانات الجديدة "; 
            echo nl2br("\n
             $full_name\n
              "."$address\n
               $email\n <br>");
            echo ' للرجوع اضغط ';
            echo '<a href="InsertPage.php"> هنا </a> <br>';

            echo '  للذهاب للحذف';
            echo '<a href="deletePage.php">  هنا  </a>';

        } else{
            echo "خطأ في تنفيذ $sql. " 
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>