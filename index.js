var randomNumber = Math.floor(Math.random()* 6) + 1;

var randomImage = "dice"+randomNumber+".png"; //selects random images

var randomImageSource = "images/" + randomImage; //soure of image

 document.querySelectorAll("img")[0].setAttribute("src" , randomImageSource);



 var randomNumber2 = Math.floor(Math.random()* 6) + 1;

 var randomImage2 = "dice"+randomNumber2+".png"; //selects random images

 var randomImageSource2 = "images/" + randomImage2; //soure of image

  document.querySelectorAll("img")[1].setAttribute("src" , randomImageSource2);




  if(randomNumber > randomNumber2){
    document.querySelector("h1").innerHTML = " 🚩 Player 1 wins";
  }
  else if (randomNumber2>randomNumber) {
    document.querySelector("h1").innerHTML = "Player 2 wins  🚩";
  }
  else{
    document.querySelector("h1").innerHTML = "Draw";
  }
