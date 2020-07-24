
<div id="app">


  <section id="bot">
    <div class="container-sm mt-5 mb-5 py-5 mx-5">
      <div class="col-md-5">
        <div class="card">
          <div class="card-body">
            <div class="mb-4 py-4" v-for="item in respuesta">
              <p>{{ item.respuesta }}</p>
            </div>
            <hr>

              <div class="form-group">
                <textarea name="pregunta" v-model="pregunta"  id="pregunta" class="form-control" placeholder="Preguntame" rows="8" cols="80"></textarea>
              </div>
              <button @click="preguntar" type="submit" name="button" class="btn btn-sm btn-dark">Enviar</button>

          </div>
        </div>
      </div>
    </div>
  </section>


</div>
