<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

function __construct()
{
        // Call the Model constructor
	parent::__construct();
}

//read the login from db
function index()
{
        $sql 	= 'SELECT * FROM login';
        $query 	= $this->db->query($sql);
        $result = $query->result();
	return $result;
}

}

?>
