<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel trains</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <h1 class="text-uppercase text-center">laravel trains</h1>
        <main>
            <div class="container">
                <div class="row d-flex flex- gap 2 g-5">
                    @foreach ( $trains as $train )
                        <div class="col-3 ">
                            <div class="card p-3">
                                <h3>Azienda: {{$train->Azienda}}</h3>
                                <div class="train-info">
                                    <span>Stazione di partenza: {{$train->Stazione_di_partenza}}</span>
                                    <span>Stazione di arrivo: {{$train->Stazione_di_arrivo}}</span>
                                    <time>Orario di partenza: {{$train->Orario_di_partenza}}</time>
                                    <time>Orario di partenza: {{$train->Orario_di_arrivo}}</time>
                                    <span>Codice treno: {{$train->Codice_treno}}</span>
                                    <span>Numero carrozze: {{$train->Numero_carrozze}}</span>
                                    <span>In orario: {{$train->In_orario}}</span>
                                    <span>Cancellato: {{$train->Cancellato}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </header>
</body>
</html>