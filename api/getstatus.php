<?php
include("Database/DBConnection.php");

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"); 

$headers = apache_request_headers();
$authkey = "";
foreach ($headers as $header => $value) {
    //echo "$header: $value <br />\n";
	if($header == "Authorization"){
		$authkey = $value;
	}

}

$storedterminalflag = false;

$arr = explode(" ",$authkey);

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





$sendername="";
$senderid="";


$data = json_decode(file_get_contents("php://input"));

	$sendername = $data->sendername;
	$senderid = $data->senderid;
	
//($ref,$amt,$curr,$type,$tref,$pan,$cscheme,$custname,$rrn,$st,$cexp,$chash,$pdate,$code,$desc)

	if(isset($sendername) && isset($senderid)){
		
		$Db = new Database();
		$dbaseconn = $Db->getConnection();
		
		//echo($res);
		
				$result = array("responsecode"=>"00", 
					"responsemessage"=>"Success",
								"sendername"=>$sendername,
								"result"=> array("deliverystatus"=>"OUT FOR DELIVERY","deliverydate"=>"2021-09-21","recipientname"=>"SANWO OLUBAYO",
								"deliveryaddress"=>"33 olu sukami street","city"=>"Lekki","state"=>"lagos","deliverynotes"=>"Delivery is on schedule"));
				print_r(json_encode($result));
				http_response_code(200);
	
	}else{
		http_response_code(400);
				$result = array("code" => "NOTFOUND","message" => "Invalid Sender reference");
	}
	//print_r(json_encode($result));



?>

