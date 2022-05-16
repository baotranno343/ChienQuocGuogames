<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cashModel;
use App\Models\regModel;

class indexController extends Controller
{
    public function index()
    {
        $regModel = new regModel;
        $cashModel = new cashModel;
        $check_cash = $cashModel::where('id_nguoidung', session("id"))->orderByDesc('id')->get();
        $diemnapthe = $regModel::where('id', session("id"))->first();
        if (isset($diemnapthe) && isset($check_cash))
            return view("child.index", ['check_cash' =>  $check_cash, 'diemnapthe' => $diemnapthe->diemnapthe]);
        else {
            return view("child.index");
        }
    }
}
