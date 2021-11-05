<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dupla Paduc Bt. köszöni</title>
	<link rel="stylesheet" type="text/css" href="kinezet1.css">
</head>

<body>
	<header>
		<img src="logo.png" alt="logo">
		<h1>Paduchorgászok lapja</h1>
	</header>
	
	<div id="foegyseg">
        <aside id="nav">
			<nav>
				<ul>
					<li><a href="home.html">Főoldal</a></li>
					<li><a href="termekek.html">Termékek</a></li>
					<li><a href="kapcsolat.html">Kapcsolat</a></li>
					<li><a href="uzenetek.html">Üzenetek</a></li>
				</ul>
			</nav>
		</aside>
        <div id="tart">
		
			<iframe width="360" height="240" src="https://www.youtube.com/embed/TVijDNKtjgk" 
				frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</iframe>		
					
			<h2>Kedves <?php echo $_POST["vezeteknev"], " ", $_POST["keresztnev"]; ?>!</h2>
			
			<p>Az Ön által küldött üzenet: </p>
			<fieldset id="uzenet2">
				<legend><h3>Üzenet:</h3></legend>
			 
				<p><?php echo $_POST["velemeny"]; ?></p>
			</fieldset>
			<br>
			
			<p>Köszönjük véleményét, válaszunkat a megadott <?php echo $_POST["emailcim"]; ?> e-mail címre fogjuk továbbítani.</p>
			
			<?php switch ($_POST["evhala"]){
				case 1:
				echo "Ön a paducra szavazott. ";
				break;
				case 2:
				echo "Ön a süllőre szavazott. ";
				break;
				case 3:
				echo "Ön a márnára szavazott. ";
				break;
			}
			?>



		
			<p>Szavazatát köszönjük. </p>
			<br>

		
		
			<?php if ($_POST["hirlevel"]) {echo "Köszönjük, hogy feliratkozott hírlevélküldő szolgáltatásunkra. ";} ?>


			
       </div>
    </div>
    <footer>
		<h1>&copy;&nbsp;Copyright 2020. Dupla Paduc Bt.</h1>
    </footer>
</body>
</html>