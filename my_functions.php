<?php

function saveToXML($nimi, $viesti, $email){
    $xml = simplexml_load_file('data/mybook.xml');
    
    $uusi_nimi = $xml->addChild('nimi');
    $uusi_nimi->addChild('nimi', $nimi);
    $uusi_nimi->addChild('viesti', $viesti);
    $uusi_nimi->addChild('email', $email);
    $uusi_nimi->addChild('aika', date('d.m.Y H:i:s'));

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('data/mybook.xml');

}