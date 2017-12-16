<?php   
    $signArr=array('Aries','Taurus','Gemini','Cancer','Leo', 'Virgo' , 'Libra' , 'Scorpio' , 'Sagittarius' , 'Capricorn' , 'Aquarius' , 'Pisces');

    $xmlURL = "http://www.findyourfate.com/rss/horoscope-astrology.asp";
    $xmlData = simplexml_load_file($xmlURL);
    $xmlData->asXML("data/mydoc2.xml");
    
    $jsonStr="{";
    //foreach loop to create JSON
    $max=count($signArr);
    for($i=0; $i<$max; $i++){
        $signText =$xmlData->channel->item[$i]->description;
        $signText= substr($signText, 4, strlen($signText));
        $trimmedText=rtrim($signText,"</p>");
        $jsonStr.="\"".$signArr[$i]."\":";
        $jsonStr.="\"".$trimmedText;
        $jsonStr.="\",";
    }
    $jsonStr=rtrim($jsonStr, ",");
    $jsonStr.="}";
    $trimmed= trim($jsonStr, " ");
     
   
    $file = 'data/signs.txt';
    if (file_exists($file)) {
        $message = file_get_contents($file);
        $message=$trimmed;
        file_put_contents($file, $message);
    }


?>
     