


<?php

$nombres = 
["jorge"  =>'HTML5',
 "Julia" =>'CSS3',
  "Jose" =>'Javascript' , 
  "Mateo" =>'Json/XML' ,
   "Jaume" =>'Python', 
   "Petro" =>'Java', 
   "Alejandro" =>'Sass/Less', 
   "Fran" =>'Laravel',
   "Adri" =>'HTML5',
   "Lolo" =>'CSS3',
   "Cristian" =>'Javascript',
   "Jordi" =>'Json/XML',
   "Luis" =>'Python',
   "David" =>'Java',
   "Tony" =>'Laravel'
];




echo '<pre>';
print_r($nombres);
echo '</pre>';


// zona de pruebas
if( isset($_POST['personas']) && isset($_POST['trabajos']) ) {

    // Variable para la cantidad de personas
    $cantidad = $_POST['personas'];
    $habilidad = $_POST['trabajos'];
 
    // Imprimir la lista de personas en el nuevo equipo
    foreach($nombres as $nombres => $valor) {
        if ($habilidad == $valor) {
            echo  'esta persona es:'.''. $nombres .' ';
        }
    }
 }



?>

<!-- HTML 5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creador de grpos de desaroyo</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- header -->
    <header>
        <nav>
     <h1>Creador de grupos de desarrollo</h1>
        </nav>
    </header>
    <!-- section -->

<form action="index.php" method="post" name="formulario">
    
<label for="">Cantidad de personas</label>
    <select name="personas">
    <option selected="true" disabled="disabled">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <!-- <option value="3">3</option>
  <option value="4">4</option> -->
</select><br><br>


<label for="">Puesto de trabajo</label>
<select name="trabajos" >
<option selected="true" disabled="disabled">seleccione</option>
  <option value="HTML5">HTML5</option>
  <option value="CSS3">CSS3</option>
  <option value="Javascript">Javascript</option>
  <option value="Json/XML"> Json/XML</option>
  <option value="Python">Python</option>
  <option value="Java">Java</option>
  <option value="Sass/Less">Sass/Less</option>
  <option value="Laravel">Laravel</option>

</select><br><br>
<input type="submit" value="Enviar">
    <!-- footer -->
    </form>

    <footer>
    
    </footer>
</body>
</html>