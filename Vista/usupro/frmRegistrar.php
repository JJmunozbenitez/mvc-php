 <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Registrar Inscripcion</h6>
            <form method="POST" action="?controlador=usupro&accion=registrar" onsubmit="return false;">
                
                <div class="row">
                    <div class="col-lg-6">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="codigo" class="form-label">Codigo del programa</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo del programa" required="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4" onclick="registrarusupro()">Registrar Datos</button>                
            </form>
            <a href='?controlador=usupro&accion=principal' class='btn btn-danger mt-2'>Volver</a>
        </div>     
</div>
 