<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regModel;

class logController extends Controller
{
    public function index()
    {

        return view("child.log");
    }
    public function log(Request $request)
    {
        $regModel = new regModel;


        if ($request->has("dangnhap")) {
            $taikhoan = $request->taikhoan;
            $matkhau = $request->matkhau;
            $check_login = $regModel::where('taikhoan', $taikhoan)->where('matkhau', $matkhau)->first();
            $validatedData = $request->validate([
                'taikhoan' => ['required', 'alpha_dash', 'min:6', 'max:20'],
                'matkhau' => ['required', 'alpha_dash', 'min:6', 'max:50'],

            ]);
            if ($check_login) {
                session(['id' => $check_login->id, 'email' => $check_login->email, 'hoten' => $check_login->hoten, 'taikhoan' => $check_login->taikhoan, 'matkhau' => $check_login->matkhau, 'chucvu' => $check_login->chucvu]);
                return back()->with('success', 'Đăng Nhập Thành Công');
            } else {
                return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/log");
    }
}
