<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body style="font-size:25px;">

<form action="info.php" method="post" >
Namn: <input type="text" name="name" ><br>
		<input type="radio" name="titl" value="Mr">Mr
		<input type="radio" name="titl" value="Mrs">Mrs <br>
<input type="submit" >	
</form>
<?php 



if (empty($_POST['name']))  {
	echo "Field is empty";
} else if($_POST['name'] == "Nils"){
	echo "Hejsan " . $_POST['titl'].". " . ($_POST['name']);

}else {

	echo "Tjena " . $_POST['titl'].". " . htmlentities(addslashes($_POST['name']));
} 



?>

</body>
</html>


