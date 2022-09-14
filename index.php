<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="B00B69">
		<?php 
		
		$x = 10;
		$y = 0;
		
		if(++$x == 10) echo $x;
		echo "<br>";
		if($y++ == 0) echo $y;
		
		echo "<br>";
		$msgs = 5;
	
		if($msgs == 0){
			echo "brak wiadomości";
		}
		
		echo "Masz ". $msgs ." wiadomości.";
		
		
		
		
		
		
		
		?>
    </body>
</html>