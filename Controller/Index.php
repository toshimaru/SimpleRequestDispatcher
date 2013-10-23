<?php
namespace Controller;
/**
 * default controller
 */
class Index extends Controller
{
	/**
	 * default action
	 */
	public function index() {
		return '<h1 style="color:green;">Your request is successfully dispatched!</h1>';
	}
}
