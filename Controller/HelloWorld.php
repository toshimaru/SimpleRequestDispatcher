<?php 
namespace Controller;
/**
 * 
 */
class HelloWorld 
{
	public function index()
	{
		echo __class__;
	}

	public function sayhello()
	{
		echo 'Hello!';
	}

	public function say($str)
	{
		echo $str;
	}
}
