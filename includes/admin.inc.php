<?php
 //$sql = "SELECT p.Fornavn, p.Etternavn, s.Sexnavn, h.Husnavn FROM Person p LEFT JOIN Hus h ON h.idhus = p.Husene LEFT JOIN Sex s ON s.Sexid = p.Sex ORDER BY p.Fornavn";
 $sql = "SELECT p.Person_id, p.Fornavn, p.Mellomnavn, p.Etternavn, p.Fodselsdato, p.Telefon, p.Mobil, p.Epost, p.Gatenavn, p.Gatenummer, g.Poststed, k.Kjonnavn, r.Rollenavn, b.Beltefarge
 FROM Person p
 LEFT JOIN Poststed g 
 ON g.Postnummer = p.Poststed_Postnummer
 LEFT JOIN Kjonn k
 ON k.Kjonn_id = p.Kjonn
 LEFT JOIN Belte_has_Person bp
 ON bp.Person_Person_id = p.Person_id
 LEFT JOIN Belte b
 ON b.Belte_id = bp.Belte_Belte_id
 LEFT JOIN PersonRolle pr
 ON pr.Person_Person_id = p.Person_id
 LEFT JOIN Rolle r
 ON r.Rolle_id = pr.Rolle_Rolle_id";
 if($results = $conn->query($sql)) {
	echo "<table>
	<tr>
	<th>#</th>
	<th>Navn</th>
	<th>Alder</th>
	<th>Telefon</th>
	<th>Mobil</th>
	<th>Epost</th>
	<th>Adresse</th>
	<th>Kjønn</th>
	<th>Rolle</th>
	<th>Beltegrad</th>
	<th colspan='2'>Handling</th>
	</tr>";
	/*Endre colspan til 3 for view*/
	while($row = $results->fetch_assoc())
	{
		echo "<tr>
		<td>" . $row['Person_id'] . "</td>
		<td>" . $row['Fornavn'] . " " . $row['Mellomnavn'] . " " . $row['Etternavn'] . "</td>
		<td>" . date_diff(date_create($row['Fodselsdato']), date_create('now'))->y . "</td>
		<td>" . $row['Telefon'] . "</td>
		<td>" . $row['Mobil'] . "</td>
		<td> <a href='mailto:". $row['Epost'] ."'>" . $row['Epost'] . "</a></td>
		<td>" . $row['Gatenavn'] . " " . $row['Gatenummer'] . ", " . ucwords(strtolower($row['Poststed'])) . "</td>
		<td>" . $row['Kjonnavn'] . "</td>
		<td>" . $row['Rollenavn'] . "</td>
		<td>" . $row['Beltefarge'] . "</td>
		<td><a class='btn green-btn' href='update.php?id=". $row['Person_id'] ."'>Update</a></td>
		<td><a class='btn red-btn' href='delete.php?id=". $row['Person_id'] ."'>Delete</a></td>
		</tr>";
		/*<td><a class='btn blue-btn' href='read.php?id=". $row['Person_id'] ."'>View</a></td>*/
	}
	echo "</table>";
	}
	else {
		echo("Feil i Spørring: " . mysqli_error($conn));
	};

