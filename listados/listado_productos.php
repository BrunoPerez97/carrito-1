
<body>
    <?php
    include("../include/menu.php");
    ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Lista de Productos</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">Registrar Usuario</button>
                                </div><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>CODIGO</th>
                                            <th>DESCRIPCION</th>
                                            <th>DETALLE</th>
                                            <th>PRECIO COMPRA</th>
                                            <th>PRECIO VENTA</th>
                                            <th>STOCK</th>
                                            <th>ESTADO</th>
                                            <th>PROVEEDOR</th>
                                            <th>IMAGEN</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../include/conexion.php"; 
                                        $consulta = "SELECT  id, codigo, descripcion, detalle, precio_compra, precio_venta, stock, estado, imagen FROM producto";
                                        $resultado = mysqli_query($conexion, $consulta);
                                        while ($fila = mysqli_fetch_assoc($resultado)) {

                                            echo '<tr>';
                                            echo '<td>' . $fila['id'] . '</td>';

                                            echo '<td>' . $fila['codigo'] . '</td>';
                                            echo '<td>' . $fila['descripcion'] . '</td>';
                                            echo '<td>' . $fila['detalle'] . '</td>';
                                            echo '<td>' . $fila['precio_compra'] . '</td>';
                                            echo '<td>' . $fila['precio_venta'] . '</td>';
                                            echo '<td>' . $fila['stock'] . '</td>';
                                            echo '<td>' . $fila['estado'] . '</td>';
                                            echo '<td><img src="../imagen/' . $fila['fotos'] . '" alt="Imagen" width="50" data-toggle="modal" data-target="#modalImagen' . $fila['id'] . '"></td>';
                                            echo '<td>';
                                            echo '<a href="editar_usuario.php?id=' . $fila['id'] . '" class="btn btn-primary btn-sm">Editar</a>';
                                            echo ' ';
                                            echo '<a href="eliminar_usuario.php?id=' . $fila['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                            echo '<div class="modal fade" id="modalImagen' . $fila['id'] . '" tabindex="-1" role="dialog" aria-labelledby="modalImagenLabel' . $fila['id'] . '" aria-hidden="true">';
                                            echo '<div class="modal-dialog" role="document">';
                                            echo '<div class="modal-content">';
                                            echo '<div class="modal-header">';
                                            echo '<h5 class="modal-title" id="modalImagenLabel' . $fila['id'] . '">Imagen del Usuario</h5>';
                                            echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                            echo '<span aria-hidden="true">&times;</span>';
                                            echo '</button>';
                                            echo '</div>';
                                            echo '<div class="modal-body text-center">';
                                            echo '<img src="../imagen/' . $fila['fotos'] . '" alt="Imagen" width="400px">';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>CODIGO</th>
                                            <th>DESCRIPCION</th>
                                            <th>DETALLE</th>
                                            <th>PRECIO COMPRA</th>
                                            <th>PRECIO VENTA</th>
                                            <th>STOCK</th>
                                            <th>ESTADO</th>
                                            <th>PROVEEDOR</th>
                                            <th>IMAGEN</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../operaciones/registrar_usuario.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="number" class="form-control" id="dni" name="dni" placeholder="DNI" required>
                        </div>
                        <div class="form-group">
                            <label for="nombres_apellidos">Nombre y Apellidos</label>
                            <input type="text" class="form-control" id="nombres_apellidos" name="nombres_apellidos" placeholder="Nombre y Apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="form-group">
                            <label for="id_rol">Rol</label>
                            <select class="form-control" id="id_rol" name="id_rol" required>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fotos">Imagen</label>
                            <input type="file" class="form-control" id="fotos" name="fotos" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>
</html>
