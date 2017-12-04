<?php
	include "config.php";
	
	//$cur_date =date("y-m-d h:i:s");
	$Name = $_GET['name'];
	$who = $_GET['num'];
	//$who = substr($who1, 0, 10);
	$Email = $_GET['email'];
	//$strscode = $_GET['strcode'];
	$strscode = $_GET['strcode'];
	$stsname = $_GET['stname'];
	$billno = $_GET['billno'];
	$billamou = $_GET['bilamou']; 
	$datas = $_GET['datasrc'];
	$ordertime = $_GET['ordtime'];
	$ordrtype = $_GET['ordtype'];
	$orderstatus = $_GET['ordstatus'];
	$tim = $_GET['time']; 
	$date = $_GET['datess'];
	$outletcode = $_GET['outletc'];
	$citty = $_GET['city'];
	$namestore = $_GET['stname'];
	
	
		
		$sqlordata = "INSERT INTO `papadata`(`number`, `bilno`, `bilamoun`, `name`, `email`, `ordertime`, `ordrtype`, `strcode`, `datasrc`, `created`, `date`, `orderstatus`, `storename`, `outletcode`, `status`, `city`) VALUES ('$who','$billno','$billamou','$Name','$Email','$ordertime','$ordrtype','$strscode','$datas','$tim','$date','$orderstatus','$namestore','$outletcode','1','$citty')"; 
	  $resultord=mysql_query($sqlordata);
	  
	  $data = array(
				    (object)array(
				        'Status' => '1',
				        'Storecode' => $strscode,
				        'Billno' => $billno,
				        'MobileNo' => $who,
				        'Response' => 'Data Inserted Sucessfully',
				    ),
				);
				echo '{"Output":'.json_encode($data).'}';
				exit("Done!");
			
	
		
?>
