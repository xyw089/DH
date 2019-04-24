<?php
	if(isset($_GET["id"]) || !empty($_GET["id"])) {
	
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