<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212;
            color: #fff;
        }

        .container {
            padding: 50px;
        }

        .card {
            background-color: #1f1f1f;
            color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        #image-container {
            background-size: cover;
            background-position: top;
            width: 50%;
            position: fixed;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #image-container img {
            max-width: 100%;
            height: 100%;
            object-fit: cover;
        }
		.custom-margin-left {
            margin-left: -50px; /* Ajusta el valor según sea necesario */
        }
		 .logo-container {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-md-6 mt-4 custom-margin-left">
                <div class="card">
                    <div class="card-body bg-balck">
						<div class="logo-container">
                            <img class="logo" src="{{asset('assets/logo.png')}}" alt="Logo">
                        </div>
                        <h2 class="text-center ">Registro</h2>

                        <form action="/registro " method="POST" class="container mt-2">
                            @csrf
                            @include('layouts.partials.messages')
							<input class="form-control" name="opcion" type="text" value="insertar" hidden >
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control " id="username" name="username" placeholder="username">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                                        </div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control " id="password" name="password"placeholder="password">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Password_Confirmation</label>
                                    <input type="password" class="form-control " id="password_confirmation" name="password_confirmation" placeholder="password_confirmation">
                                </div>
                            </div>
							<br />
							<button class="btn btn-lg mb-2 btn-primary btn-block "  type="submit">Registrate</button>
                        </form>
                    </div>
                </div>
            </div>
            <a class="login" id="login" href="/login">Atras</a>
            <!-- Div a la derecha con imagen -->
            <div class="col-md-6" id="image-container">
                <img src="{{asset('assets/kratosodi.jpg')}}" class="img-fluid" alt="Background Image">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</html>
