<?php

include('dbconfig.php');
$sql = "SELECT * FROM services";
$query = $dbConn->prepare($sql);
$query->execute();
$result = $query->fetchAll();

 header( "Content-type: text/xml");
 
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title>GWSC-SERVICES</title>
 <description>Cloud RSS</description>
 <language>en-us</language>";
 
 foreach ($result as $row) {
   $title=$row["name"];

   $description=$row["description"];
 
   echo "<item>
   <title>$title</title>
   <description>$description</description>
   </item>";
 }
 echo "</channel></rss>";
?>