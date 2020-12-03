<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
     
 <style>
        * {
            padding: 0;
            margin: 0
        }
        body{
            background-color: bisque;
            display: flex;
            flex-direction: row;
            height: 100vh;
            max-height: 100vh;
            justify-content: center;
            align-items: center;
            width: 100vw;
        }
        .box{
            padding: 30px 20px;
            background-color: rgba(97, 5, 5, 0.1);
            box-shadow: 1px 2px 3px 2px rgb(228, 182, 126);
            width: 300px;
            text-align: center;
            border-radius: 4px;
        }
        h1{
            font-family: monospace;
            margin-bottom: 15px;
        }
        button{
            margin-top: 20px;
            border: 1px solid rgb(177, 153, 153);
            padding: 9px 15px;
            border-radius: 4px;
           transition: ease-in;
        }
        button:hover{
            transition-timing-function: cubic-bezier(0.77, 0, 0.175, 1);
            transition-delay: 1s;
        }
        input{
            padding: 10px;
            border-radius: 5px;
            border: 2px solid rgb(204, 172, 172);
        }
    </style>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
         <div class="box">
        <h1>Donate.</h1>
         <form method="POST" action="/donate">
            @csrf
         <input type="number" class="form-control" id="amount"  placeholder="Enter Amount" name="amount" /> 
            <br />
            <br />
           
             <input type="submit" value="Donate" class="btn btn-primary">
            <br />
         </form>
         </div>
    </body>
</html>
