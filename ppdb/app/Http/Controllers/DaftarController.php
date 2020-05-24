<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\daftar;
use App\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data_daftar()
    {
        $tampilkan_data = Auth::user()->daftar()->paginate(10);
        
        return view('siswa.data_daftar',compact('tampilkan_data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Daftar::find($id);
        $data->delete();


        if ($data) {

            toast('Data Dihapus','success');
            return back();
        }
        
    }
}
