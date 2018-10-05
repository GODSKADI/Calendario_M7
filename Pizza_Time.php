<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pizza Time</title>
  </head>
  <body>
    <h1>Prepara tu Pizza</h1>
    <hr>
    <form method="post" id="myForm" name="myForm">
      <h3>Seleciona el tipo de massa</h3>
      <input type="radio" name="massa" value="Fina" checked/>Fina
      <input type="radio" name="massa" value="Gruesa"/>Gruesa
      <input type="radio" name="massa" value="Rellena"/>Rellena
      <hr>
      <h3>Selecciona un ingrediente</h3>
      <input type="checkbox" name="ingrediente[]" value="Oregano" checked/>Oregano
      <input type="checkbox" name="ingrediente[]" value="Bacon"/>Bacon
      <input type="checkbox" name="ingrediente[]" value="Jamon"/>Jamon
      <input type="checkbox" name="ingrediente[]" value="Hamburguesa"/>Hamburguesa
      <hr>
      <h3>Tu pedido:
      <button type="submit" id="pedir">Precio Final</button>
      </h3>
    </form>
    <?php
      $precio_estadart = 5;
      $contador_ingredientes = 0;
      $precio_final = 0;
      $precio_massa = 0.5;
      echo "<p><b>Massa: </b>". $_POST["massa"]."</p>";
      $massa = $_POST["massa"].value;
      echo "<p><b>Ingredientes: </b>";
      $ingredientes = $_POST["ingrediente"];
      foreach($ingredientes as $ingrediente){
        echo $ingrediente . ", ";
        $contador_ingredientes++;
      }
      echo "</p><hr><h3>Precio Final: </h3>";
      $precio_final = $precio_estadart +$precio_massa + 0.5 * $contador_ingredientes;
      echo $precio_final;
     ?>
  </body>
</html>
