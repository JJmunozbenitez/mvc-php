<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Editar de usuario</h6>
            <form method="POST" action="?controlador=usuario&accion=frmEditar" onsubmit="return false;"
                id="frmEditar">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres"
                        value=" <?php echo $this->infoUsuario["USU_NOMBRES"];?>  "placeholder="Digite su nombre" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" 
                        value="<?php echo $this->infoUsuario["USU_APELLIDOS"];?> "placeholder="Digite su Apellido" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                        value="<?php echo $this->infoUsuario["USU_EMAIL"];?> "placeholder="Digite su Email" required="">
                    </div>
                  
                     <div class="col-lg-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono"  name="telefono" 
                        value="<?php echo $this->infoUsuario["USU_TELEFONO"];?> "placeholder="Digite su Telefono" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nac"  name="fecha_nac"
                        value="<?php echo $this->infoUsuario["USU_FCH_NAC"];?>" placeholder="" required="">
                    </div>
                </div>

                <input type="hidden" name="uid" id="uid" value="<?php echo $this->infoUsuario["USU_UID"];?>">     
                <button type="submit" class="btn btn-primary mt-4" onclick="editarUsuario()">Editar</button>          
                
                
            </form>
                <a href='?controlador=usuario&accion=principal' class='btn btn-danger mt-2'>Volver</a>
        </div>     
</div>
