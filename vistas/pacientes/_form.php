
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" value="<?= $paciente->nombre ?? '' ?>" name="nombre" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Edad</label>
                <input type="number" class="form-control" value="<?= $paciente->edad ?? '' ?>" name="edad" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Edad">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Genero</label>
                <select name="genero" class="form-control" id="exampleFormControlSelect1">
                    <option <?= empty($paciente->genero) ? '' : $paciente->genero == Helpers::PACIENTE_MASCULINO ? 'selected' : ''?> value="<?= Helpers::PACIENTE_MASCULINO ?>">Masculino</option>
                    <option <?= empty($paciente->genero) ? '' : $paciente->genero == Helpers::PACIENTE_FEMENINO  ? 'selected' : ''?> value="<?= Helpers::PACIENTE_FEMENINO ?>">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Clave</label>
                <input type="text" name="clave" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp" value="<?= $paciente->clave ?? '' ?>"
                       placeholder="clave">
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-outline-success">
            </div>

