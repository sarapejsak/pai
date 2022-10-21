<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./index2110 v2.php" method="post">

		<button type="submit" name="tpop">usuń</button>
		
		</form>
<?php
// Echo session variables that were set on previous page
echo $_SESSION["no"] . ".<br>";
echo $_SESSION["wo"];


// destroy the session


if(isset($_POST['tpop'])){
		session_destroy();
		}
		
?>

</body>
</html>