<?php
//include("Database/DBConnection.php");

function validateTerminal($termid){
	$dbobj = new Database();
	$utilsdbconn = $dbobj->getConnection();
	$res = false;
	$sql = "select * from terminals where terminalid='".$termid."'";
	$result = $utilsdbconn->query($sql);
	
	if($result){
		if($result->num_rows > 0){
			$res = true;
		}else{
			$res = false;
		}
	}else{
		echo($utilsdbconn->error);
		$res = false;
	}
	return $res;
}


function validateSerial($serialno){
	$sql = "select * from terminals where terminalserial='".$serialno."'";
	$dbobj = new Database();
	$utilsdbconn = $dbobj->getConnection();
	$res=false;
	
	$resultset =  $utilsdbconn->query($sql);
	if($resultset){
		if($resultset->num_rows > 0){
			$res = true;
		}else{
			$res = false;
		}
		
	}else{
		$res = false;
	}

	return  res;
}

function saveTrnStatusHpay($txnStatus,$txnRefNum){
	$sql = "update transactions_hpay set notificationresponsecode='".$txnStatus."' where refnum='".$txnRefNum."'";
	$dbobj = new Database();
	$utilsdbconn = $dbobj->getConnection();
	
	if($utilsdbconn->query($sql)){
	
			$res = true;
		
	}else{
		$res = false;
	}

	return  res;
}

?>