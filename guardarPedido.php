<?php
$path = "./pedidos";
if (file_exists($path)) {

    $file=fopen("$path/pedido".$_POST['id'].".xml","w+");
    $buffer = '<?xml version="1.0" encoding="utf-8"?>
              <Pedidos></Pedidos>';
       fwrite ($file,$buffer);
   fclose($file);
}
$xml = simplexml_load_file('./pedidos/pedido'.$_POST["id"].'.xml');
  $listPed = explode("," , $_POST["ped"],1000);
  $pedido = $xml->addChild('pedido');
  $pedido-> addAttribute('completado', 'false');
  $pedido-> addAttribute('id', $_POST["id"]);
  $pedido-> addAttribute('total', $_POST["total"]);
  $count = count ($listPed);
  for ($ped=1; $ped < $count -1 ; $ped++) {
    $ele = explode(" ", $listPed[$ped] , 1000);
    $producto = $pedido->addChild('producto');
    $producto->addChild('id', $ele[0]);
    $producto->addChild('nombre', $ele[1]);
    $producto->addChild('precio', $ele[2]);
    }
$xml->asXML('./pedidos/pedido'.$_POST["id"].'.xml');

?>
