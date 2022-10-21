<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo $_SESSION["no"] . ".<br>";
echo $_SESSION["wo"];
?>

</body>
</html>