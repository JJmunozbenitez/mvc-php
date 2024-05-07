<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Editar de Programa</h6>
            <form method="POST" action="?controlador=programa&accion=frmEditar" onsubmit="return false;"
                id="frmEditar">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                        value=" <?php echo $this->infoPrograma["PRO_NOMBRE"];?>  "placeholder="Digite su Nombre" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="codigo" class="form-label">Codigo</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" 
                        value="<?php echo $this->infoPrograma["PRO_CODIGO"];?> "placeholder="Digite su Codigo" required="">
                    </div>
                </div>

                <input type="hidden" name="uid" id="uid" value="<?php echo $this->infoPrograma["PRO_UID"];?>">     
                <button type="submit" class="btn btn-primary mt-4" onclick="editarPrograma()">Editar</button>                          
            </form>

            <a href='?controlador=programa&accion=principal' class='btn btn-danger mt-2'>Volver</a>
        </div>     
</div>
