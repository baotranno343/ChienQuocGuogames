<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cashModel;
use App\Models\regModel;
use Illuminate\Support\Facades\Storage;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class cashController extends Controller
{

    public function index()
    {
        $phraseBuilder = new PhraseBuilder(5, '0123456789');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build();
        //session(['captcha' => rand()]);
        session(['captcha' => $builder->getPhrase()]);
        $taikhoan = session("taikhoan");
        $check_id = [];

        $link = 'currentnew/data/' . $taikhoan[0] . '/' . $taikhoan[1] . '/' . $taikhoan[2] . '/' . $taikhoan;
        $path = Storage::path($link) ? Storage::path($link) : "";

        if (is_dir($path)) {

            $contents = is_file($path . '/list.dat') ? Storage::get($link . '/list.dat') : '';
            if ($contents != '') {

                $start = 0;
                while (($pos = strpos(($contents), "number", $start)) !== false) {
                    for ($j = 1; $j < 6; $j++) {

                        if ($contents[$pos + 8 + $j] == ",") {
                            array_push($check_id, substr($contents, $pos + 8, $j));
                            break;
                        }
                    }
                    $start = $pos + 1;
                }
            }
        }

        return view("child.cash", ['check_id' =>  $check_id, 'captcha' => $builder->inline()]);
    }
    public function traxoat(Request $request)
    {
        $cashModel = new cashModel;
        if ($request->has("traxoat")) {
            $id = $request->id;
            $sotien = $request->sotien;
            $captcha = $request->captcha;
            $validatedData = $request->validate([
                'id' => ['required',  'max:10'],
                'sotien' => ['required', 'max:10'],
                'captcha' => ['required', 'min:3'],
            ]);
            if ($captcha != session("captcha")) {
                return back()->with('error', 'Vui lòng nhập đúng mã captcha!');
            }
            $cashModel->id_nguoidung = session("id");
            $cashModel->id_nhanvat = $id;
            $cashModel->sotien = $sotien;
            //  $cashModel->created_at = date('d-m-Y H:i:s');
            $cashModel->trangthai = 1;
            $cashModel->save();
            return back()->with('success', 'Nạp Thành Công hãy đợi chúng tôi kiểm tra trong ít phút');
        }
    }
    public function thongke()
    {
        if (session("chucvu") != 2) {
            return redirect('/');
        } else {
            $cashModel = new cashModel;
            $list_cash = $cashModel::orderByDesc('id')->get();
            return view("child.thongke", ['list_cash' =>  $list_cash]);
        }
    }
    public function checkcash(Request $request)
    {
		 if (session("chucvu") != 2) {
            return redirect('/');
        }
        $cashModel = new cashModel;
        $regModel = new regModel;
        $id = $request->id;
        $id_nguoidung = $request->id_nguoidung;
        $id_nhanvat = $request->id_nhanvat;
        $sotien = $request->sotien;
        $trangthai = $request->trangthai;
        if ($trangthai == 2) {
            Storage::append('currentnew/napthe/' . $id_nhanvat . '.dat', $sotien);
		$findid = $regModel::find($id_nguoidung);
        if ($findid) {
            $findid->diemnapthe += $sotien / 1000;
            $findid->save();
        }
        }
        $cashModel::where('id', $id)->update(['trangthai' => $trangthai]);
        return back()->with('success', 'Tra Xoát Thành Công');
    }
	    public function ghifile(Request $request)
    {
        if (session("chucvu") != 2) {
            return redirect('/');
        }
        if ($request->has("ghifile")) {
            $lenh = $request->lenh;
            $kenh = $request->kenh;
            $validatedData = $request->validate([
                'lenh' => ['required'],
            ]);
            Storage::append('currentnew/bang/check' . $kenh . '.txt', "\n" . $lenh);
            return back()->with('success', 'Gửi lệnh thành công xuống server!');
        }
    }
}
