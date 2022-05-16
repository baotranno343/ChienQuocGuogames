<?php

namespace App\Http\Controllers;

use App\Models\regModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class changeController extends Controller
{
    public function index()
    {

        return view("child.change");
    }
    public function change(Request $request)
    {
        $regModel = new regModel;

        if ($request->has("changepass")) {
            $oldpassword = $request->oldpassword;
            $newpassword = $request->newpassword;
            $newpassword2 = $request->newpassword2;
            $validatedData = $request->validate([
                'oldpassword' => ['required', 'alpha_dash', 'min:6', 'max:50'],
                'newpassword' => ['required', 'alpha_dash', 'min:6', 'max:50'],
                'newpassword2' => ['required', 'alpha_dash', 'min:6', 'max:50'],

            ]);
            if ($newpassword != $newpassword2) {
                return back()->with('error', 'Mật Khẩu Mới Không Trùng Nhau!');
            } else {

                // $path_to_file = 'path/to/the/file';
                $path = storage_path('app/currentnew/taikhoan.ini');
                $account1 = session("taikhoan") . " " . $oldpassword;
                $account2 = session("taikhoan") . " " . $newpassword;
                $file_contents = file_get_contents($path);
                if (strpos($file_contents, $account1) !== false) {
                    $file_contents = str_replace($account1, $account2, $file_contents);
                    $find_id = $regModel::find(session("id"));
                    if ($find_id) {
                        file_put_contents($path, $file_contents);
                        $find_id->matkhau = $newpassword;
                        $find_id->save();
                        return back()->with('success', 'Đổi Mật Khẩu Thành Công');
                    }
                } else {
                    return back()->with('error', 'Sai Mật Khẩu');
                }
            }
            // echo session("taikhoan") . " " . $oldpassword;
            // echo session("taikhoan") . " " . $newpassword;

            // $regModel->taikhoan = $taikhoan;
            // $regModel->matkhau = $matkhau;
            // $regModel->email = $email;

            // $regModel->save();


            // Storage::append('currentcq3/taikhoan.ini', $taikhoan . " " . $matkhau);


        }
        //return view("child.change");
    }
}
