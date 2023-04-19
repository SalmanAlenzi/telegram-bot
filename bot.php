<?php



$apiToken = "6248940238:AAHld6xNl4z0pnV0cvF2bPX7TXe3zjwzybd4"; // api token

$xml = simplexml_load_file("exmaple.xml"); 
$bline = urlencode("\n\n"); // break line 


     foreach($xml->channel->item as $item) {

       
       $remove_html_tag = strip_tags($item->description); // remove any html tags 

       $dt = new DateTime($item->pubDate); 
       $pd = $dt->format('Y/m/d'); // convert format of date
         
        $title = $bline . "Title:  " . $item->title . $bline;
        $des = $bline . "Descriptipn:  " . $remove_html_tag . $bline;
        $pubDate = $bline . "Publish Date:  " . $pd . $bline;
        $link =  $bline . "Link:  " . $item->link . $bline ;
        

    

      
        if ($pd == date('2023/04/18')){ 
   
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=780568695&text=" . $title . $des . $pubDate . $link );

 }}

?>