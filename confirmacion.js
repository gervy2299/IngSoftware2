function eventoClick(evento){
	//alert("Has presionado Click!");
	alert("Registro eliminado");
	
}

function eventoClicky(eventos){
	//alert("Has presionado Click!");
	alert("Registro Actualizado");
	
}

function peticion(){
var ID ;
ID=document.getElementById('id_Persona').value;

$.post("TraerDatosPer.php",{ID}).done(function (data) {

console.log(data);

});

}
//al presionar tab PLATOS----------------------------
function ciPlatos(){
var ID ;
ID=document.getElementById('id_Platos').value;

$.post("TraerDatosPlato.php",{ID}).done(function (data) {

console.log(data);

});

}
//al presionar tab BOLETAS
function peticionBol(){
var ID ;
ID=document.getElementById('id_Boleta').value;

$.post("TraerDatosBole.php",{ID}).done(function (data) {

console.log(data);

});

}

//al presionar tab COMPROBANTE
function petiComprobante(){
var ID ;
ID=document.getElementById('id_Comprobante').value;

$.post("TraerDatosCompro",{ID}).done(function (data) {

console.log(data);

});

}

//al presionar tab PLATOS----------------------------
function peticiPlatos(){
var ID ;
ID=document.getElementById('id_Platos').value;

$.post("TraerDatosPlato.php",{ID}).done(function (data) {

console.log(data);

});

}

//al presionar tab TURNOS
function petiTurno(){
var ID ;
ID=document.getElementById('id_Turno').value;

$.post("TraerDatosturno.php",{ID}).done(function (data) {

console.log(data);

});

}

//al presionar tab FACTURA
function petiFactu(){
var ID ;
ID=document.getElementById('id_Factura').value;

$.post("TraerDatosFactu.php",{ID}).done(function (data) {

console.log(data);

});

}


//al presionar tab CLIENTE
function cionCliente(){
var ID ;
ID=document.getElementById('idcliente').value;

$.post("TraerDatoCliente.php",{ID}).done(function (data) {

console.log(data);

});

}

//al presionar tab EMPLEADO
function cionEmple(){
	var ID;
	ID=document.getElementById('idEmpleado').value;
	$.post("TraerDatoEmpleadoo.php",{ID}).done(function(data){
		console.log(data);
	});
}


