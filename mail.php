<?php

$recepient = "4epha9l.ukpa@gmail.com";
$sitename = "ant0nchikov.pro";

$Sname = trim($_POST["Sname"]);
$Fname = trim($_POST["Fname"]);
$Emailname = trim($_POST["Emailname"]);
$State = trim($_POST["State"]);
$text = trim($_POST["text2"]);
$message = "Имя: $Sname \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>