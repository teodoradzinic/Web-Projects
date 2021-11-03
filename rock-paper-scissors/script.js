

let playerNameEl = document.querySelector(".player-name");
playerNameEl.innerText = name;
document.querySelector(".rock").addEventListener("click", rock);
document.querySelector(".paper").addEventListener("click", paper);
document.querySelector(".scissors").addEventListener("click", scissors);
let roundEl = document.querySelector(".rounds-num");
let tieEl = document.querySelector(".tie");
let playerWinEl = document.querySelector(".player-win");
let compWinEl = document.querySelector(".comp-win");
let tie = 0;
let playerWin = 0;
let compWin = 0;
let player = "";
let computer = ""
let hands = ["rock", "paper", "scissors"];
let roundsPlayed = 1;
let isAlive = true;
let headEl = document.querySelector(".game-h1");
document.querySelector(".restart").addEventListener("click", restart);


console.log(localStorage.getItem("name"));

   
function restart() {
    
    location.reload();
    
}
function comp() {
    let randomIndex = Math.floor(Math.random() * 3);
    computer = hands[randomIndex];
    if (computer === "rock") {
        document.querySelector(".comp-player-img").src = "style/img/rock-mirrored.png";
    } else if (computer === "paper") {
        document.querySelector(".comp-player-img").src = "style/img/paper-mirrored.png";
    }
    else {
        document.querySelector(".comp-player-img").src = "style/img/scissors-mirrored.png";
    }
    return computer;
}

function rock() {
    if (isAlive === true) {
        countingRounds();
        player = "rock";
        document.querySelector(".player-img").src = "style/img/rock.png";
        compare();
        console.log(player);
        console.log(computer);
    }
}

function paper() {
    if (isAlive) {
        countingRounds();
        player = "paper";
        document.querySelector(".player-img").src = "style/img/paper.png";
        compare();
        console.log(player);
        console.log(computer);

    }
}
function scissors() {
    if (isAlive) {
        countingRounds();
        player = "scissors";
        document.querySelector(".player-img").src = "style/img/scissors.png";
        compare();
        console.log(player);
        console.log(computer);

    }
}


function compare() {
    comp();
    if (player === computer) {
        tie += 1;
        tieEl.innerText = tie;
        return tie;
    } else if ((player === "paper" && computer === "rock") || (player === "scissors" && computer === "paper") || (player === "rock" && computer === "scissors")) {
        playerWin += 1;
        playerWinEl.innerText = playerWin;
        return playerWin;
    } else {
        compWin += 1;
        compWinEl.innerText = compWin;
        return compWin;
    }
}

function countingRounds() {


    if (roundsPlayed >= rounds) {
        isAlive = false;
        if (playerWin > compWin) {
            headEl.innerText = "game over";
            alert("YOU HAVE WON!!!!!😁🥳");
        }
        else if (compWin > playerWin) {
            headEl.innerText = "game over";
            alert("you have lost ☹️");
        }
        else {
            alert("tie 🙄");
            headEl.innerText = "game over";
        }

    }
    console.log(roundsPlayed);
    roundsPlayed++;
    roundEl.innerText = roundsPlayed;
}



