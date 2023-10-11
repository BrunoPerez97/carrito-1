
<body>
<?php
include('include/menu.php');
?>
<!--INICIO DE CONTENIDO-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!--conteiner solo se usa el 80% de la pantalla conteiner-fluid ocupa todo-->
            <div class="row"><!--row ayuda a ser responsive pero en bootstrap-->
                <div class="col-12">
                    <h4>ROLES</h4>
                    <div class="card">
                        <div class="card-body">
                            <form action="operaciones/registarUsario.php" method="POST">
                            <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">NOMBRE:</label>
                                    <input type="text" name="apellidosNombres"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIN DE CONTENIDO-->
