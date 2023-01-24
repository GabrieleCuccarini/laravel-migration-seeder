<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="display-5 fw-bold text-center mt-3">
       Welcome to Laravel_Migration_Seeder
   </h1>
    <div class="container d-flex justify-content-center flex-wrap w90 mt-2">
        @foreach ($trains as $train) 
            @if ($train->data_di_partenza === '2023-01-24')
                <div class="card mx-1 my-2 color" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Stazione di partenza: {{$train->stazione_di_partenza}}</h5>    
                        <h5 class="card-title">Stazione di arrivo: {{$train->stazione_di_arrivo}}</h5>    
                        <p class="card-text">Data di partenza: <b>{{$train->data_di_partenza}}</b></p>
                        <p class="card-text">Orario di partenza: <b>{{$train->orario_di_partenza}}</b></p>
                        <p class="card-text">Orario d'arrivo: <b>{{$train->orario_di_arrivo}}</b></p>
                        <p class="card-text">Codice treno: <b>{{$train->codice_treno}}</b></p>
                        <p class="card-text">Numero di carrozze: <b>{{$train->numero_di_carrozze}}</b></p>
                        <p class="card-text">In orario: <b>
                            @if ($train->in_orario === 1)
                            true
                            @else 
                            false
                            @endif
                        </b></p>
                        <p class="card-text red">Cancellato: <b>
                            @if ($train->cancellato === 1)
                            true
                            @else 
                            false
                            @endif
                        </b></p>
                    </div>
                </div>
            @endif   
        @endforeach
    </div>
</body>

</html>
