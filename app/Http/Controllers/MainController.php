<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

        $userinfoEmail = User::where('email', $request->ten_dang_nhap)->first();
        $userinfoUser = User::where('ten_dang_nhap', $request->ten_dang_nhap)->first();

        if (!$userinfoEmail) {
            if (!$userinfoUser) {
                return back()->with('thatbai', '* Tên đăng nhập hoặc email không tồn tại!');
            } else {
                if (Hash::check($request->password, $userinfoUser->password)) {
                    $request->session()->put('Dangnhap', $userinfoUser->id);
                    $data = User::where('id', session('Dangnhap'))->first();
                    $users = User::all();
                    if ($userinfoUser->id_phan_quyen == '1') {
                        session()->put('check', '1');
                        return 'Xin chào admin';
                    } else {
                        session()->put('check', '2');
                        return 'Xin chào nhân viên';
                    }
                } else {
                    session()->put('check', '0');
                    return back()->with('thatbai', '* Mật khẩu không đúng, vui lòng nhập lại!');
                }
            }
        } else {
            if (Hash::check($request->password, $userinfoEmail->password)) {
                $request->session()->put('Dangnhap', $userinfoUser->id);
                $data = User::where('id', session('Dangnhap'))->first();
                $users = User::all();

                if ($userinfoEmail->id_phan_quyen == '1') {
                    session()->put('check', '1');
                    return 'Xin chào admin';
                } else {
                    session()->put('check', '2');
                    return 'Xin chào nhân viên';
                }
            } else {
                session()->put('check', '0');
                return back()->with('thatbai', '* Mật khẩu không đúng, vui lòng nhập lại!');
            }
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeReg(Request $request)
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
}
