
function num2Letters(nombre) {
    if(isNaN(nombre) || nombre < 0 || nombre > 999)
        return 'Veuillez entrer un nombre compris entre 0 et 999 !';
    if(!nombre)
        return 'zéro';
    
    var nb = '', centS = '', dixS = '', unitS = '', centaine = 0, dizaine = 0, unite = 0;
	var units = ['', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 
				'dix', 'onze', 'douze', 'treize', 'quatore', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf'],
		decades = ['', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante', 'quatre-vingt',
				  'quatre-vingt'],
		hundreds = ['', 'cent', ];
	
    unite = nombre % 10;
    nombre -= unite;
    dizaine = (nombre % 100) / 10;
    if(nombre > 99){
        nombre -= (dizaine * 10);
        centaine = nombre / 100;
        centS = (centaine === 1 ? hundreds[centaine] : (units[centaine] + '-' + 'cent')) + (centaine > 1 &&
				!dizaine && !unite ? 's' : '');
    }
	
	dixS = (dizaine === 1 && unite > 0) ? units[10 + unite] : decades[dizaine] + (!unite && (dizaine == 7 || dizaine == 9) ? '-dix' : '');
	/*unitS = (dizaine === 1 && unite > 0) ? '' : (dizaine == 7 ? ((unite == 1 ? 'et-':'') + units[10 + unite]) 
			: (dizaine == 9 ? units[10 + unite] : (dizaine > 1 && unite == 1 ? 'et-':'') + units[unite]));  */
	if ((dizaine === 1 && unite > 0) === false)
		unitS = (unite == 1 && dizaine > 1 && dizaine != 9 ? 'et-' : '') + 
			(((dizaine === 1 || dizaine === 7 || dizaine === 9) && unite > 0) ? units[10 + unite] : units[unite]);

	
	nb = centS + (centS && dixS ? '-':'') + dixS + (((dixS || centS) && unitS) ? '-':'') + unitS;
	
    return nb;            
}

var nombre = 124;
while(nombre = prompt('Entrez un nombre entre 0 et 999'))
	alert(num2Letters(parseInt(nombre, 10)));
