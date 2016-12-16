<?php include("views/global/header.view.php") ?>

<?php include('views/global/title.view.php') ?>



    <div class="main">

        <h6>UNIVERSIDAD MAYOR DE SAN SIMON</h6>
        <h6>VICERECTORADO</h6>

        <div class="container">
            <div align="center"><h3>SEGUIMIENTO ACADEMICO DOCENTE</h3></div>

            <table width="900">
                <tbody>
                <?php
                foreach ($arregloDocentesRoles as $arregloDocenteRole){ ?>
                    <tr>
                        <!--<td></td>-->
                        <td><pre><?= $arregloDocenteRol['NOMBRE_DOC']?></pre></td>
                        <td><pre><?= $arregloDocenteRol['APELLPA_DOC']?></pre></td>
                        <td><pre><?= $arregloDocenteRol['APELLMA_DOC']?></pre></td>
                        <td><pre><?= $arregloDocenteRol['CI_DOC']?> <?= $arregloDocenteRol['EXPEDIDO_CI_DOC']?></pre></td>

                    </tr>
                <?php }
                ?>
                </tbody>
            </table>



            <table width="800">
                <tbody>
                <thead>
                <tr>
                    <th> </th>
                    <th><h5><strong>NOMBRES</strong></h5></th>
                    <th><h5><strong>APELLIDO PATERNO</strong></h5></th>
                    <th><h5><strong>APELLIDO MATERNO</strong></h5></th>
                    <th><h5><strong>CI</strong></h5></th>
                </tr>
                </thead>
                </tbody>
            </table>

            <table>
                <thead>
                <tr>
                    <h6>FACULTAD:</h6>
                    <h6>CARRERA:</h6>
                    <h6>DEPARTAMENTO:</h6>

                    <table width="500">
                        <thead>
                        <tr>
                            <th><h6>SIGLA</h6></th>
                            <th><h6>MATERIAS:</h6></th>
                        </tr>
                        </thead>
                    </table>


                    <table width="900">
                        <tbody>
                        <?php
                        foreach ($arregloMateria as $arregloMaterias){ ?>
                            <tr>
                                <td><pre><?= $arregloMaterias['SIGLA_MATERIA']?></pre></td>
                                <td><?= $arregloMaterias['NOMBRE_MATERIA']?></td>

                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>

                </tr>
                </thead>
            </table>




            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>horario</th>
                    <th>apellido paterno docente</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($arregloDocentes as $arregloDocente) { ?>
                    <tr>
                        <td><?= $arregloDocente["NOMBRE_CARRERA"] ?></td>
                        <td><?= $arregloDocente["APELLPA_DOC"] ?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>

        </div>
    </div>


<?php include('views/global/footer.view.php') ?>