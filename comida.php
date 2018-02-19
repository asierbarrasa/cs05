<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Comida</title>
</head>

<body>
  <div class="form">
    <h1>Comida</h1>
    <form action="">
      <input class="box" type="button" value="Menú 1" name="menu1" id="menu1">
      <input class="box" type="button" value="Menú 2" name="menu2" id="menu2">
      <input class="box" type="button" value="Menú 3" name="menu3" id="menu3">
      <input class="box" type="button" value="Menú 4" name="menu4" id="menu4">
      <input class="box" type="button" value="Menú 5" name="menu5" id="menu5"><br><br>
      <table id="table">
        <tr><td>ID</td><td>Producto</td><td>Precio</td></tr>
      </table>
      <br>
      <br>
      Total: <input type="text" readonly id="total" value="0"/>
      <br>
      <input class="box" type="button" value="Clean" name="cleanComida" id="cleanComida">
      <input class="box" type="submit" value="Siguiente" id="siguienteComida">
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>

  $("#menu1").click(function(){
    $('#table').append('<tr><td>1</td><td>Menu 1</td><td>5€</td></tr>');
    var price = parseInt($("#total").val())
    $('#total').val(price + 5)
  });
  $("#menu2").click(function(){
    $('#table').append('<tr><td>2</td><td>Menu 2</td><td>6€</td></tr>');
    var price = parseInt($("#total").val())
    $('#total').val(price + 6)
  });
  $("#menu3").click(function(){
    $('#table').append('<tr><td>3</td><td>Menu 3</td><td>7€</td></tr>');
    var price = parseInt($("#total").val())
    $('#total').val(price + 7)
  });
  $("#menu4").click(function(){
    $('#table').append('<tr><td>4</td><td>Menu 4</td><td>8€</td></tr>');
    var price = parseInt($("#total").val())
    $('#total').val(price + 8)
  });
  $("#menu5").click(function(){
    $('#table').append('<tr><td>5</td><td>Menu 5</td><td>9€</td></tr>');
    var price = parseInt($("#total").val())
    $('#total').val(price + 9)
  });
  $("#cleanComida").click(function(){
    $("#table").html("<tr><td>ID</td><td>Producto</td><td>Precio</td></tr>")
    $("#total").val("0")
  });



  </script>

</body>

</html>
