<?php
session_start();

$SESSION['passengerFN']=$_post['firstname'];
$SESSION['passengerSN']=$_post['surname'];

if (isset($_POST['luggage'])){
    $_SESSION['luggage']=1;
    header("Location: luggage.html");

}

else{
    $_SESSION['luggage']=0;
    header("Location: finalstep.php");
}


?>