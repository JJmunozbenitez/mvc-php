<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <h3>Administracion de Programas</h3>
            <a href="?controlador=programa&accion=frmRegistrar" class="btn btn-primary">Registrar Programa</a>

        </div>
    </div>

</div>


<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="bg-light rounded p-4">
                <table class="table">
                    <tr>
                        <th>NOMBRE</th>
                        <th>CODIGO</th>
                        <th>SELECCIONAR</th>
                    </tr>

                    <?php
                        foreach($this->programa as $info) {
                            $uid = $info["PRO_UID"];

                            echo"<tr>";
                            echo"<td>".$info["PRO_NOMBRE"]."</td>";
                            echo"<td>".$info["PRO_CODIGO"]."</td>";
                            
                            if($_SESSION['USU_ROL']==1){
                                echo "<td><a href='?controlador=programa&accion=frmEditar&uid=$uid'class='btn btn-success mt-2'>Editar</a> | ";

                                echo "<a href='?controlador=programa&accion=eliminar&uid=$uid'class='btn btn-danger mt-2'>  Eliminar</a>
                                </td>";
                                echo "</tr>";
                            }
                        };
                    ?>

                </table>
            </div>

        </div>
    </div>

</div>