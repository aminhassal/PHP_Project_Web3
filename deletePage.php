<!DOCTYPE html>
<html lang="ar">

<head>
    <title>amin hassal delete Data</title>
</head>

<body>

    <center>
        <h1>واجهة حذف البيانات</h1>
        <form action="deleteCode.php" method="POST">
        
            <p>
                <label for="id">المعرف المراد حذفه:</label> <br>
                <input type="text" name="id" id="id">
            </p>

            <input type="submit" value="حذف">

        </form>
    </center>
</body>

</html>