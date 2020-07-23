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

      console.log(this.pregunta);

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
        if(response.data === true){

          location.href="/aleriaVue/pages/intranet";

        }else{

          capturador.errors.push('Los datos son incorrectos');

        }
        //console.log(response.data);
      }).catch(function (error) {
        console.log(error);
      });
    },

  },

})
