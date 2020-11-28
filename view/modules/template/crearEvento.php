<script src= "../../../js/formCrearEvento.js"></script>
<div class="content-wrapper">

      <form action="../../../controller/eventoController.php" onsubmit="return validarFormEvento();"; method="POST" class="border mx-auto p-3 form">
      <input type="hidden" name="token" value="registrarEvento">
        <div class="form-row">
          <div class="col-md-5 mb-3">
            <label for="nomevento">Nombre del evento</label>
            <input type="text" class="form-control " placeholder="Nombre del evento" name="nomevento" id="nomevento" >
            <br>
            
            <label for="tipoevento">Tipo de Evento:</label>
            <select id="tipoevento" name="tipoevento" class="form-control">
              <option value="disabled selected" selected>Seleccione...</option>
              <option value="1">Sociales</option>
              <option value="2">Coorporativos o Empresarios</option>
              <option value="3">Espirituales o Comunitarios</option>
              <option value="4">Academicos</option>
              <option value="5">Culturales y de ocio</option>
              <option value="6">Deportivos</option>
              <option value="7">Politicos</option>
              <option value="8">Educatiovs</option>
            </select>
            <br>
            <label for="catevento">Categoria de Evento:</label>
            <select id="catevento" name="catevento" class="form-control">
              <option value="disabled selected" selected>Seleccione...</option>
              <option value="1">Webinar</option>
              <option value="2">Taller</option>
              <option value="3">Congreso</option>
              <option value="4">Carrera</option>
              <option value="5">Encuentro</option>
              <option value="6">Feria Gastronomica</option>
              <option value="7">Fiesta Benefica</option>
              <option value="8">Fiesta en la Calle</option>
              <option value="9">Festivales</option>
              <option value="10">Hacktatón</option>
              <option value="11">Lanzamiento de Producto</option>
              <option value="12">Networking</option>
              <option value="13">Degustación</option>
              <option value="14">Torneo</option>

            </select>
            <br>
            <div class="form-group">
              <label for="descripcion_evento">Descripción</label>
              <textarea class="form-control" name="descripcion_evento" id="descripcion_evento" rows="5"></textarea>
              <small id="descripción_eventoHelp" class="form-text text-muted">Agregué pequeña descripcion del evento</small>
            </div>
            
          </div>
          <div class="col-md-5 ml-5 ">
            <label for="fechaHora">Fecha y Hora</label>
            <small id="fechayhora_eventoHelp" class="form-text text-muted">Informa a los asistentes cuando empieza y termina 
               el evento para organizarse</small>

            <label for="fechayhora_inicio" >Hora de Inicio</label>
            <br>
            <input type="datetime-local" name="fechaHoraInicio" id="fechaHoraInicio" class="fechaHoraInicio" d-inline>

            <br>
            <label for="fechayhora_finalizacion">Hora de Finalizacion</label> 
            <br> 
            <input type="datetime-local" id="fechaHoraFin" name="fechaHoraFin" d-inline>
            <br>
            <br>
              
              <label for="ubicación" >Ubicación </label>
              <div class="form-group">
              <div class="btn-group " data-toggle="buttons" name="lugar">
                <label class="btn btn btn-blue-grey waves-effect w-50 form-check-label active">
                  <input id="lugar" class="form-check-input" name="lugar" type="radio" value="0" th:field="*{lugar}" autocomplete="off" placeholder="Agregue aqui direccion fisica del evento">Lugar
                </label>
               
              <div class="btn-group " data-toggle="buttons" name="eventonline">
                <label class="btn btn btn-blue-grey waves-effect form-check-label w-50">
                  <input id="eventonline" class="form-check-input" name="lugar" type="radio" value="1" th:field="*{eventonline}" placeholder="Agregue aqui Link del evento">Evento online 
                </label>
              </div> 
              </div> 

                <div class="form-group">
                  <label for="Ubicacion" class=""></label>
                  <input type="text" class="form-control" name="ubicacion" id="ubicacion" th:field="*{ubicacion}" >
                  <small>Agregue dirección o link del evento online</small>
                </div>
              
            </div>
 <div class="form-group">
              <label for="costo">Costo Entrada</label>
              <input type="number" class="form-control" name="costo" id="costo" rows="5"></input>
              <small id="descripción_costo" class="form-text text-muted">Agregué un costo a su entrada</small>
            </div>
            
          </div>


             

              <!--validación javascript para ubicación-->
              <script>
                var lugar = document.getElementById('lugar');
                var eventonline = document.getElementById('eventonline');
                var ubicacion = document.getElementById('ubicacion');

                function updateStatus(){
                  if(lugar.checked){
                    ubicacion.disabled=false;
                  }else{
                   ubicacion.disabled=false;
                  }
                }
                lugar.addEventListener('change', updateStatus)
                eventonline.addEventListener('change',updateStatus)

                function nombreayuda(){
                  if(lugar.checked){
                    ubicacion.placeholder=false;
                    }else{
                      ubicacion.placeholder=false;
                    }

                  }
                  lugar.addEventListener('change', updateStatus)
                eventonline.addEventListener('change',updateStatus)
              </script>
              <!--validación javascript para ubicación-->
               
               
               <a href="#" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">No Quiero</a>

              <button class="btn bt-sm  btn-success">enviar</button> 
             
          </div>
        </div>
        </form>
    </div>
    <!-- Main content -->  

