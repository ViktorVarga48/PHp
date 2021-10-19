<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<style>
* {
	margin:0 auto;
	padding:0;
	width:100%;
	height:auto;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
form {
	width:50%;
	height:350px;
	margin:0 auto;
	background-color:rgba(127,212,200,1.00);
	text-align:center;
	margin-top:150px;
}
form input[type="text"] {
	width:175px;
	height:40px;
	text-align:center;
	margin-top:100px;
}
form input[type="submit"] {
	width:360px;
	height:45px;
	text-align:center;
	margin-top:50px;
	background-color:rgba(0,123,106,1.00);
	border:0;
	color:rgba(255,255,255,1.00);
	font-weight:600;
	transition:ease .3s;
}
form input[type="submit"]:hover {
	background-color:rgba(0,58,57,1.00);
}
</style>
 
<form action="data.php" method="post">
    <input type="text" name="text2" placeholder="výška" maxlength="4">
    <input type="text" name="text1" placeholder="váha" maxlength="3"><br>
    <input type="submit" value="ZISTI" name="btn">
</form>




</body>
</html>