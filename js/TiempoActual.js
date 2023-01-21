
function mostrar_fecha() {
     
     let fecha = new Date();
     let mes = fecha.getUTCMonth();
     let dia = fecha.getUTCDate();
     let año = fecha.getUTCFullYear();
     document.getElementById("date").innerHTML = dia+"/"+mes+"/"+año;
}
mostrar_fecha();
