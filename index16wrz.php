<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="990033">
		<?php 
		
		$x = 0;
		$y = 0;
		
		for($x = 1; $x <= 10; $x++)
    {
		echo "<br>";
		
			for($y = 1; $y <= 10; $y++){
			
				echo $y ."*" .$x ."=" .$y * $x ."<br>";
				
			}
    }
		echo "<br>";
		
		$i = 0;
		$j = 0;
		$k = 20;
		$l = 40;
		
		for($i = 0; $i < $l; $i++) {
			for($j = 0; $j < $k; $j++) {
				if($i == 0 || $i == $l - 1) {
					
					echo "*";
					
				}
				else {
					if($j == 0 || $j == $k - 1){
						echo "*";
					}
					else {
						echo "_";
					}
					
				}
			}
			echo "<br>";
		}
		
		
		
		
		
		
		
		?>
    </body>
</html>