
var fecha = new Date();

var horaA = fecha.getHours()+":"+fecha.getMinutes();

Date.prototype.sumar = function(){
  this.setHours(this.getHours() + 1);

  return this.getHours();
};
 
// alert(new Date().sumar()+":"+fecha.getMinutes());
var horaFormated = new Date().sumar()+":"+fecha.getMinutes();

if (horaFormated > dta[24] ) {
console.log(dta[24] +" >= "+horaFormated);}
// console.log(fecha.getHours()+":"+fecha.getMinutes());
// alert("Día: "+fecha.getDate()+"\nMes: "+(fecha.getMonth()+1)+"\nAño: "+fecha.getFullYear());
// alert("Hora: "+fecha.getHours()+"\nMinuto: "+fecha.getMinutes()+"\nSegundo: "+fecha.getSeconds()+"\nMilisegundo: "+fecha.getMilliseconds());