<?php 

class Recaptcha
{
	private $secretKey;
	private $code;
	function __construct()
	{
		$this->secretKey="6LftlRkTAAAAANOQ7traoboGeHhwU6vqTbyfXEbn";
		$this->code="";
	}

	public function checkcaptcha()
	{
		if (empty($this->code)) {
			return false;

		}
	$url='https://www.google.com/recaptcha/api/siteverify?secret='.$this->secretKey.'&response='.$this->code.'';
	if (function_exists('curl_version')) {
		$curl=curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_TIMEOUT, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//do not verify security (https://)
		$response=curl_exec($curl);

	}
	else{
		$response=file_get_contents($url);
		}


	if (empty($response)||is_null($response)) {
		return false;
	}
	$json=json_decode($response);
	return $json->success;
	}

	public function set_code($code)
	{
		$this->code=$code;
	}






}






 ?>