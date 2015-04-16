<?php

use Illuminate\Database\Seeder;
use NeedFinder\SupportCenter;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SupportCentersTableSeeder extends Seeder {

    public function run()
    {
    	$now = date('Y-m-d H:i:s');
    	$table_name = (new SupportCenter)->getTable();
		
    	// Delete existent records in the database table
    	DB::table($table_name)->delete();
		
		// Create records
        SupportCenter::create(['id' => 1, 'account_id' => 1, 'name' => 'Center 1', 'active' => true, 'address' => 'Address of center #1', 'created_at' => $now]);
		SupportCenter::create(['id' => 2, 'account_id' => 1, 'name' => 'Center 2', 'active' => true, 'address' => 'Address of center #2', 'created_at' => $now]);
		SupportCenter::create(['id' => 3, 'account_id' => 1, 'name' => 'Center 3', 'active' => true, 'address' => 'Address of center #3', 'created_at' => $now]);
    }

}