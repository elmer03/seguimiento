<?php include("views/global/header.view.php")?>

<div class="contenedor">
    <div class="container nt-form-docente ">

        <form action="actualizarDocente.php?id=<?php echo $docentes['ID_DOCENTE'] ?>" method="POST" onsubmit="return validate();">
            <fieldset class="form-group ">
                <LEGEND>Registro de Docentes</LEGEND>
                <div class="form-group div-form-nom col-md-3">
                    <label for="lab-nombre">(*) Nombres:</label>
                    <input type="text" REQUIRED class="form-control input-global" id="nombres" name="nombre" placeholder="nombres" value="<?php echo $docentes['NOMBRE_DOC']; ?>">
                </div>

                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Apellido Paterno</label>
                    <input type="text" class="form-control input-global" id="ape-pat" name="apePaterno" placeholder="apellido paterno" value="<?php echo $docentes['APELLPATERNO_DOC']; ?>" >
                </div>

                <div class="form-group div-form-ape-mat col-md-3">
                    <label for="lab-ape-mat" >Apellido Materno</label>
                    <input type="text" class="form-control input-global" id="ape-mat" name="apeMaterno" placeholder="apellido materno" value="<?php echo $docentes['APELLMATERNO_DOC']; ?>" >
                </div>

                <div class="col-md-3">
                    <div class="form-group col-xs-2 div-form-ci">
                        <label for="lab-ci"> (*) C.I.:</label>
                        <input type="text" class="form-control input-global" id="ci" name="ci" placeholder="carnet" value="<?php echo $docentes['CI_DOCENTE']; ?>" >
                    </div>

                    <div class="form-group col-xs-2 div-form-sel">
                        <label for="lab-expendido">Expedido:</label>
                        <select class="form-control sel-expendido select-global" name='departamento' id='departamento' >
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "lpz"): ?>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "cbba"): ?>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "scz"): ?>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "pts"): ?>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "tja"): ?>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "oru"): ?>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "ben"): ?>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "pdo"): ?>
                                <option value='pdo'>PDO</option>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "chq"): ?>
                                <option value='chq'>CHQ</option>
                                <option value='lpz'>LPZ</option>
                                <option value='cbba'>CBBA</option>
                                <option value='scz'>SCZ</option>
                                <option value='pts'>PTS</option>
                                <option value='tja'>TJA</option>
                                <option value='oru'>ORU</option>
                                <option value='ben'>BEN</option>
                                <option value='pdo'>PDO</option>
                            <?php endif;?>
                        </select>
                    </div>
                </div>

                <div class="form-group div-form-fec-nac col-md-3">
                    <label for="lab-fec-nac">(*) Fecha de Nacimiento:</label>
                    <input type="text" class="form-control input-global" id="fec-nac" name="fecNacimiento" placeholder="dd/mm/aa" value="<?php echo $docentes['NACIMIENTO_DOC']; ?>" >
                </div>

                <div class="form-group div-from-sexo col-md-2">
                    <label for="lab-sexo">Sexo:</label>
                    <select class="form-control sel-sexo select-global" name='sexo'>
                        <?php if($docentes['GENERO_DOC'] == "F"): ?>
                            <option value="F">F</option>
                            <option value="M">M</option>
                        <?php endif;?>
                        <?php if($docentes['GENERO_DOC'] == "M"): ?>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        <?php endif;?>
                    </select>
                </div>

                <div class="form-group div-form-tel-fij col-md-2">
                    <label for="lab-tel-fij-doc">Teléfono Fijo</label>
                    <input type="text" class="form-control input-global" id="tel-fij-doc" name="telf" placeholder="telefono" value="<?php echo $docentes['TELEFONO_DOC']; ?>" >
                </div>

                <div class="form-group form-doc-celular col-md-2">
                    <label for="lab-celular">(*) Celular:</label>
                    <input type="text" class="form-control input-global" id="celular-doc" name="cel" placeholder="celular" value="<?php echo $docentes['CELULAR_DOC']; ?>" >
                </div>

                <div class="form-group div-form-dir-dom col-md-3">
                    <label for="formGroupExampleInput2">(*) Dirección Domiciliaria:</label>
                    <input type="text" class="form-control input-global" id="direccion" name="direccion" placeholder="domicilio" value="<?php echo $docentes['DIRECCION_DOC']; ?>" >
                </div>

                <div class="form-group div-form-cor-elc col-md-3">
                    <label for="formGroupExampleInput2">(*) Correo Electrónico</label>
                    <input type="text" class="form-control input-global" id="email" name="correo" placeholder="xyz@dominio.com"  value="<?php echo $docentes['CORREO_DOC']; ?>" >
                </div>

                <div class="form-group div-form-pro col-md-3">
                    <label for="formGroupExampleInput2">(*) Profesion:</label>
                    <input type="text" class="form-control in-tit input-global" id="profesion" name="profesion" placeholder="profesion"  value="<?php echo $docentes['PROFECION_DOC']; ?>" >
                </div>

                <div class="form-group div-form-ded col-md-3">
                    <label for="lab-ded">Dedicación:</label>
                    <select class="form-control select-global" name="dedicacion">
                        <?php if($docentes['DEDICACION_DOC'] == "Parcial"): ?>
                        <option value="Parcial" >Parcial</option>
                        <option value="exclusivo">Exclusivo</option>
                        <?php endif;?>
                        <?php if($docentes['DEDICACION_DOC'] == "exclusivo"):  ?>
                            <option value="exclusivo">Exclusivo</option>
                            <option value="Parcial" >Parcial</option>
                        <?php endif;?>
                    </select>
                </div>

                <div class="col-md-8 div-form-nota">
                    <br>
                    <label for="lab-nota">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label>

                </div>
            </fieldset>
            <div class=" form-group col-mod-4 col-md-offset-4">
                <button type="submit" class="btn registrar btn-global" >Registrar</button>
                <button type="submit" onclick="salir()" class="btn cancelar btn-global" >Cancelar</button>
            </div>
        </form>
        <div id="res"></div>
    </div>
</div>