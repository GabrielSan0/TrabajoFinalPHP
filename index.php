<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="disenio.css">
    <!-- cdn de fontawerson -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP</title>
</head>
<body>
    <!-- logo de gabo  -->
    <a href="https://front.codes/" class="logo" target="_blank">
        <img src="Gabo.png" alt="GABO">
    </a>

    <div class="card-container">
    <div class="card" id="card">
        <div class="front">
        <div class="registrarse" id="registroDiv">
          <div class="registra_centro">
            <form action="php/registro_be.php" method="POST" class="formulario">
              <div class="section text-center">
                <h4 class="mb-4 pb-3">Registrarse</h4>
                <div class="form-group mt">
                  <i class="fa-regular fa-user icon"></i>
                  <input type="text" name="FULL_name" class="form-style" placeholder="Nombre Completo" id="logname" autocomplete="off">
                  <i class="input-icon uil uil-user"></i>
                </div>	
                <div class="form-group mt">
                  <i class="fa-solid fa-at icon"></i>
                  <input type="email" name="correo" class="form-style" placeholder="Email" id="logemail" autocomplete="off">
                  <i class="input-icon uil uil-at"></i>
                </div>	
                <div class="form-group mt">
                  <i class="fa-solid fa-lock icon"></i>
                  <input type="password" name="pasword" class="form-style" placeholder="Contraseña" id="logpass" autocomplete="off">
                  <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <button class="btn mt-4">Registrar</button>
                <div class="cambiar_cara">
                    <!-- se llama a la funcion flipCard al dar click  -->
                  <a href="#" onclick="flipCard()">Ya tienes cuenta</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>

        
        <div class="back">
        <div class="ingresar" id="loginDiv">
          <div class="registra_centro">
          <form action="php/validacion.php" method="POST" class="formulario">
              <div class="section text-center">
                <h4 class="mb-4 pb-3">Ingresar</h4>
                <div class="form-group mt">
                  <i class="fa-solid fa-at icon"></i>
                  <input type="email" name="correo" class="form-style" placeholder="Email" id="logemail" autocomplete="off">
                  <i class="input-icon uil uil-at"></i>
                </div>	
                <div class="form-group mt">
                  <i class="fa-solid fa-lock icon"></i>
                  <input type="password" name="pasword" class="form-style" placeholder="Contraseña" id="logpass" autocomplete="off">
                  <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <button class="btn mt-4">Ingresar</button>
                <div class="cambiar_cara">
                  <a href="#" onclick="flipCard()">Registrarme</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>















  <div class="background-effect">
    <div class="circle">
    </div>
</div>


            <script src="disenio.js"></script>
</body>