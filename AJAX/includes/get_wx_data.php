<?php
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Aries";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc2.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item[0]->description;
    $jsonStr="{\"Aries\": \"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    

   /* echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Taurus";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[2];
    $jsonStr="{\"Taurus\": \"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";

    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Gemini";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[3];
    $jsonStr="{\"Gemini\": \"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Cancer";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[4];
    $jsonStr="{\"Cancer\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Leo";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[5];
    $jsonStr="{\"Leo\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Virgo";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[6];
    $jsonStr="{\"Virgo\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Libra";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[7];
    $jsonStr="{\"Libra\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Scorpio" ;
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[8];
    $jsonStr="{\"Scorpio\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Sagittarius";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[9];
    $jsonStr="{\"Sagittarius\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Capricorn";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[10];
    $jsonStr="{\"Capricorn\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";


    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Aquarius";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[11];
    $jsonStr="{\"Aquarius\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";



    echo "Beginning";
    $wxXMLFile = "http://www.findyourfate.com/rss/dailyhoroscope-feed.asp?sign=Pisces";
    $wxData = simplexml_load_file($wxXMLFile);
    //store them locally as xml
    $wxData->asXML("data/mydoc.xml");
    //pull out the current conditions and store as JSON
    $currentConditions = $wxData->channel->item->description[12];
    $jsonStr="{\"Pisces\":\"$currentConditions\"}";
    //store locally as json
    $file = 'data/conditions.txt';
    file_put_contents($file, $jsonStr);
    echo "End";

*/

?>
    
