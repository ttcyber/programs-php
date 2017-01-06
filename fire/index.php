<!DOCTYPE html >
<html>
<head><title>Firefighting</title></head>
<style>

body {margin: 0; padding: 0;
background-color: #000;
color:#fff;
font-family:"Arial","sans-serif";color:#fff;font-size:48px;}
pre{margin: 10; padding: 10;font-family:"Arial","sans-serif";color:#ddd;font-size:18px;}

a{
font-family:"Arial","sans-serif";
font-size:18px;
font-size:1em;
color: #fff;
background-color:#f00;
text-decoration:none;

}

a:hover {
font-family: arial, san-serif;
font-size:18px;
font-size:1em;
background-color: #111;
color: #f00;
text-decoration:none;

}


</style>
<body>
<?php 
session_start(); 
$_SESSION['pagename'] = "Firefighting";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
header('Location: https://www.youtube.com/watch?v=gWCh_vtVEFI');
exit;
//170106
?>
Firefighting

</body>
</html>
