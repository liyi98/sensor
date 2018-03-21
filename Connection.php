<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 3/21/2018
 * Time: 12:21 PM
 */

class Connection
{

    private $con;

    public function __construct() {
        include 'Config.php';
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function connect() {
        return $this->con;
    }
}

?>