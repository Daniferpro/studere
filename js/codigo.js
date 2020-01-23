function crearPeticion () {
  var peticion = null;
  try {
    peticion = new XMLHttpRequest();
  }catch (IntentarMs) {
    try{
      peticion = new ActiveXObject("Msxml2.XMLHTTP");
    }catch (OtroMs){
      try{
        peticion = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (fallo) {
        peticion = null;
      }
    }
  }
  return peticion;
}
