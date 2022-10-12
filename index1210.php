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
			
			</form>
			<form action="./index1210.php" method="post">
			<br>
			
			<button type="submit">wyślij</button>
			<br>
			<br>
			
			<input type="text" name="pseudo" placeholder="pseudonim" required>
			<br>
			<textarea name='com'>Treść <b>pogrubiona</b> i zwykła.</textarea>
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
				
			}else{
				echo "<br>";
				echo "nie zapamiętano hasła";
			}



			if(isset($_POST['com'])){
				echo "<br>";
				echo $_POST['com'];
			}
			
		?>



	</body>
</html>