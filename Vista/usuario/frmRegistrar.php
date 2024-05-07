<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Registrar de usuario</h6>
            <form method="POST" action="?controlador=usuario&accion=registrar" onsubmit="return false;">
                
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Digite su nombre" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Digite su Apellido" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite su Email" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite su Contraseña" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono"  name="telefono" placeholder="Digite su Telefono" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nac"  name="fecha_nac" placeholder="" required="">
                    </div>

                    <div class="col-lg-2 mt-4">
                        <select name="rol" id="rol" class="form-select">
                            <option selected>Rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Secretaria</option>
                            <option value="3">Estudiante</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4" onclick="registrarusuario()">Registrar</button>
                
            </form>

            <a href='?controlador=usuario&accion=principal' class='btn btn-danger mt-2'>Volver</a> 
                
        </div>     
</div>
