<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Registrar de programa</h6>
            <form method="POST" action="?controlador=programa&accion=registrar" onsubmit="return false;">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite su nombre" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="codigo" class="form-label">Codigo</label>
                        <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Codigo" required="">
                    </div>
                </div>     
                <button type="submit" class="btn btn-primary mt-4" onclick="registrarprograma()">Registrar</button>
            </form>

            <a href='?controlador=programa&accion=principal' class='btn btn-danger mt-2'>Volver</a>
        </div>     
</div>

