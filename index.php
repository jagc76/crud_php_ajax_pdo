<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" class="href">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css" class="href">
    <title>CRUD con PHP, PDO, Ajax y Datatables.js</title>
</head>
<body>
    <div class="container fondo">
        <h1 class="text-center">CRUD con PHP, PDO, Ajax y Datatables.js</h1>
        <h1 class="text-center">www.render2web.com</h1>
        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary w-100" 
                    data-bs-toggle="modal" data-bs-target="#modalUsuario"
                    id="botonCrear">
                        <i class="bi bi-plus-circle-fill"></i>Crear
                    </button>
                </div>
            </div>
        </div>
        <br />
        <br/>

        <div class="table-responsive">
            <table id="datos_usuarios" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Imagen</th>
                        <th>Fecha Creación</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresar Registros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" id="formulario" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-body">
                            <label for="nombre" >Crear Usuarios</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <br />
                            <label for="apellido" >Ingrese los Apellidos</label>
                            <input type="text" name="apellido" id="apellido" class="form-control">
                            <br />
                            <label for="telefono" >Ingrese el Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control">
                            <label for="email" >Ingrese el Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                            <br />
                            <label for="imagen" >Seleccione una Imagen</label>
                            <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                            <span id="imagen-subida"></span>
                            <br />
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <input type="hidden" name="operacion" id="operacion">
                            <input type="submit" name="action" id="action" class="btn btn-success"
                            value="Crear">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"
    integrity="sha256-/xUj+30JU5yEx1q6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript">
        $(document).ready(function(){
            var dataTable = $('#datos_usuario').DataTable({
                "processing":true,
                "serverSide":true,
                "order":[],
                "ajax":{
                    url: "obtener_registros.php",
                    type: "POST"
                },
                "columnsDefs":[
                    {
                    "targets":[0, 3, 4],
                    "orderable":false,
                    }
                ]
            });
        });
        
    </script>
</body>
</html>