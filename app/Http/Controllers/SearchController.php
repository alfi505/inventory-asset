<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use App\Models\InventoryMonitor;
use App\Http\Controllers\Controller;
use App\Models\DetailCpuXPIC;
use App\Models\DetailMonitorXPIC;
use App\Models\Status;

class SearchController extends Controller
{
    //
    public function index(Request $request){
        // $data =[
            $keyword = $request->cari;

            $results = DetailMonitorXPIC::where('monitor_id', 'like', '%'. $keyword. '%')
            ->orWhereHas('monitor', function ($query) use ($keyword){
                $query->where('id_monitor', 'like', '%'. $keyword. '%');
            })
            ->orWhereHas('pic', function ($query) use ($keyword){
                $query->where('nama_pic', 'like', '%'. $keyword. '%');
            })
            ->orWhereHas('vendor', function ($query) use ($keyword){
                $query->where('id', 'like', '%'. $keyword. '%');
            })
            ->orWhereHas('workstation', function ($query) use ($keyword){
                $query->where('no_ip_address', 'like', '%'. $keyword. '%');
            })
            ->get();

            // $data = InventoryMonitor::where('serial_number','like','%'.$request->cari)
            // ->orwhere('model_monitor','like','%'.$request->cari)
            // ->orwhere('id_monitor','like','%'.$request->cari)->get();

            // $datas = DetailMonitorXPIC::where('id' , 'like', '%'.$request->cari.'%')
            // ->orWhere('monitor_id', 'like', '%'.$request->cari.'%')
            // ->orWhere('pic_id', 'like', '%'.$request->cari.'%')
            // ->orWhere('vendor_id', 'like', '%'.$request->cari.'%')
            // ->orWhere('workstation_id', 'like', '%'.$request->cari.'%')
            // ->get();

            // $datases = Pic::where('nama_pic', 'like', '%' . $request->cari . '&')->get();

            // $coba = $data->union($datas)->get();

            // Pic::all(),

            $slug = 'search';
        // ];
            // dd($data);
            return view('searchHeader', compact('results', 'slug',));
    }

    public function searchFilter(Request $request){
        $slug = 'search';
        $status = Status::get();

        $keyword = $request->cari;
        $results = DetailMonitorXPIC::where('monitor_id', 'like', '%'. $keyword. '%')
            ->orWhereHas('monitor', function ($query) use ($keyword){
                $query->where('id_monitor', 'like', '%'. $keyword. '%');
            })
            ->orWhereHas('pic', function ($query) use ($keyword){
                $query->where('nama_pic', 'like', '%'. $keyword. '%');
            })
            ->orWhereHas('vendor', function ($query) use ($keyword){
                $query->where('id', 'like', '%'. $keyword. '%');
            })
            ->orWhereHas('workstation', function ($query) use ($keyword){
                $query->where('no_ip_address', 'like', '%'. $keyword. '%');
            })
            ->get();
        return view('searchFilter', compact('slug', 'status', 'results'));
    }
}