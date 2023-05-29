
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Vehiculos</title>
    </head>

    <body style="background-image: url('https://fondosmil.com/fondo/21960.jpg'); background-repeat: no-repeat; background-size: cover">
        <div class="card" style="width: 65rem; margin: 2% auto 0; background-color: rgba(255, 255, 255, 0.63);">
            <div style="text-align: center;  color:rgb(0, 0, 0);"><h1>Vehicles</h1></div>
            <form action="{{url('/index')}}" style="margin: 25PX;" method="post">
                @csrf
                <div>
                    <label for="marca" class="h5" >Marca</label>
                    <input class="form-control form-control-lg" type="text" id="marca" name="marca" placeholder="Ingrese la marca" required>
                </div>
                <div>
                    <label for="modelo" class="h5">Modelo</label>
                    <input class="form-control form-control-lg" type="text" id="modelo" name="Modelo" placeholder="Ingrese el modelo" required>
                </div>
                <div>
                    <label for="tipo" class="h5">Tipo</label>
                    <input class="form-control form-control-lg" type="text" id="tipo" name="tipo" placeholder="Ingrese el tipo" required><br>
                </div>
                <div>
                    <button type="submit" style="width: 100%;" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
        

        
    <div class="card"  style="width: 65rem; margin:1% auto 0">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->Modelo}}</td>
                        <td>{{$item->tipo}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
       
        </script>
    </body>
    </html>
    
