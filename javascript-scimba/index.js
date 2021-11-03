let player = {
    name: "Teodora",
    chips: 150
}

let cards = [];
let sum = 0;
let hasBlackJack = false;
let isAlive = false;
let message = "";
let messageEl = document.getElementById("message-el");
let sumEl = document.getElementById("sum-el");
let cardsEl = document.querySelector(".cards-el")
let playerEl = document.getElementById("player-el");

playerEl.textContent = player.name + ": " + player.chips + "€";


function getRandomCard() {
    let random = Math.floor(Math.random() * 13) + 1;
    if (random > 10)
        return 10;
    else if (random === 1)
        return 11;
    else
        return random;
}

function startGame() {
    isAlive = true;
    let firstCard = getRandomCard();
    let secondCard = getRandomCard();
    cards = [firstCard, secondCard];
    sum = firstCard + secondCard;
    renderGame();
}
function renderGame() {

    sumEl.textContent = "Sum: " + sum;
    cardsEl.textContent = "Cards: ";
    for (let i = 0; i < cards.length; i++) {
        cardsEl.textContent += cards[i] + " ";
    }

    if (sum <= 20) {
        message = "Do you want to draw a new card?";
    } else if (sum === 21) {
        message = "you've got blackjack";
        hasBlackJack = true;
    } else {
        message = "You're out of game";
        isAlive = false;
    }
    messageEl.textContent = message;
}

function newCard() {
    if (isAlive === true && hasBlackJack === false) {
        console.log("Drawing a new card from the deck!");
        let thirdCard = getRandomCard();
        cards.push(thirdCard);
        sum += thirdCard;
        renderGame();
    }
}





