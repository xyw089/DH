<?php
	if(isset($_GET["id"]) || !empty($_GET["id"])) {
	$sql = "SELECT p.Person_id, p.Fornavn, p.Mellomnavn, p.Etternavn, p.Fodselsdato, p.Telefon, p.Mobil, p.Epost, p.Gatenavn, p.Gatenummer, g.Poststed
 	FROM Person p
 	LEFT JOIN Poststed g 
 	ON g.Postnummer = p.Poststed_Postnummer
	WHERE Person_id = ".$_GET["id"];
	$result = $conn->query($sql);	
	$rad = $result->fetch_assoc();
	
	$fornavn = $rad["Fornavn"];
	$mellomnavn = $rad["Mellomnavn"];
	$etternavn = $rad["Etternavn"];
	$fodselsdato = $rad["Fodselsdato"];
	$telefon = $rad["Telefon"];
	$mobil = $rad["Mobil"];
	$epost = $rad["Epost"];
	$gatenavn = $rad["Gatenavn"];
	$gatenummer = $rad["Gatenummer"];
	$GLOBAL['Poststed'] = $rad["Poststed"];
	
	if(isset($_POST["oppdater-person"])){

		$fnavn = $_POST["fnavn"];
		$mnavn = $_POST["mnavn"];
		$enavn = $_POST["enavn"];
		$fdato = $_POST["fdato"];
		$tlfnmr = $_POST["tlfnmr"];
		$mobnmr = $_POST["mobnmr"];
		$epost = $_POST["mail"];
		$gatenavn = $_POST["adrnavn"];
		$gatenummer = $_POST["adrnmr"];
		$postnummer = $_POST["pstnmr"];
		$kjonn = $_POST["sex"];
			
		$sql = "UPDATE Person 
		SET Fornavn = '$fnavn', Mellomnavn = '$mnavn', Etternavn = '$enavn', Fodselsdato = '$fdato', Telefon = '$tlfnmr', Mobil = '$mobnmr', Epost = '$epost', Gatenavn = '$gatenavn', Gatenummer = '$gatenummer', Kjonn = '$kjonn', Poststed_Postnummer = '$postnummer'
		WHERE Person_id=".$_GET["id"];
			/*UPDATE `hoth2507_dh`.`Person` SET `Mellomnavn` = 'Danger', `Telefon` = '24683579' WHERE (`Person_id` = '1');*/
			
		if($conn->query($sql))
		{
			echo("<p>Oppdaterte ".$fnavn." ".$enavn."</p>");
		}
		else{
			echo("Feil i brukerinput: " . mysqli_error($conn));
		}
	}
	
	
	/*$sql = "SELECT p.Fornavn, p.Etternavn FROM Person p WHERE p.Person_id = ".$_GET["id"];*/
	if(isset($_POST["belte_submit"]))
	{
		$conn->set_charset("utf8");
		$pid = $_GET["id"];
		$belte = $_POST["belte"];
		$dato = $_POST["dato"];
		$grad = $_POST["grad"];
		
		if(empty($pid) || empty($belte) || empty($dato)) {
			/*header("Location: admin.php");
			exit();*/
		}
		else {
			$sql = "INSERT INTO Belte_has_Person (Belte_Belte_id, Person_Person_id, Dato, Grad) VALUES ('$belte', '$pid', '$dato', '$grad');";
			
			if($conn->query($sql))
			{
				echo("<p>Beltegrad Oppdatert</p>");
			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($conn));
			}
		}
	}
		
	if(isset($_POST["rolle_submit"]))
	{
		$conn->set_charset("utf8");
		$pid = $_GET["id"];
		$rolle = $_POST["rolle"];
		
		if(empty($pid) || empty($rolle)) {
			/*header("Location: admin.php");
			exit();*/
		}
		else {
			/*Fiks insert statementen*/
			$sql = "INSERT INTO PersonRolle (Person_Person_id, Rolle_Rolle_id) VALUES ('$pid', '$rolle');";
			
			if($conn->query($sql))
			{
				echo("<p>Rolle Oppdatert</p>");
			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($conn));
			}
		}
	}
	
	}
	else {
	header("location:/admin.php");
	exit();
	}
?>
<a href="admin.php">Tilbake</a>
<div>
	<div>
	<form method="POST">
		<label>Oppdater Person</label><br>
		<label for="fnavn">Fornavn</label>
		<input type="text" name="fnavn" value="<?php echo "$fornavn"; ?>" placeholder="Fornavn...">
		<label for="mnavn">Mellomnavn</label>
		<input type="text" name="mnavn" value="<?php echo "$mellomnavn"; ?>" placeholder="Mellomnavn...">
		<label for="enavn">Etternavn</label>
		<input type="text" name="enavn" value="<?php echo "$etternavn"; ?>" placeholder="Etternavn...">
		<label for="fdato">Fødselsdato</label>
		<input type="date" name="fdato" value="<?php echo "$fodselsdato"; ?>">
		<label for="tlfnmr">Telefon Nummer</label>
		<input type="tel" name="tlfnmr" value="<?php echo "$telefon"; ?>">
		<label for="mobnmr">Mobil Nummer</label>
		<input type="tel" name="mobnmr" value="<?php echo "$mobil"; ?>">
		<label for="mail">Epost</label>
		<input type="email" name="mail" value="<?php echo "$epost"; ?>">
		<label for="adrnavn">Gatenavn</label>
		<input type="text" name="adrnavn" value="<?php echo "$gatenavn"; ?>">
		<label for="adrnmr">Gatenummer</label>
		<input type="number" name="adrnmr" value="<?php echo "$gatenummer"; ?>">
		<?php
		echo "<label for='pstnmr'>Postnummer</label>";
			$sql = "SELECT p.Postnummer, p.Poststed FROM Poststed p";
			$result = $conn->query($sql);
			echo "<select name='pstnmr'>";
			/*echo "<option value=$GLOBAL[Postnummer]>$GLOBAL[]</option>";*/
			while($rad = $result->fetch_assoc()){
				$pstnmr = $rad["Postnummer"];
				$pstnavn = $rad["Poststed"];

				echo "<option value=$pstnmr>$pstnmr, $pstnavn</option>";
			}
			echo "</select>";

			
			echo "<label for='sex'>Kjønn</label>";
			$sql = "SELECT k.Kjonn_id, k.Kjonnavn FROM Kjonn k";
			$result = $conn->query($sql);
			echo "<select name='sex'>";
			while($rad = $result->fetch_assoc()){
				$sexid = $rad["Kjonn_id"];
				$sexnavn = $rad["Kjonnavn"];

				echo "<option value=$sexid>$sexnavn</option>";
			}
			echo "</select>";
		?>
		<input type="submit" name="oppdater-person" value="Oppdater">
	</form>
	<form method="post">
	<?php
	echo "<label for='belte'>Belte</label><br>";
	$sql = "SELECT b.Belte_id, b.Beltefarge FROM Belte b";
	$result = $conn->query($sql);
	echo "<select name='belte'>";
	while($rad = $result->fetch_assoc()){
		$belteid = $rad["Belte_id"];
		$beltefarge = $rad["Beltefarge"];

	echo "<option value=$belteid>$beltefarge</option>";
	}
	echo "</select>";	
	?>
	<input type="date" name="dato">
	<input type="number" name="grad" min="1" max="10">
	<input type="submit" name="belte_submit" value="Legg til">
	</form>
	</div>
	
	<div>
	<form method="post">
	<?php
	echo "<label for='belte'>Rolle</label><br>";
	$sql = "SELECT r.Rolle_id, r.Rollenavn FROM Rolle r";
	$result = $conn->query($sql);
	echo "<select name='rolle'>";
	while($rad = $result->fetch_assoc()){
		$rolleid = $rad["Rolle_id"];
		$rollenavn = $rad["Rollenavn"];

	echo "<option value=$rolleid>$rollenavn</option>";
	}
	echo "</select>";	
	?>
	<input type="submit" name="rolle_submit" value="Legg til">
	</form>
	</div>
</div>