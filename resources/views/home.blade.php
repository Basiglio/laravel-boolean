<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Le Mie Macchine</h1>
    <div class="box">
      
          <table>
            <tr>
              <th>
                NOME
              </th>
              <th>
                BRAND
              </th>
              <th>
                TARGA
              </th>
            </tr>
            @foreach ($cars as $car)
            <tr>
              <td>{{$car->name}}</td>
              <td>{{$car->brand}}</td>
              <td>{{$car->targa}}</td>
            </tr>
            @endforeach
          </table>
      
      
      
      
      {{-- <ul>
            <li>
              {{ $car->name }}
            </li>
          </ul> --}}
      
    </div>
  </div>
</body>
</html>