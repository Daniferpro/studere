<?php 

# Aquí listamos los materiales correspondientes para cada materia y clase por grupo
#este archivo es llamado en index.php en la seccion materiales
function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    obtener_estructura_directorios($ruta_completa);
                } else {
                    echo "<a download='STUDERE_UY_MATERIAL_$archivo' href='$ruta_completa'><li>" . $archivo . "</li></a>";
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "Sin materiales para descargar....<br/>";
    }
}
   
      
   
   
   
   
$ruta = '../../../profe/material/'.$materia.'/'.$id_clase;
obtener_estructura_directorios($ruta);
   
?>