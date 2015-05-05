<?php namespace NeedFinder;

use NeedFinder\Model;

class Account extends Model {

	// Database table
	protected $table = 'accounts';
	
	// Validation rules for model store
	public static $store_validation_rules = array();

	// Validation rules for model update
	public static $update_validation_rules = array();
	
	// Error Messages for model validation
	public static $validation_errors = array();


	/**
	 * Relationship with support centers
	 */
	public function supportCenters() {
		return $this->hasMany('NeedFinder\SupportCenter', 'account_id', 'id');
	}

	/**
	 * Retrieves the current account
	 * 
	 * @return Account
	 */
	public static function current() {
		return static::find(1);
	}
}
