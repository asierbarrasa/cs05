<?php
$xml = simplexml_load_file('./pedidos.xml');
  $listPed = explode("," , $_POST["ped"],1000);
  $pedido = $xml->addChild('pedido');
  $pedido-> addAttribute('completado', 'false');
  $pedido-> addAttribute('id', $_POST["id"]);
  $pedido-> addAttribute('total', $_POST["total"]);
  foreach ($listPed as $ped) {
    $ele = explode(" ", $ped, 1000);
    $producto = $pedido->addChild('producto');
    $producto->addChild('id', $ele[0]);
    $producto->addChild('nombre', $ele[1]);
    $producto->addChild('precio', $ele[2]);
    }

$xml->asXML('./pedidos.xml');


?>
