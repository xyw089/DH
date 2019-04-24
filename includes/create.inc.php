<?php
//Legger til Person
	if(isset($_POST["leggtil"]))
	{
		$conn->set_charset("utf8");
		$fornavn = $_POST["fnavn"];
		$mellomnavn = $_POST["mnavn"];
		$etternavn = $_POST["enavn"];
		$fodselsdato = $_POST["fdato"];
		$telefon = $_POST["tlfnmr"];
		$mobil = $_POST["mobnmr"];
		$epost = $_POST["mail"];
		$gatenavn = $_POST["adrnavn"];
		$gatenummer = $_POST["adrnmr"];
		$postnummer = $_POST["pstnmr"];
		$kjonn = $_POST["sex"];
		

		if(empty($fornavn) || empty($etternavn) || empty($fodselsdato) || empty($kjonn)) {
			/*header("Location: admin.php");
			exit();*/
		}
		else {
			/*Fiks insert statementen*/
			$sql = "INSERT INTO Person (Fornavn, Mellomnavn, Etternavn, Fodselsdato, Telefon, Mobil, Epost, Gatenavn, Gatenummer, Kjonn, Poststed_Postnummer) VALUES ('$fornavn', '$mellomnavn', '$etternavn', '$fodselsdato', '$telefon', '$mobil', '$epost', '$gatenavn', '$gatenummer', '$kjonn', '$postnummer');";
			
			if($conn->query($sql))
			{
				echo("<p>La til ".$fornavn." ".$etternavn."</p>");
			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($conn));
			}
		}
	}
?>

<!-- The Modal -->
<div>
  	<!-- Modal content -->
  	<div>
    	<div>
      	<h2>Legg til Medlem</h2>
    	</div>
    	<div>
      	<form method="POST">
			<label>Ny Person</label><br>
			<label for="fnavn">Fornavn</label>
			<input type="text" name="fnavn" placeholder="Fornavn...">
			<label for="mnavn">Mellomnavn</label>
			<input type="text" name="mnavn" placeholder="Mellomnavn...">
			<label for="enavn">Etternavn</label>
			<input type="text" name="enavn" placeholder="Etternavn...">
			<label for="fdato">Fødselsdato</label>
			<input type="date" name="fdato">
			<label for="tlfnmr">Telefon Nummer</label>
			<input type="tel" name="tlfnmr">
			<label for="mobnmr">Mobil Nummer</label>
			<input type="tel" name="mobnmr">
			<label for="mail">Epost</label>
			<input type="email" name="mail">
			<label for="adrnavn">Gatenavn</label>
			<input type="text" name="adrnavn">
			<label for="adrnmr">Gatenummer</label>
			<input type="number" name="adrnmr">			

			<?php
			echo "<label for='pstnmr'>Postnummer</label>";
			$sql = "SELECT p.Postnummer, p.Poststed FROM Poststed p";
			$result = $conn->query($sql);
			echo "<select name='pstnmr'>";
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
			<div><input type="submit" name="leggtil" value="Legg til"></div>
		</form>
    	</div>
  	</div>
</div>