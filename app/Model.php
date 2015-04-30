<?php namespace NeedFinder;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel {

	/**
	 * Validation rules for model store
	 * 
	 * @var array $store_validation_rules
	 */
	public static $store_validation_rules = array();


	/**
	 * Validation rules for model update
	 * 
	 * @var array $update_validation_rules
	 */
	public static $update_validation_rules = array();


	/**
	 * Error Messages for model validations
	 * 
	 * @var array $validation_errors
	 */
	public static $validation_errors = array();


	/**
	 * Executes validation rules on the specified data
	 * This method abstracts the Validator class for models.
	 * 
	 * @param array $data
	 * @param array $rules
	 * @param array|null $errors
	 * 
	 * @return Validator
	 */
	public static function validate($data, $rules, $errors = null) {
		return Validator::make($data, $rules, (array) $errors);
	}
	
	
	/**
	 * Execute store validation rules for this model on the specified data
	 * 
	 * @param array $data
	 * @param array|null $rules
	 * @param array|null $errors
	 * 
	 * @return Validator
	 */
	public function validateStore($data, $extra_rules = null, $extra_errors = null) {
		// Add or overwrite store rules and error messages
		$rules = array_merge_recursive(static::$store_validation_rules, (array) $extra_rules); 
		$errors = array_merge_recursive(static::$validation_errors, (array) $extra_errors);

		// Execute validation
		return static::validate($data, $rules, $errors);
	}


	/**
	 * Execute update validation rules for this model on the specified data
	 * 
	 * @param array $data
	 * @param array|null $rules
	 * @param array|null $errors
	 * 
	 * @return Validator
	 */
	public function validateUpdate($data, $extra_rules = null, $extra_errors = null) {
		// Add or overwrite update rules and error messages
		$rules = array_merge_recursive(static::$update_validation_rules, (array) $extra_rules); 
		$errors = array_merge_recursive(static::$validation_errors, (array) $extra_errors);

		// Execute validation
		return static::validate($data, $rules, $errors);
	}

}