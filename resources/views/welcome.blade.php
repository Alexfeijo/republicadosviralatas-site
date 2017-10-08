<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    <title>República dos Vira-lata</title>
    <link rel="icon" href="{{ asset('assets/imagens/favicon.png') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <header>
        <div class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="drop()">&#9776;</a>
            <a href="#sobre">o projeto</a> 
            <a href="#adota-ajuda">ajuda</a>
            <a href="#contato">adote</a> 
            <a href="#adota-ajuda">contato</a>
            <a href="">
                <img src="{{ asset('assets/imagens/face-icon.png') }}" alt="facebook">
            </a>
        </div>
     
        <div>
            <img class="img-responsive" src="{{ asset('assets/imagens/background.jpg')}}" alt="background">
        </div>
    </header>
    
    <div class="container-fluid" id="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="col-xs-12">
                    <img src="{{ asset('assets/imagens/wireframe-cats-04.png') }}" alt="Gatos adotados" class="img-responsive">
                </div>
                <div class="text-center col-xs-12">
                    <h3 style="color: #B8B8FD">1.800</h3>
                    <div class="texto">
                        Já conseguimos um lar e muito carinho para aproximadamente 1.800 gatinhos resgatados.
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="col-xs-12">
                    <img src="{{ asset('assets/imagens/wireframe-cats-05.png') }}" alt="Gatos adotados" class="img-responsive">
                </div>
                <div class="text-center col-xs-12">
                    <h3 style="color: #B8B8FD">10 anos</h3>
                    <div class="texto">
                        Começamos nosso trabalho em outubro de 2007 e em 2017 completamos 10 anos de atuação na defesa dos gatinhos de Florianópolis.
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="col-xs-12">
                    <img src="{{ asset('assets/imagens/wireframe-cats-06.png') }}" alt="Gatos adotados" class="img-responsive">
                </div>
                <div class="text-center col-xs-12">
                    <h3 style="color: #B8B8FD">ADOTE</h3>
                    <div class="texto">
                        Não compre, Adote!!  Ao adotar você estará fazendo um bem enorme a um gatinho e principalmente receberá em retribuição muito amor, carinho e alegria.
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="col-xs-12">
                    <img src="{{ asset('assets/imagens/wireframe-cats-07.png') }}" alt="Gatos adotados" class="img-responsive">
                </div>
                <div class="text-center col-xs-12">
                    <h3 style="color: #B8B8FD">DOE</h3>
                    <div class="texto">
                        Nosso trabalho necessita de recursos físicos e financeiros para continuar. Contamos com grandes parceiros nessa jornada e se você quiser fazer parte dessa corrente do bem. Entre em contato.
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div id="sobre" class="projeto row">
        <div><img class="img-responsive" src="{{ asset('assets/imagens/wireframe%20cats-02.png')}}"></div>
        <div class="row">
            <div class="col-sm-4 col-xs-10 col-xs-offset-1">
                <h4>
                    A República dos Vira Latas nasceu em outubro de 2007, devido ao enorme número de gatinhos abandonados em Florianópolis. Na época, quase não havia protetores para felinos e o trabalho já era árduo. Começamos, então, a abrigar, alimentar e oferecer cuidados. E, após o aval do veterinário, encaminhamos os gatinhos para adoção e posterior castração. Atualmente, a República conta com gatil externo e interno, uma área para isolamento e já conseguimos lares responsáveis para aproximadamente 1.800 gatinhos. Porém, queremos fazer muito mais. 
                </h4>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="col-sm-6 col-xs-12 box-img-gato">
                    <a>
                      <img src="{{ asset('assets/imagens/gatos/'.array_random($images)) }}" alt="Lights">
                    </a>
                </div>
                <div class="col-sm-6 col-xs-12 box-img-gato">
                    <a>
                      <img src="{{ asset('assets/imagens/gatos/'.array_random($images)) }}" alt="Lights">
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6 col-xs-12 box-img-gato">
                    <a>
                      <img src="{{ asset('assets/imagens/gatos/'.array_random($images)) }}" alt="Lights">
                    </a>
                </div>
                <div class="col-sm-6 col-xs-12 box-img-gato">
                    <a>
                      <img src="{{ asset('assets/imagens/gatos/'.array_random($images)) }}" alt="Lights">
                    </a>
                </div>
                <div class="clearfix"></div>
                {{-- <div class="col-sm-6 col-xs-12 box-img-gato">
                    <a>
                      <img src="{{ asset('assets/imagens/gatos/'.array_random($images)) }}" alt="Lights">
                    </a>
                </div>
                <div class="col-sm-6 col-xs-12 box-img-gato">
                    <a>
                      <img src="{{ asset('assets/imagens/gatos/'.array_random($images)) }}" alt="Lights">
                    </a>
                </div>
                <div class="clearfix"></div> --}}
            </div>
        </div>
        <div style="margin-top: 5%;">
            <img class="img-responsive" src="{{ asset('assets/imagens/wireframe%20cats-03.png')}}">
        </div>
    </div>

    <div id="contato" class="container-fluid">
        <div class="col-sm-2 col-xs-12">
            <img class="img-responsive" src="{{ asset('assets/imagens/wireframe-cats-06.png')}}">
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="col-xs-12">
                <h3>Adote</h3>
            </div>
            <div class="col-xs-12">
                <p>
                    Todos os anos é a mesma coisa: muitos gatos abandonados à própria sorte! Um dos Objetivos principais da República dos Vira Latas é encontrar lares amorosos e seguros para eles, pois a rua não é lugar para se viver. Existem muitos gatos lindos à venda, mas não achamos legal comercializar vidas. Ao adotar você estará fazendo um bem enorme a um gatinho desamparado, ajudando a reduzir o número de bichinhos abandonados e a evitar o comércio cruel de vidas. Além disso, e principalmente, você receberá em retribuição muito carinho e alegria! Acredite:o amor de um gato adotado é incondicional. Sua vida será marcada com uma, ou várias lindas histórias! Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade. Mude o destino de um gatinho abandonado e sua vida nunca mais será a mesma!
                </p>
                <h3>
                    <strong>
                        Adote!!
                    </strong>
                </h3>
            </div>
        </div>
        
    </div>
    
    <div id="adota-ajuda" class="container-fluid">
        <div class="col-sm-6 col-xs-12">
            <h2>
                Quer adotar?
            </h2>

            <h2>
                Quer ajudar?
            </h2>
        </div>
        <div class="col-sm-6 col-xs-12">
            @if(Session::has('message'))
                <div class="col-xs-12 text-center">
                    <h3 style="color:#FFF;">{{ Session::get('message') }}</h3>
                </div>
            @endif
            <form action="{{ route('send.contact') }}" method="POST">
                {{ csrf_field() }}
                <div>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                </div><br>
                <div>
                    <input type="email" name="email" class="form-control" id="email1" placeholder="Email" required>
                </div><br>
                <div>   
                    <input type="tel" name="tel" class="form-control" id="telefone" placeholder="Telefone" required>
                </div><br>
                <div>   
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" required>
                </div><br>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>           
        </div>      
    </div>

    <footer class="container-fluid">
        <div class="col-xs-12 text-center">
            <div class="col-sm-6 col-xs-12">
                <a href="mailto:contato@republicadosviralatas.com.br">contato@republicadosviralatas.com.br</a>    
            </div>
            <div class="col-sm-3 col-xs-12">
                <a href="tel:48996185564">48 - 996185564</a>    
            </div>
            <div class="col-sm-1 col-xs-12 pull-right">
                <a href="">
                    <img src="{{ asset('assets/imagens/face-icon.png') }}" alt="facebook">
                </a>
            </div>
        </div>
        <div class="col-xs-12 copyright">
            <div class="text-center">
                <p>
                    República dos Vira-lata &copy; Copyright 2007-2017. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script>
        function drop() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
  </body>
</html>