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
		 .logo-container {
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mt-4 ">
                <div class="card ">
                    <div class="card-body bg-balck ">
						<div class="logo-container">
                            <img class="logo" src="<?php echo e(asset('assets/logo.png')); ?>" alt="Logo">
                        </div>
                        <h2 class="text-center mb-4">Inicia sesión</h2>

                        <!-- Opciones de inicio de sesión -->
                        <div class="d-flex justify-content-center mb-4">
                            <a href ="https://www.facebook.com/" class="btn btn-primary me-2">Facebook</a>
                            <a href="https://google.com" class="btn btn-danger me-2">Google</a>
                            <a href="https://www.apple.com/la/" class="btn btn-dark me-2" data-lang="es">Apple</a>
                            <a href="https://discord.com/" class="btn btn-info">Discord</a>
                        </div>
						<div class="login-separator text-center">
							<span>o</span>
						</div>
                            <form action="/login" method="POST" >
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<label >Username</label>
							<input class="form-control" type="text" id="username" name="username" class="form-control" placeholder="Username" >
							<br />
							<label >Password</label>
							<input class="form-control" type="password" id="password" name="password" class="form-control" placeholder="Password">
							<br />
							<button class="btn btn-lg mb-2 btn-primary btn-block " type="submit">Iniciar Sesion</button>
						</form>
						
                    </div>
                </div>
            </div>
			<a class="manual" id="register-manual" href="/registro">¿No tienes una cuenta?</a>
            <div class="col-lg-6" id="image-container">
                <img src="<?php echo e(asset('assets/wallpaper.jpg')); ?>">
            </div>
        </div>
    </div>

    
   
</body>

</html>
<?php /**PATH C:\wamp64\www\BodegaDigitalP1\resources\views/auth/login.blade.php ENDPATH**/ ?>