<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin_assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin_assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
    html,
    body {
        height: 100%;
    }
.logo-img{
    height: 120px;
    border-radius: 25%;
}
    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img img-fluid" src="{{ asset('admin_assets/images/logo.jpg')}}" alt="logo"></a><span class="splash-description">Login to continue </span></div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.auth')}}">
                    @csrf
                    <div class="form-group">
                        
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password">
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                    @if(session()->has('error'))
                    <br>
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        {{session('error')}}  
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> 
                    @endif 
                </form>
            </div>
        </div>
    </div>
    
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
 
</html>