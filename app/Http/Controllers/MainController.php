<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Giay;
use App\Models\LoaiGiay;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'ten_dang_nhap' => 'required',
            'password' => 'required | min:5',
        ]);

        $remember = $request->has('remember');
        $user = User::where('email', $request->ten_dang_nhap)->orWhere('ten_dang_nhap', $request->ten_dang_nhap)->first();
        $giays = Giay::all();
        $loaigiay = LoaiGiay::all();
        if (!$user) {
            return back()->with('thatbai', '* Tên đăng nhập hoặc email không tồn tại!');
        }
        if (Hash::check($request->password, $user->password)) {
            session()->put('Dangnhap', $user->id);
            if ($user->id_phan_quyen == '1') {
                session()->put('check', '1');
                return 'Xin chào admin';
            } else {
                session()->put('check', '2');
                return view('home')->with('user', $user)
                    ->with('loaigiay', $loaigiay)
                    ->with('giays', $giays);
            }
        } else {
            return back()->with('thatbai', '* Mật khẩu không đúng, vui lòng nhập lại!');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        User::create([
            'ten_nguoi_dung' => $request->input('ten_nguoi_dung'),
            'email' => $request->input('email'),
            'sdt' => $request->input('sdt'),
            'ten_dang_nhap' => $request->input('ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
            'id_phan_quyen' => '2',
        ]);
        return redirect()->route('login');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function checkAccountExist(Request $request)
    {
        $request->validate([
            'ten_dang_nhap' => 'required'
        ]);

        $user = User::where('email', $request->ten_dang_nhap)->orWhere('ten_dang_nhap', $request->ten_dang_nhap)->first();
        if (!$user) {
            return back()->with('notfound', '* Tên đăng nhập hoặc email không tồn tại!');
        } else {
            return view('auth.verify')->with('email_nguoi_dung', $user->email);
        }
    }

    public function checkcCode(Request $request)
    {
    }
}
