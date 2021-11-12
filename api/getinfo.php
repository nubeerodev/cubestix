<?php
include("Database/DBConnection.php");
include("utils.php");
include("TerminalModel.php");

require "../vendor/autoload.php";
use \Firebase\JWT\JWT;


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 


//print_r($_SERVER);
//print_r(apache_request_headers()["Authorization"]);
$authsecretuser = "globalaccelerex";
$authsecretpass = "password123#";
//Z2xvYmFsYWNjZWxlcmV4OnBhc3N3MHJkMTIzIw==

$terminalid = "";
$terminalserial = "";
$terminalname = "";
$authterminal = "";
$authserialno ="";
$storedterminalflag = false;
/*
2070AL32
Terminal ID :21000547
Terminal Serial: G2004T37097
*/
$headers = apache_request_headers();
$authkey = "";
foreach ($headers as $header => $value) {
    //echo "$header: $value <br />\n";
	if($header == "Authorization"){
		$authkey = $value;
	}
	if($header == "TerminalID"){
		$authterminal = $value;
	}
	if($header == "SerialNumber"){
		$authserialno = $value;
	}
}

$authkeyhash = hash('sha512', $authsecretuser);

$arr = explode(" ",$authkey);
$storedterminalflag = validateTerminal($authterminal);



// get posted data
$data = json_decode(file_get_contents("php://input"));

	$terminalid = $data->TerminalID;
	$terminalserial = $data->SerialNumber;
//	$terminalname = $data->Name;
	$jwt = $arr[1];
if ($jwt == ""){
	http_response_code(400);
	$result = array("code"=>400, 
					"message"=>"Authorization cannot be empty");
	print_r(json_encode($result));
	die();
	
}

if ($jwt != "Z2xvYmFsYWNjZWxlcmV4OnBhc3N3MHJkMTIzIw=="){
	http_response_code(401);
	$result = array("code"=>401, 
					"message"=>"Invalid authorization code");
	print_r(json_encode($result));
	die();
}

if ($terminalid == ""){
	http_response_code(400);
	$result = array("code"=>400, 
					"message"=>"TerminalID should not be empty");
	print_r(json_encode($result));
	die();
}

if ($terminalserial == ""){
	http_response_code(400);
	$result = array("code"=>400, 
					"message"=>"Serial number should not be empty");
	print_r(json_encode($result));
	die();
}

if(isset($terminalid) && isset($terminalserial)){
	
	if(!$storedterminalflag){
		http_response_code(400);
		$result = array("code"=>400,"message"=>"Terminal Not Found");
		print_r(json_encode($result));
		die();
	}

	

	if ($storedterminalflag){
		$db = new Database();
		$dbc = $db->getConnection();
		$tObj = new TerminalModel($terminalid,$terminalserial);
		$newTerminal = $tObj->getTerminal($terminalid,$dbc);

		$terminalname = $newTerminal->terminalname;
		$termaddress = $newTerminal->terminaladdress;
		$termlim = $newTerminal->terminallimit;
			http_response_code(200);
			$result = array("name"=>$terminalname, 
					"transactionlimit"=>$termlim,
				   	"address"=>$termaddress,
				   	"phone"=>"2348055162860");
	
	}
	
	
}else{
		http_response_code(400);
		$result = array("code" => 400,
					"message" => "TerminalID & SerialNumber are required");
	
}


print_r(json_encode($result));
?>

