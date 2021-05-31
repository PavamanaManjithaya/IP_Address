
<?php
try{
	/whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
	echo"<table id='details'>";
	echo"<tr>";
	echo"<th colspan='2'>! Details !</th>";
	echo"</tr>";
 $apikey='at_NXLDikD5UVSkWkTBt3ooGRuVrcJ7j';
 $url = 'https://geo.ipify.org/api/v1?apiKey='.$apikey.'&format=json&ipAddress='.$ip_address;
 $response = file_get_contents($url);
 $json_array=json_decode($response,true);
 function display_array_recursive($json_rec){
		if($json_rec){
			foreach($json_rec as $key=> $value){
				if(is_array($value)){
					display_array_recursive($value);
				}else{
                    if(empty($value))
					{
						echo"<tr>";
					    echo"<td>".$key."</td>";
                        echo"<td> NONE </td>";
					    echo"</tr>";
					}
                   else 
					{
					   echo"<tr>";
					   echo"<td>".$key."</td>";
                       echo"<td>".$value."</td>";
					   echo"</tr>";
				    }	
			      }	
		}	
	}
}
  	display_array_recursive($json_array);
}catch(Exception $e){
    echo $e->getMessage();
}
echo"</table>";
?>		
