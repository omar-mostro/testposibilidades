
            <div class="form-group">
                <label for="exampleInputEmail1">Fecha</label>
                <input type="date" class="form-control" value="<?= $cita->fecha ?? '' ?>" name="nombre" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Fecha">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hora</label>
                <input type="number" class="form-control" value="<?= $cita->hora ?? '' ?>" name="edad" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="hora">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hospital</label>
                <?php $lista_hospitales='';
                     $query="select * from hospitales";
                     $hospitales = DataBase::all($query);
                     foreach ($hospitales as $indice => $hospital):
                       $lista_hospitales.="<option value='".$hospital->id."'>".$hospital->nombre."</option>";
                     endforeach;
                ?>
                <select name="hospital" class="form-control" id="exampleFormControlSelect1">
                    <option  value="">Seleccione</option>
                    <?= $lista_hospitales?>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Médico</label>
              <?php $lista_medicos='';
                   $query="select * from medicos";
                   $medicos = DataBase::all($query);
                   foreach ($medicos as $indice => $medico):
                     $lista_medicos.="<option value='".$medico->id."'>".$medico->nombre."</option>";
                   endforeach;
              ?>
              <select name="medico" class="form-control" id="exampleFormControlSelect1">
                  <option  value="">Seleccione</option>
                  <?= $lista_medicos?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Paciente</label>
              <?php $lista_pacientes='';
                   $query="select * from pacientes";
                   $pacientes = DataBase::all($query);
                   foreach ($pacientes as $indice => $paciente):
                     $lista_pacientes.="<option value='".$paciente->id."'>".$paciente->nombre."</option>";
                   endforeach;
              ?>
              <select name="paciente" class="form-control" id="exampleFormControlSelect1">
                  <option  value="">Seleccione</option>
                  <?= $lista_pacientes?>
              </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-outline-success">
            </div>
