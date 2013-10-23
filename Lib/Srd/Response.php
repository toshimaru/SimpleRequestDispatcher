<?php
namespace Srd;
/**
 * Response
 *
 * @package SimpleRequestDispatcher
 * @author toshimaru
 */
class Response
{
	/**
	 * Status code to send to the client
	 *
	 * @var integer
	 */
	protected $_status = 200;

	/**
	 * HTTP response statuses
	 *
	 * @var array
	 */
	protected $_statusCodes = array(
		100 => 'Continue',
		101 => 'Switching Protocols',
		200 => 'OK',
		201 => 'Created',
		202 => 'Accepted',
		203 => 'Non-Authoritative Information',
		204 => 'No Content',
		205 => 'Reset Content',
		206 => 'Partial Content',
		300 => 'Multiple Choices',
		301 => 'Moved Permanently',
		302 => 'Found',
		303 => 'See Other',
		304 => 'Not Modified',
		305 => 'Use Proxy',
		307 => 'Temporary Redirect',
		400 => 'Bad Request',
		401 => 'Unauthorized',
		402 => 'Payment Required',
		403 => 'Forbidden',
		404 => 'Not Found',
		405 => 'Method Not Allowed',
		406 => 'Not Acceptable',
		407 => 'Proxy Authentication Required',
		408 => 'Request Time-out',
		409 => 'Conflict',
		410 => 'Gone',
		411 => 'Length Required',
		412 => 'Precondition Failed',
		413 => 'Request Entity Too Large',
		414 => 'Request-URI Too Large',
		415 => 'Unsupported Media Type',
		416 => 'Requested range not satisfiable',
		417 => 'Expectation Failed',
		500 => 'Internal Server Error',
		501 => 'Not Implemented',
		502 => 'Bad Gateway',
		503 => 'Service Unavailable',
		504 => 'Gateway Time-out'
	);

	/**
	 * mime types
	 *
	 * @var array
	 */
	protected $_mimeTypes = array(
		'html'       => array('text/html', '*/*'),
		'json'       => 'application/json',
		'xml'        => array('application/xml', 'text/xml'),
		'rss'        => 'application/rss+xml',
		'js'         => 'text/javascript',
		'text'       => 'text/plain',
		'javascript' => 'text/javascript',
		'atom'       => 'application/atom+xml',
	);

	function __construct(array $options = array()) {
	}

	/**
	 * Sets the HTTP status code
	 *
	 * @param integer $code
	 * @return integer current status code
	 */
	public function statusCode($code = null) {
		if (is_null($code)) {
			return $this->_status;
		}
		return $this->_status = $code;
	}

}
