
<?php
header("Content-type: text/html; charset=utf-8");

include ("Includes/Classes/Person.class.php");
include ("Includes/config.php");

$person = new Person();

$all_people = $person->selectAll();

while ($thePerson = mysql_fetch_array($all_people)) {
	$person_options .= '<option  value="' . $thePerson['idPessoa'] . '">' . $thePerson['nome'] . '</option>';
}

?>

<form method="post" action="take_values_car.php">
	Pessoa: 	<select name="idPerson"><?php echo $person_options ?></select></br>
	Placa:	  	<input type="text" name="plate"></input></br>
	Descrição: 	<input type="text" name="description"></input></br>
	Ano:	  	<input type="text" name="year"></input></br>
	Cor:	 	<input type="text" name="color"></input></br>
	Foto:	  	<input type="text" name="photo"></input></br>

	<input type="submit" name="save" value="save"></input>
</form>