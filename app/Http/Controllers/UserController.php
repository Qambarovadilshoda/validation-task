<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreUserRequest1;
use App\Http\Requests\StoreUserRequest2;
use App\Http\Requests\StoreUserRequest3;
use App\Http\Requests\StoreUserRequest4;
use App\Http\Requests\StoreUserRequest5;
use App\Http\Requests\StoreUserRequest6;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create()
    {
        return view('users.create');
    }
    public function store(StoreUserRequest $request)
    {
        return 'You have successfully passed the validation! Below is the information you entered<br><br> Name :' . $request->name . '<br>Age : ' . $request->age . '<br>Email : ' . $request->email;
    }
    public function fileCreate()
    {
        return view('users.files_create');
    }
    public function fileStore(StoreUserRequest1 $request)
    {
        return 'The file you uploaded has been successfully validated!';
    }
    public function productCreate()
    {
        return view('users.products_create');
    }
    public function productStore(StoreUserRequest2 $request)
    {
        return 'Product created successfully <br><br>Product\'s name: ' . $request->name . '<br>Product\'s price: ' . $request->price;
    }
    public function dateCreate()
    {
        return view('users.dates_create');
    }
    public function dateStore(StoreUserRequest3 $request)
    {
        return 'You have entered the correct date!<br><br>Date: ' . $request->date;
    }
    public function passwordCreate()
    {
        return view('users.passwords_create');
    }
    public function passwordStore(StoreUserRequest4 $request)
    {
        return 'Password is correct!';
    }
    public function urlCreate()
    {
        return view('users.urls_create');
    }
    public function urlStore(StoreUserRequest5 $request)
    {
        return 'URL is correct!';
    }
    public function numberCreate()
    {
        return view('users.numbers_create');
    }
    public function numberStore(StoreUserRequest6 $request)
    {
        return 'Successfully!<br><br>Age: ' . $request->age;
    }
}
