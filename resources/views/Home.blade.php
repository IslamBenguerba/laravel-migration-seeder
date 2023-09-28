<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul class="list-group">
            @foreach($trains as $train)
                <li class="list-group-item">
                    <h4>Azineda: {{$train->azienda}}</h4>
                    <h4>Partenza: {{$train->stazione_di_servizio}}</h4>
                    <h4>Orario partenza: {{$train->oraio_di_partenza}}</h4>
                    <h4>Orario Arrivo: {{$train->oraio_di_arrivo}}</h4>
                    <h5>data: {{$train->data_di_partenza}}</h5>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>