<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />

<?php
require("includes/get_sign_data.php");
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
						<h3><a href="#" rel="bookmark" title="Permalink to this POST TITLE">What's yoru sign Are:</a></h3>
                      
					</header>
					
					<footer>
						<p class="post-info">This was posted by Gina Levy</p>
					</footer>
					
					<content>
                    	<div class="container_12">
                        	

                     <div id="messages">	
				
						<h1>Your Fortune: </h1>
						<div id="horoscope">Click your sign and read your Horoscope!</div>
					</div>

</div>
				
		</div>
			
				<aside class="top-sidebar">
					<article>
						<h3>Horoscopes</h3>

							<div id="content">
								<div id="forms">
									<form method="post" id="usersign" name="usersign"> 
									<label for="number">What is your Astrology Sign?</label>
									<select name="number" id="number">
										<option value="0">Aries</option>
										<option value="1">Taurus</option>
										<option value="2">Gemini</option>
										<option value="3">Cancer</option>
										<option value="4">Leo</option>
										<option value="5">Virgo</option>
										<option value="6">Libra</option>
										<option value="7">Scorpio</option>
										<option value="8">Sagittarius</option>
										<option value="9">Capricorn</option>
										<option value="10">Aquarius</option>
										<option value="11">Pisces</option>
									</select>	
									<input type='submit' name='action' value='submit'>
								</form>
				
							</div>

							<div id="fcookie">	
				<span id="signButton" style="cursor: pointer; text-decoration: underline"></span>	
			</div>	
				
		
						
		<script type="text/javascript" src="js/scripts.js"></script>


							
						
					</div>
					
				    </article>
				</aside>
				
	</div>
	
	<footer class="mainFooter">
		<p>Created by Gina Levy</a></p>
	</footer>

</body>
</html>

