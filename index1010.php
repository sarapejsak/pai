<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="ffaadd">
		<form action="./index1010.php" method="POST">
			<input type="number" name="wiek" />
			<input type="submit" />
		</form>
		<?php

			
			function wiek($liczba) {
			if ($liczba < 0) {
			echo "???";
			}else if ($liczba <= 18) {
			   echo "młody";
			 }else if ($liczba <= 39) {
			   echo "dorosły";
			 }else {
			   echo "stary";
			 }
			}
			if(isset($_POST['wiek'])){
                echo "Masz " . (int)$_POST['wiek'] . " lata.";
				$co = (int)$_POST['wiek'];
				wiek($co);
            }
		?>
		
	    </body>
</html>