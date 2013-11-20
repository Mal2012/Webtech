<?php
/* === Daten aus dem Formular auslesen und in Variablen speichern === */
  if(isset($_POST['submit'])){
  $vorname = $_POST['vorname'];
  $nachname = $_POST['nachname'];
  $geschlecht = $_POST['geschlecht'];
  
  	echo "Hallo ".$vorname." ".$nachname."<br>";
	echo "Du hast eine".$geschlecht."<br><br>";
	}
?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>new_file</title>


<style type="text/css" >
	#tab{
		display: table;
	}
	#zeile{
		display: table-row;
	}
	#zelle{
		
		display: table-cell;
	}
	
</style>
	</head>

	<body>
		

		
	<form action="/Webtech/Uebungen/new_file.php" method="post"> 
		

		<div id="tab">
		<div id="zeile"><div id="zelle">Vorname: </div><div id="zelle"><input name="vorname" type="text" value="Konrad" /></div></div>
		<div id="zeile"><div id="zelle">Nachname: </div><div id="zelle"><input name="nachname" type="text" value="Zuse"/></div></div>
		<div id="zeile"><div id="zelle">Password: </div><div id="zelle"><input name="password" type="password" value="Zuse"/></div></div>
		<div id="zeile"><div id="zelle">Geschlecht: </div><div id="zelle"><select name="geschlecht"><option value=" none" selected> </option><option value="n Penis" selected>Penis</option><option value=" Vagina">Vagina</option></select></div></div>
		<div id="zeile"><div id="zelle"></div> <div id="zelle"><input type="submit" name="submit" value="Daten Absenden!"/></div></p></div>
		</div>
	
	</form>



	</body>
</html>
