var app = new Vue({
  el: '#app',
  data: {

    pregunta: '',
    respuesta: {},

  },

  mounted: function(){



  },


  methods: {

    preguntar: function(){

      capturador = this;
      axios({
        method: 'POST',
        url: '/bjorn/pages/Preguntar',
        data: {
          consultaRecibida: this.pregunta,
        }

      }).then(function (response) {
        // handle success;
        console.log(response.data);
        if (response.data.respuesta != '') {

          capturador.respuesta = response.data;

        }else {

          capturador.respuesta = 'aguante racing la concha de tu hermana aguante racing'


        }

        //console.log(response.data);
      }).catch(function (error) {
        console.log(error);
      });

      this.pregunta = '';

    },

  },

})
