const start = new Date("March 17, 2025 14:12:00").getTime();

setInterval(function(){

const now = new Date().getTime();
const diff = now - start;

document.getElementById("years").innerHTML =
Math.floor(diff/(1000*60*60*24*365));

document.getElementById("days").innerHTML =
Math.floor((diff%(1000*60*60*24*365))/(1000*60*60*24));

document.getElementById("hours").innerHTML =
Math.floor((diff%(1000*60*60*24))/(1000*60*60));

document.getElementById("minutes").innerHTML =
Math.floor((diff%(1000*60*60))/(1000*60));

document.getElementById("seconds").innerHTML =
Math.floor((diff%(1000*60))/1000);

},1000);
