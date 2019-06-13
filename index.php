<?php 
	session_start();

	if (isset($_POST['clik'])){
		$STR = '';
		for ( $i = 0; $i < 20; $i++){
			$STR = $STR.chr(rand(0,255));
		}

		echo 'Обычная форма: '.$STR;
		echo "<br>";
		$SER = serialize($STR);
		echo 'Сериализированная форма: '.$SER;
		echo "<br>";
		echo '<a style="color:blue;" href="./index2.php">Десериализация</a>';
		$_SESSION['stroka'] = $SER;
	}
?>

<!DOCTYPE html> 
	<html>
	<body>
		<form action = "index.php" method = "post"> 
			<input type = "submit" value = "Сформировать строку" name = "clik"/>
		</form>
	</body>
	</html>
