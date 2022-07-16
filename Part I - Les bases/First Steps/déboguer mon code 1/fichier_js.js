/*
function test() {
    alert('Hello');
}

for(var i = 0; i < 10; ++i)
    console.log('La valeur à afficher est ' + i);

var helloObject = {
    english: 'Hello',
    french: 'Bonjour',
    spanish: 'Hola'
};

//Et on affiche cet objet dans la console

console.log(helloObject);

//Tant qu'à faire, on affiche aussi un tableau

var helloTab = ['Hello', 'Bonjour', 'Hola'];

console.log(helloTab);

alert(helloObject); // affiche juste "[object Object]"
alert(helloTab); 

*/

function a(value){
    console.log(value);
}

function b(value){
    a(value + 1);
}

function c(value){
    b(value + 1);
}

//On utilise ci-dessous une IIFE, on déclare une fonction anonyme que l'on exécute immédiatement
(function fonctionAnonyme(){
    for(var i = 0; i < 10; ++i)
		c(i);
})();