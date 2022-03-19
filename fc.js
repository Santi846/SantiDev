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
    "#4069ff",
    "#eb4034",
    "Orange"
];

//amount of letters
let charCount = 0;

//set initial interval on the type function
let time = setInterval(type,typeSpeed);

//typing letters

