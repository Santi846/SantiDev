<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Santiago Arocha Pérez">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/styles.css">
    <title>Santi.dev</title>
</head>
<body>
        <section>

         <h1>Santiago Arocha,&nbsp;
             <span class="output"></span>
         </h1> 
         
         <script>
             //text output
const output = document.querySelector(".output");
//result
let res;
//typing speed
let typeSpeed = 300;
//removing/backspace speed
let removeSpeed = 100;
//word identifier
let id = 0;

/*Words to be typed
"\xa0" = Space
*/
const words = [
    "Web\xa0Developer",
    "Fronted\xa0Developer",
    "Backend\xa0Developer"
];
//colors for the individual words
const colors = [
    "#f72585",
    "#e9c46a",
    "#7209b7"
];

//amount of letters
let charCount = 0;

//set initial interval on the type function
let time = setInterval(type,typeSpeed);

//typing letters
function type(){
  /*Filter out of the amount of 
    letters from the word*/
    res = words[id].substr(0,charCount);
    // change word color
    output.style.color = colors[id]
    /*When all letters are typed out, 
      stop typing and start removing
    *//*Adding the '3' pauses, the typing for
        a moment when it reaches teh end
     */
    if (charCount >= words[id].length + 3){
        //stop typing
        clearInterval(time);
        //reset character count 
        charCount = 1;
        //start removing
        time = setInterval (remove, removeSpeed);
    }
    //output the results
    output.innerHTML = res;
    //add another letter 
    charCount ++;
};
//removing letters
function remove(){
    /*Filter out the amount of 
      letters from the word, reserved*/
      res = words[id].substr(0,words[id].length - charCount);
      /*When all letters are removed, stop removing 
      and re start typing*/
    if (res.length <=0) {
        //chekc if all words have been typed out
        if (id >= words.length - 1) {
            //If so, go back to the first word
            id = 0;
        }
        //else
        else {
            //Change the next word
            id++;
        }
        //stop removing
        clearInterval(time);
        //reset character count
        charCount = 0;
        //start typing again
        time = setInterval(type, typeSpeed);
    }
    //output the result
    output.innerHTML = res;
    //Remove another letter
    charCount++;
};

         </script>

        </section> 

        <h2>Suscríbete</h2>
        <form action="post">
            <input type="text" name = "name" placeholder="Nombre Completo">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="register">
            <p>Selecciona un color</p>
            <input type="color" name="color">
        </form>
        <!---
        <?php 
        /*
            include("registrar.php");
            */
                ?>
        
        <p>Crack</p>
        <p>Enfocado</p>
        



        <p>Vamo papa, vamo que se puede</p>
        <a href="Practicals/index.php">Practicals</a>
        --->
</body>
</html>