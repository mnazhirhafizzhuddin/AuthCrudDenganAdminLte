@extends('layout.dashboarddatabarang')
@section('contentbarang')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Detail Barang </h1>

                    <p name="idruangan">ini ruangan  {{ $data->id }}</p>
    <div class="card">
        <div class="card-header">
            <form action="/tambahdatabarang" method="post" enctype="multipart/form-data">
                @csrf

                <th scope="col"><label for="inputNamabarang" class="form-label">Tambah Barang</label>
                </th>


                <div class="mb-3">
                    <label for="inputNamabarang" class="form-label">Namabarang</label>
                    <input type="text" name="Namabarang" class="form-control" id="Namabarang" aria-describedby="inputNoruangan">
                    <div id="inputNamabarang" class="form-text">Jangan dikosongkan untuk Nama barang  </div>
                </div>
                <div class="mb-3">
                    <label for="inputidruangan" class="form-label">Noruangan</label>
                    <input type="text" name="idruangan" class="form-control" id="idruangan" aria-describedby="inputidruangan"disabled value="{{$data->id}}">
                    <div id="inputNamabarang" class="form-text">Jangan dikosongkan untuk Noruangan  </div>
                </div>



                <br>



                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Detail Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        {{-- <a href="/tambahdatabarang/{{$data->id}}"><button style="color: rgb(249, 249, 248)" class="btn btn-danger"><i type="button"
                    class="fa-sharp fa-solid fa-plus">Tambah Data</i></button></a>
        <br><br /> --}}
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

                                <th scope="col">ID</th>
                                <th scope="col">Nama_ruangan</th>
                                <th scope="col">Namabarang</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $nomor = 1;
                            @endphp
                             {{-- @if($barangs->isEmpty()) --}}

                             {{-- @else --}}
                             @foreach ($barangs as $row )
                             <tr>


                                @if(empty($row))

                                @else
                                <th scope="row">{{$nomor++}}</th>
                                <td>{{$row->Nama_ruangan}}</td>
                                <td>{{$row->Namabarang}}</td>
                                <td> <div class="visible-print text-center">
                                    {!! QrCode::size(100)->generate($row->Namabarang) !!}
                                </div></td>
                                <td>
                                @endif
                                     <a href="/editdatapegawai/{{$row->id}}"><i style="color: rgb(8, 12, 214)"
                                             type="button" class="fa-regular fa-pen-to-square"></i></a>
                                     <a href="/deletedatapegawai/{{$row->id}}"><i style="color: rgb(254, 9, 9)"
                                             type="button" class="fa-solid fa-trash"></i></a>

                                 </td>
                             </tr>

                             @endforeach

                              {{-- @endif --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
