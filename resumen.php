
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Resumen</title>
</head>

<body>

  <div class="form">
    <h1>Resumen</h1>
    <form action="">
      <div id="textarea" >
      </div>
      <br>
      <input type="submit" value="Finalizar pedido">
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>

  $(document).ready(function(){
    var strProd = "<?php echo $_GET["listProd"];?>"
    var list = strProd.split(",")

    $("#textarea").html("<br/>")
    for(var i = 1; i<list.length-1; i++){
      $("#textarea").html($("#textarea").html() + list[i] + "<br/>")
    }
    $("#textarea").html($("#textarea").html() + "<br><br> Total ha pagar: <?php echo $_GET['precioTotal'] ?>€")

    $("#textarea").html($("#textarea").html() + "<br><br> Tu número de pedido es: " + Math.floor((Math.random()*100)+1))

  });
  </script>
</body>

</html>