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
		// Get input for the request
		$input = Request::all();
		
		// Validate input
		$validation = SupportCenter::validateStore($input);
		
		if ($validation->fails()) {
			// Redirect to create form with input values and errors
			return redirect()
				->route('support-center.create')
				->withInput()
				->withErrors($validation)
				->withMessage('error_message', Lang::get('messages.form_contains_errors'));
		}
		
		$account = Account::current();
		$new_support_center = $account->supportCenters()->create($input);
		
		return redirect()
			->route('support-center.index')
			->withMessage('success_message', Lang::get('messages.support_center_created_successfully'));
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
		// Get input for the request
		$input = Request::all();
		
		$account = Account::current();
		
		// Validate if support center exists
		$support_center = $account->supportCenters()->find($id);
		
		if (!$support_center) {
			return redirect()
				->route('support-center.index')
				->withMessage('error_message', Lang::get('messages.support_center_not_found'));
		}
		
		// Validate input
		$validation = SupportCenter::validateUpdate($input);
		
		if ($validation->fails()) {
			// Redirect to create form with input values and errors
			return redirect()
				->route('support-center.edit', $id)
				->withInput()
				->withErrors($validation)
				->withMessage('error_message', Lang::get('global.form_contains_errors'));
		}
		
		$support_center->update($input);
		
		return redirect()
			->route('support-center.index')
			->withMessage('success_message', Lang::get('messages.support_center_updated_successfully'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$account = Account::current();
		$support_center = $account->supportCenters()->find($id);
		
		if (!$support_center) {
			return redirect()
				->route('support-center.index')
				->withMessage('error_message', Lang::get('messages.support_center_not_found'));
		}
		
		return redirect()
			->route('support-center.index')
			->withMessage('success_message', Lang::get('messages.support_center_deleted_successfully'));
	}

}
