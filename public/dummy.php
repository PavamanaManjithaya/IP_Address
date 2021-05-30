<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IP_Address</title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="img/server.svg">
</head>
<body onload="myFunction()" style="margin:0;">

<div id="disp">
<h2>Fetching Details.. </h2>
<p>Wait for a sec..!!</p>
</div>
<div id="loader">
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<?php include 'network.php';?>
</div>
<script>
var myVar;
function myFunction() {
  myVar = setTimeout(showPage, 2000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("disp").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>