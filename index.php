<!DOCTYPE html>
  <?php
      $persona=[$nombre,$edad,$genero];
      $nombre = empty($_POST['nombre']) ? "campo vacio" : $_POST['nombre'];
      $edad = empty($_POST['edad']) ? "campo vacio" : $_POST['edad'];
      $genero = empty($_POST['genero']) ? "campo vacio" : $_POST['genero'];
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Examen DAWES 1T</title>
    </head>
    <body>
        <header>
            <center><h1>Estadística Edad:</h1></center> 
        </header>
        <form>
            <fieldset><legend>Formulario Datos:</legend>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" />
                <label for="nombre">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" />
                <label for="nombre">Edad:</label>
                <input type="text" id="edad" name="edad" size="3"/><br/>

                <fieldset><legend>Sexo</legend>
                    <input type="radio" id="hombre" name="genero" value="hombre">
                    <label for="hombre">Hombre</label><br>
                    <input type="radio" id="mujer" name="genero" value="mujer">
                    <label for="mujer">Mujer</label><br>
                    <input type="radio" id="otro" name="genero" value="otro">
                    <label for="otro">Otro</label>
                </fieldset>
                
                <input type="submit" name="añadir" value="añadir">
                <input type="submit" name="Submit" value="Estadisticas"/>
                <input type="submit" name="Submit" value="Empezar de nuevo"/>
            </fieldset>
            
        </form>
        <h1>Instrucciones</h1>
        <ul>    
            <li>Pulsar <b>Añadir</b> para añadir los datos del sujeto.</li>
            <li>Pulsar <b>Estadística</b> para obtener la media de edad según sexo.</li>
            <li>Pulsar <b>Empezar de nuevo</b> para comenzar de nuevo.</li> 
        </ul>
        <div id="mostrar">
            <?php
            if (isset($_POST['añadir'])){//si selecciona añadir
                function anadirPersona($Persona) {
                    $nombre="";
                    $edad="";
                    $genero="";
                    
                    echo "<table>
                        <tr>
                            <th> $nombre  </th>
                            <th>$edad </th>
                            <th>$genero</th>
                        </tr>";   
                    }   
                }
            ?>
            
        </div>
      
    </body>
</html>
