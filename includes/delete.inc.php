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
	$sql = "DELETE FROM Belte_has_Person WHERE Person_Person_id = ".$_GET["id"]." AND Belte_Belte_id = ".$_POST['Belte-id']." AND Dato ='".$_POST['Belte-dato']."'";
	if ($conn->query($sql) === TRUE) {
    echo "Beltegrad slettet";
	}
	else {
    echo "Error deleting record: " . $conn->error;
	}
	}

	if(isset($_POST["slett-rolle"])) {
	$sql = "DELETE FROM PersonRolle WHERE Person_Person_id = ".$_GET["id"]." AND Rolle_Rolle_id = ".$_POST['Rolle-id'];
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

	<?php
	if(isset($_GET["id"]) || !empty($_GET["id"])) {
	$sql = "SELECT b.Belte_id, b.Beltefarge, bp.Dato, bp.Grad
 	FROM Belte_has_Person bp
 	LEFT JOIN Belte b 
 	ON b.Belte_id = bp.Belte_Belte_id
	WHERE Person_Person_id = ".$_GET["id"]."
	ORDER BY bp.Dato DESC";
	$result = $conn->query($sql);
	echo "<table>
	<tr>
	<th>Beltefarge</th>
	<th>Dato</th>
	<th>Slett</th>
	</tr>";
	
	
	while($row = $result->fetch_assoc()){
		echo "<tr>
		<td>" . $row['Beltefarge'];
		if(!empty($row['Grad'])){
			echo " ".$row['Grad'].". Dan";
		}
		echo "</td> <td>" . $row['Dato'] . "</td>
		<td> <form method='post'><input type='hidden' value=" . $row['Belte_id'] . " name='Belte-id'><input type='hidden' value=" . $row['Dato'] . " name='Belte-dato'></input>
		<input type='submit' class='btn red-btn' name='slett-belte' value='Slett'></input></form></td>
		</tr>";
	}
	echo "</table>";
}	

	if(isset($_GET["id"]) || !empty($_GET["id"])) {
	$sql = "SELECT r.Rolle_id, r.Rollenavn
		FROM PersonRolle pr
		LEFT JOIN Rolle r
		ON r.Rolle_id = pr.Rolle_Rolle_id
		WHERE pr.Person_Person_id =".$_GET["id"]."
		ORDER BY r.Rolle_id ASC";
	$result = $conn->query($sql);
	echo "<table>
	<tr>
	<th>Rollenavn</th>
	<th>Slett</th>
	</tr>";
	
	
	while($row = $result->fetch_assoc()){
		echo "<tr>
		<td>" . $row['Rollenavn'] . "</td>
		<td> <form method='post'><input type='hidden' value=" . $row['Rolle_id'] . " name='Rolle-id'>
		<input type='submit' class='btn red-btn' name='slett-rolle' value='Slett'></input></form></td>
		</tr>";
	}
	echo "</table>";
}	
	?>
</div>