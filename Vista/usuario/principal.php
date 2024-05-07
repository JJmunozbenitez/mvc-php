<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <h3>Administracion de Usuario</h3>
            <a href="?controlador=usuario&accion=frmRegistrar" class="btn btn-primary">Agregar Usuario</a>
            

        </div>
    </div>

    <?php
    if($_SESSION['USU_ROL'] == 1 or $_SESSION['USU_ROL']== 2){
        echo "<div class='row mt-4'>
            <div class='col-lg-12'>
                <div class='bg-light rounded p-4'>
                    <h3> Reporte de Usuarios</h3>
                        <form action='?controlador=usuario&accion=reportePDF' method='POST' target='_blank'>
                        <div class='col-lg-2' >
                            <select name='rol' class='form-select' aria-label='Default select example'>
                                <option value='1'>Admin</option>
                                <option value='2'>Secretaria</option>
                                <option value='3'>Estudiante</option>
                            </select>
                        </div>
                            <input type='submit' name='aceptar' value='Generar Reporte' class='btn btn-success mt-2'>
                        </form>
                </div>
            </div>
         </div>   
         ";
        }
        ?>


</div>


<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="bg-light rounded p-4">
                <table class="table">
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>SELECCIONAR</th>
                        
                    </tr>
                    <?php
                        foreach($this->usuarios as $info) {
                            $uid = $info["USU_UID"];

                            echo"<tr>";
                            echo"<td>".$info["USU_NOMBRES"]."</td>";
                            echo"<td>".$info["USU_APELLIDOS"]."</td>";
                            echo"<td>".$info["USU_EMAIL"]."</td>";
                           
                            
                            if($_SESSION['USU_ROL']==1){

                              echo  "<td><a href='?controlador=usuario&accion=frmEditar&uid=$uid' class='btn btn-success mt-2'>Editar</a> |";

                              echo  " <a href='?controlador=usuario&accion=eliminar&uid=$uid' class='btn btn-danger mt-2'>Eliminar</a>
                                
                                </td>";
                                echo "</tr>";
                            }
                        }
                    ?>

                </table>
            </div>

        </div>
    </div>

</div>