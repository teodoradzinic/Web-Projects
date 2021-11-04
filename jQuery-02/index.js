let oneEl = document.querySelector(".one");
let add1 = randomToFifty();
let add2 = randomToFifty();
oneEl.innerText = " " + add1 + " + " + add2 + " =";
console.log(oneEl.innerText);

let one = add1 + add2;
console.log(one);



let twoEl = document.querySelector(".two");
let sub1 = randomFiftyToHundred();
let sub2 = randomToFifty();
twoEl.innerText = " " + sub1 + " - " + sub2 + " =";
console.log(twoEl.innerText);
let two = sub1 - sub2;
console.log(two);


function check() {
let resultOneEl = Number($(".one-result").val());
console.log(resultOneEl);
    if (resultOneEl === one) {
        console.log("true")
        let resultTwoEl = Number($(".two-result").val());
        console.log(resultTwoEl);
    }
    else
        console.log("false");
}

function randomToFifty() {
    let random = Math.floor(Math.random() * 50 + 1);
    return random;
}
function randomFiftyToHundred() {
    let random = Math.floor(Math.random() * 50 + 51);
    return random;
}