<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <!-- CSS -->
    <link href="{{ asset('assets/default/css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/bootstrap.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/login/css/login.css') }}" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Tempero Manero </strong>
                    </div>
                    <div class="panel-body">
                     {{ Form::open(array('url' => 'login', 'class'  => 'well')) }}
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                    src="http://2.bp.blogspot.com/-Gsh-X51_b-Q/TdauAYg8MlI/AAAAAAAAAAM/RNTDU4iKHDY/s1600/tempero_manero.png" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span> 
                                            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control" placeholder="Senha" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <input type="submit" class="btn btn-lg btn-danger btn-block" value="Entrar">
                                   </div>
                               </div>
                           </div>
                       </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>