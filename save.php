<?php
include_once('my_functions.php');

saveToXML($_POST['nimi'], $_POST['viesti'], $_POST['contact_email']);

header('Location: myguestbook.php');