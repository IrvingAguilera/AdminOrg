<?php 
$myXMLDAta = 
"<?xml version='1.0' encoding='UTF-8'?>
<document>
    <title>Cuarenta que?</title>
    <from>Joe</from>
    <to>Jane</to>
    <body>
        Se que esa es la respuesta, pero,
        Cual es la pregunta?
    </body>
</document>";

$xml=simplexml_load_string($myXMLDAta)
    or die ("Error: Cannot create object");

print_r($xml);
?>