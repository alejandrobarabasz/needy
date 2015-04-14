<?php namespace NeedFinder;

use Illuminate\Database\Eloquent\Model;

class SupportCenter extends Model {

	// Database table
	protected $table = 'support_centers';

	/**
	 * Relationship with parent account
	 **/
	public function account() {
		return $this->belongsTo('NeedFinder\Account', 'account_id');
	}

}
