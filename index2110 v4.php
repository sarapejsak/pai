<?php
session_start();
setcookie("no", "", time() - 3600);
		setcookie("wo", "", time() - 3600);
?>
<!DOCTYPE html>
<html>
<body>
<form action="./index2110 v4.php" method="post">

		<button type="submit" name="tpop">usuń</button>
		
		</form>

<?php
if(!isset($_COOKIE[$cookie_no])) {
  echo "Cookie named '" . $cookie_no . "' is not set!";
} else {
  echo "Cookie '" . $cookie_no . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_no] . "<br>";
}
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

		

?>

</body>
</html>


