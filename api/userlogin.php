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

$data = json_decode(file_get_contents("php://input"));

$username = $data->username;
$password = $data->password;

//($ref,$amt,$curr,$type,$tref,$pan,$cscheme,$custname,$rrn,$st,$cexp,$chash,$pdate,$code,$desc)

if (isset($username) && isset($password)) {

    $Db = new Database();
    $dbaseconn = $Db->getConnection();

    if ($username == "") {
        $result = array("responsecode" => "91", "responsemessage" => "Required Fields username");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    }
    if ($password == "") {
        $result = array("responsecode" => "94", "responsemessage" => "Required Fields password");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    }

    $sql = "select * from userlogins where username='" . $username . "'";
    $res = $dbaseconn->query($sql);

    if ($res->num_rows < 0) {
        $result = array("responsecode" => "05", "responsemessage" => "your user ID does not exist, please contact support");
        http_response_code(200);
        print_r(json_encode($result));
        die();
    } else {
        $resdata = $res->fetch_assoc();

        if ($resdata['username'] == $username && $resdata['password'] == $password) {
            $result = array("responsecode" => "00",
                "responsemessage" => "succesful",
                "userid" => $resdata["id"],
                "fullname" => $resdata["contactname"],
                "roleid" => $resdata["roleid"],
                "username" => $resdata["username"],
                "email" => $resdata["email"]);

            http_response_code(200);
            print_r(json_encode($result));
            die();
        } else {

            $result = array("responsecode" => "05", "responsemessage" => "Invalid login credentials");
            http_response_code(200);
            print_r(json_encode($result));
            die();
        }
    }

} else {
    http_response_code(200);
    $result = array("responsecode" => "99", "responsemessage" => "username and password are required");
    print_r(json_encode($result));
}
