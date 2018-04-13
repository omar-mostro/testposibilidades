
            <div class="form-group">
                <label for="exampleInputNombre">Nombre</label>
                <input type="text" class="form-control" value="<?= $medico->nombre ?? '' ?>" name="nombre" id="exampleInputNombre"
                       placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEdad">Edad</label>
                <input type="number" class="form-control" value="<?= $medico->edad ?? '' ?>" name="edad" id="exampleInputEdad"
                       placeholder="Edad">
            </div>
            <div class="form-group">
                <label for="exampleInputEspecialidad">Especialidad</label>
                <input type="text" name="especialidad" class="form-control" id="exampleInputEspecialidad"
                       aria-describedby="emailHelp" value="<?= $medico->clave ?? '' ?>"
                       placeholder="clave">
            </div>

            <div class="form-group">
                <input type="submit" value="Guardar medico" class="btn btn-outline-success">
            </div>

