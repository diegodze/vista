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
        <div class="col-2 container-fluid" style="background-color: deepskyblue; padding: 0;">
            <div class="p-2 mt-2  ms-2 " style="border-radius: 40px 0 0 40px">
                <a href="{{route('index')}}" class="ms-3 btn btn-sm fs-5 text-white"><i class="bi bi-clipboard-minus me-2"></i>Registros</a>
            </div>
            <div class="p-2 mt-2 bg-primary ms-1" style="border-radius: 40px 0 0 40px">
                <a href="" class="ms-4 btn btn-sm fs-5 text-white"><i class="bi bi-plus-circle me-2"></i>Nuevo registro</a>
            </div>

        </div>
        <div class="col-10">
            <div class="mt-3 ms-3 me-3 " style="color: blue"> <i class="bi bi-plus-circle"></i>Nuevo registro |</div>
            <div class="mt-3 ms-3 me-3 " style="color: blue"> <i class="bi bi-person"></i>Informacion personal del paciente</div>
                <div class="card mt-3 ms-3 me-3">
                    <div class="card m-5 style="width: 400px">
                        <form action="{{route('nuevo')}}" class="m-5" method="GET">
                            @method('POST')
                            @csrf
                            <label for="curp" class="form-label">curp*</label>
                            <input type="text" id="curp" name="curp" class="form-control">
                            <label for="curp" class="form-label">paciente*</label>
                            <input type="text" id="paciente" name="paciente" class="form-control">
                            <label for="curp" class="form-label">Institucion*</label>
                            <input type="text" id="institucion" name="institucion" class="form-control">
                            <div class="text-center mt-3">
                            <input type="submit" value="Guardar paciente" class="btn btn-primary">
                        </div>
                        </form>
                    </div>
                 </div>
        </div>
    </div>
</div>
</body>
</html>
