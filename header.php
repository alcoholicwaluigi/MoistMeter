<?php
	include 'events.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Moist Meter</title>
	<link rel="icon" type="image/png" href="img/fav_M.png">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		window.addEventListener('load', function () {
			animation()
		})
		function animation(){
			progressBar = document.getElementsByClassName
			('score-bar')
			
			process = setInterval(() => {
				for(i = 0; i<2; i++){
					const computedStyle = getComputedStyle(progressBar[i])
					const width = parseFloat(computedStyle.getPropertyValue
					('--width')) || 0
					speed = score[i]/500
					if(width<score[i]){
						progressBar[i].style.setProperty('--width', width+speed)
					}
				}
			}, 5);
		}
	</script>
</head>
<body>
<!--- 	
<script>
	$(document).ready(function() { 
		$('input[name=filter_sort]').change(function(){
    		$('form').submit();
		});
	});
</script>
--->