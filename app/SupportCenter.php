<?php namespace NeedFinder;

use NeedFinder\Model;

class SupportCenter extends Model {

	// Database table
	protected $table = 'support_centers';

	// Guarded attributes to prevent overwrite it on model create
	protected $guarded = array('id', 'account_id');
	
	// Validation rules for model store
	public static $store_validation_rules = array(
		'name' => ['required', 'string:255'],
		'active' => ['required', 'boolean'],
		'picture' => ['url'],
		'location' => ['required', 'string:255'], // json
		'address' => ['required', 'string:512'],
		'business_hours' => ['array'], // json
		'phones' => ['array'], // json
		'emails' => ['array'], // json
		'contacts' => ['array'], // json
		'website' => ['url'],
	);

	// Validation rules for model update
	public static $update_validation_rules = array(
		'name' => ['string:255'],
		'active' => ['boolean'],
		'picture' => ['url'],
		'location' => ['string:255'], // json
		'address' => ['string:512'],
		'business_hours' => ['array'], // json
		'phones' => ['array'], // json
		'emails' => ['array'], // json
		'contacts' => ['array'], // json
		'website' => ['url'],
	);
	
	// Error Messages for model validations
	public static $validation_errors = array(
		'name.required' => 'messages.support_center_name_required',
		'name.string' => 'messages.support_center_name_invalid',
		'name.unique' => 'messages.support_center_name_already_exists',
		'active.required' => 'messages.support_center_active_required',
		'active.boolean' => 'messages.support_center_active_invalid',
		'picture.url' => 'messages.support_center_picture_invalid_url',
//		'location.required' => '',
//		'location.array' => '',
	);


	/**
	 * Relationship with parent account
	 **/
	public function account() {
		return $this->belongsTo('NeedFinder\Account', 'account_id');
	}


	/**
	 * Executes store validation rules for this model
	 * 
	 * @return boolean
	 */
	public function validateStore($extra_rules = null, $extra_errors = null) {

		// Add extra rules and error messages
		$rules = array_merge_recursive(array(
			'name' => array( 'unique:'.$this->table.',name,NULL,id,account_id,'.$this->account_id ),
		), (array) $extra_rules);

		// Execute validation
		return parent::validateStore($rules, $extra_errors);
	}
	
	/**
	 * Executes update validation rules for this model
	 * 
	 * @return boolean
	 */
	public function validateUpdate($extra_rules = null, $extra_errors = null) {
		
		// Add extra rules and error messages
		$rules = array_merge_recursive(array(
			'name' => 'unique:'.$this->table.',name,'.$this->id.',id,account_id,'.$this->account_id,
		), (array) $extra_rules);

		// Execute validation
		return parent::validateUpdate($rules, $extra_errors);
	}
}