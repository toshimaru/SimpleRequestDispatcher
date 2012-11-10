<?php 
namespace Srd;
/**
 * Base Controller
 *
 * @package SimpleRequestDispatcher
 * @author toshimaru
 */
class Controller
{
	public $response;

	public $request;

	public function __construct($request, $response) {
		$this->request = $request;
		$this->response = $response;
	}
}