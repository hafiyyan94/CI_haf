<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class login_model extends CI_Model
{
	function __construct()
	{
		//call model constructor
		parent::__construct();
	}

	function get_user($usr, $pwd)
	{
		$sql = "select * from user where username = " .'"'. $usr .'"'. " and password = " .'"'. $pwd .'"'. " and status_akun = 'aktif'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	function check_login_twice($usr, $pwd)
	{
		$sql = "select * from user where username = " .'"'. $usr .'"'. " and password = " .'"'. $pwd .'"'. " and status_akun = 'aktif' and status_login ='Invalid'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	function set_login_valid($usr, $pwd){
		$sql = "update user set status_login = 'Valid' where username = " .'"'. $usr .'"'. " and password = " .'"'. $pwd .'"'. "";
		$this->db->query($sql);
	}

	function set_login_invalid($usr){
		$sql = "update user set status_login = 'Invalid' where username = " .'"'. $usr .'"'. "";
		$this->db->query($sql);
	}
} ?>