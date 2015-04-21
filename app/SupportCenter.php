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
		'picture' => ['url'],
		'location' => ['required', 'array'], // json
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
		'location' => ['array'], // json
		'address' => ['string:512'],
		'business_hours' => ['array'], // json
		'phones' => ['array'], // json
		'emails' => ['array'], // json
		'contacts' => ['array'], // json
		'website' => ['url'],
	);
	
	// Error Messages for model validations
	public static $validation_errors = array(
//		'name.required' => '',
//		'name.string' => '',
//		'active.required' => '',
//		'active.boolean' => '',
//		'picture.url' => '',
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
	 * Executes store validation rules for this model on the specified data
	 * 
	 * @return Validator
	 */
	public function validateStore($data, $extra_rules = null, $extra_errors = null) {
		
		$account = Account::current();
		
		// Add extra rules and error messages
		$rules = array_merge_recursive(array(
			'name' => array( 'unique:'.self::$table.',name,id,NULL,account_id,'.$account->id ),
		), (array) $extra_rules);
		
		$errors = array_merge_recursive(array(
			'name:unique' => array( 'messages.support_center_name_already_exists' ),
		), (array) $extra_errors);

		// Execute validation
		return parent::validateStore($data, $rules, $errors);
	}
	
	/**
	 * Executes update validation rules for this model on the specified data
	 * 
	 * @return Validator
	 */
	public function validateUpdate($data, $extra_rules = null, $extra_errors = null) {
		
		$account = Account::current();
		
		// Add extra rules and error messages
		$rules = array_merge_recursive(array(
			'name' => 'unique:'.self::$table.',name,id,'.$id.',account_id,'.$account->id,
		), (array) $extra_rules);
		
		$errors = array_merge_recursive(array(
			'name:unique' => 'messages.support_center_name_already_exists',
		), (array) $extra_errors);

		// Execute validation
		return parent::validateStore($data, $rules, $errors);
	}

}
