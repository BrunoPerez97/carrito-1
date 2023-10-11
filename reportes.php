

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- Contenido del encabezado -->
            </div>
        </div>
    </div>

    <!-- Sección de "Reporte de Ventas del día" -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title text-center"><b>Reporte de Ventas del día</b></h6>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <label for="">Fecha Inicio</label>
                                    <input type="date" name="" id="text_finicio" class="form-control  form-control-sm">
                                </div>
                                <div class="col-5">
                                    <label for="">Fecha Fin</label>
                                    <input type="date" name="" id="text_ffin" class="form-control  form-control-sm">
                                </div>
                                <div class="col-2">
                                    <label for="">&nbsp;</label><br>
                                    <button class="btn btn-info btn-sm" onclick="Listar_Venta_del_dia(); validar();"><i class="fas fa-search"></i></button>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="tabla_reporte_venta_del_dia" class="display compact">
                                        <thead style="background:#343A40; color:white">
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Tipo C.</th>
                                                <th>Comprobante</th>
                                                <th style="width:25%">Cliente</th>
                                                <th>Base Imp.</th>
                                                <th>IGV</th>
                                                <th>Total s/.</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Totales S/: </th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
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
    </section>

    <!-- Sección de "Reporte por Mes y Año Ventas" -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title text-center"><b>Reporte por Mes y Año Ventas</b></h6>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <label for="">Mes</label>
                                    <select class="form-control form-control-sm js-example-basic-single" id="select_mes_venta" style="width: 100%">
                                        <option value="">Seleccione</option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <label for="">Año</label>
                                    <select class="form-control form-control-sm js-example-basic-single" id="select_anio_venta" style="width: 100%"></select>
                                </div>
                                <div class="col-2">
                                    <label for="">&nbsp;</label><br>
                                    <button class="btn btn-info btn-sm" onclick="Listar_VentaMes_anio();validar();"><i class="fas fa-search"></i></button>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="tabla_reporte_venta_mes" class="display compact">
                                        <thead style="background:#343A40; color:white">
                                            <tr>
                                                <th style="width:25%">Cliente</th>
                                                <th>Comprobante</th>
                                                <th>Monto</th>
                                                <th>Cant Productos</th>
                                                <th>Fecha</th>
                                                <th>usuario</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
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
    </section>

    <!-- Otras secciones y reportes -->
    <!-- Agrega secciones y reportes adicionales de manera similar a las secciones anteriores -->

    <!-- Incluye el script de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
   
