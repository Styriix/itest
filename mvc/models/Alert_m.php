<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alert_m extends MY_Model {

	protected $_table_name = 'alert';
	protected $_primary_key = 'alertID';
	protected $_primary_filter = 'intval';
	protected $_order_by = "alertID asc";

	public function __construct() 
	{
		parent::__construct();
	}

	public function get_alert($array=NULL, $signal=FALSE) 
	{
		$query = parent::get($array, $signal);
		return $query;
	}

	public function get_order_by_alert($array=NULL) 
	{
		$query = parent::get_order_by($array);
		return $query;
	}

	public function get_single_alert($array) 
	{
        $query = parent::get_single($array);
        return $query;
    }

	public function insert_alert($array) 
	{
		$error = parent::insert($array);
		return TRUE;
	}

	public function update_alert($data, $id = NULL) 
	{
		parent::update($data, $id);
		return $id;
	}

	public function delete_alert($id) 
	{
		parent::delete($id);
	}
}