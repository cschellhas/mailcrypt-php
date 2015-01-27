<?php

class mailcrypt{
	public function crypt($email)
	{
		for($i=0;$i<strlen($email);$i++){
			$n= ord($email[$i]);
			$return= $return.chr($n+5);
		}
		return $return;
	}
	public function uncrypt($email)
	{
		for($i=0;$i<strlen($email);$i++){
			$n= ord($email[$i]);
			$return= $return.chr($n-5);
		}
		return $return;
	}
}
?>