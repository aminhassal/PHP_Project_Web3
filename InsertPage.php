<!DOCTYPE html>
<html lang="en">

<head>
    <title>amin hassal insert Data</title>
</head>

<body>

    <center>
        <h1>واجهة اذخال البيانات</h1>
        <form action="insertCode.php" method="POST">


        
            <p>
                <label for="id">المعرف:</label> <br>
                <input type="text" name="id" id="id">
            </p>

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

            <input type="submit" value="اذخال"></p>
            <a href="UpdatePage.php">صفحة التعديل </a> </p>
            <a href="deletePage.php">صفحة الحذف </a>


        </form>
    </center>
</body>

</html>