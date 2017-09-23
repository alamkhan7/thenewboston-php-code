<?php
// Read xml page 105_Reading_XML_File.xml

$xml = simplexml_load_file('106_Reading_XMLFile.xml') ;

// Case sensitive
// echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;

foreach ($xml->producer as  $producer) {
	echo $producer->name . ' is ' . $producer->age . '<br>' ;
	//echo $producer->show->showname ;

	foreach ($producer->show as $show) {
		echo $show->showname . ' on ' . $show->showdate . '<br>' ;
	}
}
?>