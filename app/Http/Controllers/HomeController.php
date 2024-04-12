<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Đào tạo lập trình web';
        $this->data['message'] = 'Đăng kí tài khoản thành công';
        $user = DB::select('select * from user');
        dd($user);
        return view('clients.home', $this->data);
    }

    public function getNews()
    {
        return 'List News';
    }

    public function getCategories($id)
    {
        return 'Category: ' . $id;
    }
}
