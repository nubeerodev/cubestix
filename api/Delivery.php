<?php

class Delivery
{

    public $sendername = "";
    public $senderid = "";
    public $recipientname = "";
    public $recipientphone = "";
    public $recipientemail = "";
    public $recipientaddress = "";
    public $recipientcity = "";
    public $recipientlga = "";
    public $recipientstate = "";
    // public $createdate = date();
    public $senderdate;
    public $status; //="PROCESSING";
    public $description; //="SHIPMENT RECIEVED ";
    public $notes; //="Your package is currently being received for delivery";
    /*
    $status="PROCESSING";
    $description="DELIVERY";
    $notes="Kindly be available";
     */
    public $trackingid = "";
    public $username = "";
    public $responsecode = "";
    public $responsemessage = "";
    public $deliverydate;
    public $requestid;

    public function __construct($sendername, $senderid, $recipientname, $recipientphone, $recipientemail, $recipientaddress, $recipientcity, $recipientlga, $recipientstate, $senderdate, $requestid)
    {
        $this->sendername = $sendername;
        $this->senderid = $senderid;
        $this->recipientname = $recipientname;
        $this->recipientphone = $recipientphone;
        $this->recipientemail = $recipientemail;
        $this->recipientaddress = $recipientaddress;
        $this->recipientcity = $recipientcity;
        $this->recipientlga = $recipientlga;
        $this->recipientstate = $recipientstate;
        $this->senderdate = $senderdate;
        $this->username = $sendername;
        $this->createdate = date("Y-m-d H:i:s");
        $this->requestid = $requestid;
    }

    public function createDelivery($dbconn)
    {
        $this->deliverydate = date("Y-m-d H:i:s");

        $this->deliverydate = date('Y-m-d h:i:s', strtotime($this->deliverydate . '+7 days'));
        $this->status = "PENDING";
        $this->description = "DELIVERY";
        $this->notes = "item is pending delivery";
        $sql = "insert into deliveries(sendername,senderid,recipientname,recipientphone,recipientemail,recipientaddress,
recipientcity,recipientlga,recipientstate,createdate,senderdate,status,description,notes,username,deliverydate,requestid) values('" . $this->sendername . "','" . $this->senderid . "','" . $this->recipientname . "','" . $this->recipientphone . "','" . $this->recipientemail . "','" . $this->recipientaddress . "','" . $this->recipientcity . "','" . $this->recipientlga . "','" . $this->recipientstate . "','" . $this->createdate . "','" . $this->senderdate . "','" . $this->status . "',
'" . $this->description . "','" . $this->notes . "','" . $this->username . "','" . $this->deliverydate . "','" . $this->requestid . "')";

        if ($dbconn->query($sql) === true) {
            $this->responsecode = "00";
            $this->responsemessage = "successful";
            $this->trackingid = mysqli_insert_id($dbconn);

        } else {
            $this->responsecode = "91";
            $this->responsemessage = "NOT SAVED FOR DELIVERY";
            $this->status = "";
            $this->description = "";
            $this->notes = "";
        }
        //print_r($this);
        return $this;
    }

    public static function getDeliveryByID($dbconn, $trackingid)
    {

        $obj = new stdClass();
        $sql = "select * from deliveries where deliveryid='" . $trackingid . "';";
        $res = $dbconn->query($sql);
        if ($res->num_rows > 0) {
            while ($resdata = $res->fetch_assoc()) {
                /*sendername,senderid,recipientname,recipientphone,recipientemail,recipientaddress,recipientcity,recipientlga,recipientstate,createdate,senderdate,status,description,notes,username*/
                $obj->responsecode = "00";
                $obj->responsemessage = "successful";
                $obj->status = $resdata["status"];
                $obj->description = $resdata["description"];
                $obj->notes = $resdata["notes"];
                $obj->trackingid = $resdata["deliveryid"];
                $obj->sendername = $resdata["sendername"];
                $obj->senderid = $resdata["senderid"];
                $obj->recipientname = $resdata["recipientname"];
                $obj->recipientphone = $resdata["recipientphone"];
                $obj->recipientemail = $resdata["recipientemail"];
                $obj->recipientaddress = $resdata["recipientaddress"];
                $obj->recipientcity = $resdata["recipientcity"];
                $obj->recipientlga = $resdata["recipientlga"];
                $obj->recipientstate = $resdata["recipientstate"];
                $obj->createdate = $resdata["createdate"];
                $obj->senderdate = $resdata["senderdate"];
                $obj->deliverydate = $resdata["deliverydate"];
                $obj->requestid = $resdata['requestid'];
            }

        } else {
            $obj->responsecode = "07";
            $obj->responsemessage = "DELIVERY / TRACKING ID NOT FOUND";

        }
        return $obj;
    }

    public static function getAllDeliveriesByUser($dbconn, $userid)
    {

        $obj = new stdClass();
        $sql = "select * from deliveries where senderid='" . $userid . "';";
        $res = $dbconn->query($sql);
        $obj->result = array();
        if ($res->num_rows > 0) {

            while ($resdata = $res->fetch_assoc()) {
                /*sendername,senderid,recipientname,recipientphone,recipientemail,recipientaddress,recipientcity,recipientlga,recipientstate,createdate,senderdate,status,description,notes,username*/
                $a = new stdClass();
                $a->status = $resdata["status"];
                $a->description = $resdata["description"];
                $a->notes = $resdata["notes"];
                $a->trackingid = $resdata["deliveryid"];
                $a->sendername = $resdata["sendername"];
                $a->senderid = $resdata["senderid"];
                $a->recipientname = $resdata["recipientname"];
                $a->recipientphone = $resdata["recipientphone"];
                $a->recipientemail = $resdata["recipientemail"];
                $a->recipientaddress = $resdata["recipientaddress"];
                $a->recipientcity = $resdata["recipientcity"];
                $a->recipientlga = $resdata["recipientlga"];
                $a->recipientstate = $resdata["recipientstate"];
                $a->createdate = $resdata["createdate"];
                $a->senderdate = $resdata["senderdate"];
                $a->deliverydate = $resdata["deliverydate"];
                $a->requestid = $resdata["requestid"];
                array_push($obj->result, $a);
            }
            $obj->responsecode = "00";
            $obj->responsemessage = "successful";

        } else {
            $obj->responsecode = "07";
            $obj->responsemessage = "USERID NOT FOUND";

        }
        return $obj;
    }

    public static function updateDeliveryStatusByID($dbconn, $deliveryid, $status, $description, $notes, $city, $lga, $state, $deliverydate)
    {
        $obj = new StdClass();
        $qry = "update deliveries set status='" . $status . "', description='" . $description . "', notes='" . $notes . "', recipientcity='" . $city . "', recipientlga='" . $lga . "', recipientstate ='" . $state . "', deliverydate='" . $deliverydate . "' where deliveryid=" . $deliveryid;

        if ($dbconn->query($qry)) {
            $obj->responsecode = "00";
            $obj->responsemessage = "successful";
            $obj->result = Delivery::getDeliveryByID($dbconn, $deliveryid);
        } else {
            $obj->responsecode = "91";
            $obj->responsemessage = "NOT UPDATED FOR DELIVERY";

        }
        // print_r($obj);
        return $obj;
    }

}
