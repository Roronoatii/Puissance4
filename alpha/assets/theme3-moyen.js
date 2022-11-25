const divresult = document.querySelector("#resultat");

var tab = [
    [0,0,0,0,0],
    [0,0,0,0,0],
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
let compt =0;

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
    var imgtxt ="./assets/memory/Theme3/";
    switch(valeur){
        case 1: imgtxt +="zoro.jpeg"
        break;
        case 2: imgtxt +="tatsuya.jpeg"
        break;
        case 3: imgtxt +="solo_leveling.jpeg"
        break;
        case 4: imgtxt +="sasuke.png"
        break;
        case 5: imgtxt +="naruto.jpeg"
        break;
        case 6: imgtxt +="luffy.jpeg"
        break;
        case 7: imgtxt +="kaneki.jpeg"
        break;
        case 8: imgtxt +="ichigo.png"
        break;
        case 9: imgtxt +="goku-2.jpeg"
        break;
        case 10: imgtxt +="gojo.jpeg"
        break;
        case 11: imgtxt +="denji.jpeg"
        break;
        case 12: imgtxt +="deku.jpeg"
        break;
        case 13: imgtxt +="death note.jpeg"
        break;
        case 14: imgtxt +="black_clover.jpeg"
        break;
        case 15: imgtxt +="aoashi.jpeg"
        break;
        default : console.log("none");
    }
    return  imgtxt;
}
function verif(element){
    if(ready === true){

    
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
                if(compt === 15){
                    fin = true;
                    console.log("win");
                    arreter();
                    temps = chrono;
                }
                if (tab[ligne][colonne] === tabresult[oldselection[0]][oldselection[1]]){
                    compt += 1;
                    console.log(compt);
                    if(compt === 15){
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
            
            if (tab[ligne][colonne] === tabresult[oldselection[0]][oldselection[1]]){
                compt += 1;
                console.log(compt);
                if(compt === 10){
                    fin = true;
                    console.log("win");
                    arreter();
                }
            }
            
            
        } else{
            oldselection = [ligne, colonne];
        }
    
    }
}
function generaterandomresult(){
    var tab = [];
    var nbimagepos = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
    for (var i = 0 ; i < 6 ; i++){
        var ligne = [];
        for (var j = 0 ; j < 5 ; j++){
            var fin = false;
            while(!fin){
                var randomimage = Math.floor(Math.random() * 15)
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
