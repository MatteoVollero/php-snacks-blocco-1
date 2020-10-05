<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

function controlloNome($nome){
  if(strlen($nome) <= 3){
    echo "Nome troppo corto <br> ACCESSO NEGATO";
    return FALSE;
  }
  return TRUE;
}

function controlloMail($mail){
  if(strpos($mail,".") == FALSE || strpos($mail,"@") == FALSE){
    echo "Email non corretta <br> ACCESSO NEGATO";
    return FALSE;
  }
  return TRUE;
}

function controlloAge($age){
  if(is_numeric($age) == FALSE){
    echo "Errato inserimento dell'età <br> ACCESSO NEGATO";
    return FALSE;
  }
  return TRUE;
}


$nome = $_GET["nome"];
$mail = $_GET["mail"];
$age = $_GET["age"];

  // Sto tagliando la stringa mail di modo che controlli solo le cose dopo la @
  $mail = substr($mail,strpos($mail,"@")-1);

  if(controlloNome($nome) == FALSE || controlloMail($mail) == FALSE || controlloAge($age) == FALSE){
    die;
  }
  echo "ACCESSO RIUSCITO";


 ?>
