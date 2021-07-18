<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\KategoriPaket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, KategoriPaket $kategoriPaket)
    {
        $kategoriPakets = $kategoriPaket::all();
        // $kategoriPakets = DB::table('kategori_pakets')->select('id', 'name', 'desc', 
        // DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'), 
        // DB::raw('DATE_FORMAT(updated_at, "%d %M %Y") as updated_at'));

        if ($request->ajax()) {
            return datatables()->of($kategoriPakets)
            ->addColumn('action', function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.kategoriPaket.index');
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

        $post = KategoriPaket::updateOrCreate(['id'=>$id],
        [
            'name'  =>  $request->name,
            'desc'  =>  $request->desc,
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
    public function edit(KategoriPaket $kategoriPaket)
    {
        return response()->json($kategoriPaket);
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
    public function destroy(KategoriPaket $kategoriPaket)
    {
        $kategoriPaketDeleted = $kategoriPaket->delete();

        return response()->json($kategoriPaketDeleted);
    }
}
