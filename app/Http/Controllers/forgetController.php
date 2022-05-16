<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regModel;

class forgetController extends Controller
{
    public function index()
    {
        return view("child.forget");
    }
    public function forget(Request $request)
    {
        $regModel = new regModel;


        if ($request->has("forget")) {
            $taikhoan = $request->taikhoan;
            $matkhau2 = $request->matkhau2;
            $check_login = $regModel::where('taikhoan', $taikhoan)->where('matkhau2', $matkhau2)->first();
            $validatedData = $request->validate([
                'taikhoan' => ['required', 'alpha_dash', 'min:6', 'max:20'],
                'matkhau2' => ['required', 'alpha_dash', 'min:6', 'max:50'],

            ]);
            if ($check_login) {
                session(['forget_id' => $check_login->id, 'forget_taikhoan' => $check_login->taikhoan, 'forget_matkhau' => $check_login->matkhau]);
                return redirect("/forget_success_view")->with('success', 'Xác nhận mật khẩu cấp 2 thành công!');
            } else {
                return back()->with('error', 'Sai tài khoản hoặc mật khẩu cấp 2');
            }
        }
    }
    public function forget_success_view()
    {
        if (session("forget_id")) {
            return view("child.forget_success");
        } else {
            return redirect("/log");
        }
    }
    public function forget_success(Request $request)
    {

        if ($request->has("forget")) {
            if (session("forget_id")) {
                $matkhau = $request->matkhau;
                $matkhau2 = $request->matkhau2;
                $validatedData = $request->validate([
                    'matkhau' => ['required', 'alpha_dash', 'min:6', 'max:50'],
                    'matkhau2' => ['required', 'alpha_dash', 'min:6', 'max:50'],
                ]);
                if ($matkhau != $matkhau2) {
                    return back()->with('error', 'Mật Khẩu Mới Không Trùng Nhau!');
                }
                $regModel = new regModel;
                $find_id = $regModel::find(session("forget_id"));
                if ($find_id) {

                    $path = storage_path('app/currentnew/taikhoan.ini');
                    $account1 = session("forget_taikhoan") . " " . session("forget_matkhau");
                    $account2 = session("forget_taikhoan") . " " . $matkhau;
                    $file_contents = file_get_contents($path);
                    if (strpos($file_contents, $account1) !== false) {
                        $file_contents = str_replace($account1, $account2, $file_contents);
                        file_put_contents($path, $file_contents);
                        $find_id->matkhau = $matkhau;
                        $find_id->save();
                        $request->session()->flush();
                        return redirect("/log")->with('success', 'Lấy lại mật khẩu Thành Công');
                    } else {
                        return back()->with('error', 'Sai mật khẩu game');
                    }
                } else {
                    return back()->with('error', 'Không tìm thấy người dùng');
                }
            } else {
                return redirect("/forget");
            }
        } else {

            return redirect("/forget");
        }
    }
}
