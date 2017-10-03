<?php
date_default_timezone_set('UTC');
$html = "";
$filter = "all";
if ($filter = "all") {
$url1 = "www.volynnews.com/uarss.xml";
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $url1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$xmlresponse1 = curl_exec($ch1);
$xml1=simplexml_load_string($xmlresponse1);



	

for ($i=0; $i < 20; $i++) { 
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


for ($i=0; $i < 20; $i++) { 
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


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Найновіші новини України та світу</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
</head>
<body>

<!-- HEADER -->

	<header class="flex flex-centered" id="headerjs">
		<div>
			<div class="men-button" id="men" onclick='menuButtonClick ()' >
				<div class="men-pos">
					<div class="men-piece"></div>
					<div class="men-piece"></div>
					<div class="men-piece"></div>
				</div>
			</div>
		</div>



		<div>
			<pre>   </pre>
		</div>
		<a href="main.php" class="flex-1"><h1 id="site-name"> Banger News </h1></a>
		<div class="headerwhitespace">
			<div class="nowrap flex flex-start">
				<div class="nav-wrapper">
					<div class="nav">
						<p></p>
					</div>
					<div class="nav">
						<a href="main.php"><p>Головна</p></a>
					</div>
					<div class="nav filters-button" id="filters-button" onclick='filtersFunc()'>
						<a href="#"><p>Фільтри</p></a>
						<div class="ul-filt">
							<ul>
								<li><a class="error_alert" href="#">Хороші новини</a><hr><br><br></li>
								<li><a class="error_alert" href="#">Погані новини</a><hr><br></li>
							</ul>
						</div>
					</div>
					<div class="nav" style="right: 10%">
						<img id="loader" src="media/6.gif">
					</div>
					
				</div>
			</div>
		</div>

	</header>


<!--Page content -->

	<div class="flex flex-centered nowrap">
	<div class="content-wrapper nowrap">
		<div class="column main-column">
			<div class="article">
				<h1 id="article-header">Усі новини</h1>
				
				<div class="article-text-container">
					<div><p id="article-text">
						<?php
							echo $html;
						?>
					</p></div>
				</div>
			</div>
		</div>

									<div class="whitespace"><div class="column"></div></div>


		<div class="nowrap1">
		<div class="column unprior">
			<div class="currency">
				<!-- Віджет конвертер валют - http://ua.mconvert.net/exchange-rates-widget starts here --> <iframe src="http://mconvert.net/get-exchange-rates-widget?base=uah&amount=1&lang=ua&curr=usd,eur,rub,uah,btc&theme=gray&type=1&font=2&ssl=1" width="300" height="194" frameborder="0" scrolling="no"></iframe></div><!-- http://ua.mconvert.net/exchange-rates-widget ends here -->
				

			</div>
			<div class="whitespace-1">
				
			</div>

		</div>
		</div>
		
	</div>





	<!-- Content-hider for menu -->

	<div class="hider" id="hiderjs">
		<div class="men-list">
			<div class="flex-col">
			
				<div class="men-list-piece">
					<a href="main.php">Головна</a>
				</div>
				<div class="men-list-piece">
					<a href="#" class="filters-button" id="filters-button1" onclick='myFunc()'>Фільтри</a>


					<div id="ul-filt1">
						<ul>
							<li><a class="error_alert" href="#">Хороші новини</a><hr><br><br></li>
							<li><a class="error_alert" href="#">Погані новини</a><hr><br></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="men-whitespace" onclick='menuButtonClick ()'>
			
		</div>
	</div>

<script type="text/javascript" src="script.js"></script>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>


	$( document ).ready(function() {
	
  	//$("#loader").hide();

	var time = 100000;

    setTimeout(function(){
    $("#loader").show();
    location.reload();
    $("#loader").hide();
    return false;
}, time,);


    $(document).on("click",".error_alert", function(){
    	
    	alert("Вибачте, але на даний момент доступна лише демо-версія сайту. Ми працюємо, щоб зробити цей розділ доступним для вас.");
    });

});
</script>





</body>
</html>

