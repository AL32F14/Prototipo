<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prototipo</title>

<!--grupo CSS-->
<link rel="stylesheet" type="text/css" href="css/temaapp7.min.css">
<link rel="stylesheet" href="css/jquery.mobile.icons-1.4.5.min.css"/>
<link rel="stylesheet" href="css/jquery.mobile.structure-1.4.5.min.css"/>
<!--Grupo JavaScript-->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<script src="js/acciones.js"></script>
<script src="phonegap.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>

<body onLoad="MM_preloadImages('imagenes/SemanaSanta03.jpg')">
<div data-role="page" id="principal" data-theme="a">
   <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
     <h1>Diccionario de Mixteco a Español</h1>
     <center>
     </center>
   </div>
      
<div>
    <ul data-role="listview" data-theme="b" class="ui-listview ui-group-theme-b">
    <li class="ui-first-child ui-last-child">
    <a href="#Pagina1" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
    <h2>Palabras Favoritas</h2>
    <p>Diccionario con palabras solamente Marcadas Como Favoritas</p>
      </a>
    </li>
    <li class="ui-first-child ui-last-child">
      <a href="#Pagina2" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
      <h2>Oraciones de la Calle</h2>
      <p>Muestra Oaciones que puedes Decir en la Calle</p>
      </a>
    </li>
   <li class="ui-first-child ui-last-child">
     <a href="#Pagina3" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
     <h2>Oraciones en la Tienda</h2>
     <p>Muestra Oaciones que puedes Decir en la Tienda</p>
     </a>
   </li>
  <li class="ui-first-child ui-last-child">
     <a href="#Pagina4" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
     <h2>Oraciones en la Casa</h2>
     <p>Muestra Oraciones que Puedes Utilizar en una Casa Ajena</p>
     </a>
  </li>
  <li class="ui-first-child ui-last-child">
     <a href="#Pagina5" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
     <h2>Oraciones en la Escuela</h2>
     <p>Muestra Oraciones que Peuedes Decir en la Ecuela</p>
     </a>
     </li>
     <li class="ui-first-child ui-last-child">
     <a href="#Pagina6" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
     <h2>Oraciones en el Hospital</h2>
     <p>Muestra Oraciones que Puedes Utilizar En el Hospital</p>
     </a>
     </li>
  </ul>
</div>
<div data-role="footer" align="center" data-theme="a">
   <div>
     <h4>Prototipo</h4>
     <h4>Jesus Angel Rojano Martinez</h4>
     <h4>Donaciano Diaz Flores</h4>
   </div>
</div>
</div>

<div data-role="page" id="Pagina1" data-add-back-btn="true" data-theme="a">
     <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
     <h1>Palabras y Oraciones Favoritas</h1>
     </div>
     <div data-role="content" align="center">
     <h2>(Buscador?)</h2>
      <div>(Palabras en el Orden que dijo el Maestro)</div>
     </div>
    <div data-role="footer" data-theme="a">
      <h4>Rojano Martinez Jesus Angel</h4>
    </div>
</div>
</div>

<div data-role="page" id="Pagina2" data-add-back-btn="true" data-theme="a">
    <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
       <h1>Celebracion 4 de Mayo</h1>
    </div>
    <div data-role="content" align="center">
    <h2>Batalla de Atlixco</h2>
        <div>La Batalla de Atlixco tuvo lugar el 4 de mayo de 1862 en las inmediaciones de la Hacienda de las Traperas en Atlixco en el estado de Puebla, México, entre elementos del ejército mexicano de la república, al mando de los generales Antonio Carvajal y Tomás O'Horan contra las tropas al servicio del Segundo Imperio Mexicano comandadas por el general José María Cobos y de Leonardo Márquez, compuesta de soldados conservadores mexicanos en apoyo de envío de refuerzos para llevar a cabo la Batalla de Puebla, durante la Segunda Intervención Francesa en México.

Esta batalla culminó con una victoria republicana y debido a esto el grupo conservador de Márquez no pudo lograr su objetivo de auxiliar a las tropas francesas del Conde de Lorencez en la batalla de Puebla.</div>
    </div>
    <div data-role="footer" data-theme="a">
       <h4>Rojano Martinez Jesus Angel</h4>
    </div>
</div>
</div>

<div data-role="page" id="Pagina3" data-add-back-btn="true" data-theme="a">
   <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
        <h1>Celebracion 5 de Mayo</h1>
  </div>
    <div data-role="content" align="center">
    <h2>Batalla de Puebla</h2>
        <div>
          <p> Hoy se celebra el día en que en 1862, el ejército mexicano derrotó al ejército francés en una batalla llevada a cabo en la ciudad de Puebla. Muchos creen que el cinco de mayo es el día de la independencia de México, pero es el 16 de septiembre.

En Estados Unidos, en “cinco de mayo” se celebra el orgullo y patrimonio cultural mexicano. Hay muchos festivales y fiestas alrededor del país y tu puedes hacer de esta fecha una ocasión especial cocinando comida y poniendo música mexicana para tu familia.</p>

      </div>
    </div>
     
    <div data-role="footer" data-theme="a">
       <h4>Rojano Martinez Jesus Angel</h4>
    </div>
</div>
</div>

<div data-role="page" id="Pagina4" data-add-back-btn="true" data-theme="a">
   <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
        <h1>Celebracion 10 de Mayo </h1>
  </div>
    <div data-role="content" align="center">
    <h2>Dia de las Madres</h2>
      <div>
        <p>Hoy domingo, se celebra en Estados Unidos, el día de la madre.   Reconocemos a las madres adoptivas y de sangre, a las madrastras,   abuelas y bisabuelas. Este día celebrado hace siglos, tiene por objeto   reconocer las figuras maternas, su labor, y su contribución a la   sociedad. Fue establecido por el congreso de EE.UU en 1914 y aquí en   about.com podrás encontrar todos los recursos necesarios para hacer de   este un día muy especial.</p>
      </div>
   </div>
   
<div data-role="footer" data-theme="a">
   <h4>Rojano Martinez Jesus Angel</h4>
 </div>
</div>
</div>

<div data-role="page" id="Pagina5" data-add-back-btn="true" data-theme="a">
   <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
        <h1>Celebracion 15 de Mayo </h1>
  </div>
    <div data-role="content" align="center">
    <h2>Dia del Maestro</h2>
      <div>
        <p>La Asociación Nacional de Educación   llama a que los padres se tomen el tiempo de &ldquo;honrar a sus educadores   locales y reconocer el papel crucial que juegan los maestros en   asegurarse de que cada estudiante reciba una educación de calidad&rdquo;<br>
        Haz un tributo a los maestros de tus hijos.</p>
        <p> Puede ser un regalo, o algo tan simple como una   nota manuscrita diciéndoles cuánto aprecias su trabajo; también puedes   pedirle a tus hijos que escriban un poema para sus maestros o que los   dibujen y escriban sus mejores características.</p>
        <p>*La fecha del día   del día nacional de los maestros cambia anualmente y es el primer martes   de la primera semana completa en Mayo.</p>      </div>
   </div>
<div data-role="footer" data-theme="a">
   <h4>Rojano Martinez Jesus Angel</h4>
 </div>
</div>
</div>
<div data-role="page" id="Pagina6" data-add-back-btn="true" data-theme="a">
   <div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
        <h1>Celebracion 30 de Mayo</h1>
  </div>
    <div data-role="content" align="center">
    <h2>Dia del Homologado</h2>
      <div>
        <p>Fueron 553 trabajadores de la educación homologados, los que recibieron el pago del proceso 2012, evento que fue convocado por el Secretario General de la Sección 51 del Sindicato Nacional de Trabajadores de la Educación (SNTE), Jorge Luis Barrera de la Rosa, junto con los responsables del área laboral, quienes lo acompañaron en el presídium.

La bienvenida en voz de Ivonne Quiroz Espezzia, reconoció la dedicación, el compromiso y el logro del Secretario General, Jorge Luis Barrera de la Rosa,  y reflexionó sobre el impacto que tendrá este recurso en el bolsillo de cada uno de los trabajadores de la educación, que de esta manera, el SNTE cumple con su función de cuidar los derecho laborales de sus agremiados.

El reconocer el esfuerzo, la dedicación y la responsabilidad en el aula, le correspondió a la maestra Claudia Luna Salgado, quien en su mensaje, envió un abrazo a cada uno de los beneficiados, quien expresó que es gratificante escuchar que en Puebla están los mejores docentes y prueba de ello, son los resultados de la evaluación del desempeño. Una gran motivación fue cada una de las palabras que expresó la directora de Bachilleratos Estatales y Preparatorias Abiertas.

Por su parte, Alejandro Medina Ochoa, compartió el saludo y la felicitación del Presidente del Consejo General Sindical, Juan Díaz de la Torre, y con gran tino, reconoció el trabajo realizado por Jorge Luis Barrera de la Rosa, para lograr este proceso de compactación, recategorización y regularización del personal homologado: "El SNTE ratifica y cumple con el objetivo por el cual fue creado, la defensa de los derechos laborales de los trabajadores de la educación, y a la vez se cumple con la transparencia y rendición de resultados”.</p>
      </div>
   </div>
<div data-role="footer" data-theme="a">
   <h4>Rojano Martinez Jesus Angel</h4>
 </div>
</div>
</body>
</html>