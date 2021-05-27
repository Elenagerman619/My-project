<?
function userAdd()
{
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = trim(mb_strtolower($_POST['email']));
	$pass = trim($_POST['pass']);
	$pass = password_hash("$pass", PASSWORD_DEFAULT);
	$mysqli	= dbConnect();
	$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
	if ($result->num_rows != 0) 
	{
		print("exist");
	}
	else
	{
		$mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
		print("ok");
	};
}
function userAuth()
{
	$email = trim(mb_strtolower($_POST['email']));
	$pass = trim($_POST['pass']);

	$mysqli	= dbConnect();
	$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
	$result = $result->fetch_assoc();
	
	if (password_verify($pass, $result["pass"])) 
	{
		echo "ok";
		$_SESSION['name'] = $result['name'];
		$_SESSION['lastname'] = $result['lastname'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['id'] = $result['id'];
	}
	else 
	{
		echo "user_not_found";
	}
}
function userUpdate()
{
    $inputValue = $_POST['value'];
    $item = $_POST['item'];
    $id = $_SESSION['id'];
	$mysqli	= dbConnect();
    $mysqli->query("UPDATE `users` SET `$item`='$inputValue' WHERE `id`='$id'");
    $_SESSION[$item] = $inputValue;
}
function userQuit()
{
	$_SESSION = array();
}
?>
