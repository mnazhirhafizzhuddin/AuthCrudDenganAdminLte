<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Edit Data Pegawai</title>
</head>

<body>
    <h1 class="text-center mb-4">EditData Pegawai</h1>
    <div class="input-group mb-2">
        <div class="container">
            <div class="row">
                <div class="card"style="max-height: 2852px">
                    <div class="card-body" >
                        <form action="/updatedatapegawai/{{$data->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputnama_Karyawan" class="form-label">Nama_Karyawan</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="inputkaryawan"
                                value="{{$data->name}}">
                                <div id="inputkaryawan" class="form-text">Jangan dikosongkan untuk nama karyawan </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputalamat" class="form-label">Alamat</label>
                                <input type="text" name="Alamat" class="form-control" id="Alamat" aria-describedby="alamat"
                                value="{{$data->Alamat}}">
                                <div id="alamat" class="form-text">Jangan dikosongkan untuk alamat karyawan </div>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail" class="form-label"></label>
                                <select name="jenis_kelamin"  class="form-select" aria-label="Default select example">
                                    <option selected>{{$data->jenis_kelamin}}</option>
                                    <option value="1">laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>

                            <br>
                            <a>Jabatan</a>

                            <div class="input-group">
                                <br>
                                <input name="jabatan" type="TextBox" ID="datebox" Class="form-control" disabled value="{{$data->jabatan}}">
                                <div class="input-group-btn">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul id="demolist" class="dropdown-menu">
                                        <li><a href="#">Karyawanalihdaya</a></li>
                                        <li><a href="#">Manager</a></li>

                                    </ul>
                                </div>
                            </div>
                            <script>
                                $('#demolist li').on('click', function() {
                                    $('#datebox').val($(this).text());
                                });
                            </script>
                            <br>
                            <div class="mb-3">
                                <label for="inputnik" class="form-label">nik</label>
                                <input type="text" name="nik" class="form-control" id="Alamat" aria-describedby="alamat" value="{{$data->nik}}">
                                <div id="alamat" class="form-text">Jangan dikosongkan untuk nik karyawan </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputno_telpon" class="form-label">No_Telpon</label>
                                <input type="text" name="no_telpon" class="form-control" id="no_telpon" aria-describedby="alamat" value="{{$data->no_telpon}}">
                                <div id="alamat" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$data->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="text" class="form-control" id="exampleInputPassword1" value="{{$data->password}}">
                            </div>
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
