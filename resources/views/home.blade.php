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
    <div class="container">
        <h1>Tabella treni</h1>

        <hr>

        
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario d'arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero di carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $singleTrain)
          <tr>
            <th scope="row">{{$singleTrain->id}}</th>
            <td><strong>{{$singleTrain->azienda}}</strong></td>
            <td>{{$singleTrain->stazione_di_partenza}}</td>
            <td>{{$singleTrain->stazione_di_arrivo}}</td>
            <td>{{$singleTrain->orario_di_partenza}}</td>
            <td>{{$singleTrain->orario_di_arrivo}}</td>
            <td>{{$singleTrain->codice_treno}}</td>
            <td>{{$singleTrain->numero_carrozze}}</td>
            <td>{{$singleTrain->in_orario ? 'in orario' : 'in ritardo'}}</td>
        
        
            
            <td>{{$singleTrain->cancellato ? 'cancellato' : ''}}</td>


          </tr>   
          @endforeach  
        
        </tbody>
      </table>

    </div>


</body>

</html>