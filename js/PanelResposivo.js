// Ejecutar funcion en el evento clik
document.getElementById("btn_open").addEventListener("click", open_closes_menu);
// Declaramos variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");
// evento para mostra y ocultar menu
function open_closes_menu() {
	body.classList.toggle("body_move");
	side_menu.classList.toggle("menu__side_move");
}
//  si el ancho de la pagina es menor de 760px, ocultara el menu al recargar la pagina
if (window.innerHeight < 750) {
	body.classList.add("body_move");
	side_menu.classList.add("menu__side_move");
}
// haciendo el menu adaptable
window.addEventListener("resize", function () {
	if (this.window.innerHeight > 760) {
		body.classList.remove("body_move");
		side_menu.classList.remove("menu__side_move");
	}
	if (this.window.innerHeight < 760) {
		body.classList.add("body_move");
		side_menu.classList.add("menu__side_move");
	}
});
