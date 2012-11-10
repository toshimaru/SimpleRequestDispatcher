<?php
namespace Controller;
/**
 * default controller
 */
class Index extends \Srd\Controller
{
	public function index() {
		echo '<pre>';
		echo __method__ . "\n";
		var_dump ($this->request);
		var_dump ($this->response);
		echo '</pre>';
	}
}
