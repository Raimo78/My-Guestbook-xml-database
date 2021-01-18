<?php

$name = $_POST['name'];

$xml = new DOMDocument('1.0', 'utf-8');
$xml-> load('data/mybook.xml' ) ;

$xpath = new DOMXPath($xml);

foreach ($xpath->query("/booklist/nimi['nimi']") as $node);

{
    $node->parentNode->removeChild ($node);
}

$xml->formatoutput - true;
$xml->save('data/mybook.xml');

header('Location: myguestbook.php');
exit();

?>