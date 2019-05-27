<?php
if(isset($_GET["id"]) || !empty($_GET["id"])) {
	$sql = "SELECT p.Fornavn, p.Etternavn FROM Person p WHERE p.Person_id = ".$_GET["id"];
	$result = $conn->query($sql);
	$rad = $result->fetch_assoc();
	$fornavn = $rad["Fornavn"];
	$etternavn = $rad["Etternavn"];

	$sql = "SELECT b.Beltefarge, bp.Dato, bp.Grad
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
	</tr>";

	echo "<h1>Belte tidslinje for $fornavn $etternavn</h1>";

	while($row = $result->fetch_assoc()){
		echo "<tr>
		<td>" . $row['Beltefarge'];
		if(!empty($row['Grad'])){
			echo " ".$row['Grad'].". Dan";
		}
		echo "</td>	<td>" . $row['Dato'] . "</td>
		</tr>";
	}
	echo "</table>";
}
