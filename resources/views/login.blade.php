<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif;
    background-color: #00ac96;
}
.content{
    margin: 8%;
    background-color: #fff;
    padding: 4rem 1rem 4rem 1rem;
    box-shadow: 0 0 5px 5px rgba(0,0,0, .05);
}
.signin-text{
    font-style: normal;
    font-weight: 600 !important;

}
.form-control{
    display: block;
    width:100%;
    font-size: 1rem;
    font-weight: 400;
    line-height:1.5;
    border-color: #00ac96 !important;
    border-style: solid !important;
    border-width: 0 0 1px 0 !important;
    padding: 0px !important;
    color:#495057;
    height: auto;
    border-radius: 0;
    background-color: #fff;
    background-clip: padding-box;
}


.form-control:focus{

    color: #495057;
    background-color: #fff;
    border-color: #fff;
    outline: 0;
    box-shadow: none;
}
.birthday-section{
    padding: 15px;
}
.btn-class{
    border-color: #00ac96;
    color: #00ac96;
}
.btn-class:hover{
    background-color:  #00ac96;
    color: #fff;
}

</style>
<body>



    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="{{asset('Template/imagelogo.svg')}}" class="img-fluid" alt="image">
            </div>
            <br>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Silahkan Login </h3>
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    {{-- <div class="input-group mb-3">
                        <label for="id" name="id">No pegawai</label>
                        <br>
                        <br>

                        <input autofocus type="teks" name="id" class="form-control">
                        </div> --}}
                    <div class="form-group">
                    <label for="email" name="email">Email</label>
                    <br>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                     </div>
                    <div class="form-group">
                        <label for="password" name="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">  </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="checkbox" class="form-check-input">
                        <label class="form-check-label" for="checkbox">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>

                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footerlogin" style="color: #e1ecea">
        <footer class="text-center text-lg-start bg-gradient-green text-muted">
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <br>
            <br>
            <br>
            <br>
            <!-- Copyright -->
            <div class="text-center p-4 " style="background-color: rgba(13, 13, 85, 0.984)7);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">By Nazhir </a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

</body>
</html>
