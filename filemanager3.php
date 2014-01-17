<?php
$path = dirname(__FILE__);
$file = $path.'/files/exemplo.txt'; 
$content = '';
if (file_exists($file) && is_readable($file)) {
$lista = file($file);
            for ($i = 0; $i < count($lista); $i++) {
                // separa cada elemento e guarda em um array temporario
                $tmp = explode(', ', $lista[$i]);
                // atribui cada elemento do array temporario ao novo array
                $lista[$i] = array('apelido' => $tmp[0], 'outrosnomes' => rtrim($tmp[1])); //rtrim para evitar que crie um espaco depois do enter no texto
                $content = $lista;
            }

}
else {
        $content = 'O ficheiro solicitado nao foi encontrado ou esta protegido';
    }
?>
<html>
   <head>
     <title>file</title>
   </head>
   <body>
     <p><b><?php print_r($content);?></b></p>
  </body>
</html>