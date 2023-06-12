<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-migration-seeder</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center mb-5">Laravel-Model-controller</h1>

    <div class="container d-flex flex-wrap">
        @foreach ($trains as $elem)
            <div class="card m-2" style="width: 18rem;">
              <div class="card-body">
                <h4 class="card-title">Company: {{ $elem['company'] }}</h4>
                <p class="card-title"><b>Stazione di partenza:</b> {{ $elem['departure_station'] }}</p>
                <p class="card-title"><b>Orario di partenza:</b> {{ $elem['departure_time'] }}</p>
                <p class="card-text"><b>Stazione di arrivo:</b> {{ $elem['arrival_station'] }}</p>
                <p class="card-title"><b>Orario di arrivo:</b> {{ $elem['arrival_time'] }}</p>
                <p class="card-text"><b>Codice Treno:</b> {{ $elem['train_code'] }}</p>
                <p class="card-text"><b>Carrozze:</b> {{ $elem['number_train_carriage'] }}</p>
              </div>
            </div>
        @endforeach
    </div>
    
</body>
</html>