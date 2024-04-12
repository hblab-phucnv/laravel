<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Get thì return View , Post thì không cần
    public function __construct()
    {
    }

    public function index()
    {
        return view('clients/categories/list');
    }

    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    public function addCategory()
    {
        return view('clients/categories/add');
    }

    public function handleAddCategory()
    {
        redirect(route('categories.add'));
        return 'Done';
    }
}
