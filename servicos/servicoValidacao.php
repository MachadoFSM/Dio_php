<?php 
function validaNome(string $nome) : bool
{
    if(empty($nome)) 
    {
        setarMensagemErro('O nome não pode ser vazio, por favor prencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 3) 
    {
        setarMensagemErro('O nome deve conter mais de 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome é muito extenso');
        return false;
    }
    return true;
} 
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade)) 
    {
        setarMensagemErro('Informe um numero para idade');
        return false;
    }
    return true;
}
?>