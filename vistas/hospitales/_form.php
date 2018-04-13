
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" value="<?= $paciente->nombre ?? '' ?>" name="nombre" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Nombre">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" value="<?= $paciente->direccion ?? '' ?>" name="direccion" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Direccion">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Estado</label>
                <input type="text" class="form-control" value="<?= $paciente->estado ?? '' ?>" name="estado" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Estado">
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-outline-success">
            </div>

