<html> 
<head>
<meta charset="utf-8">
<title>Reconocimiento de Voz </title>
</head>
<body>


<video id="miVideo" width="50%" height="50%" controls>
       <source src="video.mp4" type="video/mp4">
   </video>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define a command.
  var commands = {
    'hola pilar': function() {
         alert('Hello world!');
          },
   'reproducir': playVideo,
   'pausar': pauseVideo,
   'Pgina Web pilares': PaginaWebPilares,
   'Curso Comunicacion': CursoComunicacion,
   'Aula inteligente' : AulaInteligente,
   'Curso de comunacion': CursoComunicacion,
   //'volver a prueba': ssss,
  };

  // Add our commands to annyang
  annyang.addCommands(commands);
  annyang.setLanguage("es-MX");

  // Start listening.
  annyang.start();
}

var vid = document.getElementById("miVideo");

 function playVideo() {
     vid.play();
 }
 function pauseVideo() {
    vid.pause();
 }

 function PaginaWebPilares() {
    window.location.replace('http://www.proyectopilares.com.pe/');
 }
 function AulaInteligente() {
    window.location.replace('PaginaAula.php');
 }

 function CursoComunicacion() {
    window.location.replace('pilares/comu.php');
 }

</script>
</body>
</html>