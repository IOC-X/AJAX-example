<!DOCTYPE html>
<html>
<head>
	<title>AJAX test</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#but').click(function(){
				var val = document.getElementById('in').value;
				if(val === ""){
					alert("Nah nah !");
				}
				else{
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
					}
					xmlhttp.onreadystatechange = function(){
						if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
							document.getElementById('msg').innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open("GET","process.php?q="+val,true);
					xmlhttp.send();
				}
			});
		});
	</script>
		<p>Type ello in the text box</p>
		<span id="msg"></span>
		<input type="text" id="in">
		<input type="button" id="but" value="Click me">
	
</body>
</html>