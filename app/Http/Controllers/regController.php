<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regModel;
use Illuminate\Support\Facades\Storage;
use Validator, Redirect, Response;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class regController extends Controller
{
    public function index(Request $request)
    {
        $phraseBuilder = new PhraseBuilder(5, '0123456789');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build();
        //session(['captcha' => rand()]);
        session(['captcha' =>   $builder->getPhrase()]);

        return view("child.reg", ['captcha' => $builder->inline()]);

        // $baotri = "Đang Bảo Trì";
        // return $baotri;

    }
    public function reg(Request $request)
    {


        $regModel = new regModel;

        if ($request->has("dangky")) {
            $taikhoan = $request->taikhoan;
            $matkhau = $request->matkhau;
            $matkhaunhaplai = $request->matkhaunhaplai;
            $matkhau2 = $request->matkhau2;
            $email = $request->email;
            $hoten = $request->hoten;
            $chucvu = 1;
            $captcha = $request->captcha;
            $validatedData = $request->validate([
                'taikhoan' => ['required', 'alpha_dash', 'min:6', 'max:20'],
                'matkhau' => ['required', 'alpha_dash', 'min:6', 'max:20'],
                'matkhaunhaplai' => ['required', 'alpha_dash', 'min:6', 'max:20'],
                'matkhau2' => ['required', 'alpha_dash', 'min:6', 'max:20'],
                'email' => ['required', 'min:6'],
                'hoten' => ['required', 'min:3', 'max:255'],
                'captcha' => ['required'],

            ]);
            session(['reg_taikhoan' => $taikhoan, 'reg_email' => $email, 'reg_hoten' => $hoten]);
            if ($matkhau != $matkhaunhaplai) {
                return back()->with('error', 'Mật Khẩu Không Trùng Nhau!');
            } else if (($regModel::where('taikhoan', $taikhoan)->first())) {
                return back()->with('error', 'Tài Khoản Đã Tồn Tại');
            } else if (($regModel::where('email', $email)->first())) {
                return back()->with('error', 'Email Đã Tồn Tại');
            } else if ($captcha != session("captcha")) {

                return back()->with('error', 'Vui lòng nhập đúng mã captcha!');
            } else {

                $regModel->taikhoan = $taikhoan;
                $regModel->matkhau = $matkhau;
                $regModel->matkhau2 = $matkhau2;
                $regModel->email = $email;
                $regModel->hoten = $hoten;
                $regModel->chucvu = $chucvu;
                $regModel->save();
                Storage::append('currentnew/taikhoan.ini', $taikhoan . " " . $matkhau);
                $request->session()->flush();
                return back()->with('success', 'Đăng Ký Thành Công');
            }
        }
        // $baotri = "Đang Bảo Trì";
        // return $baotri;
    }
}
