<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company ?></title>
    <link href="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo $base_url ?>plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $base_url ?>plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $base_url ?>plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $base_url ?>plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
</head>

<header id="peage-topbar">
     <div class="navbar-header">
         <div class="d-flex align-items-left ">
         <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
         </div>
         <div class="d-flex align-items-center">
             <div class="dropdown d-inline-block ml-2">
                 <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Configuracion
                     <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-right">
                     <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                         Mi perfil
                     </a>
                     <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                         Cerrar sesion
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <div class="vertical-menu">
     <div data-siplebar class="h-100">
         <div class="navbar-brand-box">
             <a href="" class="logo">
                 <img src="<?php echo $base_url; ?>imagen/logo.png" width="100px" height="100px" alt="">
                 <!-- ver el logo, puede ser imagen o texto -->
             </a>
         </div>
         <div id="sidebar-menu">
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>
                 <li>
                     <a href="<?php echo $base_url ?>dashboard.php" class="waves-effect"><i class="feather-home"></i>INICIO</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>registro_ventas.php" class="waves-effect"><i class="feather-shopping-bag"></i>VENTAS</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>registro_productos.php" class="waves-effect"><i class="feather-shopping-cart"></i>PRODUCTOS</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>listados/listado_usuarios.php" class="waves-effect"><i class="feather-user-plus"></i>USUARIOS</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>registro_pedidos.php" class="waves-effect"><i class="feather-shopping-bag"></i>PEDIDOS</a>
                 </li>
                 <li>
                     <a href="#" class="waves-effect"><i class="dripicons-time-reverse"></i>DEVOLUCIONES</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>registro_clientes.php" class="waves-effect"><i class="feather-users"></i>CLIENTES</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>reportes.php" class="waves-effect"><i class="feather-printer"></i>REPORTES</a>
                 </li>
                 <li>
                     <a href="<?php echo $base_url ?>registro_proveedores.php" class="waves-effect"><i class="feather-truck"></i>PROVEEDORES</a>
                 </li>
                 <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect text-white"><i class="fas fa-cogs"></i>Mantenimiento</a>
                        <ul>
                        <li><a href="<?php echo $base_url ?>datos_empresa.php">Datos de la Empresa</a></li>
                        <li><a href="<?php echo $base_url ?>datos_sistema.php">Datos del Sistema</a></li>
                        <li><a href="<?php echo $base_url ?>registro_roles.php">Registro de Roles</a></li>
                        </ul>
                    </li>
             </ul>
         </div>
     </div>
 </div>

     <!-- jQuery  -->
     <script src="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="<?php echo $base_url; ?>plantilla/Admin/vertical/assets/js/theme.js"></script>

    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?php echo $base_url; ?>plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>


 <!-- FIN MENU -->