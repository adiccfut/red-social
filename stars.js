document.getElementById("stars").innerHTML = ' <!-- Modal Trigger --> <a id="startButton" class="waves-effect waves-light btn modal-trigger" href="#modal1">Valorar APP</a> <!-- Modal Structure --> <div id="modal1" class="modal"> <div class="modal-content"> <font color="#000000"><h4>Valorar APP</h4></font> <p class="clasificacion"> <input id="radio1" type="radio" name="estrellas" value="1"> <label for="radio1">★</label> <input id="radio2" type="radio" name="estrellas" value="2"> <label for="radio2">★</label> <input id="radio3" type="radio" name="estrellas" value="3"> <label for="radio3">★</label> <input id="radio4" type="radio" name="estrellas" value="4"> <label for="radio4">★</label> <input id="radio5" type="radio" name="estrellas" value="5"> <label for="radio5">★</label> </p> </div> <div class="modal-footer"> <a href="#!" class="modal-close waves-effect waves-green btn-flat">Mas tarde</a> </div> </div>';

        $(".clasificacion").find("input").change(function(){
  var valor = $(this).val()
  $(".clasificacion").find("input").removeClass("activo")
  $(".clasificacion").find("input").each(function(index){
     if(index+1<=valor){
      $(this).addClass("activo")
     }
  })
  /*aqui agregas lo que necesitas hacer según el valor*/
  
  if(valor==1){
  // alert('redireccion del valor 1');
    document.write('<h4>Gracias, su valoración fue enviada. Si quiere puede contactarnos por Instagram y lo intentaremos ayudar.</h4><br><a href="home.html"><h4>Volver</h4></a>');
  }
  if(valor==2){
  // alert('redireccion del valor 2');
    document.write('<h4>Gracias, su valoración fue enviada. Si quiere puede contactarnos por Instagram y lo intentaremos ayudar.</h4><br><a href="home.html"><h4>Volver</h4></a>');
  }
  if(valor==3){
  // alert('redireccion del valor 3');
    window.top.location="https://play.google.com/store/apps/details?id=com.futbolarg.free";
  }
  if(valor==4){
  // alert('redireccion del valor 4');
    window.top.location="https://play.google.com/store/apps/details?id=com.futbolarg.free";
  }
  if(valor==5){
  // alert('redireccion del valor 5');
    window.top.location="https://play.google.com/store/apps/details?id=com.futbolarg.free";
  }
})

$(".clasificacion").find("label").mouseover(function(){
  var valor = $(this).prev("input").val()
  $(".clasificacion").find("input").removeClass("activo")
  $(".clasificacion").find("input").each(function(index){
     if(index+1<=valor){
      $(this).addClass("activo")
     }     
  })
})
let calificadores = document.getElementsByName("estrellas")
let estrellasButton = document.getElementById("startButton")
//con esto evaluas de que cuando recarguen la pagina el boton siga oculto
// if (calificacion < 2) {
	if(localStorage.getItem("calificacion")){
	    estrellasButton.style.display = "none";
	}
// }
//con esto ocultas el boton y guardas el localstorage
let seleccionarCalificacion = function() {
    let calificacion = this.getAttribute("value");
    localStorage.setItem('calificacion', calificacion);
    estrellasButton.style.display = "none";
};
for (let i = 0; i < calificadores.length; i++) {
    calificadores[i].addEventListener('click', seleccionarCalificacion,false);
}