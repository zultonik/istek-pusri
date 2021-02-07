<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('admin/lgn/custom.css')}}">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('admin/pusriico.ico')}}">

    </head>

    <body>
        <div class="container ">
            <div class="row">            
                <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                     <div class="login-title image-center" >
                        <img src="{{asset('admin/logo.png')}}" width="430">
                            
                     </div>
                    <div class="login-content">
                        <div class="login-header ">
                            <h3><strong>LOGIN</strong></h3>
                            <h5>Masukkan Email dan Password Untuk Login !!!</h5>
                        </div>
                        <div class="login-body">
                            <form role="form" action="/postlogin" method="POST" class="login-form">
                                {{csrf_field()}}
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input name="email"  id="form-username" type="text"  placeholder="Email..." class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input name="password" id="form-password" type="password"  placeholder="Password..." class="form-password form-control" >
                                        <i class="fa fa-lock"></i>                                        
                                    </div>
                                </div>
                                <!--<div class="form-group text-right">     
                                    <a href="#" class="bold"> Forgot password?</a>
                                </div> -->   

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-primary form-control"><strong>Sign in</strong></button>  
                                </div>   
                                                                              
                            </form>
                        </div> <!-- end  login-body -->                     
                    </div><!-- end  login-content -->  
                    <div class="login-footer text-center template">
                       
                         <p class="copyright">&copy; 2020 <a href="http://pusri.co.id/" target="_blank">ISTEK PUSRI</a>. All Rights Reserved.</p>                   
                    </div>
                </div>  <!-- end  login-container -->      

            </div>
        </div><!-- end container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>
