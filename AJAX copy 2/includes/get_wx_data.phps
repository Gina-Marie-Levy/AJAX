<?php
    //they want weather from?
    //$locationSelection = $_POST['wxLoc'];

    //get current weather conditions conditions
    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Taurus";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description;
    $jsonStr="{\"Taurus\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";
?>
    
