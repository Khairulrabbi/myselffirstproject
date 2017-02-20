<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
    	$users = [
    		'0'=>[
    			'first_name'=>'Khairul',
    			'last_name'=>'Alam',
    			'Location'=>'Bangladesh'
    		],
    		'1'=>[ 
    			'first_name'=>'Subrato',
    			'last_name'=>'Alam',
    			'Location'=>'Bangladesh Dhaka'
    		]

    	];

    	return view('admin.users.index', compact('users'));

    	// return $users;

    	// return $users[0]['first_name'].' '.$users[1]['first_name'];
    }

    public function create() {
    	return  view('admin.users.create');
    }
    public function store(Request $request) {
        User::create($request->all());

        return 'Success';
        return $request->all();
    }

}
