let exEl = document.querySelector(".ex");
let userResult;
let level = 1;
let calc1 = randomFiftyToHundred();
let calc2 = randomToFifty();
let calc3 = randomToFifty();
let scoreEl = document.querySelector(".score");
document.querySelector(".check").addEventListener('click', ask);
document.querySelector(".new-game").addEventListener('click', newGame)

getFromLocalStorage();                  //getting a level that user is or was on
math();                                  //asking a question depending on level
keepColor();                            //keeping a color of fields after reload 

function saveOnLocalStorage() {         //saving the level on local storage
    localStorage.setItem("lvl", level);
}

function newGame() {
    $(".examples div:nth-child(" + (level) + ")").css('box-shadow', 'none');                  //new game function
    localStorage.clear()
    getFromLocalStorage();
    math();
    $(".examples div").css('background-color', 'lightpink');

}

function getFromLocalStorage() {
    if (localStorage.length > 0) {
        level = Number(localStorage.getItem("lvl"));
        return level;
    }
    else {
        level = 1;
    }
}

function colorChange() {
    $(".examples div:nth-child(" + (level - 1) + ")").css('background-color', 'lightgreen');
    $(".examples div:nth-child(" + (level) + ")").css('box-shadow', 'rgb(38, 57, 77) 0px 20px 30px -10px');
    $(".examples div:nth-child(" + (level - 1) + ")").css('box-shadow', 'none');
}

function ask() {
    userResult = Number($(".result").val());
    if (userResult === result) {
        alert("Correct!");
        $(".result").val("");
        level++;
        saveOnLocalStorage();
        math();
    }
    else {
        alert("Not correct");
        $(".result").val("");
    }
}

function keepColor() {
    for (let i = 0; i < level; i++)
        $(".examples div:nth-child(" + i + ")").css('background-color', 'lightgreen');

}


function math() {
    colorChange();
    scoreEl.innerText = "Score: " + (level - 1);
    if (localStorage.length === 0) {
        let add1 = randomToFifty(50);
        let add2 = randomToFifty();
        exEl.innerText = " " + add1 + " + " + add2 + " = ";
        console.log(exEl.innerText);
        result = add1 + add2;
        console.log(result);
    }
    switch (level) {
        case 2:
            let sub1 = randomFiftyToHundred();
            let sub2 = randomToFifty();
            exEl.innerText = " " + sub1 + " - " + sub2 + " = ";
            console.log(exEl.innerText);
            result = sub1 - sub2;
            console.log(result);
            break;
        case 3:
            let mul1 = randomToFifty();
            let mul2 = randomToFifty();
            exEl.innerText = " " + mul1 + " * " + mul2 + " = ";
            console.log(exEl.innerText);
            result = mul1 * mul2;
            console.log(result);

            break;
        case 4:
            let div1 = randomToFifty();
            let div2 = div1 / 2;
            exEl.innerText = " " + div1 + " / " + div2 + " = ";
            console.log(exEl.innerText);
            result = div1 / div2;
            console.log(result);

            break;
        case 5:
            calc1 = randomFiftyToHundred();
            calc2 = randomToFifty();
            calc3 = randomToFifty();
            exEl.innerText = " " + calc1 + " + " + calc2 + " + " + calc3 + " = ";
            console.log(exEl.innerText);
            result = calc1 + calc2 + calc3;
            console.log(result);

            break;
        case 6:
            calc1 = randomFiftyToHundred();
            calc2 = randomToFifty();
            calc3 = randomToFifty();
            exEl.innerText = " " + "(" + calc1 + " - " + calc2 + ")" + " + " + calc3 + " = ";
            console.log(exEl.innerText);
            result = (calc1 - calc2) + calc3;
            console.log(result);

            break;
        case 7:
            calc1 = randomFiftyToHundred();
            calc2 = randomToFifty();
            calc3 = randomToFifty();
            exEl.innerText = " " + calc1 + " - " + calc2 + " + " + calc3 + " = ";
            console.log(exEl.innerText);
            result = calc1 - calc2 + calc3;
            console.log(result);

            break;
        case 8:
            let root = randomToFifty();
            exEl.innerText = "" + root + " ²" + " = ";
            console.log(exEl.innerText);
            result = Math.pow(root, 2);
            console.log(result);

            break;
        case 9:
            let log = randomToTen();
            exEl.innerText = "log" + log + " = ";
            console.log(exEl.innerText);
            result = Math.log(log);
            console.log(result);

            break;
        case 10:
            alert("You have finished all the examples! Congratulation!");
            break;
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
function randomToTen() {
    let random = Math.floor(Math.random() * 5 + 1);
    return random;
}


