<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
$usernam = (isset($_POST['form1']) ) ? $_POST['form1'] : 'Admin';
$passwd = (isset($_POST['form2']) ) ? $_POST['form2'] : '';
}
?>
