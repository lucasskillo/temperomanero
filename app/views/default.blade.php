<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">

  <title>Tempero Manero</title>

  <!-- CSS -->
  <link href="{{ asset('assets/default/css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>
  <link href="{{ asset('assets/default/css/bootstrap.css') }}" rel="stylesheet" type='text/css'>
  <link href="{{ asset('assets/default/css/home.css') }}" rel="stylesheet" type='text/css'>
  <link href="{{ asset('assets/default/css/users.css') }}" rel="stylesheet" type='text/css'>


  <!-- Script -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link href="{{ asset('assets/default/js/users.js') }}" type='text/javascript'>
  <link href="{{ asset('assets/default/js/jquery.min.js') }}"  type='text/javascript'>
  <link href="{{ asset('assets/default/js/bootstrap.min.js') }}"  type='text/javascript'>
  <link href="{{ asset('assets/default/js/jquery-1.10.2.min.js') }}"  type='text/javascript'>
  <script  type='text/javascript' src="{{ asset('assets/default/js/bootstrap.js') }}"></script>
  <script  type='text/javascript' src="{{ asset('assets/default/js/bootstrap.min.js') }}"></script> 
  <script  type='text/javascript' src="{{ asset('assets/default/js/users.js') }}"></script> 
  <script  type='text/javascript' src="{{ asset('assets/default/js/jquery-1.10.2.js') }}"></script> 
</head>

<body>
	<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
      <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Tempero Manero</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav" id="sidenav01">
              <li class="active">
                <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                  <h4>
                    <img class="profile-img" src="http://2.bp.blogspot.com/-Gsh-X51_b-Q/TdauAYg8MlI/AAAAAAAAAAM/RNTDU4iKHDY/s1600/tempero_manero.png"
                    alt="">
                    <br>
                  </h4>
                </a>
              </li>
              <li><a href="{{ URL::to('/') }}"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li>
              <li>
                <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
                  <i class="fa fa-tachometer"></i>&nbsp;  Cadastros </a>
                  <div class="collapse" id="toggleDemo" style="height: 0px;">
                    <ul class="nav nav-list">
                      <li><a href="{{ URL::to('users') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Usuários</a></li>
                      <li><a href="{{ URL::to('providers') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Fornecedores</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                    <i class="fa fa-cubes"></i>&nbsp;  Estoque </a>
                    <div class="collapse" id="toggleDemo2" style="height: 0px;">
                      <ul class="nav nav-list">
                        <li><a href="{{ URL::to('products') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Produtos</a></li>
                        <li><a href="{{ URL::to('categories') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Categorias</a></li>
                        <li><a href="{{ URL::to('entries') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Entrada</a></li>
                        <li><a href="{{ URL::to('outings') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Saída</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                      <i class="fa fa-university"></i>&nbsp;  Banco </a>
                      <div class="collapse" id="toggleDemo3" style="height: 0px;">
                        <ul class="nav nav-list">
                          <li><a href="{{ URL::to('receipts') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Recebimento</a></li>
                          <li><a href="{{ URL::to('payments') }}"><i class="fa fa-angle-double-right"></i>&nbsp; Pagamento</a></li>
                        </ul>
                      </div>
                    </li>

                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
          <div class="col-sm-9 col-md-10 affix-content">
            <div class="container">
             @section('content')

             @show

           </div>
         </div>
       </div>
     </body>
     </html>