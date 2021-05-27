<?
function dbConnect()
{
	static $mysqli;
	if (!$mysqli)
	{
		$mysqli = mysqli_connect("localhost", "a0528167_sdo_0407", "teztour290185", "a0528167_sdo_0407");
	}
	if ($mysqli == false) 
	{
    	print ("error");
		die;
	}
	return $mysqli;
}
?>
