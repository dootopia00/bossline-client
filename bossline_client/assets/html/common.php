<?php

session_start();

$isLogin = 0;
$userId = "";
$email = "";

$user = array();
if(isset($_POST['userId']) && isset($_POST['accessToken']) && isValid($_POST['accessToken'])) {
	$userId = $_POST['userId'];
	$_SESSION['user_id'] = $userId;
	$_SESSION['access_token'] = $_POST['accessToken'];
	$isLogin = logIn($userId);
} else if(!isset($_SESSION['user_id']) || !isset($_SESSION['access_token']) || !isValid($_SESSION['access_token'])) {
	$isLogin = 0;
} else {
	$isLogin = 1;
	$userId = $_SESSION['user_id'];
}

function logIn($userId) {
	$url = "http://bossline.gg:3000/signin?user_id=".$userId;
	$curl = curl_init("$url");

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 

	$response = curl_exec($curl);
	$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
	$resultStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$res = json_decode($response, true);
	curl_close($curl);
	if($resultStatus == 200) {
		if ($res["status"] == "success") {
			return 1;
		} else {
			return 0;
		}
	}
	return 0;
}

function logout($access_token) {
	$url = "https://kapi.kakao.com/v1/user/logout";
	$curl = curl_init("$url");

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 証明書の検証を行わない
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	    'Authorization: Bearer ' . $access_token,
	));

	$response = curl_exec($curl);
	$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$image_binary = substr($response, $header_size);
	$resultStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$res = json_decode($response, true);
	curl_close($curl);
	if($resultStatus == 200) {
		return true;
	}
	return false;

}

function isValid($access_token) {
	$url = "https://kapi.kakao.com/v1/user/access_token_info";
	$curl = curl_init("$url");

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 証明書の検証を行わない
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	    'Authorization: Bearer ' . $access_token,
	));

	$response = curl_exec($curl);
	$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$image_binary = substr($response, $header_size);
	$resultStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$res = json_decode($response, true);
	curl_close($curl);
	if($resultStatus == 200) {
		if ($res["expires_in"] > 0) {
			return true;
		} else {
			logout($access_token);
			return false;
		}
	}
	return false;
}


?>