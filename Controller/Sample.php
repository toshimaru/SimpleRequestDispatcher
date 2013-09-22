<?php
namespace Controller;
/**
 * Sample controller class
 * Check how it works!
 */
class Sample extends Controller
{
	public function index() {
		echo 'This is Sample Controller.<br>';
		echo '<ul>';
		echo '	<li><a href="/sample/helloworld">URL:/sample/helloworld</a> (Class:Sample, Method:helloworld)</li>';
		echo '	<li><a href="/sample/say/hello">URL:/sample/say/hello</a> (Class:Sample, Method:say, Variable1:hello)</li>';
		echo '	<li><a href="/sample/say2word/good/morning">URL:/sample/say2word/good/morning</a> (Class:Sample, Method:say2word, Variable1:good, Variable2:morning)</li>';
		echo '	<li><a href="/sample/say3word/how/are/you">URL:/sample/say2word/how/are/you</a> (Class:Sample, Method:say2word, Variable1:how, Variable2:are, Variable3:you)</li>';
		echo '</ul>';
	}

	public function helloworld() {
		echo 'Hello World';
	}

	public function say($str) {
		echo $str;
	}

	public function say2word($str, $str2) {
		echo $str . '<br>';
		echo $str2;
	}

	public function say3word($str, $str2, $str3) {
		echo $str . '<br>';
		echo $str2 . '<br>';
		echo $str3;
	}

	private function cantAccess() {
		echo 'You can\'t access here';
	}

	public function showRequestInfo() {
		print_r($this->request);
	}

	public function showGetParam() {
		print_r($this->request->params['get']);
	}
}
