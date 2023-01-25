<!DOCTYPE html>


<html lang="en-US">
	<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Currency Exchange</title>
			<link rel="stylesheet" type="text/css" href="main.css"/>
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
			<script src="myScript.js"></script>
			
	</head>
	<body>
		<header><h1>Currency Exchange</h1></header>
		<section>
			<p> Enter a Dollar amount to get the equivellent in British Pound </p>
			<div id="content">
				
				<?php

					DisplayForm();
					
				?>

			
			</div>
			<div id="errors">
			</div>
		</section>
		<footer>&copy Muna Shabab </footer>
	</body>
</html>
<!-- a function that is used to display the form. It is better to have it as a function so it can be reused-->
<?php
	
	function DisplayForm(){

		
?>
		<form method="get" action="#">
			<label for="txtDollar">Dollar Amount</label>
			<input type="text" name="txtDollar" id="txtDollar">	
			<span id="pound">	
			</span>
			<br/>
			
			<input type="button" name="btnSubmit" value="calculate" onclick="CalculateInPound();"/>
			<noscript>You don't have JavaScript enabled</noscript>
		</form>
		


<?php

	}

?>