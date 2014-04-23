function comprobar(formaccso)
{
	if (!compruebaUser(formaccso.usuario))
		return false;
	if (!compruebaPass(formaccso.clave))
		return false;
	return true;
}

function compruebaUser(control)
{
	texto = control.value;
	longitud = texto.length;

	if (texto.search(/[a ]+(\s[a-zA-z]+)*$/) == 0)
		return true;
	else
	{
		alert("Introduzca un Usuario con formato válido.");
		control.value='';
		return false;
	}
}

function compruebaPass(control)
{
	if(control.value.search(/[c]+(\d{4})*$/) == 0)
		return true;
	else
	{
		alert("La contraseña introducida no tiene el formato correcto.");
		return false;
	}
}