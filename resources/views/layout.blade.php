<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
{{-- iconos --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Vista</title>
</head>
<body class="h-100" style="background-color: gainsboro;">
@include('cabecera')
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-2" style="background-color: deepskyblue; padding: 0;">
            <form action="" class="p-2 mt-2 bg-primary ms-3" style="border-radius: 40px 0 0 40px">
                <div class="ms-5">
                    <i class="bi bi-clipboard-minus"></i>
                <input type="submit" value="Registros" class="btn btn-sm fs-5 text-white">
                </div>
            </form>
            <form action="{{route('formulario')}}" class="p-2 mt-2  ms-3" style="border-radius: 40px 0 0 40px" method="GET">
                <div class="ms-5">
                <i class="bi bi-plus-circle"></i>
                <input type="submit" value="Nuevo registro" class="btn btn-sm fs-5 text-white">
            </div>
            </form>
        </div>
        <div class="col-10">
            <div class="mt-3 ms-3 me-3 " style="color: blue"><i class="bi bi-clipboard-minus me-2"></i>Registros |</div>
            <div class="card mt-3 ms-3 me-3">
                <div class="row">
                <div class="col-4 input-group mt-3 ms-3 me-3" style="width: 300px">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <div class="col-8">
                    <form action="{{route('formulario')}}">
                        <button type="submit" class="btn btn-primary mt-3 ms-3 me-3 float-end" style="border-radius: 20px"> <i class="bi bi-plus-circle me-2"></i>Nuevo registro</button>
                    </form>

                    <button class="btn btn-primary mt-3 ms-3 me-3 float-end text-primary" style="border-radius: 20px; background-color: white"><i class="bi bi-arrow-down-circle me-2"></i>Descargar listado</button>
                  </div>
                </div>
            <table class="table  mt-3 ms-3 me-3">
                <thead class="text-primary">
                    <tr>
                    <th>Folio</th>
                    <th>CURP</th>
                    <th>Paciente</th>
                    <th>Institucion</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($datos as $dato)
                    <tr>
                        <td style="width: 10px">{{$dato->id}}</td>
                        <td>{{$dato->curp}}</td>
                        <td>{{$dato->paciente}}</td>
                        <td>{{$dato->institucion}}</td>
                        <td class="text-center">
                                <button class="btn text-primary rounded-circle"><i class="bi bi-eye"></i></button>
                                <a href="{{route('info',$dato->id)}}" class="btn text-primary rounded-circle" ><i class="bi bi-pencil"></i></a>
                                <a href="{{route('eliminar',$dato->id)}}"  class="btn text-primary rounded-circle" ><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</body>
</html>
