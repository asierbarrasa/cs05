<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Cocina</title>
</head>
<body>
  <h1>Pedidos</h1>
<form method="GET" action="resumen.php" id="form">
    <label><input type="checkbox" name="check" id="check">Peido</label><br>
    <div id="textarea" >
    </div>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>

  $(document).ready(function(){
    var strProd = "<?php echo $_GET["listProd"]; ?>"
    var list = strProd.split(",")

    $("#textarea").html("<br/>")
    for(var i = 1; i<list.length-1; i++){
      $("#textarea").html($("#textarea").html() + list[i] + "<br/>")
    }
  });

  </script>
</body>
</html>
