<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/4564/4564330.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>

.content-login{

    position: fixed;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;


}

@media(max-width:700px){

    .card{
        width: 100%;
    }
    }

</style>

<body  style="background-color: rgb(0, 28, 9)">

    <div class="app-content">
        <div class="side-app justify-content-center">
            <div class="content-login">
                <div class="card" style="width: 22rem">
                    <div class="card-header">
                        <h1 style="width: 100%; text-align: center;">INICIAR SESIÓN</h1>

                    </div>
                    <div class="card-body">

                        <form action="{{ route('login.ingreso') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Correo</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Ingrese un correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Ingrese una contraseña" required>
                            </div>


                            @if (session('message_error'))
                            <hr>
                            <p class="alert alert-danger" role="alert" class=""> {{ session('message_error') }}</p>
                            <hr>
                       @endif

                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <a href="{{ route('registro')}}" class="btn btn-light" style="width: 100%">REGISTRARSE</a>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <button type="submit" class="btn btn-primary" style="width: 100%">INGRESAR</button>
                                </div>
                            </div>
                        </form>




                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
