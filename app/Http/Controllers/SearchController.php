<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use App\Models\InventoryMonitor;
use App\Http\Controllers\Controller;
use App\Models\DetailCpuXPIC;
use App\Models\DetailKeyboardXPIC;
use App\Models\DetailMonitorXPIC;
use App\Models\DetailMouseXPIC;
use App\Models\DetailNetworkXPIC;
use App\Models\DetailPrinterXPIC;
use App\Models\DetailSpeakerXPIC;
use App\Models\Status;
use App\Models\Workstation;

class SearchController extends Controller
{
    //
    public function index(Request $request){
        $keyword = $request->cari;
        $results = [];

        // Search in DetailMonitorXPIC
        // $results['keyboard'] = DetailKeyboardXPIC::where('keyboard_id','LIKE','%'.$keyword.'%')->get();
        $results['keyboard'] = DetailKeyboardXPIC::search($keyword)->get();
        $results['monitor'] = DetailMonitorXPIC::search($keyword)->get();
        $results['mouse'] = DetailMouseXPIC::search($keyword)->get();
        $results['cpu'] = DetailCpuXPIC::search($keyword)->get();
        $results['printer'] = DetailPrinterXPIC::search($keyword)->get();
        $results['speaker'] = DetailSpeakerXPIC::search($keyword)->get();
        $results['network'] = DetailNetworkXPIC::search($keyword)->get();

        // dd($results);
        $slug = 'search';
        return view('searchHeader', compact('results', 'slug'));
    }

    public function searchFilter(Request $request){
        // dd($request);
        $slug = 'search';
        $status = Status::get();
        $filter = $request->input('filter');
        $filterData = null;

        switch ($filter) {
            case 'cpu':
                $filterData = DetailCpuXPIC::join('inventory_cpus', 'detail_cpu_x_p_i_c_s.cpu_id', '=', 'inventory_cpus.id_cpu')
                ->join('pics', 'detail_cpu_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_cpu_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_cpu_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_cpus.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_cpus.status_id', '=', $request->status_id)
                ->select('detail_cpu_x_p_i_c_s.*')
                ->get();
                break;
            case 'monitor':
                $filterData = DetailMonitorXPIC::join('inventory_monitors', 'detail_monitor_x_p_i_c_s.monitor_id', '=', 'inventory_monitors.id_monitor')
                ->join('pics', 'detail_monitor_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_monitor_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_monitor_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_monitors.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_monitors.status_id', '=', $request->status_id)
                ->select('detail_monitor_x_p_i_c_s.*')
                ->get();
            break;
            case 'keyboard':
                $filterData = DetailKeyboardXPIC::join('inventory_keyboards', 'detail_keyboard_x_p_i_c_s.keyboard_id', '=', 'inventory_keyboards.id_keyboard')
                ->join('pics', 'detail_keyboard_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_keyboard_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_keyboard_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_keyboards.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_keyboards.status_id', '=', $request->status_id)
                ->select('detail_keyboard_x_p_i_c_s.*')
                ->get();
            break;
            case 'mouse':
                $filterData = DetailMouseXPIC::join('inventory_mice', 'detail_mouse_x_p_i_c_s.mouse_id', '=', 'inventory_mice.id_mouse')
                ->join('pics', 'detail_mouse_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_mouse_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_mouse_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_mice.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_mice.status_id', '=', $request->status_id)
                ->select('detail_mouse_x_p_i_c_s.*')
                ->get();
            break;
            case 'speaker':
                $filterData = DetailSpeakerXPIC::join('inventory_speakers', 'detail_speaker_x_p_i_c_s.speaker_id', '=', 'inventory_speakers.id_speaker')
                ->join('pics', 'detail_speaker_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_speaker_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_speaker_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_speakers.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_speakers.status_id', '=', $request->status_id)
                ->select('detail_speaker_x_p_i_c_s.*')
                ->get();
            break;
            case 'network':
                $filterData = DetailNetworkXPIC::join('inventory_networks', 'detail_network_x_p_i_c_s.network_id', '=', 'inventory_networks.id_network')
                ->join('pics', 'detail_network_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_network_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_network_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_networks.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_networks.status_id', '=', $request->status_id)
                ->select('detail_network_x_p_i_c_s.*')
                ->get();
            break;
            case 'printer':
                $filterData = DetailPrinterXPIC::join('inventory_printers', 'detail_printer_x_p_i_c_s.printer_id', '=', 'inventory_printers.id_printer')
                ->join('pics', 'detail_printer_x_p_i_c_s.pic_id', '=', 'pics.id')
                ->join ('vendors', 'detail_printer_x_p_i_c_s.vendor_id', '=', 'vendors.id')
                ->leftJoin('workstations', 'detail_printer_x_p_i_c_s.workstation_id', '=', 'workstations.id')
                ->orwhere('inventory_printers.tanggal_input', '=', $request->tanggal_input)
                ->orwhere('inventory_printers.status_id', '=', $request->status_id)
                ->select('detail_printer_x_p_i_c_s.*')
                ->get();
            break;
            default:
                $filterData = [];
            break;
        }

            $inventoryTypeMap = [
                'cpu' => [
                    'id' => 'cpu.id_cpu',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'cpu.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'cpu.tanggal_input'],
                'monitor' => [
                    'id' => 'monitor.id_monitor',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'monitor.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'monitor.tanggal_input'],
                'keyboard' => [
                    'id' => 'keyboard.id_keyboard',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'keyboard.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'keyboard.tanggal_input'],
                'mouse' => [
                    'id' => 'mouse.id_mouse',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'mouse.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'mouse.tanggal_input'],
                'printer' => [
                    'id' => 'printer.id_printer',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'printer.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'printer.tanggal_input'],
                'network' => [
                    'id' => 'network.id_network',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'network.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'network.tanggal_input'],
                'speaker' => [
                    'id' => 'speaker.id_speaker',
                    'nama_pic' => 'pic.nama_pic',
                    'status' => 'speaker.status.status',
                    'hostname' => 'workstation.hostname',
                    'no_ip_address' => 'workstation.no_ip_address',
                    'tanggal_input' => 'speaker.tanggal_input'],
            ];
            return view('searchFilter', compact('slug', 'status', 'filterData', 'filter', 'inventoryTypeMap'));
    }
}