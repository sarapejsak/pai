<?php
// Start the session
session_start();
$cookie_no = "no";
$cookie_co = 37277;
$cookie_name = "wo";
$cookie_value = "fgvbgvdfgvb";
setcookie($cookie_no, $cookie_co, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


?>
<!DOCTYPE html>
<html>
<body>

<?php
if(!isset($_COOKIE["no"])) {
  echo "Cookie named '" . $"no" . "' is not set!";
} else {
  echo "Cookie '" . $"no" . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$"no"] . "<br>";
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

