<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\KategoriPaket;
use App\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KategoriPaket $kategoriPaket, Request $request)
    {
        $kategoris = $kategoriPaket->all();
        // $pakets = DB::table('pakets')
        // ->select('pakets.id', 'kategori_pakets.name as kategori_paket_name', 'pakets.name', 'pakets.desc', 'pakets.harga', 
        // DB::raw('DATE_FORMAT(pakets.created_at, "%d %M %Y") as created_at'), 
        // DB::raw('DATE_FORMAT(pakets.updated_at, "%d %M %Y") as updated_at'))
        // ->join('kategori_pakets', 'pakets.kategori_pakets_id', '=', 'kategori_pakets.id')
        // ;
        $pakets = Paket::with('kategori');

        if ($request->ajax()) {
            return datatables()->of($pakets)
            ->addColumn('action', function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                return $button;
            })
            ->addColumn('kategori', function (Paket $paket) {
                return $paket->kategori->name;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.paket.index', ['kategoris' => $kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        $post = Paket::updateOrCreate(['id'=>$id],
        [
            'kategori_pakets_id'  =>  $request->kategori_pakets_id,
            'name'  =>  $request->name,
            'desc'  =>  $request->desc,
            'harga'  =>  $request->harga,
        ]);

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        return response()->json($paket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        $paketDeleted = $paket->delete();

        return response()->json($paketDeleted);
    }
}
