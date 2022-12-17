<?php

namespace App\Http\Controllers;

use App\Models\Dataaset;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataasetController extends Controller
{
    //
    public function dataruangan(){
        $data=dataaset::paginate(5);

         return view('dashboarddataruangan',compact('data'));
     }

     public function tambahdataaset(){

        return view('tambahdataaset');
    }
     public function insertdata(Request $request){

        //   dd($request->all());
           dataaset::create($request->all());
           return redirect()->route('dataruangan')->with('Succes','Data Berhasil Di tambahkan !');
    }
    public function editdataruanganku($id){
        $data = dataaset::find($id);
      return view('editdataruangan',compact('data'));
    }
    public function updatedataruangan(Request $request,$id){
        $data = Dataaset::find($id);
        $data->update($request->all());
        return redirect()->route('dataruangan')->with('Succes','Data Berhasil Di update !');

    }

    public function deletedataruangan($id){
        $data = dataaset::find($id);
        $data->delete();
        return redirect()->route('dataruangan')->with('Succes','Data Berhasil Di Hapus !');

    }
    public function masukdetailbarang(Request $barangs, $id){
      $data = dataaset::find($id);

      $barangs = DB::table('barangs')
      ->join('dataasets', 'barangs.idbarang', '=', 'dataasets.id')
      ->select( 'dataasets.id','dataasets.Noruangan','dataasets.Nama_ruangan', 'dataasets.keterangan_ruangan','dataasets.fungsi','barangs.idbarang','barangs.Namabarang')
      ->where('barangs.idbarang','=',$id)
      ->get();
        // if ($barangs->) {
        //     # code...
        // }
      if ($data ==  !empty($barangs)) {
        return view('dashboarddetailbarang',['barangs'=>$barangs],compact('data'));

      }
      else{

      }

    }

}
