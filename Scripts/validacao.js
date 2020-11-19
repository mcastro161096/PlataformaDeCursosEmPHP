function InsereValor(value) 
{
    var campo = document.getElementById('display');
if (value == "C") 
{
    campo.value = "";
    return;
} 
if (value == "x")
 { var tamanho = campo.value.length;
   campo.value =  campo.value.substring(0,  campo.value.length - 1);
   return;
}


    if (campo.value == "") 
    {
        campo.value = value; 
    } 
    else
    {
        if (value == "+" || value == "-" || value == "/" || value == "*") 
        {
            var teste = campo.value.substring(campo.value.length -1); 
            if (teste != "+" && teste != "-" && teste != "/" && teste != "*" ) 
            {
                campo.value = campo.value + value;
            }
        } 
        else
            campo.value = campo.value + value;
    }

}

