<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) //'empty()' verifica se uma determinada string está com o valor preenchido ou não
{
   $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor preencha o novamente';
   header('location: index.php');
   return;
}

else if (strlen($nome) < 3) //'strlen()' retorna a quantidade de caracteres da string
{
   $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres';
   header('location: index.php');
   return;
}

else if (strlen($nome) > 40) 
{
    $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres';
   header('location: index.php');
   return;
}

else if (!is_numeric($idade))  // "is_numeric()" verifica se a variável é uma variável numérica
{
    $_SESSION['mensagem de erro'] = 'Informe um número para a idade';
   header('location: index.php');  
   return; 
}


if($idade >= 6 && $idade <= 12)
{
    for ($i=0; $i <= count($categorias); $i++) 
    { 
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
            
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i=0; $i <= count($categorias); $i++) 
    { 
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}
else
{
    for ($i=0; $i <= count($categorias); $i++) 
    { 
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}
