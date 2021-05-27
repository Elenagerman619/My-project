<?
require_once("modules/db.php");
require_once("modules/user.php");

session_start();
$user = $_SESSION;
$signUp = isset($_GET["signup"]);
$logIn = isset($_GET["auth"]);
$logOff = isset($_GET["logoff"]);
$addUser = isset($_GET["register"]);
$upDate = isset($_GET["update"]);

if ($addUser)
{
	userAdd();
}
elseif ($logIn)
{
	userAuth();
}
elseif ($upDate)
{
	userUpdate();
}
elseif ($logOff)
{
	userQuit();
}
else
{
	require_once("pages/user.html.php");	
}
?>
