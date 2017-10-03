<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$goodnews=$_POST["goodnews"];

	date_default_timezone_set('UTC');





$url1 = "www.volynnews.com/uarss.xml";
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $url1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$xmlresponse1 = curl_exec($ch1);
$xml1=simplexml_load_string($xmlresponse1);
for ($i=0; $i < 15; $i++) { 
	$title1 = $xml1->channel->item[$i]->title;
	$link1 = $xml1->channel->item[$i]->link;
	$description1 = $xml->channel->item[$i]->description;
	$pubDate1 = $xml1->channel->item[$i]->pubDate;
	$pubDate1 = strftime("%H:%M:%S %d-%m-%Y", strtotime($pubDate1));
	if ($description1!="") {
	$html .= "<div class='news_block'><a href='".$link1."' target='_blank'>$title1</a>
	<p style='color:gray; font-size:13px;'>$pubDate1</p>
	<p>".$description1."
	<a  href='".$link1."' style='text-decoration:underline;' target='_blank'>Читати повністю</a></p></div><hr><br>";
	}
}


$url2 = "www.pravda.com.ua/rss/view_news/";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$xmlresponse2 = curl_exec($ch2);
$xml2=simplexml_load_string($xmlresponse2);
for ($i=0; $i < 15; $i++) { 
	$title2 = $xml2->channel->item[$i]->title;
	$link2 = $xml2->channel->item[$i]->link;
	$description2 = $xml2->channel->item[$i]->description;
	$pubDate2 = $xml2->channel->item[$i]->pubDate;
	$pubDate2 = strftime("%H:%M:%S %d-%m-%Y", strtotime($pubDate2));
	if ($description2!="") {
	$html .= "<div class='news_block'><a href='".$link2."' target='_blank'>$title2</a>
	<p style='color:gray; font-size:13px;'>$pubDate2</p>
	<p>".$description2."
	<a  href='".$link2."' style='text-decoration:underline;' target='_blank'>Читати повністю</a></p></div><hr><br>";
	}
}


$url = "footballhub.com.ua/feed/";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$xmlresponse = curl_exec($ch);
$xml=simplexml_load_string($xmlresponse);
for ($i=0; $i < 10; $i++) { 
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
	$pubDate = $xml->channel->item[$i]->pubDate;
	$pubDate = strftime("%H:%M:%S %d-%m-%Y", strtotime($pubDate));
	$html .= "<div class='news_block'><a href='".$link."' target='_blank'>$title</a>
	<p style='color:gray; font-size:13px;'>$pubDate</p>
	<p>".$description."
	<a  href='".$link."' style='text-decoration:underline;' target='_blank'>Читати повністю</a></p></div><hr><br>";
}

	}
	
?>