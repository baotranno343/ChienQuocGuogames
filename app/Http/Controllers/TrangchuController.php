<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topicModel;

class TrangchuController extends Controller
{
    public function index()
    {
        $topicModel = new topicModel;
        $list_topic = $topicModel::orderBy('id', 'DESC')->limit(6)->get();
        if ($list_topic) {

            return view("trangchu.index", ['list_topic' =>  $list_topic]);
        } else {
            return view("trangchu.index");
        }
        // return view("trangchu.index");

        // $baotri = "Đang Bảo Trì";
        // return $baotri;

    }
    public function topic()
    {
        $topicModel = new topicModel;
        $list_topic = $topicModel::orderBy('id', 'DESC')->cursorPaginate(12);
        if ($list_topic) {

            return view("trangchu.topic", ['list_topic' =>  $list_topic]);
        } else {
            return view("trangchu.topic");
        }

        return view("trangchu.topic");

        // $baotri = "Đang Bảo Trì";
        // return $baotri;

    }
    public function detail($id)
    {
        $topicModel = new topicModel;
        $find_id = $topicModel::find($id);
        if ($find_id) {

            return view("trangchu.detail", ['id' => $id, 'tieude' =>  $find_id->tieude, 'noidung' => $find_id->noidung, 'thoigian' => $find_id->thoigian]);
        } else {
            return redirect("/");
        }
    }
    public function post_detail()
    {   
	        if (session("chucvu") != 2) {
            return redirect('/');
        }
        return view("trangchu.post_detail");
    }
    public function post_detail_submit(Request $request)
    {       
		if (session("chucvu") != 2) {
            return redirect('/');
        }
        if ($request->has("post")) {
            $validatedData = $request->validate([
                'tieude' => ['required', 'min:6', 'max:255'],
                'noidung' => ['required', 'min:6', 'max:10000'],
            ]);
            $topicModel = new topicModel;
            $tieude = $request->tieude;
            $noidung = $request->noidung;
            $topicModel->tieude = $tieude;
            $topicModel->noidung = $noidung;
            $topicModel->save();
            return back()->with('success', 'Đăng Bài Thành Công');
        }
    }
	    public function delete_post(Request $request)
    {
        if (session("chucvu") != 2) {
            return redirect('/');
        }
        if ($request->has("delete")) {

            $topicModel = new topicModel;
            $id = $request->id;
            $find_id = $topicModel::find($id);
            if ($find_id) {
                $find_id->delete();
                return back()->with('success', 'Xóa Bài Thành Công');
            }
            return redirect('/')->with('success', 'Xóa Bài Thất Bại');
        } else {
            return redirect('/');
        }
    }
}
