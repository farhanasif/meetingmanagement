<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Login Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/css/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img style="border-radius: 50%;" src="{{asset('admin/images/hrmlogo.png')}}"><b></b></img>
  </div>
  <!-- /.login-logo -->
  <div class="card">
 
    <div class="card-body login-card-body">
    @include('admin.partials._message')
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('admin.login')}}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" id="Geeks" value="{{old('email')}}" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <button id="adminId" href="#" class="btn btn-block btn-success">
          <i class="fas fa-user-shield"></i> Login As Admin
        </button>
        <button id="userId" href="#" class="btn btn-block btn-success">
          <i class="fas fa-user-tie"></i> Login As User
        </button>
        <button id="promotorId" href="#" class="btn btn-block btn-success">
          <i class="fas fa-ad"></i> Login As Moderator
        </button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script> 
           $('#adminId').on("click", function(){
             $("#Geeks").val("admin@gmail.com");
             $(".pass").val("123456");
           });

           $('#userId').on("click", function(){
             $("#Geeks").val("user@gmail.com");
             $(".pass").val("123456");
           });

           $('#promotorId').on("click", function(){
             $("#Geeks").val("moderator@gmail.com");
             $(".pass").val("123456");
           });
        </script>
      </div>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('admin/js/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/js/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
