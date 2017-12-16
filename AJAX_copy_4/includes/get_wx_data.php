<?php
    $wxXMLFile = "http://feeds.feedburner.com/KnightNews?format=xml";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc2.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description;
    $jsonStr="{\"Knights\": \"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    
?>
     
    
