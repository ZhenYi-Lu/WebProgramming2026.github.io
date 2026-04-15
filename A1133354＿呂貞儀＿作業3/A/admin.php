<html>
<head>
    <meta charset="UTF-8">
    <title>管理者頁面</title>
</head>
<body>
    <center>
        <?php
        session_start();
        if(isset($_SESSION["login"])){
            if($_SESSION["login"]=="admin"){
                echo "<h2>歡迎管理者登入 ⚙️</h2><br>";
                echo "<p>這裡可以管理整個系統</p>";
                echo "<button onclick=location.href='index.php'>登出</button>";
            }else{
                echo "<h1>非法進入網頁</h1>";
                header("Refresh:1; url=index.php");
            }
        }else{
            echo "<h1>非法進入網頁</h1>";
            header("Refresh:1; url=index.php");
        }
        ?>
    </center>
</body>
</html>