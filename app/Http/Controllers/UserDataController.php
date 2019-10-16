<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;
use DB;
use Session;


class UserDataController extends Controller
{
    public function ReadDataTable($search='')
    {
        if (empty($search)) {
            $datas = Journals::get();
        }
        else{

            $datas = Journals::query();

            if (!empty($search['judul'])) {
                $datas->where('title','like','%'.$search['judul'].'%');
            }
            if (!empty($search['tahun'])) {
                $datas->where('tahun',$search['tahun']);
            }
            if (!empty($search['lokasi'])) {
                $datas->where('location','like','%'.$search['lokasi'].'%');
            }
            if (!empty($search['kode'])) {
                $datas->where('kode_nasional','like','%'.$search['kode'].'%');
            }
            if (!empty($search['jenis_kk'])) {
                $datas->where('jenis_kk','like','%'.$search['jenis_kk'].'%');
            }
            if (!empty($search['dosen1'])) {
                $datas->where('dosbing_1','like','%'.$search['dosen1'].'%');
            }
            if (!empty($search['dosen2'])) {
                $datas->where('dosbing_2','like','%'.$search['dosen2'].'%');
            }
            
            $datas = $datas->get();
    
        }
        
        $lokasi = Journals::select('location')->groupBy('location')->get();
        $jenis_kk = Journals::select('jenis_kk')->groupBy('jenis_kk')->get();
        return view('user/u-datatable', compact('datas','lokasi','jenis_kk', 'search'));
    }

    public function DetailDataTable($id)
    {
        $data = Journals::find($id);
        return view('user/u-detaildatatable', compact('data'));
    }

    public function ReadDataGrafik()
    {
        $datas_location = DB::table('journals')
            ->select(DB::raw('count(*) as jumlah_data, location'))
            ->groupBy('location')
            ->get();

        $datas_kk = DB::table('journals')
            ->select(DB::raw('count(*) as jumlah_kk, jenis_kk'))
            ->groupBy('jenis_kk')
            ->get();
        return view('user/u-datagrafik', compact('datas_location','datas_kk'));
    }

    public function ReadDataMaps()
    {
        return view('user/u-datamaps');
    }
    public function SearchData(Request $request)
    {
        $data = $request->all();
        return $this->ReadDataTable($data);
    }
}
