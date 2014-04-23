function centracorp()
{
	var correctorPercent = 0.6;//Se definen las dimensiones del contenido a centrar en porcentajes.
	if(window.innerWidth > document.getElementById('BloquePrincipal').offsetWidth - correctorPercent)
	{
		document.getElementById('BloquePrincipal').style.left = '50.6%';
		document.getElementById('BloquePrincipal').style.marginLeft = (-1) * document.getElementById('BloquePrincipal').offsetWidth / 2 + 'px';
	}
}

function centrapie()
{
	var correctorPorcent = 0.6;//Se definen las dimensiones del contenido a centrar en porcentajes.
	if(window.innerWidth > document.getElementById('PieDeBloque').offsetWidth - correctorPorcent)
	{
		document.getElementById('PieDeBloque').style.left = '50.6%';
		document.getElementById('PieDeBloque').style.marginLeft = (-1) * document.getElementById('PieDeBloque').offsetWidth / 2 + 'px';
	}
}