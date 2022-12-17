@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <a href="/tambahdatakaryawan"><button style="color: rgb(249, 249, 248)" class=" btn-danger"><i type="button"
                    class="fa-sharp fa-solid fa-plus">Tam bah Data</i></button></a>
        <br><br />
        <div class="card">
            <div class="card-header">
                <div class="row">
                    @if ($message = Session::get('Succes'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <div class="rounded mx-auto d-block">
                        <table class="table table-bordered" style="table-layout:fixed">
                            <thead>

                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis_Kelamin</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Nik</th>
                                    <th scope="col">No_Telpon</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $nomor = 1;
                                @endphp
                                @foreach ($data as $row )
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->Alamat}}</td>
                                    <td>{{$row->jenis_kelamin}}</td>
                                    <td>{{$row->jabatan}}</td>
                                    <td>{{$row->nik}}</td>
                                    <td>{{$row->no_telpon}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->password}}</td>
                                    <td>

                                        <a href="/tampildatakaryawan/{{$row->id}}"><i style="color: rgb(8, 12, 214)"
                                                type="button" class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="/deletedatakaryawan/{{$row->id}}"><i style="color: rgb(254, 9, 9)"
                                                type="button" class="fa-solid fa-trash"></i></a>

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                        {{-- {{ $data->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
