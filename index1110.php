<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="ffaadd">
		<form action="./index1110.php" method="POST">
			<input type="number" name="first" value="first" required />
			<select name="akcja">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<input type="number" name="second" value="second" required />
			<input type="submit" />
		</form>
		

	<?php
	
	
			$fir = $_POST['first'];
			$sec = $_POST['second'];
			
			
			
			switch($_POST['akcja']) {
				case "+":
					echo $fir + $sec; break;
				case "-":
					echo $fir - $sec; break;			
				case "*":
					echo $fir * $sec; break;			
				case "/":
					if($sec==0){
						echo "niedzielisieprzezzero"; break;
					}else{
					echo $fir / $sec; break;
					}
			}
	?>	
	</body>
</html>