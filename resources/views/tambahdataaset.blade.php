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

<body>
    <h1 class="text-center mb-4">Tambah Data Ruangan</h1>
    <div class="input-group mb-2">
        <div class="container">
            <div class="row">
                <div class="card"style="max-height: 2852px">
                    <div class="card-body" >
                        <form action="/insertdataasetnya" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputNoruangan" class="form-label">Noruangan</label>
                                <input type="text" name="Noruangan" class="form-control" id="Noruangan" aria-describedby="inputNoruangan">
                                <div id="inputNoruangan" class="form-text">Jangan dikosongkan untuk Noruangan </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputNama_ruangan" class="form-label">Nama_ruangan</label>
                                <input type="text" name="Nama_ruangan" class="form-control" id="Nama_ruangan" aria-describedby="Nama_ruangan">
                                <div id="Nama_ruangan" class="form-text">Jangan dikosongkan untuk Nama ruangan </div>
                            </div>
                            <a>Keterangan</a>
                            <div class="mb-2">
                                <label for="exampleInputEmail" class="form-label"></label>
                                <select name="Keterangan_ruangan"  class="form-select" aria-label="Default select example">
                                    <option selected>.....</option>
                                    <option value="1">Digunakan</option>
                                    <option value="2">Tidak_Digunakan</option>
                                </select>
                            </div>

                            <br>

                            <div class="mb-3">
                                <label for="Fungsi" class="form-label">Fungsi</label>
                                <input type="text" name="Fungsi" class="form-control" id="Fungsi" aria-describedby="Fungsi">
                                <div id="Nama_ruangan" class="form-text">Jangan dikosongkan untuk Fungsi</div>
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
