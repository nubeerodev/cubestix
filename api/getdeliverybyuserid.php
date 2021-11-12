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

$username = $data->userid;

//($ref,$amt,$curr,$type,$tref,$pan,$cscheme,$custname,$rrn,$st,$cexp,$chash,$pdate,$code,$desc)

if (isset($username)) {

    $Db = new Database();
    $dbaseconn = $Db->getConnection();

    if ($username == "") {
        $result = array("responsecode" => "07", "responsemessage" => "username cannot be empty");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    }

    $res = Delivery::getAllDeliveriesByUser($dbaseconn, $username);

    if ($res->responsecode == "00") {

        http_response_code(200);
        print_r(json_encode($res));
        die();
    }

} else {
    $result = array("responsecode" => "07", "responsemessage" => "username is required");
    http_response_code(200);
    print_r(json_encode($result));
    die();
}
print_r(json_encode($result));
