<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["car"] = "opel";
$_SESSION["bike"] = "harley";
echo "Session variables are set.";
?>

</body>
</html>