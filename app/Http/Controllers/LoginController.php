<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    // public function actionlogin(Request $request)
    // {

    //     $data = [
    //         'email' => $request->input('required|email'),
    //         'password' => $request->input('password'),
    //     ];
    //     $data = User::where('email', $request->email)->first();


    //     if (Auth::Attempt($data)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('home');
    //     }
    //     else{
    //         Session::flash('error', 'Email atau Password Salah atau harus input dengan benar ');
    //         return redirect('/');
    //     }
    // }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
      //  dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }
        else{
            Session::flash('error', 'Email atau Password Salah, input dengan benar! ');
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function dashboard(){
        return view ('home');
    }
    public function halamandatapegawai(){
        $data=User::all();
        return view ('dashboarddatakaryawan',compact('data'));
    }
    public function tambahpegawai(){

        return view('tambahdatakaryawan');
    }
    public function insertdata(Request $request){
        //   dd($request->all());

        $data=User::create([
               'name'=> $request->name,
               'Alamat'=>$request->Alamat,
               'jenis_kelamin'=>$request->jenis_kelamin,
               'jabatan'=>$request->jabatan,
               'nik'=>$request->nik,
               'no_telpon'=>$request->no_telpon,
               'email'=>$request->email,
               'password'=>bcrypt($request->password),
           ]);
          // dd($data);
           return redirect()->route('halamandatapegawai')->with('Succes','Data Berhasil Di tambahkan !');
    }
    public function tampildatakaryawan($id){
        $data = User::find($id);
      return view('updatedatakaryawan',compact('data'));
    }
    public function updatedatapegawai(Request $request,$id){
    $data = User::find($id);
    $data->update($request->all());
    return redirect()->route('halamandatapegawai')->with('Succes','Data Berhasil Di update !');

    }
    public function deletedatapegawai($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->route('halamandatapegawai')->with('Succes','Data Berhasil Di Hapus !');

    }
}
