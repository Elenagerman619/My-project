<?
$country = $_GET["country"];
$countryNames = array
(
	"chehia" => "Чехия",
	"cyprus" => "Кипр",
	"france" => "Франция",
	"greece" => "Греция",
	"italy" => "Италия",
	"portu" => "Португалия"
);
$countryName = $countryNames[$country];
require_once("pages/detail.html.php");
?>
