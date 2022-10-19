<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="bbffff">


		<form action="./index1910.php" method="post">

		<input type="text" name="tekst" />
		<button type="submit" name="tsub">wyślij</button>
		<button type="submit" name="tpop">usuń</button>
		
		</form>
		
		
		<form action="./index1910.php" method="post">
		
		<input type="number" name="numer" />
		<button type="submit" name="nsub">wyślij</button>
		
		
		<button type="submit" name="npop">usuń</button>
		
		</form>
		
		<?php
		
		
		$no = array(41, 52, 87);
		$txt = array("cos","tam","iguess");
		
		
		if(isset($_POST['nsub'])){
			if(isset($_POST['numer'])){
				
				array_push($no,  (int)$_POST['numer']);
				print_r($no);
			}
		}
		
		if(isset($_POST['tekst'])){
			
			array_push($txt,  htmlspecialchars($_POST['tekst']));
			print_r($txt);
		}
		if(isset($_POST['tsub'])){
			if(isset($_POST['tpop'])){
			$co = array_pop($txt);
			print_r($txt);
			}
		}
			
		
		
		
		
		
		
		
		
		
		
		
		?>



	</body>
</html>