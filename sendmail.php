<?php

$data='';

$data='<table style="width:100%;" border="1"><thead><tr>
    <th>Event Name</th>
    <th>Event Description</th>
  </tr></thead>';
	// echo "<pre>";
	// print_r($_POST);
	// exit();
foreach($_POST as $key=>$value){
if ($value=='undefined'||$value=='') {

}else{
	if ($key == "candy_table_custom") {
		$_key=ucwords(str_replace('_',' ',$key));
		$data .="<tr><td style='padding: 7px 20px' rowspan='".count($value)."'>$_key</td>";
		foreach ($value as $keto => $val) {
			$_key=ucwords(str_replace('_',' ',$key));
    		$data.="<td style='padding: 7px 20px'>$val</td></tr>";
		}
	}elseif($key == "food_menu"){
		$_key=ucwords(str_replace('_',' ',$key));
		$data .="<tr><td style='padding: 7px 20px' rowspan='".count($value)."'>$_key</td>";
		foreach ($value as $keto => $val) {
			$_key=ucwords(str_replace('_',' ',$key));
    		$data.="<td style='padding: 7px 20px'>$val</td></tr>";
		}
	}elseif($key == "grand_total"){
		$_key=ucwords(str_replace('_',' ',$key));
		$data .="<tr><td style='padding: 7px 20px'>$_key</td>";
		$data.="<td style='padding: 7px 20px'>$$value</td></tr>";
	}else{
		$_key=ucwords(str_replace('_',' ',$key));
    	$data.="<tr><td style='padding: 7px 20px'>$_key</td><td style='padding: 7px 20px'>$value</td></tr>";
	}
	
}
   
}

$data.='</table>';
	echo "<pre>";
	print_r($data);
	exit();
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject='Birthday Inquiry Form';

//$mailSent=mail("m.i.c.r.e.a.t.i.v.e.w.o.r.d.s@gmail.com",$subject,$data,$headers);


if($mailSent){
    echo json_encode(['status'=>'1','data'=>'Mail Sent']);
} else {
    echo json_encode(['status'=>'0','data'=>'Some error occured']);
}
?>

