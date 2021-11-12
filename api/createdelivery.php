<?php
include "Database/Connection.php";
include "Delivery.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$result = "";
$headers = apache_request_headers();
$authkey = "";
foreach ($headers as $header => $value) {
    //echo "$header: $value <br />\n";
    if ($header == "Authorization") {
        $authkey = $value;
    }

}

if ($authkey != "Z2xvYmFsYWNjZWxlcmV4OnBhc3N3MHJkMTIzIw==") {
    http_response_code(401);
    $result = array("code" => 401,
        "message" => "Invalid authorization code");
    print_r(json_encode($result));
    die();
}

$data = json_decode(file_get_contents("php://input"));

$sendername = $data->sendername;
//$senderid = $data->senderid;
$recphone = $data->receiverphone;
$recmail = $data->receiveremail;
$recaddress = $data->receiveraddress;
$recname = $data->receivername;
$reccity = $data->receivercity;
$reclga = $data->receiverlga;
$recstate = $data->receiverstate;
$senderdate = $data->senderdate;
$requestid = $data->requestid;
$status = "";
$description = "";
$notes = "";
$senderid = "1004";
//($ref,$amt,$curr,$type,$tref,$pan,$cscheme,$custname,$rrn,$st,$cexp,$chash,$pdate,$code,$desc)
$deliveryObject = new Delivery($sendername, $senderid, $recname, $recphone, $recmail, $recaddress, $reccity, $reclga, $recstate, $senderdate, $requestid);

if (isset($sendername) && isset($recphone) && isset($recname) && isset($recmail) && isset($recaddress) && isset($reccity) && isset($reclga) && isset($recstate)) {

    $Db = new Database();
    $dbaseconn = $Db->getConnection();

    if ($sendername == "") {
        $result = array("responsecode" => "07", "responsemessage" => "Required Fields sender name");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    }
    if ($recphone == "" || $recmail == "" || $recaddress == "" || $reccity == "" || $reclga == "" || $recstate == "") {
        $result = array("responsecode" => "07", "responsemessage" => "Required Fields receiver phone, receiver email, receiver address,receiver city, receiver lga, receiver state");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    }

    $res = $deliveryObject->createDelivery($dbaseconn);

    if ($res->responsecode == "00") {
        $result = array($res);
        http_response_code(200);
        print_r(json_encode($res));
        die();
    }

} else {
    http_response_code(200);
    $result = array("responsecode" => "99", "responsemessage" => "unable to create new delivery");
}
print_r(json_encode($result));
