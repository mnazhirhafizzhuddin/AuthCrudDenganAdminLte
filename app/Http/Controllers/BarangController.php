<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    public function tambahbarang(Request $request){
        barang::create([

            'Namabarang'=> $request->Namabarang,
            'idruangan'=>$request->idruangan,

        ]);
        // barang::create($request->all());
       return   redirect()->back()->with('Succes','Data Berhasil Di tambahkan !');;
       //->with('Succes','Data Berhasil Di tambahkan !');
//       redirect()->route('dataruangan')->back()->with('Succes','Data Berhasil Di tambahkan !');

    }

}
