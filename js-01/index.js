
alert("Hello " + prompt("What is your name?") + "! " + "WELCOME to the Coding Class!");
console.log("hallo");

var string = "text";
var num = 20;
var bool = true;

let text = string + " - data type: " + typeof string;
let text1 = num + " - data type: " + typeof num;
let text2 = bool + " - data type: " + typeof bool;
alert(text + "\n" + text1 + "\n" + text2);

let value1 = prompt("type a number");
let value2 = prompt("type another number");

let multiplication = value1 * value2;
document.write(value1 + " * " + value2 + " = " + multiplication);


const username1 = "teodora";
const password1 = "1234";

const username = prompt("What is the username?")

if (username === username1) {
    const password = prompt("Username is CORRECT! What is the password?");
    if (password === password1) {
        alert("Password is CORRECT!");
    }
    else {
        alert("incorrect");
    }
}
else {
    alert("incorrect");
}

let points = 0;

let result = prompt("5 + 5 = ?");
if (result === "10")
    points++;

result = prompt("5 * 5 = ?");
if (result === "25")
    points++;

result = prompt("5 - 5 = ?");
if (result === "0")
    points++;

result = prompt("5 / 5 = ?");
if (result === "1")
    points++;

result = prompt("5 % 5 = ?");
if (result === "0")
    points++;


console.log(points)
switch (points) {
    case 0:
    case 1: alert("embarrasing");
        break;
    case 2:
    case 3: alert("just sad");
        break;
    case 4:
    case 5: alert("you are ok");
        break;
}

let info = [];
let nameEl = document.querySelector(".name");
let lastNameEl = document.querySelector(".lastname");
let ageEl = document.querySelector(".age");

function push() {
    info.push(nameEl, lastNameEl, ageEl);
}
push();
for (let i = 0; i < info.length; i++) {
    document.write(info[i]);
}