<?php
    session_start();

    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];

    $sID="Student";
    $sPWD="a1133354";

    $tID="Teacher";
    $tPWD="ihsien";

    $aID="Admin";
    $aPWD="123456";

    $date=strtotime("+1 hour", time());

    if($uID==$sID && $uPWD==$sPWD){
        $_SESSION["login"]="student";
        setcookie("uName", $uID, $date);
        header("Refresh:0; url=student.php");
    }else if($uID==$tID && $uPWD==$tPWD){
        $_SESSION["login"]="teacher";
        setcookie("uName", $uID, $date);
        header("Refresh:0; url=teacher.php");
    }else if($uID==$aID && $uPWD==$aPWD){
        $_SESSION["login"]="admin";
        setcookie("uName", $uID, $date);
        header("Refresh:0; url=admin.php");
    }else{
        echo "<center><h2>登入失敗，帳號密碼有誤</h2></center>";
        header("Refresh:1; url=login.php");
    }

?>


    