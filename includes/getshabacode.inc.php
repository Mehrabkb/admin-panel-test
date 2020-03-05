<?php 
require('config.inc.php');
if (isset($_POST['shaba-submit'])) {
        $shabacode = htmlspecialchars($_POST['shabacode']);
        $data_array =  array(
            "RequestId"=>"15",
            "Iban" => $shabacode
    );
    $make_call = callAPI('POST', 'https://esbapi.pec.ir/ApiManager/CoreBanking/GetIbanInfo', json_encode($data_array) , $apikey);
    $response = json_decode($make_call, true);
    header("Location: ../index.php?response=" . http_build_query( $response));
    exit();
    print_r($response);
    $errors   = $response['response']['errors'];
    $data     = $response['response']['data'][0];

}



function callAPI($method, $url, $data , $apikey){
    $curl = curl_init();
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Authorization: Basic '. base64_encode($apikey),
       'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
 }