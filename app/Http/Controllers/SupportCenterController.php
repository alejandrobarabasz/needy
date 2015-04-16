<?php namespace NeedFinder\Http\Controllers;

use NeedFinder\Http\Requests;
use NeedFinder\Http\Controllers\Controller;

use Illuminate\Http\Request;

use NeedFinder\Account;

class SupportCenterController extends Controller {

	// Maximum number of elements by page
	public static $pageLimit = 20;


	/**
	 * Display a listing of SupportCenters.
	 *
	 * @return Response
	 */
	public function index()
	{
		$current_account = Account::current();
		$support_centers = $current_account->supportCenters()->paginate(static::$pageLimit);
		
		return view('support-center.index', compact('support_centers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('support-center.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		echo __CLASS__.' store';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$current_account = Account::current();
		$support_center = $current_account->supportCenters()->find($id);
		
		return view('support-center.show', compact('support_center'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('support-center.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		echo __CLASS__.' update';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		echo __CLASS__.' destroy';
	}

}
