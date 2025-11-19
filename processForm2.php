<?php
session_start();

$_SESSION['subTenKG'] = $_POST['under10'];
$_SESSION['overTenKG'] = $_POST['tenToTwenty'];




header("Location: finalStep.php");
exit();
?>