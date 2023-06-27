<!DOCTYPE html>
<html>     
    <head>         
        <meta charset="utf-8">         
        <meta name="viewport" content="width=device-width, initial-scale=1">         
        <title>Laravel</title>         
        @vite('resources/js/app.js')     
    </head>     
    <body>        
        @foreach ($trains as $train)         
            <div class="card">             
                <div>                 
                                   
                    <div><b>Compagnia:</b> {{$train['company']}}</div>                 
                    <div><b>In partenza da:</b> {{$train['departure_station']}}</div>                
                    <div><b>In arrivo a:</b> {{$train['arrival_station']}}</div>
                    <div><b>Orario di partenza:</b> {{$train['departure_time']}}</div> 
                    <div><b>Data di partenza:</b> {{$train['departure_date']}}</div> 
                    <div><b>Orario di arrivo:</b> {{$train['arrival_time']}}</div> 
                    <div><b>Data di arrivo:</b> {{$train['arrival_date']}}</div>
                    <div><b>Numero treno:</b> {{$train['train_code']}}</div> 
                    <div><b>Carrozza numero:</b> {{$train['number_of_carriages']}}</div> 

                    @if ($train['in_time'] == 1 )

                        <div><b>Il treno è in orario</b></div>    

                    @else                         
                     
                        <div><b>Il treno è in ritardo</b></div>   

                    @endif

                    

                    @if ($train['deleted'] == 1 )

                        <div><b>TRENO CANCELLATO</b></div>  

                    @endif


                </div>         
            </div>     
        @endforeach     
    </body> 
</html>