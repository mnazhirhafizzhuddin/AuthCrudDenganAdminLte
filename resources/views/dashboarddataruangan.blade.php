@extends('layout.dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Ruangan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Ruangan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="container">
        {{--}} <a href="/tambahdataaset" class="btn  btn-success">+Tambah Data</a><br><br />--}}
        <a href="/tambahdataruangan"><button style="color: rgb(8, 165, 39)" class="btn btn-danger"><i type="button"
                    class="fa-sharp fa-solid fa-plus">Tambah Data</i></button></a>
        <br><br />
        <div class="card">
            <div class="card-header">
                <div class="row">
                    @if ($message = Session::get('Succes'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>

                            <tr>

                                <th scope="col">IdRuangan</th>
                                <th scope="col">No_Ruangan </th>
                                <th scope="col">Nama_Ruangan </th>
                                <th scope="col">Keterangan Ruangan </th>
                                <th scope="col">Fungsi</th>
                                <th scope="col">Lihat Barang</th>
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
                                <td>{{$row->Noruangan}}</td>
                                <td>{{$row->Nama_ruangan}} </td>
                                <td>{{$row->Keterangan_ruangan}} </td>
                                <td>{{$row->Fungsi}} </td>
                                <td><a  href="/dashboarddetailbarang/{{$row->id}}" type="button" class="fa-light fa-pen-to-square">Lihat Barang</a></td>
                                <td>
                                    <a href="/editdataruangan/{{$row->id}}" ><i style="color: rgb(8, 12, 214)"
                                        type="button" class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="/deletedataruangan/{{$row->id}}" type="button"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
