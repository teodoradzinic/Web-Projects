let exEl = document.querySelector(".ex");
let result;
let correct = true;
let gameStatus = true;
let userResult;
let calc1 = randomFiftyToHundred();
let calc2 = randomToFifty();
let calc3 = randomToFifty();
let score = 0;
let scoreEl = document.querySelector(".score");
scoreEl.innerText = "Score: " + score;
addition();
ask(correct)
if (correct) {
    subtraction();
    ask();
    if (correct) {
        multiplication();
        ask();
        if (correct) {
            division();
            ask();
            if (correct) {
                calculation5();
                ask();
                if (correct) {
                    calculation6();
                    ask();
                    if (correct) {
                        calculation7();
                        ask();
                        if (correct) {
                            root();
                            ask();
                        }
                    }
                }
            }
        }
    }
}

function addition() {
    let add1 = randomToFifty(50);
    let add2 = randomToFifty();
    exEl.innerText = " " + add1 + " + " + add2 + " =";
    console.log(exEl.innerText);
    result = add1 + add2;
    console.log(result);
    userResult = Number(prompt(" " + add1 + " + " + add2 + " ="));
}

function subtraction() {
    let sub1 = randomFiftyToHundred();
    let sub2 = randomToFifty();
    exEl.innerText = " " + sub1 + " - " + sub2 + " =";
    console.log(exEl.innerText);
    result = sub1 - sub2;
    console.log(result);
    userResult = Number(prompt(" " + sub1 + " - " + sub2 + " ="));
}

function multiplication() {
    let mul1 = randomToFifty();
    let mul2 = randomToFifty();
    exEl.innerText = " " + mul1 + " * " + mul2 + " =";
    console.log(exEl.innerText);
    result = mul1 * mul2;
    console.log(result);
    userResult = Number(prompt(" " + mul1 + " * " + mul2 + " ="));
}

function division() {
    let div1 = randomToFifty();
    let div2 = div1 / 2;
    exEl.innerText = " " + div1 + " / " + div2 + " =";
    console.log(exEl.innerText);
    result = div1 / div2;
    console.log(result);
    userResult = Number(prompt(" " + div1 + " / " + div2 + " ="));
}


function calculation5() {
    calc1 = randomFiftyToHundred();
    calc2 = randomToFifty();
    calc3 = randomToFifty();
    exEl.innerText = " " + calc1 + " + " + calc2 + " + " + calc3 + " =";
    console.log(exEl.innerText);
    result = calc1 + calc2 + calc3;
    console.log(result);
    userResult = Number(prompt(" " + calc1 + " + " + calc2 + " + " + calc3 + " ="));
}
function calculation6() {
    calc1 = randomFiftyToHundred();
    calc2 = randomToFifty();
    calc3 = randomToFifty();
    exEl.innerText = " " + "(" + calc1 + " - " + calc2 + ")" + " + " + calc3 + " =";
    console.log(exEl.innerText);
    result = (calc1 - calc2) + calc3;
    console.log(result);
    userResult = Number(prompt(" " + "(" + calc1 + " - " + calc2 + ")" + " + " + calc3 + " ="));
}

function calculation7() {
    calc1 = randomFiftyToHundred();
    calc2 = randomToFifty();
    calc3 = randomToFifty();
    exEl.innerText = " " + calc1 + " - " + calc2 + " + " + calc3 + " =";
    console.log(exEl.innerText);
    result = calc1 - calc2 + calc3;
    console.log(result);
    userResult = Number(prompt(" " + calc1 + " - " + calc2 + " + " + calc3 + " ="));
}

function root() {
    let root = randomToFifty();
    exEl.innerText = "" + root + " ²" + " =";
    console.log(exEl.innerText);
    result = Math.pow(root, 2);
    console.log(result);
    userResult = Number(prompt("" + root + " ²" + " ="));
}



function ask() {
//userResult = Number($(".result").val());
    if (userResult === result) {
        correct = true;
        alert("correct");
        $(".result").val("");
        score += 1;
        scoreEl.innerText = "Score: " + score;

    }
    else {
        correct = false;
        prompt("its not correct");
    }
    return correct;
}
function continuee() {
    
    ask(score);

}
function changeColor(params) {
    if (correct) {
        $("#one").hide();
    }
}
function randomToFifty() {
    let random = Math.floor(Math.random() * 50 + 1);
    return random;
}
function randomFiftyToHundred() {
    let random = Math.floor(Math.random() * 50 + 51);
    return random;
}

