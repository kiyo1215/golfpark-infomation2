<?php

namespace App\Http\Controllers;

use App\Models\Golfpark;
use Illuminate\Http\Request;
use App\Http\Requests\GolfparkRequest;
use Illuminate\Support\Facades\DB;

class GolfparkController extends Controller
{
    public function top() 
    {
        return view('golfpark.top');
    }
    public function list(Request $request)
    {
        $row = $request->row;
        
        if($row === '1'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['あ', 'か'] )->get();
        };
        if($row === '2'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['か', 'さ'] )->get();
        };
        if($row === '3'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['さ', 'た'] )->get();
        };
        if($row === '4'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['た', 'な'] )->get();
        };
        if($row === '5'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['な', 'は'] )->get();
        };
        if($row === '6'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['は', 'ま'] )->get();
        };
        if($row === '7'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['ま', 'や'] )->get();
        };
        if($row === '8'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['や', 'ら'] )->get();
        };
        if($row === '9'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['ら', 'わ'] )->get();
        };
        if($row === '10'){
            $golfparks = DB::table('golfparks')->whereBetween('name_kana', ['わ', 'わ'] )->get();
        };
        return view('golfpark.list', ['golfparks' => $golfparks]);
    }
    public function form()
    {
        return view('golfpark.form');
    }
    public function add(GolfparkRequest $request)
    {
        $form = $request->all();
        Golfpark::create($form);
        \Session::flash('add_msg', '追加しました');
        return redirect('/dashboard');
    }
    public function showDetail($id)
    {
        $golfparks = Golfpark::find($id);
        return view('golfpark.info', ['golfparks' => $golfparks]);
    }
    public function remove(Request $request)
    {
        DB::table('golfparks')->where('id', $request->id)->first();
    }
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('golfparks')->where('id', $request->id)->delete();
         \Session::flash('delete_msg', '削除しました');
        return redirect('/dashboard');
    }
    public function edit(Request $request)
    {
        $golfpark = DB::table('golfparks')->where('id', $request->id)->first();
        return view('golfpark.edit', ['golfpark' => $golfpark]);
    }
    public function update(GolfparkRequest $request)
    {
        $param = [
             'name' => $request->name,
             'name_kana' => $request->name_kana,
             'roof' => $request->roof,
             'wash' => $request->wash,
             'restroom' => $request->restroom,
             'round' => $request->round,
             'lunch' => $request->lunch,
             'smoke' => $request->smoke,
             'golfbag' => $request->golfbag,
             'baggage' => $request->baggage,
             'info' => $request->info
        ];
        DB::table('golfparks')->where('id', $request->id)->update($param);
         \Session::flash('update_msg', '編集しました');
        return redirect('/dashboard');
 }
}