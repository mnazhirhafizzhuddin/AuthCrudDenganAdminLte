<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Tambah Data Aset</title>
</head>
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
                <label for="inputidruangan" class="form-label">Noruangan </label>
                {{-- <a>{{$data->id}}</a> --}}
               <input type="text" name="idruangan" class="form-control" id="idruangan" aria-describedby="idruangan" disabled value="{{$data->id}}">
                <div id="inputidruangan" class="form-text">Jangan dikosongkan untuk Nomor ruangan  </div>
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

<body>
    <h1 class="text-center mb-4">Tambah Data barang</h1>
    <div class="input-group mb-2">
        <div class="container">
            <div class="row">
                <div class="card"style="max-height: 2852px">
                    <div class="card-body" >
                        <form action="/insertdatabarang" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputNamabarang" class="form-label">Namabarang</label>
                                <input type="text" name="Namabarang" class="form-control" id="Namabarang" aria-describedby="inputNoruangan">
                                <div id="inputNamabarang" class="form-text">Jangan dikosongkan untuk Nama barang  </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputidruangan" class="form-label">Noruangan </label>
                                <input type="text" name="idruangan" class="form-control" id="Nama_ruangan" aria-describedby="Nama_ruangan" value="{{$data->id}}">
                                <div id="idruangan" class="form-text">Jangan dikosongkan untuk Nomor ruangan  </div>
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
            </div>
        </div>
    </div>
    <br>
</body>

</html>
