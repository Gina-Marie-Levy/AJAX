<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />

<?php
require("includes/get_wx_data.php");
?>

<head>
	<title>Assignment 01 AJAX-Gina Levy</title>
	
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body class="body">
	
	<header class="mainHeader">
	<h1>Astrology</h1>
	</header>
		
	<div class="mainContent">
		<div class="content">	
				<article class="topcontent">	
					<header>
						<h3><a href="#" rel="bookmark" title="Permalink to this POST TITLE">You Are:</a></h3>
                      
					</header>
					
					<footer>
						<p class="post-info">This was posted by Gina Levy</p>
					</footer>
					
					<content>
                    	<div class="container_12">
                        	

                      <h3 id="scope">Click your sign to see your Horoscope</h3>

</div>
				
		</div>
			
				<aside class="top-sidebar">
					<article>
						<h3>Horoscopes</h3>

						<p><span id="ajaxButton" style="cursor: pointer; text-decoration: underline">
						<img src="img/aries.png" width="100" height="100" border="0" />
						
		</span></p>
		<script type="application/javascript" src="js/ajax_json.js"></script>


							
						
					</div>
					
				    </article>
				</aside>
				
	</div>
	
	<footer class="mainFooter">
		<p>Created by Gina Levy</a></p>
	</footer>

</body>
</html>

