<?php
$categorias =[];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if(strlen($nome) >40 )
{
    echo 'o nome é muito extenso, favor abreviar';
    return;
}

if(strlen($nome) <3 )
{
    echo 'o nome tem que ter menos de 3 letras';
    return;
}

if(empty($nome))
{
    echo 'o nome não pode ficar em branco ou vazio';
    return;
}

if(!is_numeric($idade))
{
    echo 'o valor em idade deve ser um numeral';
    return;
}


if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador " .$nome. " compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador " .$nome. " compete na categoria adulto";
    }
}

