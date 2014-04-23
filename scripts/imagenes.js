function mouseover()
{
	document.images[0].src = '../imagenes/logoUCAContraste.png';
}

var nameprevio = 'fhtml';
var idprevio = 'idfhtml';

function intercambioficha(sw,iden)
{
		if(sw == 1)
		{
			document.images[iden.name].src = '../imagenes/ficha_activa.png';
			document.getElementById(iden.id).style.fontWeight = 'bold';
			document.getElementById(iden.id).style.color = 'white';
			nameprevio = iden.name;
			idprevio = iden.id;
		}

		else
		{
			document.images[nameprevio].src = '../imagenes/ficha.png';
			document.getElementById(idprevio).style.fontWeight = 'normal';
			document.getElementById(idprevio).style.color = 'blue';
		}
}