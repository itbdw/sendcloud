<?php
namespace itbdw\SendCloud\Util;
class Response {
	private $body;
	
	public function __construct($body = null) {
		$this->body = $body;
	}
	public function body() {
		return $this->body;
	}
}