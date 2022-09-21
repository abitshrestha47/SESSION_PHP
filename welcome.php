<?php 
    session_start ();
    $login= $_SESSION['val'];
    if(!$login){
        // echo "not logged in";
        header("location:loginpage.php");
    }
    else{
        echo "logged in";
    }
    echo "<br>";
    echo "welcome to the page.";
?>