<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body style="background-color:#D9A25F;">
    <center> <div class='container' style=" width: 800px; margin: 50px; padding: 50px; background-color:  #F2C777;">
            <div style="width: 650px; height: 7px; background-color: #729CA6;"> </div>
           <h1 style="font-family: 'Bebas Neue', cursive; color: #051026; margin:0px; font-size: 50px; padding-top: 15px;">Tv Show Information</h1>
            <form action="detail" method="GET">
            
            @csrf 
                <input name='id' type="number" placeholder="input show id" style="font-family: 'Bebas Neue', cursive;">
                <button style="font-family: 'Bebas Neue', cursive; color:#365B73; " >check</button>
            </form>
            @isset($data)
            <div style="width: 650px; height: 7px; background-color: #729CA6; margin:15px;"> </div>
           
            <ul style="list-style: none;">
                <li style="font-size: 15px; font-weight: bold;  text-align: left; ">Title:</li>
                <li style="font-size: 20px; font-weight: bold; "> {{print_r($data['name'])}}</li>
                <li style="font-size: 15px; font-weight: bold;  text-align: left; ">Language:</li>  
                <li style="font-size: 20px; font-weight: bold; "> {{print_r($data['language'])}}</li>
                <li style="font-size: 15px; font-weight: bold;  text-align: left; ">Genre:</li>  
                <li style="font-size: 20px; font-weight: bold; ">  {{print_r($data['genres'])}}</li>
                <li style="font-size: 15px; font-weight: bold; text-align: left; ">Premiered: </li>  
                <li style="font-size: 20px; font-weight: bold; "> {{print_r($data['premiered'])}}</li>
                <li style="font-size: 15px; font-weight: bold; text-align: left; ">OfficialSite:  </li>  
                <li style="font-size: 20px; font-weight: bold; "> {{print_r($data['officialSite'])}}</li>
                <li style="font-size: 15px; font-weight: bold;  text-align: left;"> Rating: </li>  
                <li style="font-size: 20px; font-weight: bold; "> {{print_r($data['rating'])}}</li>
                <br>
                <li style="font-size: 15px; font-weight: bold; text-align: left;">Summary: </li>
                <li style="font-size: 15px; font-weight: bold; text-align:justify"> {{print_r($data['summary'])}}</li>
                
            </ul>
            @endisset
        </div>
    </center>
    </body>
</html>
