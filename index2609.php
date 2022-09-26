
		<?php


		$paper[0] = "akademia pana kleksa";
    $paper[1] = "akademia prankow cheetosa";
		$paper[2] = "ten ben";
    $paper[3] = "zabierzcie mnie stad";

    $j =0;

		for($j = 3; $j >= 0; --$j){
      echo "$j: $paper[$j] <br>";
  }
  echo "<br>";
		
  $p2 = array('copier' => "Do kserokopiarek i uniwersalny",
    'inkjet' => "Do drukarek atramentowych",
    'laser' => "Do drukarek laserowych",
    'photo' => "Papier fotograficzny");
    
    
    foreach($p2 as $item => $description){
      echo "$item: $description <br>";
    }

    echo "<br>";


    echo "element p2: ". $p2['copier'] ."<br>";
    echo "element p2: ". $p2['photo'] ."<br>";
		?>
