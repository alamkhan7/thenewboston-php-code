<?php
// update div with out refresh a page
?>

<html>
<head>
	<script type="text/javascript">
		
		function load(){
			if (window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest() ;
			}
			else{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP') ;

			}

			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('adiv').innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET' , '172_include.inc.php',true) ;
			xmlhttp.send() ;

		}		
	</script>
</head>

<body>
<!-- Load content into div tag when button press  -->
<input type="submit" onclick="load();">

<div id="adiv">
	
</div>
	
</body>
</html>