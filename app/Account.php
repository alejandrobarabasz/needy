<?php namespace NeedFinder;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	// Database table
	protected $table = 'accounts';

	/**
	 * Relationship with support centers
	 **/
	public function supportCenters() {
		return $this->hasMany('NeedFinder\SupportCenter', 'account_id', 'id');
	}

	public static function current() {
		return static::find(1);
	}
}
