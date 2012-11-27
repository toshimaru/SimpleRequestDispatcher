<?php 
namespace Controller;
/**
 * hello world controller
 */
class HelloWorld extends Controller
{
	public function index() {
		echo __class__;
	}

	public function sayhello() {
		echo 'Hello!';
	}

	public function say($str) {
		echo $str;
	}

	public function test($str, $str2) {
		echo $str;
		echo $str2;
	}

	public function test2($str, $str2, $str3) {
		echo $str;
		echo $str2;
		echo $str3;
	}
}
