let imagenes=document.querySelectorAll('.gallery__img'); //obtendra todas las imagenes
let modal=document.querySelector('#modal');
let img=document.querySelector('#modal__img');
let boton=document.querySelector('#modal__boton');

for (let i=0; i< imagenes.length; i++){
	imagenes[i].addEventListener('click', function(e){ /*parametro e*/
modal.classList.toggle("modal--open");
let src= e.target.src; /*obten la ruta de la imagen al hacer click*/
img.setAttribute("src", src);
	});
}
boton.addEventListener('click',function(){
	modal.classList.toggle("modal--open");
});