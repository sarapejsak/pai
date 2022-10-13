<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="bbffff">


		<form action="./index1210.php" method="post">



			login
			<input type="text" name="user" placeholder="username" required>
			<br>

			hasło
			<input type="password" name="psw" placeholder="password" required>
			<br>

			<input type="checkbox"  name="check" placeholder="check"> zapamiętaj mnie
			<br>
			
			<button type="submit">wyślij</button>
		</form>
		<form action="./index1210.php" method="post">
			
			<br>
			<br>
			
			<input type="text" name="pseudo" placeholder="pseudonim" required>
			<br>
			<textarea name='com'>Treść <b>pogrubiona</b> i zwykła.</textarea>
			<textarea name='com'>Treść <b>pogrubiona</b> i zwykła.</textarea>
			<button type="submit">wyślij</button>
		

		</form>
		<form action="./index1210.php" method="post">
			
			<select name="baza" required>
				<option value="burger">burger</option>
				<option value="wrap">wrap</option>
				<option value="kanapka">kanapka</option>
			</select>
			
			<br>
			
			<p>opcja</p>
				<p><input type="radio" name="opcja" value="wege" />wegetariańska</p>
				<p><input type="radio" name="opcja" value="wegan" />wegańska</p>
				<p><input type="radio" name="opcja" value="carnivore" />z mięsem</p>
			
			<br>
			
			<p>sosy</p>
				<p><input type="checkbox" name="sosy0" value=1 />śmietanowy</p>
				<p><input type="checkbox" name="sosy1" value=1 />jalapeno</p>
				<p><input type="checkbox" name="sosy2" value=1 />tysiąca wysp</p>
		
		
			<button type="submit">wyślij</button>
			
			</form>
		<form action="./index1210.php" method="post">
			
			<input type="text" name="imie" placeholder="imię" required> <br>
			<input type="text" name="nazw" placeholder="nazwisko" required><br>
			
			<p><input type="radio" name="plec" value="m" />Mężczyzna</p>
			<p><input type="radio" name="plec" value="k" />Kobieta</p>
			<p><input type="radio" name="plec" value="x" />Inna</p>
			
			<button type="submit">wyślij</button> <br>
		</form>
		
		<form action="./index1210.php" method="post">
		
			<select name="gra">
				<option value="craft">minecraft</option>
				<option value="terra">terraria</option>
				<option value="cs">csgo</option>
			</select>
			
			<input type="number" name="h" />
			
			<button type="submit">wyślij</button>
		</form>
		
		<?php
		
			
			
			
			
			if(isset($_POST['user'])){
				$u = $_POST['user'];
				echo $u;
				
			}
			echo "<br>";
			if(isset($_POST['psw'])){
				$p = $_POST['psw'];
				echo sha1($p);
				
			}			
			
			if(isset($_POST['check'])){
				echo "<br>";
				$c = $_POST['check'];
				echo "zapamiętano hasło";
				
			}



			if(isset($_POST['com'])){
				echo "<br>";
				echo $_POST['com'];
			}
			
			if(isset($_POST['baza'])){
				echo  $_POST['baza']."<br>";
			}
			
			if(isset($_POST['opcja'])){
				if($_POST['opcja'] == 'wege'){
					
					echo "wybrano opcję wegetariańską"."<br>";
					
					}else if($_POST['opcja'] == 'wegan'){
						
						echo "wybrano opcję wegańską"."<br>";
						
					}else echo "wybrano opcję z mięsem"."<br>";
			}
			
			if(isset($_POST['sosy0']) && $_POST['sosy0'] == 1) echo "Wybrano sos śmietanowy"."<br>";
			if(isset($_POST['sosy1']) && $_POST['sosy1'] == 1) echo "Wybrano sos jalapeno"."<br>";
			if(isset($_POST['sosy2']) && $_POST['sosy2'] == 1) echo "Wybrano sos tysiąca wysp"."<br>";
			
			if(isset($_POST['plec'])){
				if($_POST['plec'] == 'm') echo "witam Pana o imieniu: ".$_POST['imie'];
				if($_POST['plec'] == 'k') echo "witam Panią o imieniu: ".$_POST['imie'];
				if($_POST['plec'] == 'x') echo "witam szanowną osobę o imieniu: ".$_POST['imie'];
			}
			
			if(isset($_POST['gra'])){
				$h = $_POST['h'];
				if($_POST['gra'] == 'craft') {
					if($h<"100"){
						echo "jesteś początkujący";
					}else echo "poznałeś już grę";
				}else if($_POST['gra'] == 'terra') {
					if($h<"500"){
						echo "jesteś początkujący";
					}else echo "poznałeś już grę";
				}else if($_POST['gra'] == 'cs') {
					if($h<"1000"){
						echo "jesteś początkujący";
					}else echo "poznałeś już grę";
				}
			}
			
		?>



	</body>
</html>