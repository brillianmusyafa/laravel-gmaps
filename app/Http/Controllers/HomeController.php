<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use App\Kategory;
use App\Setting;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $document = [
            'header'=>'Dashboard',
            'header_description'=>'application'
        ];
        $input = $request->all();
        if(isset($input['kategori_id'])){
            $data = Map::where('kategory_id',$input['kategori_id'])->get();
        }
        else{
            
            $data = Map::all();
        }
        
        $grafik = $this->chart_kategory();
        // dd($grafik);
        $kategoryCount = $this->getKategoriCount();
        $kat = Kategory::pluck('name','id');
        return view('home',compact('data','kat','grafik','kategoryCount','document'));
    }

    public function welcome(Request $request)
    {
        $input = $request->all();
        if(isset($input['kategori_id'])){
            $data = Map::where('kategory_id',$input['kategori_id'])->get();
            $kategoryCount = $this->getKategoriCount($input['kategori_id']);
        }
        else{
            $data = Map::all();    
            $kategoryCount = $this->getKategoriCount();
        }
        
        $kat = Kategory::pluck('name','id');
        return view('welcome',compact('data','kat','kategoryCount'));
    }


    public function chart_kategory($value='')
    {
        $grafik = [];
        $data = DB::table('kategories')
            ->select('kategories.id','kategories.name',DB::raw("count(maps.id) as jml"))
            ->join('maps','maps.kategory_id','=','kategories.id')
            ->groupBy('kategories.id','kategories.name')
            ->get();

        foreach ($data as $key => $value) {
        $grafik['labels'][] = $value->name;
        $grafik['data'][] = $value->jml;
        $r = rand(0,255);
        $g = rand(0,255);
        $b = rand(0,255);
        $grafik['backgroundColor'][] = "rgba($r,$g,$b,1)";
        }
        if(count($data)==0){
            return [];
        }
        else{
            return [
            'labels'=>json_encode($grafik['labels'],true),
            'data'=>json_encode($grafik['data']),
            'backgroundColor'=>json_encode($grafik['backgroundColor'],true),
            'borderColor'=>json_encode($grafik['backgroundColor'],true)
            ];
        }
    }

    public function getKategoriCount($kat_id='')
    {
        $data = DB::table('kategories')
            ->select('kategories.id','kategories.name',DB::raw("count(maps.id) as jml"))
            ->join('maps','maps.kategory_id','=','kategories.id')
            ->groupBy('kategories.id','kategories.name');

        if($kat_id){
            $data = $data->where('maps.kategory_id',$kat_id);
        }
        

            return $data->get();
    }
}
