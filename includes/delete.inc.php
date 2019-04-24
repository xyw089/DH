<?php
	if(isset($_GET["id"]) && !empty($_GET["id"])) {
	
	$sql = "SELECT p.Fornavn, p.Etternavn FROM Person p WHERE p.Person_id = ".$_GET["id"];
	$result = $conn->query($sql);
	$rad = $result->fetch_assoc();
	$fornavn = $rad["Fornavn"];
	$etternavn = $rad["Etternavn"];
	
	if(isset($_POST["slett-person"])) {
	$sql = "DELETE FROM Person WHERE Person_id = ".$_GET["id"];
	if ($conn->query($sql) === TRUE) {
    echo "Person slettet";
	}
	else {
    echo "Slett beltegrad og rolle først: " . $conn->error;
	}
	}
	
	if(isset($_POST["slett-belte"])) {
	$sql = "DELETE FROM Belte_has_Person WHERE Person_Person_id = ".$_GET["id"];
	if ($conn->query($sql) === TRUE) {
    echo "Beltegrad slettet";
	}
	else {
    echo "Error deleting record: " . $conn->error;
	}
	}

	if(isset($_POST["slett-rolle"])) {
	$sql = "DELETE FROM PersonRolle WHERE Person_Person_id = ".$_GET["id"];
	if ($conn->query($sql) === TRUE) {
    echo "Rolle slettet";
	}
	else {
    echo "Error deleting record: " . $conn->error;
	}
	}
	}
	else {
	header("Location: ../admin.php");
	exit();
	}
?>

<div>
	<div>
	<h1>Ønsker du å fjerne bruker <?php echo("$fornavn $etternavn");?>?</h1>
	<form method="post">
	<label for="">Slett person</label><br>
	<input type="submit" name="slett-person" value="Slett">
	</form>
	<form method="post">
	<label for="">Slett beltegrad</label><br>
	<input type="submit" name="slett-belte" value="Slett">
	</form>
	<form method="post">
	<label for="">Slett rolle</label><br>
	<input type="submit" name="slett-rolle" value="Slett">
	</form>
	</div>
</div>