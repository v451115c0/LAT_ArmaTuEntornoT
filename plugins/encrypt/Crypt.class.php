<?php

require_once(dirname(__FILE__) . '/class.rc4crypt.php');

class Crypt
{
	private $pwd;
	
	public function __construct() {
		/* constructor class Fucntions */
		$this->pwd = "D75OF93NCRY9TP4SS2011";
	}
	
	public function encriptar($texto)
	{
		$codeBin = rc4crypt::encrypt($this->pwd, $texto);
		$code = strtoupper(bin2hex($codeBin));
		return $code;
	}
	
	public function desEncript($texto)
	{
		$codeBin = $this->hex2bin($texto);
		$code = rc4crypt::decrypt($this->pwd, $codeBin);
		return $code;
	}
	
	private function hex2bin($h)
	{
		if (!is_string($h)) return null;
		$r='';
		for ($a=0; $a<strlen($h); $a+=2) { $r.=chr(hexdec($h{$a}.$h{($a+1)})); }
		return $r;
	}

}
?>