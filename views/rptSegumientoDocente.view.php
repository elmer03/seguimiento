<?php include("views/global/header.view.php") ?>

<?php include('views/global/title.view.php') ?>


    <div class="main">
        <div class="container">


            <script src="estilos/js/jQuery.print.js"></script>

            <button type="button" onclick="$.print('#contenido');" class="btn btn-primary">imprimir</button>
            <div id="contenido">
                <div class="row">
                    <div class="col-md-3 text-left"><h4>UNIVERSIDAD MAYOR DE SAN SIMON</h4>
                        <h4>VICERECTORADO</h4>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>SEGUIMIENTO ACADEMICO DOCENTE &nbsp;I-2015</h3>
                    </div>
                    <div class="col-md-3 text-right">
                        <h4>
                            D.P.A.- D.I.S.U.
                        </h4>
                        <h6>Periodo Academico I-2015</h6>
                    </div>
                </div>
                <div class="row">
                    <table class="table ">
                        <tbody>
                        <tr>
                            <td rowspan="2" width="10%"><h6>DOCENTE</h6></td>
                            <td>Ariel Oscar</td>
                            <td>angoloa</td>
                            <td>mendoza</td>
                            <td>apellido esposito lindo yacelly</td>
                            <td rowspan="2"><h6>CI</h6></td>
                            <td>64646344</td>
                        </tr>
                        <tr>
                            <td class="text-center"><h6>Nombre(s)</h6></td>
                            <td class="text-center"><h6>AP. PATERNO</h6></td>
                            <td class="text-center"><h6>AP. MATERNO</h6></td>
                            <td class="text-center"><h6>AP. ESPOSO</h6></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>FACULTAD</th>
                            <th>CARRERA</th>
                            <th>DEPARTAMENTO</th>
                            <th>MATERIAS</th>
                            <th>SIGLA</th>
                            <th>H.Teor.</th>
                            <th>H.Prac.</th>
                            <th>Anual</th>
                            <th>Semestral</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.-</td>
                            <td>CIENCIAS Y TECNOLOGIA</td>
                            <td>INF-SIS</td>
                            <td>INFORMATICA-SISTEMAS</td>
                            <td>MATEMATICA COMPUTACIONAL II</td>
                            <td>2008214</td>
                            <td>0</td>
                            <td>0</td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                        </tbody>

                    </table>

                    <td rowspan="2" width="10%"><h6>FACULTAD</h6></td>


                </div>


                <ul>
                    <?php
                    foreach ($arregloDocente as $Docente) { ?>
                        <li> <?= $Docente['NOMBRE_DOC'] ?></li>
                        <li> <?= $Docente['APELLPA_DOC'] ?></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

<?php include('views/global/footer.view.php') ?>