<?php

use Illuminate\Database\Seeder;
use NeedFinder\Account;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AccountsTableSeeder extends Seeder {

    public function run()
    {
    	$now = date('Y-m-d H:i:s');
    	$table_name = (new Account)->getTable();
    	
    	// Delete existent records in the database table
    	DB::table($table_name)->delete();
		
		// Create records
        Account::create(['id' => 1, 'name' => 'Testing', 'active' => true, 'created_at' => $now, 'activated_at' => $now]);
    }

}