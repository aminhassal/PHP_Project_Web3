<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
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
        
        $sql = "INSERT INTO tbl  VALUES ('$id','$full_name','$address','$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>تم تخزين البينات بنجاح"; 
            echo nl2br("\n$id\n
             $full_name\n
              "."$address\n
               $email\n <br>");
            echo ' للرجوع اضغط ';
            echo '<a href="InsertPage.php"> هنا </a> <br>';

            echo '  للذهاب للحذف';
            echo '<a href="deletePage.php">  هنا  </a> <br>';
            echo '  للذهاب للتعديل';
            echo '<a href="UpdatePage.php">  هنا  </a>';
        } else{
            echo "خطأ في تنفيذ $sql. " 
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>