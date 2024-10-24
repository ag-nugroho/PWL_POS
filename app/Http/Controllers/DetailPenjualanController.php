<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\DetailModel;
use App\Models\PenjualanModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DetailPenjualanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Detail Penjualan',
            'list' => ['Home', 'Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar detail penjualan'
        ];


        $activeMenu = 'detailpenjualan';

        $penjualan = PenjualanModel::all();
        $barang = BarangModel::all();

        return view('detailpenjualan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'penjualan' => $penjualan, 'barang' => $barang]);
    }

    public function list(Request $request){
        $detailpenjualans = DetailModel::select('detail_id', 'penjualan_id', 'barang_id', 'harga', 'jumlah')->with('penjualan', 'barang');

        //Filter data user berdasarkan level_id
        if($request->penjualan_id){
            $detailpenjualans->where('penjualan_id', $request->penjualan_id);
        } else if ($request->barang_id) {
            $detailpenjualans->where('barang_id', $request->barang_id);
        }

        return DataTables::of($detailpenjualans)
            // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addIndexColumn()
            ->addColumn('aksi', function ($detailpenjualan){ //menambahkan kolom aksi
                $btn = '<button onclick="modalAction(\''.url('/detailpenjualan/'. $detailpenjualan->detail_id . '/show_ajax').'\')" class="btn btn-info btn-sm">Detail</button> ';
                $btn .= '<button onclick="modalAction(\''.url('/detailpenjualan/' . $detailpenjualan->detail_id . '/delete_ajax').'\')" class="btn btn-danger btn-sm">Hapus</button>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    public function show_ajax(string $id) 
    {
        $detailpenjualan = DetailModel::find($id);

        return view('detailpenjualan.show_ajax', ['detailpenjualan' => $detailpenjualan]);
    }

    public function confirm_ajax(string $id)
    {
        $detailpenjualan = DetailModel::find($id);

        return view('detailpenjualan.confirm_ajax', ['detailpenjualan' => $detailpenjualan]);
    }

    public function delete_ajax(Request $request, $id) 
    {
        if ($request->ajax() || $request->wantsJson()) {
            $detailpenjualan = DetailModel::find($id);
            if ($detailpenjualan) {
                $detailpenjualan->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil dihapus'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]); 
            }
        }    
        return redirect('/detailpenjualan');
    }
}
