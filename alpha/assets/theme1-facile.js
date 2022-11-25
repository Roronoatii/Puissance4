const divresult = document.querySelector("#resultat");

var tab = [
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0]
];
/*
var tabresult= [
    [1,1,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,2,2],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0]
] 
*/
let compt = 0;
var tabresult = generaterandomresult();
var oldselection = [];
var nbaffich = 0;
var ready = true;

affichertab();

function affichertab(){
    var txt ="";
    for(var i =0; i<tab.length; i++){
        txt += "<div>";
        for (var j=0; j < tab[i].length;j++){
            if (tab[i][j] === 0){
                txt += "<button class='btn btn-primary m-1' style='width: 100px; height:100px; border:none; padding:0%; border-radius:10px; margin-left:5px; margin-right:5px; margin-top:5px;' onClick = 'verif(\""+i+"-"+j+"\")' > <img src='./assets/card.jpeg' id='selected' onClick='animation()' style='width: 100%; height:100%; cursor:pointer; background-size:cover; border-radius:10px;'> </button>";
            }else{
                txt += "<img src ='"+getimage(tab[i][j])+"'  style='width: 100px;height:100px; border-radius:10px; margin-left:5px;  margin-right:5px; margin-top:5px;' class='m-1'>";
            }
        }
    }   txt+= "</div>"
    divresult.innerHTML =txt;
}
function getimage(valeur){
    var imgtxt ="./assets/memory/Theme1/";
    switch(valeur){
        case 1: imgtxt +="coeur.jpeg"
        break;
        case 2: imgtxt +="hiver.jpeg"
        break;
        case 3: imgtxt +="lac.jpeg"
        break;
        case 4: imgtxt +="lapin.png"
        break;
        case 5: imgtxt +="lavande.jpeg"
        break;
        case 6: imgtxt +="montagne.jpeg"
        break;
        case 7: imgtxt +="palmiers.jpeg"
        break;
        case 8: imgtxt +="pont.png"
        break;
        case 9: imgtxt +="riviere.jpeg"
        break;
        case 10: imgtxt +="sunset.jpeg"
        break;
        default : console.log("none");
    }
    return  imgtxt;
}
function verif(element){
    if(ready ===true){

    
        nbaffich++;
        var ligne = element.substr(0,1);
        var colonne = element.substr(2,1)
        tab[ligne][colonne] = tabresult[ligne][colonne];
        affichertab();
        if (nbaffich > 1){
            ready = false;
            setTimeout(() => {
                if (tab[ligne][colonne]!== tabresult[oldselection[0]][oldselection[1]]){
                    tab[ligne][colonne] = 0;
                    tab[oldselection[0]][oldselection[1]] = 0;
                } 
                if (tab[ligne][colonne] === tabresult[oldselection[0]][oldselection[1]]){
                    compt += 1;
                    console.log(compt);
                    if(compt === 10){
                        fin = true;
                        console.log("win");
                        arreter();
                        temps = chrono;
                    }
                }
                affichertab();
                ready = true;
                nbaffich=0;
                oldselection = [ligne, colonne];
            }, 600);
            
            
        } else{
            oldselection = [ligne, colonne];
        }
    
    }
}
function generaterandomresult(){
    var tab = [];
    var nbimagepos = [0,0,0,0,0,0,0,0,0,0]
    for (var i = 0 ; i < 4 ; i++){
        var ligne = [];
        for (var j = 0 ; j < 5 ; j++){
            var fin = false;
            while(!fin){
                var randomimage = Math.floor(Math.random() * 10)
                if (nbimagepos[randomimage] < 2){
                    ligne.push(randomimage + 1);
                    nbimagepos[randomimage] ++;
                    fin = true;
            }
            }
        }
        tab.push(ligne);
    }
    return tab;
}
