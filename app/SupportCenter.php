<?php namespace NeedFinder;

use NeedFinder\BaseModel;

class SupportCenter extends BaseModel {

	// Database table
	protected $table = 'support_centers';

	// Guarded attributes to prevent overwrite it on model create
	protected $guarded = array('id', 'account_id');
	
	// Validation rules for model store
	public static $store_validation_rules = array(
		'name' => ['required', 'string:255'],
		'active' => ['required', 'boolean'],
		'picture' => ['string:1024'],
		'location' => ['required', 'array'], // json
		'address' => ['required', 'string:512'],
		'business_hours' => ['array'], // json
		'phones' => ['array'], // json
		'emails' => ['array'], // json
		'contacts' => ['array'], // json
		'website' => ['string:1024'],
	);

	// Error Messages for model store validation
	public static $store_validation_errors = array(
		'name.required' => 'messages.support_center_name_required',
		'name.string' => '',
	);

	// Validation rules for model update
	public static $update_validation_rules = array(
		'name' => ['string:255'],
		'active' => ['boolean'],
		'picture' => ['string:1024'],
		'location' => ['array'], // json
		'address' => ['string:512'],
		'business_hours' => ['array'], // json
		'phones' => ['array'], // json
		'emails' => ['array'], // json
		'contacts' => ['array'], // json
		'website' => ['string:1024'],
	);
	
	// Error Messages for model update validation
	public static $update_validation_errors = array();


	/**
	 * Relationship with parent account
	 **/
	public function account() {
		return $this->belongsTo('NeedFinder\Account', 'account_id');
	}

}
