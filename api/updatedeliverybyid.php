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
$deliveryid = $data->trackingid;
$notes = $data->notes;
$status = $data->status;
$description = $data->description;
$state = $data->state;
$city = $data->city;
$lga = $data->lga;
$newdeliverydate = $data->deliverydate;

//($ref,$amt,$curr,$type,$tref,$pan,$cscheme,$custname,$rrn,$st,$cexp,$chash,$pdate,$code,$desc)

if (isset($deliveryid)) {

    $Db = new Database();
    $dbaseconn = $Db->getConnection();

    if ($username == "") {
        $result = array("responsecode" => "07", "responsemessage" => "username cannot be empty");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    }

    $res = Delivery::updateDeliveryStatusByID($dbaseconn, $deliveryid, $status, $description, $notes, $city, $lga, $state, $newdeliverydate);

    if ($res->responsecode == "00") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://1j9k4pzw2d.execute-api.us-west-2.amazonaws.com/prod/cardstatusupdate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "requestid": "' . $res->result->requestid . '",
                "trackingnumber": "' . $res->result->trackingid . '",
                "status":"' . $res->result->status . '",
                "description":"' . $res->result->description . '",
                "statusnotes":"' . $res->result->notes . '",
                "deliverydate":"' . $newdeliverydate . '"}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: 7878737iuhjguyJUIYUGB8765456YHBHVGFTRTHT7TYGJ',
                'Content-Type: application/json',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;

        $res->result->updateresponse = $response;
        http_response_code(200);
        print_r(json_encode($res));
        die();
    }

} else {
    $result = array("responsecode" => "07", "responsemessage" => "Tracking ID is required");
    http_response_code(200);
    print_r(json_encode($result));
    die();
}
print_r(json_encode($result));
