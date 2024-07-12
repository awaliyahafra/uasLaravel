{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .register-container h2 {
            color: #333333;
            margin-bottom: 20px;
        }
        .register-container form {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
        }
        .register-container form label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            text-align: left;
        }
        .register-container form input[type="text"],
        .register-container form input[type="email"],
        .register-container form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .register-container form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .register-container form button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .login-link {
            margin-top: 10px;
            text-align: center;
        }
        .login-link a {
            text-decoration: none;
            color: #007bff;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Sudah punya akun?</p>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
   <title>Register &mdash; Stisla</title>
 
   <!-- General CSS Files -->
   <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('stisla/assets/modules/fontawesome/css/all.min.css')}}">
 
   <!-- CSS Libraries -->
   <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap-social/bootstrap-social.css')}}">
 
   <!-- Template CSS -->
   <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
 <!-- Start GA -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
 
   gtag('config', 'UA-94034622-3');
 </script>
 <!-- /END GA --></head>
 
 <body>
   <div id="app">
     <section class="section">
       <div class="container mt-5">
         <div class="row">
           <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
             <div class="login-brand">
                <img src="{{asset('stisla/assets/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
 
             <div class="card card-primary">
               <div class="card-header"><h4>Register</h4></div>
 
               <div class="card-body">
                 @if($errors->any())
                     <div class="error-message">{{$errors->first()}}</div>
                 @endif
                 <form method="POST" action="{{ route('register') }}"  class="needs-validation" novalidate="">
                     @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                          Please fill in your name
                        </div>
                    </div>
                   <div class="form-group">
                     <label for="email">Email</label>
                     <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                     <div class="invalid-feedback">
                       Please fill in your email
                     </div>
                   </div>
 
                   <div class="form-group">
                    <label for="password">Password</label>

                     <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                     <div class="invalid-feedback">
                       please fill in your password
                     </div>
                   </div>

                   <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>

                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
 
                   <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                       Register
                     </button>
                   </div>

                   <div class="mt-5 text-muted text-center">
                    Sudah punya akun? <a href="{{route('login')}}">Login</a>
                  </div>
                 </form>
                 
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
   </div>
 
   <!-- General JS Scripts -->
   <script src="{{asset('stisla/assets/modules/jquery.min.js')}}"></script>
   <script src="{{asset('stisla/assets/modules/popper.js')}}"></script>
   <script src="{{asset('stisla/assets/modules/tooltip.js')}}"></script>
   <script src="{{asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
   <script src="{{asset('stisla/assets/modules/moment.min.js')}}"></script>
   <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>
   
   <!-- JS Libraies -->
 
   <!-- Page Specific JS File -->
   
   <!-- Template JS File -->
   <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
   <script src="{{asset('stisla/assets/js/custom.js')}}"></script>
 </body>
 </html>
