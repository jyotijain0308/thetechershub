<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveContactUsForm;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('home');
	}

	public function detailpage()
	{
		return view('detail');
	}

	public function contactUs(SaveContactUsForm $request) // SaveContactUsForm
	{
		$requestData = $request->validated();
		$isUserExists = User::select('id')->where('email', $requestData['email'])->orWhere('contact_number', $requestData['contact_number'])->first();
		if (!empty($isUserExists['id'])) {
			$userId = $isUserExists['id'];
		} else {
			$recordUser = User::create([
				'name' => $requestData['name'],
				'email' => $requestData['email'],
				'contact_number' => $requestData['contact_number'],
				'password' => Hash::make('123456')
			]);
			$recordUser->save();
			$userId = $recordUser->id;
		}

		$record = Inquiry::create([
			'users_id' => $userId,
			'name' => $requestData['name'],
			'services' => !empty($requestData['services']) && is_array($requestData['services']) ? implode(',', $requestData['services']) : '',
			'message' => !empty($requestData['message']) ? $requestData['message'] : ''
		]);
		$record->save();

		return response()->json(['status' => true, 'message' => 'Your message has been sent. Thank you! Team will contact your shortly.']);
	}
}
