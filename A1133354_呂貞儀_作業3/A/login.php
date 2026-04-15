<center>
    <?php
        if(isset($_COOKIE['uName'])){
            echo $_COOKIE['uName'].", 歡迎回來！！！";
            echo "<a href='cookdel.php'>delete cookie</a>";
        }
    ?>
</center>

<html>
<head>
    <meta charset="UTF-8">
    <title>登入系統</title>
</head>
<body>
<center>
    <br>
    <h2>登入系統</h2>

    <form action="logincheck.php" method="post">
        帳號：<input type="text" name="uID"><br><br>
        密碼：<input type="text" name="uPWD"><br><br>
        <input type="submit" value="登入">
    </form>
</center>
</body>
</html>