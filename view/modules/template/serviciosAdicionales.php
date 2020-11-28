
<!-- Main content -->
    <div class="content-wrapper">
      <form action="../../controller/userController.php" method="POST" class="border mx-auto p-3 form">
      <input type="hidden" name="token" value="registrar">
        <div class="form-row">
          <div class="col-md-5 mb-3">
          
            <label for="Restaurante">Restaurante</label>
            <div class="form-check">
              <input class="form-check-input" name="restaurante" type="radio" value="restaurante carmela" id="defaultCheck1">
              <label class="form-check-label"  for="defaultCheckrest1">
               Restaurante carmela
              </label>
              <br>
              <input class="form-check-input" name="restaurante" type="radio" value="restaurante El mejor asado" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheckrest2">
                Restaurante el mejor asasdo
              </label>
              <br>
              <input class="form-check-input" name="restaurante" type="radio" value="restaurante fernand pinchos" id="defaultCheck3">
              <label class="form-check-label"  for="defaultCheckrest3">
                Restaurante Fernand's pinchos
              </label>
            </div>
            <br>
            <label for="teamav">Equipo AudioVisual</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="audiovisuales" value="sluciones audiovisuales" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheckav1">
                  Soluciones audiovisuales
              </label>
              <br>
              <input class="form-check-input" type="radio" value="visores cartagena" name="audiovisuales" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheckav2">
                Visores cartagena
              </label>
              <br>
              <input class="form-check-input" type="radio" name="audiovisuales" value="videobean de la cosa" id="defaultCheck3">
              <label class="form-check-label" for="defaultCheckav3">
                videobeans de la costa
              </label>
            </div>
            <br>
            <label for="transporte">Transporte</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="aviatur" name="transporte" id="defaultCheck1">
              <label class="form-check-label" for="defaultChecktp1">
                Aviatur
              </label>
              <br>
              <input class="form-check-input" type="radio" name="transporte" value="transportes Molina" id="defaultCheck2">
              <label class="form-check-label" for="defaultChecktp2">
                Transporte BMolina
              </label>
              <br>
              <input class="form-check-input" type="radio" name="transporte" value="Transportes alianza" id="defaultCheck3">
              <label class="form-check-label" for="defaultChecktp3">
                Transporte Alianza
              </label>
            </div>
          </div>  
          <br>
          <label for="mobiliario">Mobiliario</label>
          
            <div class="form-check">
              <input class="form-check-input" type="radio" value="casa de eventos la matuna" name="mobiliario" id="defaultCheck1">
              <label class="form-check-label" for="defaultChecktp1">
                casa eventos la matuna
              </label>
              <br>
              <input class="form-check-input" type="radio" name="mobiliario" value="centro de recreacion mamonal" id="defaultCheck2">
              <label class="form-check-label" for="defaultChecktp2">
                Centro de recreacion mamonal
              </label>
              <br>
              <input class="form-check-input" type="radio" name="mobiliario" value="centro parque confenalco" id="defaultCheck3">
              <label class="form-check-label" for="defaultChecktp3">
                Centro parque confenalco
              </label>
            </div>
          </div>  
            
            
          <button class="btn bt-sm  btn-success">Agregar</button>  
        </div>
        
        </form>
        
    </div>
    <!-- Main content -->  