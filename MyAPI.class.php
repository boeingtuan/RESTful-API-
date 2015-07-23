<?php
require_once 'API.class.php';
class MyAPI extends API
{
    protected $User;

    public function __construct($request, $origin) {
        parent::__construct($request);

        // Abstracted out for example
		
    }

    /**
     * Example of an Endpoint
     */
     protected function example($x, $y = NULL) {
		$var = Array("ten" => $x[0], "ho" => $x[1]);
		return $y;
     }
 }
 ?>