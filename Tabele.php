<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
			body
			{
				background-image: url(stars.png);
				background-size: cover;
				background-repeat: no-repeat;
				background-image: url("stars1.png");
				text-align: center;
				font-family: 'Segoe Script';
				color: gold;

			}
			table td:first-child{
				font-weight: bold;
			}
			a{
				color: black;
			}
			
			table img{
				max-width: 4cm;
				max-height: 5cm;
			}
			table
			{
				border: 1px solid #ccc;
				border-collapse: collapse;
				margin: 0;
				padding: 0;
				width: 100%;
				table-layout: fixed;

				text-align: center;
				margin: 0cm;
				font-family: 'Segoe Script';
				color: black;
			}
			table tr {
  				font-size: 14px;
			padding: .35em;
			}

			table th, table td {
				border: 2px solid #ddd;
			padding: .625em;
			text-align: center;
			}

			table th {
			font-size: 16px;
			letter-spacing: .1em;
			text-transform: uppercase;
			}

		@media screen and (max-width: 600px) {
		table {
			border: 0;
		}

		table caption {
			font-size: 1.3em;
		}
		
		table thead {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}
		
		table tr {
			border-bottom: 3px solid #ddd;
			display: block;
			margin-bottom: .625em;
			
		}
		
		table td {

			border: 0 solid #ddd;
			border-bottom: 1px solid #ddd;
			display: block;
			font-size: .8em;
			text-align: right;
		}
		
		table td::before {
			
			content: attr(data-label);
			float: left;
			font-weight: bold;
			text-transform: uppercase;
		}
		
		table td:last-child {
			border-bottom: 0;
			}
		}

			#gods
			{
				margin-top: 1cm;
				text-align: center;
				background-size: cover;
				background-repeat: no-repeat;
				background-image: url("marble.png");
			}
						
			div{
			margin-top:1cm;
			}
			#norse
			{		
				margin-top: 1cm;
				text-align: center;
				background-size: cover;
				background-repeat: no-repeat;
				background-image: url("snow1.gif");
			}
			button
            {
                background-image: url(clouddd.png);
                width: 3cm;
                height: 1cm;
            }

			h1{
				margin-top: 1cm;
			}
		</style>
</head>
<body>
<button> <a href="vip.html">Do vip</a></button>
<button> <a href="vip2.html">Do usuwania</a></button>
<table id="gods">
    <tr>
    <thead>

        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Atribute</th>
        <th scope="col">Odpowiednik</th>
        <th scope="col">Pochodzenie</th>
        <th scope="col">Jakiś mit</th>
        <th scope="col">Obraz</th>
        </thead>
    </tr>
     <?php
     $host = "localhost";
     $db_user = "root";
     $db_password = "";
     $dbname = "gods_and_mythologies";
     $conn = mysqli_connect($host, $db_user, $db_password, $dbname);
  
          $sql = "SELECT gods.name, gods.description, gods.atribute, gods.odpowiednik, gods.image, pantheons.origin as origin, myth.description AS myth_description FROM gods JOIN pantheons ON gods.pantheon_id = pantheons.id JOIN myth ON gods.mit_id = myth.id; ";
          $res = mysqli_query($conn,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <tr>
        <td><?=$images['name']?></td>
        <td><?=$images['description']?></td>
        <td><?=$images['atribute']?></td>
        <td><?=$images['odpowiednik']?></td>
        <td><?=$images['origin']?></td>
        <td><?=$images['myth_description']?></td>

        <td><img src="images/<?=$images['image']?>"></td>

    </tr>
    <?php } } ?>
</table>
</body>
</html>