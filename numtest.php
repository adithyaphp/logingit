<?php

$data = array(
    (object)array(
        'Status' => '9',
        'Response' => 'Required Parameter Missing/Illegal Access',
    ),
);
echo '{"Output":'.json_encode($data).'}';
//exit("Done!");

//echo "hai";
/*header("location: http://papajo.in/savedata.php?number=".$who."&name=".$Name."&email=".$Email."&strcode=".$strscode."&strname=".$namestore."&billno=".$billno."&billamou=".$billamou."&ordertime=".$ordertime."&ordrtype=".$ordrtype."&orderstatus=".$orderstatus."&datasrc=".$datas."&creat=".$tim."&dat=".$date."&outlcode=".$outletcode."&status="."1"."&cityy=".$citty);
*/
?>
<html>
	<head>
		<script type="text/javascript">
		window.location = "http://papajo.in/savedata.php";
    </script>
	</head>
	
</html>