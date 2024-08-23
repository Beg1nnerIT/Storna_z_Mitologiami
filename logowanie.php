<!DOCTYPE html>
<html lang="pl">
	<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
ul{
    position: relative;
    z-index: 1;
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
	background-color: #000000;
	top: 0;
	width: 100%;
}	
li{
	float: left;
}

li a{
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}
    </style>
    <script src="skrypt.js"></script>
    <title>Kontakt</title>
    
</head>
<body onload="zegarek();">
    
    <ul class="navigation">
        <li class="navi"><a href="index.html" target="_blank">Home</a></li>
        <li class="navi"><a href="mitologia_nordycka.html" target="_blank">Mitologia Nordcyska</a></li>
        <li class="navi"><a href="mitologia_grecka.html" target="_blank">Mitologia grecka</a></li>
        <li class="navi"><a href="Bogowie.html" target="_blank">Bogowie</a></li>
        <li class="navi" id="zegar" style="color: white; font-size: 0.5cm; float: right; position: relative; margin: auto;"> </li>
    </ul>
        <div class="container">
        <div class="contactSections">
            <form class="rightSection" action="zaloguj.php" method="POST">
                <h1 style="font-family: arial;">Skontaktuj się jeżli masz jakieś uwagi lub napisz nam swoją opinie</h1>
                <input type="text" name="name" placeholder="Imię i nazwisko" required>
        <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Hasło" required>
                <button name="button">Zaloguj</button>
            </form>
        </div>
    </div>
</body>
</html>