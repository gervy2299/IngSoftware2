function eventoClick(evento){
	//alert("Has presionado Click!");
	alert("Registro eliminado");
	
}

function eventoClicky(eventos){
	//alert("Has presionado Click!");
	alert("Registro Actualizado");
	
}
//al presionar tab PERSONA
function peticion(){
var ID ;
ID=document.getElementById('id_Persona').value;

$.post("TraerDatosPer.php",{ID}).done(function (data) {

console.log(data);

});

}
//al presionar tab COMPROBANTE
function peticionComp(){
var ID ;
ID=document.getElementById('id_Comprobante').value;

$.post("TraerDatosCompro",{ID}).done(function (data) {

console.log(data);

});

}
//al presionar tab TURNOS
function peticionTurno(){
var ID ;
ID=document.getElementById('id_Turno').value;

$.post("TraerDatosturno.php",{ID}).done(function (data) {

console.log(data);

});

}
//al presionar tab BOLETAS
function peticionBole(){
var ID ;
ID=document.getElementById('id_Boleta').value;

$.post("TraerDatosBole.php",{ID}).done(function (data) {

console.log(data);

});

}
//al presionar tab FACTURA
function peticionFactu(){
var ID ;
ID=document.getElementById('id_Factura').value;

$.post("TraerDatosFactu.php",{ID}).done(function (data) {

console.log(data);

});

}

//al presionar tab EMPLEADO
function cionEmpleado(){
	var ID;
	ID=document.getElementById('idEmpleado').value;
	$.post("TraerDatoEmpleadoo.php",{ID}).done(function(data){
		console.log(data);
	});
}
