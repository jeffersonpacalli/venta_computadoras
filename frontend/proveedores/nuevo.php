<?php
    ob_start();
     session_start();
    
    if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../login.php');

  }
?>
<?php if(isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Computer Advance</title>
    <link rel="stylesheet" href="../../backend/css/admin.css">
    <link rel="icon" type="image/png" href="../../backend/img/ca.png">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
     <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="../../backend/css/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/buttonsdataTables.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/font.css">
    <style type="text/css">
 .loader-container{
   
}

.load_animation{
  width: 100%;
  height: 100vh;
  font-size: 4rem ;
  background-color: #fff;
  z-index: 500;
  position: fixed;
  top: 0;
  left: 0;
  overflow: hidden;
  
}
.animation {
  position: absolute;
  top: 50%;
  left: 50%;
  border: 3px solid rgb(0, 0, 0);
  border-radius: 50%;
  box-sizing: content-box;
  padding: 10px;
  transform: translate(-50% , -50%) ;
  opacity: .5;
  animation: spinner 1s infinite;
  transition: .1s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
@keyframes spinner {
  50% {
    transform: translate(-50% , -50%) ;
    border: 2px solid rgba(0, 0, 0, 0.178);
    padding: 30px;
  }
  100% {
    opacity: 1;
    transform:translate(-50% , -50%) rotate(360deg);
    border: 3px solid rgba(0, 0, 0, 0);
    padding: 17rem;
    color: #233975;
  }

}


    </style>

</head>
<body>
    <div class="loader-container">
    <div class="load_animation">
        <ion-icon name="bag-handle-outline" class="animation"></ion-icon>
    </div>
</div>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>Computer<span>Advance</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(../../backend/img/user13.png)"></div>
                <h4><?php echo $_SESSION['username']; ?></h4>
                <small>Administrador</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="../administrador/escritorio.php">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="../productos/mostrar.php">
                            <span class="las la-shopping-cart"></span>
                            <small>Productos</small>
                        </a>
                    </li>
                    <li>
                       <a href="../categorias/mostrar.php">
                            <span class="las la-paperclip"></span>
                            <small>Categorias</small>
                        </a>
                    </li>
                    <li>
                       <a href="../accesos/mostrar.php">
                            <span class="las la-user-friends"></span>
                            <small>Accesos</small>
                        </a>
                    </li>
                    <li>
                       <a href="../clientes/mostrar.php">
                            <span class="las la-user-friends"></span>
                            <small>Clientes</small>
                        </a>
                    </li>
                    <li>
                       <a href="../proveedores/mostrar.php" class="active">
                            <span class="las la-user-friends"></span>
                            <small>Proveedores</small>
                        </a>
                    </li>

                    <li>
                       <a href="../ventas/venta.php">
                            <span class="las la-money-bill"></span>
                            <small>Ventas</small>
                        </a>
                    </li>

                    <li>
                       <a href="../compra/mostrar.php">
                            <span class="las la-store"></span>
                            <small>Compras</small>
                        </a>
                    </li>

                    <li>
                       <a href="../salir.php">
                            <span class="las la-power-off"></span>
                            <small>Salir</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                
                    <div class="user">
                        <div class="bg-img" style="background-image: url(../../backend/img/user13.png)"></div>

                    </div>
                </div>
            </div>
        </header>
        
        <main>
            
            <div class="page-header">
                <h1>Bienvenido <?php echo '<strong>'.$_SESSION['nombre'].'</strong>'; ?></h1>
                <small>Home / Proveedores / Nuevo</small>
            </div>
            
            <div class="page-content">
            
<form action="" enctype="multipart/form-data" method="POST"  autocomplete="off">
  <div class="containerss">
    <h1>Nuevos proveedores</h1>
    <div class="alert-danger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Importante!</strong> Es importante rellenar los campos con &nbsp;<span class="badge-warning">*</span>
</div>
    <hr>
    <br>
  

    <label for="email"><b>Ruc del proveedor</b></label><span class="badge-warning">*</span>
    <input type="text" maxlength="11" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="ejm: 77656756" name="rcprv"  required>

    <label for="email"><b>Nombre del proveedor</b></label><span class="badge-warning">*</span>
    <input type="text" placeholder="ejm: Wong" name="nomprv"  required>

    <label for="email"><b>Correo del proveedor</b></label>
    <input type="text" placeholder="ejm: wong@gmail.com" name="corrprv" >

    <hr>
   
    <button type="submit" name="add_supplier" class="registerbtn">Guardar</button>
  </div>
  
</form>
            
            </div>
            
        </main>
        
    </div>
    <script src="../../backend/js/jquery.min.js"></script>
   
    <script type="text/javascript">
        $(window).on("load",function(){
            $(".load_animation").fadeOut(1000);
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php include_once '../../backend/php/add_supplier.php' ?>
    <script type="text/javascript" src="../../backend/js/reenvio.js"></script>
</body>
</html>

<?php }else{ 
    header('Location: ../login.php');
 } ?>