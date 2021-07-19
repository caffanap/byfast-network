<?php

namespace App\Http\Controllers\Admin;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUs = AboutUs::find(1);
        // dd(compact('aboutUs'));
        return view('admin.aboutUs.index', compact('aboutUs'));
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

        $aboutUs = AboutUs::updateOrCreate(['id'=>$id],
        [
            'desc1'  =>  $request->desc1,
            'desc2'  =>  $request->desc2,
            'desc3'  =>  $request->desc3,
            'desc4'  =>  $request->desc4,
            'desc5'  =>  $request->desc5,
        ]);

        return response()->json($aboutUs);
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
    public function edit(AboutUs $aboutUs)
    {
        return view('admin.aboutUs.index', compact('aboutUs'));
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
        // dd($request->desc1);
        
        $aboutUs = AboutUs::find($id);

        $aboutUs->update([
            'desc1'  =>  $request->desc1,
            'desc2'  =>  $request->desc2,
            'desc3'  =>  $request->desc3,
            'desc4'  =>  $request->desc4,
            'desc5'  =>  $request->desc5,
        ]);

        return redirect()->route('admin.about.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
