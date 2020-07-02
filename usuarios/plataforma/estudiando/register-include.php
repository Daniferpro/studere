
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Studere | Registración</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Studere | Registración</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="usuarios/plataforma/estudiando/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition register-page">
  
<div class="register-box">
  
  <div class="register-logo">
    <a href="../../../"><b>STUDERE.UY</b></a>
  </div>

  <div class="register-box-body">
    
    <p class="login-box-msg">Registro Nuevo</p>
    
<form name="registro" id="register-form" action="./usuarios\plataforma\estudiando\action_reg.php" method="post" role="form" >
                 
                  <div class="form-group has-feedback ">
                    <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre" value="">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="text" name="apellido" id="apellido" tabindex="1" class="form-control" placeholder="Apellido" value="">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                  <input type="number" class="form-control" nim="091000001" max="099999999" required placeholder="Celular ej: 098765432" name="celular">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="email" class="form-control" required value="<?php echo $datos['id_user'];?>" placeholder="<?php echo $datos['id_user'];?>" name="email">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                  <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                  <div class="col-xs-8">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" required name="checkbox"> Acepto los <a href="#"  data-toggle="modal" data-target="#exampleModalLong">terminos</a>
                        <!-- Button trigger modal -->
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="wpp"> Marque si desea recivir el código de verificación por Whatsapp</a>
                        <!-- Button trigger modal -->
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-12">
                    <button type="submit" id="register-submit" class="btn btn-primary btn-block btn-flat ">Registrarme</button>
                  </div>
                  
                </form>

   
      

   
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Terminos y condiciones de uso de www.studere.uy</h3>
        
      </div>
      <div class="modal-body">
      <p> 
      <h4> Política de Privacidad </h4>
          Esta Política de privacidad se actualizó por última vez el 30 de junio, 2020.
          Gracias por unirse a la plataforma virtual de aprendizaje en línea más grande de Uruguay. En Studere.uy .
          ("Studere", "nosotros", "nos"), respetamos la privacidad del usuario y queremos que comprenda cómo
          recopilamos, utilizamos y compartimos los datos sobre él. Esta Política de privacidad aborda nuestras
          prácticas de recopilación de datos y describe los derechos del usuario a acceder, corregir o restringir el uso
          que hacemos de los datos personales del usuario.
          A menos que enlacemos con una política diferente o que indiquemos otra cosa, esta Política de privacidad se
          aplicará cuando el usuario visite o utilice el sitio web, las aplicaciones móviles (webview), o los servicios
          relacionados de Studere (los "Servicios").
          Al utilizar los Servicios, el usuario acepta los términos de esta Política de privacidad. El usuario no
          deberá utilizar los Servicios si no está de acuerdo con esta Política de privacidad o con cualquier otro
          acuerdo que rija el uso que hace de los Servicios.
          </p>
          <h4> Datos del Usuario </h4>
                    Recopilamos determinados datos del usuario directamente, como información que este introduce por sí
          mismo, datos sobre su participación en cursos y datos de plataformas de terceros que el usuario
          conecta con Studere. También recopilamos algunos datos de forma automática, como información sobre
          el dispositivo del usuario y las partes de nuestros Servicios con las que el usuario interactúa o que pasa
          tiempo utilizando.
          
          <h4>  Datos que el usuario nos proporciona </h4>

                    Podremos recopilar diferentes datos del usuario o sobre este, en función de cómo utilice los Servicios. A
          continuación se muestran algunos ejemplos para ayudar al usuario a comprender mejor los datos que
          recopilamos.
          Al crear una cuenta y utilizar los Servicios, incluido a través de una plataforma de terceros, recopilamos los
          datos que el usuario nos proporciona directamente, lo que incluye:

         <li> Datos de la
          cuenta</li>

          Para utilizar algunas funciones (como inscribirse en un curso o clase), el usuario tiene que
          crear una cuenta de usuario. Al crear o actualizar la cuenta del usuario, recopilamos y
          almacenamos los datos que el usuario nos proporciona, como su dirección de correo
          electrónico, contraseña, celular, nombre y apellido y le asignamos un número de
          identicación único ("Datos de la cuenta").
          
          <li>Contenido compartido</li>
          Algunas partes de los Servicios permiten al usuario interactuar con otros usuarios o
          compartir contenido públicamente, por ejemplo, al publicar comentarios en la página de
          un curso, al formular o contestar preguntas, al enviar mensajes a estudiantes o
          profesores, o al publicar fotografías u otro trabajo que el usuario cargue. Dicho
          contenido compartido podrá estar visible públicamente para otros usuarios en
          función del lugar donde se publique.

          <li> Datos de los cursos </li>
          Al inscribirse y tomar cursos o clases, recopilamos algunos datos, como los cursos, tareas y
          exámenes que ha comenzado y completado; los intercambios del usuario con
          instructores, profesores asistentes y otros estudiantes; y trabajos, respuestas a
          preguntas y otros elementos enviados para cumplir los requisitos de los cursos.

         <li> Datos de pago de
          los estudiantes</li>

          Si el usuario realiza compras, recopilamos algunos datos sobre las compras (como el
          nombre y el método de pago), según sea necesario para procesar el pedido.
          El usuario debe proporcionar algunos datos de pago y facturación directamente a
          nuestros socios de procesamiento de pago, como el nombre, la información de la
          tarjeta de crédito o débito y el correo. Por motivos de seguridad, Studere.uy no
          recopila ni almacena datos condenciales del titular de la tarjeta, como todos los
          números de la tarjeta de crédito o los datos de autenticación de la tarjeta.
          Recopilamos determinados datos del usuario directamente, como información que este introduce por sí
          mismo, datos sobre su participación en cursos .

          <li> Pago de
          los instructores</li>

          Si el usuario es un profesor, puede vincular su cuenta bancaria, 
           a los Servicios para recibir pagos. Al vincular una cuenta de pago,
          recopilamos y utilizamos determinada información, como la dirección de correo
          electrónico de la cuenta de pago, el ID de la cuenta, la dirección física u otros datos
          que necesarios para enviar pagos a la cuenta del usuario. Para cumplir la legislación
          aplicable, también trabajamos con terceros de Cobranzas que recopilan la
          información en este caso Mercado Pago (a partir de ahora MP) de acuerdo con los requisitos legales. Entre dicha información
          MP se puede incluir información sobre la residencia, números de identicación
          MP, información biográca y otra información personal necesaria para nes
          MP. Por motivos de seguridad, Studere no recopila ni almacena información
          confidencial de la cuenta bancaria. La recopilación, el uso y la divulgación de los datos
          de pago, facturación y calidad del usuario están sujetos a la política de privacidad y
          a otros términos del proveedor de la cuenta de pago del usuario.

                    <li>Comunicaciones y
          asistencia</li>
          Si el usuario se pone en contacto con nosotros para solicitar asistencia o informar de
          un problema o inquietud (independientemente de si ha creado o no una cuenta),
          recopilaremos y almacenaremos su información de contacto, mensajes y otros datos
          sobre el usuario, como su nombre, dirección de correo electrónico, ubicación,
          sistema operativo, dirección IP y cualquier otro dato que nos proporcione o que
          recopilemos a través de medios automatizados.
          Utilizamos estos datos para responder al usuario e investigar su duda o inquietud, de
          conformidad con esta Política de privacidad.
          <h4> Cookies y herramientas de recopilación de datos </h4>

                    Como se detalla en nuestra Política de cookies, Studere y los proveedores de servicios que actúan en nuestro
          nombre (como Google Analytics y anunciantes de terceros) utilizan archivos de registro del servidor y
          herramientas de recopilación de datos automatizadas, como cookies, etiquetas, secuencias de comandos,
          enlaces personalizados, huellas digitales del dispositivo o navegador y señalizaciones web (en conjunto,
          "Herramientas de recopilación de datos") al acceder y utilizar los Servicios.
           Cuando el usuario utiliza los
          Servicios, de forma automática, estas Herramientas de recopilación de datos realizan un seguimiento de
          determinados Datos del sistema y Datos de uso y los recopilan. En algunos
          casos, relacionamos los datos recopilados a través de esas Herramientas de recopilación de datos con otros
          datos que recopilamos, como se describe en esta Política de privacidad.
          Utilizaremos herramientas, como cookies, señalizaciones web, servicios de análisis y proveedores de
          publicidad, para recopilar los datos mencionados anteriormente. Algunas de estas herramientas
          ofrecen la posibilidad de excluir voluntariamente la recopilación de datos.

         <li> Utilizamos cookies</li>
          (pequeños archivos que los sitios web envían al dispositivo del usuario para identicar de
          forma única a su navegador o dispositivo, o para almacenar datos en su navegador) para cosas tales como
          analizar el uso que el usuario hace de los Servicios, personalizar su experiencia, facilitar el inicio de sesión en
          los Servicios y reconocer al usuario cuando regresa. Utilizamos señalizaciones web (pequeños objetos que
          nos permiten medir las acciones de los visitantes y usuarios que utilizan los Servicios) para cosas tales como
          identicar si se ha visitado una página, identicar si se ha abierto un correo electrónico y hacer publicidad de
          una forma más ecaz mediante la exclusión de los usuarios existentes de determinados mensajes
          promocionales o la identicación de la fuente de la descarga de una nueva aplicación móvil.
          Studere usa los siguientes tipos de cookies:
          
          <li>Preferencias:</li> cookies que recuerdan datos sobre el navegador y la conguración de preferencia que
          afectan al aspecto y al comportamiento de los Servicios.
          <li>Seguridad: </li> cookies utilizadas para permitir el inicio de sesión y el acceso a los Servicios; protegen de
          inicios de sesión fraudulentos y prevenir el uso indebido o el uso no autorizado de la cuenta del
          usuario.
        
          <li>Estado de la sesión:</li> cookies que realizan un seguimiento de las interacciones del usuario con los
          Servicios para ayudarnos a mejorar los Servicios y la experiencia de navegación del usuario, a recordar
          la información de inicio de sesión y a permitir el procesamiento de las compras de cursos que realiza el
          usuario. Son estrictamente necesarias para que los Servicios funcionen correctamente, por lo que si las
          desactiva, algunas funcionalidades se detendrán o no estarán disponibles.

          <h4>Con quién compartimos los datos del usuario?</h4>

                    Podemos compartir los datos del usuario con terceros en las siguientes circunstancias o según se describe
          en esta Política de privacidad:
          <li>
          Con los instructores del usuario: Compartimos los datos que tenemos sobre el usuario (excepto la
          dirección de correo electrónico) con los instructores o los profesores asistentes de los cursos en los
          que se inscribe o sobre los que solicita información para que puedan mejorar sus cursos para el
          usuario y para otros estudiantes. Estos datos pueden incluir cosas como la ciudad, el sistema operativo, 
          la conguración del dispositivo, el sitio que le ha llevado a Studere y las
          actividades del usuario en Studere. Si recopilamos otros datos sobre el usuario (como la edad o el sexo),
          también podremos compartirla. No compartiremos la dirección de correo electrónico, ni numero de contacto del usuario con
          los profesores. 
          </li>
          <li>
          Con otros estudiantes e profesores: En función de la conguración del usuario, el contenido
          compartido y los datos del perfil podrán estar visibles públicamente, incluso para otros estudiantes y
          profesores. Si el usuario realiza una pregunta a un profesor, la información del
          usuario (incluido su nombre) también podrá estar visible públicamente para otros usuarios, en función
          de la conguración del usuario y dónde realiza la pregunta, si es atravez del sistema público de comentarios, estará visible para otros
          usuarios, profesores y administrativos de la plataforma, si en cambio lo realiza por medio del chat privado, los mensajes son vizualizados
          únicamente por el estudiante y el destinatario.</li>

                    <h4>Seguridad</h4>
                    Utilizaremos medidas de seguridad adecuadas en función del tipo y la condencialidad de los datos que
          se almacenen. Al igual que ocurre con cualquier sistema con conexión a Internet, siempre existe un
          riesgo de acceso no autorizado, así que es importante proteger la contraseña del usuario y que este se
          ponga en contacto con nosotros si sospecha que se ha producido un acceso no autorizado a su cuenta.

          Studere toma medidas de seguridad adecuadas para proteger contra el acceso no autorizado, la alteración, la
          divulgación o la destrucción de los datos personales del usuario que recopilamos y almacenamos. Estas
          medidas varían en función del tipo y la condencialidad de los datos. Sin embargo, lamentablemente, ningún
          sistema puede ser totalmente seguro, por lo que no podemos garantizar que las comunicaciones entre el
          usuario y Studere.uy, los Servicios o cualquier información que se nos proporcione en relación con los datos que
          recopilamos a través de los Servicios estarán libres del acceso no autorizado de terceros. La contraseña del
                    usuario es una parte importante de nuestro sistema de seguridad, y es responsabilidad del usuario
          protegerla. El usuario no deberá compartir su contraseña con terceros, y si cree que su contraseña o su
          cuenta están en peligro, deberá cambiarla inmediatamente y ponerse en contacto con contacto@studere.uy
           para informar de sus inquietudes.
                      
           <h4>Nuestra política con respecto a los menores de edad:</h4>
            Reconocemos los intereses en cuanto a privacidad de los niños y adolescentes y animamos a los padres y tutores a
            participar activamente en las actividades y los intereses en línea de sus hijos. Los niños menores de 13 años
            no deben utilizar los Servicios. Si descubrimos que
            hemos recopilado datos personales de niños menores de esas edades, tomaremos medidas razonables para
            eliminarlos.
            Los padres que crean que Studere puede haber recopilado datos personales de niños menores de esas
            edades pueden enviar una solicitud para que se eliminen a la dirección contacto@studere.uy

            <h4>¿Que Son las Cookies?</h4>
                      
            Las cookies son pequeños archivos de texto que el navegador almacena al navegar por Internet. Se pueden
            utilizar para recopilar, almacenar y compartir datos sobre las actividades del usuario en sitios web, incluido
            en Studere. Las cookies también nos permiten recordar cosas sobre las visitas del usuario a Studere, para facilitar el uso del sitio.
            Utilizamos cookies de sesión, que caducan tras un breve periodo de tiempo o al cerrar el navegador, y
            cookies persistentes, que se mantienen almacenadas en el navegador durante un periodo de tiempo
            definido. Utilizamos cookies de sesión para identicar al usuario durante una sesión de navegación única,
            como cuando se inicia sesión en Studere. Utilizamos cookies persistentes cuando debemos identicar al
            usuario durante un periodo más largo, como al solicitar que mantengamos iniciada la sesión del usuario.

                      



                    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">He leído los Terminos y Condiciones</button>
        
      </div>
    </div>
  </div>
</div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

<script type="text/javascript">
    function validar_clave(e) {

      var caract_invalido = " ";
      var caract_longitud_min = 8;
      var caract_longitud_max = 15;
      var cla1 = $('#register-form #password').val();
      var cla2 = $('#register-form #confirm-password').val();
      if (cla1 == '' || cla2 == '') {
        alert('Debes introducir tu clave en los dos campos.');
        //document.registro
        e.preventDefault();
        return false;
      }
      if (cla1.length < caract_longitud_min) {
        alert('Tu clave debe constar con minimo de ' + caract_longitud_min + ' carácteres.');
        //document.registro
        e.preventDefault();
        return false;
      }
      
      if (cla1.length > caract_longitud_max) {
        alert('Tu clave debe constar con maximo des' + caract_longitud_max + ' carácteres.');
        //document.registro
        e.preventDefault();
        return false;
      }
      if (cla1.indexOf(caract_invalido) > -1) {
        alert("Las claves no pueden contener espacios");
        //document.registro
        e.preventDefault();
        return false;
      } else {
        if (cla1 != cla2) {
          alert("Las claves introducidas no son iguales");
          //document.registro
          e.preventDefault();
          return false;
        } else {
          alert('Contraseña correcta Redireccionando');
          //$('#register-form').trigger('submit');
          return true;
        }
      }
    }

    $(function() {


      $('#register-form').submit(function(e) {
        validar_clave(e);
      });
    });
  </script>

</body>
</html>


</body>
</html>
