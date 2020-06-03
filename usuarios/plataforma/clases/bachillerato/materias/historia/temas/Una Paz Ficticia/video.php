<?php

echo "


<html>
				
<video   id='video' width='100%' controls  preload='auto'>
<script lenguage='javascript'>
    let xhr = new XMLHttpRequest();

    //creamos peticion al servidor
    xhr.open('GET','./consecuencias.mp4');

    //seteamos el tipo de respuesta a un array buffer
    xhr.responseType = 'arraybuffer';

    //definimos un manejador (handler) para la respuesta del servidor

    xhr.onload = (e)=>{
        let blob = new Blob([xhr.response])
        let url = URL.createObjectURL(blob)

        let imagen = document.getElementById('video')
        imagen.src = url;
    }
    xhr.send();	
  


</script>


</html>

"  ;


?>