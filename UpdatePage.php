<!DOCTYPE html>
<html lang="en">

<head>
    <title>amin hassal Update Data</title>
</head>

<body>

    <center>
        <h1>واجهة تعديل البيانات</h1>
        <form action="UpdateCode.php" method="POST">


        
            <p>
                <label for="id">المعرف:</label> <br>
                <input type="text" name="id" id="id" >
            </p>
            <label for="id">البيانات الجديدة:</label> <br>
            <p>
                <label for="full_name">الأسم:</label><br>
                <input type="text" name="full_name" id="full_name">
            </p>


            <p>
                <label for="Address">العنوان:</label><br>
                <input type="text" name="address" id="Address">
            </p>


            <p>
                <label for="emailAddress">البريد</label><br>
                <input type="text" name="email" id="emailAddress">
            </p>

            <input type="submit" value="اذخال">

        </form>
    </center>
</body>

</html>