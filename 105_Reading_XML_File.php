<?php
// Read xml page 105_Reading_XML_File.xml

// you can also specify url in filename to get xml data from online site
$xml = simplexml_load_file('105_Reading_XML_File.xml') ;

// Case sensitive
// echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;

foreach ($xml->producer as  $producer) {
	echo $producer->name . ' is ' . $producer->age . '<br>' ;
}
?>