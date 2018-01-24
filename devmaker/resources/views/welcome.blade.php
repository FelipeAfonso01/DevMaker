<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


        <!-- Styles -->
        <style>
        body {
          background: #2ecc71;
          font-size: 62.5%;
        }

        .container {
          padding: 2em;
          margin: 0 auto;
          margin-left: 20%;
          margin-right:20%;
        }

        /* GENERAL BUTTON STYLING */
        button,
        button::after {
          -webkit-transition: all 0.3s;
        	-moz-transition: all 0.3s;
          -o-transition: all 0.3s;
        	transition: all 0.3s;
        }

        button {
          background: none;
          border: 3px solid #fff;
          border-radius: 5px;
          color: #fff;
          display: block;
          font-size: 1.6em;
          font-weight: bold;
          margin: 1em auto;
          padding: 2em 6em;
          position: relative;
          text-transform: uppercase;
        }

        button::before,
        button::after {
          background: #fff;
          content: '';
          position: absolute;
          z-index: -1;
        }

        button:hover {
          color: #2ecc71;
        }

        /* BUTTON 2 */
        .btn-2::after {
          height: 100%;
          left: 0;
          top: 0;
          width: 0;
        }

        .btn-2:hover:after {
          width: 100%;
        }




        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        

            <div class="content" style="margin-top:15%">
              <center>
                  <h1>Seja Bem Vindo ao Sistema!</h1>
                  <h1>Faça seu Cadastro ou realize o Login</h1>
              </center>
              <div class="container">

                  <a href="{{ route('login') }}"><button class="btn-2" style="float:left">Login</button></a>
                  <a href="{{ route('register') }}"><button class="btn-2" style="float:right">Registre-se</button></a>
              </div>
            </div>
        </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    </body>
</html>
