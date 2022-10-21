<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["no"] = 2;
$_SESSION["wo"] = "jdfsjorfjjdkfor";
echo "Session variables are set.";
?>

</body>
</html>