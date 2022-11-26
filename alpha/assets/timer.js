let chrono = document.getElementById("chrono");
let startBtn  = document.getElementById("jouer");
let resetBtn = document.getElementById("reset")

let minutes = 0;
let secondes= 0;
let millisecondes = 0;

let timeout;

let estArrete = true;

const demarrer = () =>{
    if(estArrete){
      estArrete = false;
      defilerTemps();
    }
};

const arreter = () => {
  if(!estArrete){
    estArrete = true;
    clearTimeout(timeout)
  }
};

const defilerTemps = () =>{
  if(estArrete) return;

  secondes = parseInt(secondes);
  minutes = parseInt(minutes);

  millisecondes++; 

  if(millisecondes == 60){
    secondes ++;
    millisecondes = 0;
  }
  

  if(secondes == 60){
    minutes++;
    secondes = 0;
  }

  if(minutes ==60){
    minutes = 0;
  }

  //affichage
  if(millisecondes < 10){
    millisecondes = "0" + millisecondes
  }
  if(secondes <  10){
    secondes = "0" + secondes;
  }

  if(minutes <  10){
    minutes = "0" + minutes;
  }

  chrono.textContent = `${minutes}:${secondes}:${millisecondes}`;

  timeout = setTimeout(defilerTemps, 15);
};

const reset = () =>{
  chrono.textContent = "00:00:00";
  estArrete = true;
  minutes=0;
  secondes=0;
  clearTimeout(timeout);
  var tab = [
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0]
  ];
  let compt =0;
  var tabresult = generaterandomresult();
  var oldselection = [];
  var nbaffich = 0;
  var ready = true;

  affichertab();

};

startBtn.addEventListener("click", demarrer);
resetBtn.addEventListener("click", reset);
