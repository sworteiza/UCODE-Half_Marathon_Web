<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Parsing CSV data</h1>
	<form action="index.php" method="post">
	Upload file: <input type="file" name="csv">
	<input type="submit" value="Upload"><br><br>
	</form>
	<?php
		if($_POST)
		{
			echo'
			<form action="index.php" method="post">
				Filter: 
				<select name="select">
					<option value="not">NOT SELECTED</option>
					<option value="good">good</option>
					<option value="bad">bad</option>
					<option value="-">-</option>
					<option value="neutral">neutral</option>
				</select>
				<input type="submit" value="APPLY"><br><br>
			</form>';
			if(!$_SESSION['name']){
				$_SESSION['name'] = $_POST['csv'];
			}
			$table = 0;
			if (($handle = fopen($_SESSION['name'], "r")) !== FALSE) {
				echo "<fieldset><table>";
				while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
					$value = count($row);
					echo "<tr>";
					if($table == 0){
						for ($ind = 0; $ind < $value; $ind++) {
							echo "<th><fieldset>" . $row[$ind] . "</fieldset></th>";
						}
					}else{
						if($_POST["select"]){
							if($_POST["select"] == 'good'){
								if($row[2] == 'good'){
									for ($ind = 0; $ind < $value; $ind++) {
									echo "<td><fieldset>" . $row[$ind] . "</fieldset></td>";
								}
								}	
							}else if($_POST["select"] == 'not'){
								for ($ind = 0; $ind < $value; $ind++) {
									echo "<td><fieldset>" . $row[$ind] . "</fieldset></td>";
									}
							}elseif($_POST["select"] == 'bad'){
								if($row[2] == 'bad'){
									for ($ind = 0; $ind < $value; $ind++) {
									echo "<td><fieldset>" . $row[$ind] . "</fieldset></td>";
								}
								}	
							}elseif($_POST["select"] == '-'){
								if($row[2] == '-'){
									for ($ind = 0; $ind < $value; $ind++) {
									echo "<td><fieldset>" . $row[$ind] . "</fieldset></td>";
								}
								}	
							}elseif($_POST["select"] == 'neutral'){
								if($row[2] == 'neutral'){
									for ($ind = 0; $ind < $value; $ind++) {
									echo "<td><fieldset>" . $row[$ind] . "</fieldset></td>";
								}
								}	
							}
						}
						else{
							for ($ind = 0; $ind < $value; $ind++) {
							echo "<td><fieldset>" . $row[$ind] . "</fieldset></td>";
							}
						}
						
					}
					echo "</tr>";
					$table++;
				}
				echo "</table></fieldset>";
				fclose($handle);
			}

		}

	?>
</body>
</html>