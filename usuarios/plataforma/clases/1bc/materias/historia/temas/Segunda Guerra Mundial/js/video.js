//Codificamos atravez de una blob url el video impidiendo asi la descarga
let xhr = new XMLHttpRequest();

//creamos peticion al servidor
xhr.open('GET','../../video.mp4');//ruta del video

//seteamos el tipo de respuesta a un array buffer
xhr.responseType = 'arraybuffer';

//definimos un manejador (handler) para la respuesta del servidor

xhr.onload = (e)=>{
let blob = new Blob([xhr.response])
let url = URL.createObjectURL(blob)

let imagen = document.getElementById('video')//id="video" id del video en la etiqueta html 
imagen.src = url;
}
xhr.send();	



