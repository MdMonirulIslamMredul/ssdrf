<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerAndTitle;
use App\Models\Result;
use App\Models\ResultType;
use App\Models\User;
use App\Models\UploadResult;
use Carbon\Carbon;

class ResultController extends Controller
{
    public function tech_web_create_result(){

        // $blogs=Blog::where('status',1)->get();
        $banner= BannerAndTitle::where('page','blogs')->latest()->first();
        return view('frontend.result.create_result',compact('banner'));
    }

    public function tech_web_add_result(){

        $results = Result::latest()->first();
        return view('admin.result.add_result',compact('results'));
    }

    public function tech_web_store_result(Request $request){

        if($request->id){
            $result_id = $request->id;
            Result::findOrFail($result_id)->update([
                'title' => $request->title,
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('message','Result updated successfully');

            }else{
                Result::insert([
                    'title' => $request->title,
                    'created_at' => Carbon::now(),
                ]);
            }       
            return back()->with('message','Result added successfully');
    }

    public function tech_web_add_result_type(){
        $results = Result::get();
        $result_types = ResultType::with('user')->get();
        $users = User::where('is_admin',0)->get();
        // dd($users);
        return view('admin.result.add_result_type',compact('results','result_types','users'));
    }

    public function tech_web_store_result_type(Request $request){

        ResultType::insert([
            'title' => $request->title,
            'result_id' => $request->result_id,
            'name' => $request->name,
            'roll_no' => $request->roll_no,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('message','Result type added successfully');
    }

    public function tech_web_upload_result($id){
        $result_types = ResultType::find($id);
        $users = User::where('is_admin',0)->get();
        $uploaded_results = UploadResult::with('user','resultType')->where('result_type',$id)->get();
        return view('admin.result.upload_result',compact('result_types','users','uploaded_results'));
    }

    public function tech_web_store_uploaded_result(Request $request){
    
        UploadResult::insert([
            'name' => $request->name,
            'result_type' => $request->result_type_id,
            'roll_no' => $request->roll_no,
            'result_grate' => $request->result_grade,
            'created_at' => Carbon::now(),

        ]);

        return back()->with('message','Result Uploaded successfully');
    }

    // show result frontend part
    public function tech_web_show_result($id){
        $banner= BannerAndTitle::where('page','blogs')->latest()->first();
        $result_types = ResultType::find($id);
        $uploaded_results = UploadResult::with('user','resultType')->where('result_type',$id)->get();

        return view('frontend.result.show_result',compact('result_types','uploaded_results','banner'));


    }
    
}
