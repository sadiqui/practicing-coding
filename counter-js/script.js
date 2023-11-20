var counter = 0;
var myCounter = document.getElementById('counter');

document.getElementById('increment').addEventListener('click', function (event) {
    counter++;
    myCounter.innerHTML = counter;
    checkCounter();
});

document.getElementById('decrement').addEventListener('click', function (event) {
    counter--;
    myCounter.innerHTML = counter;
    checkCounter();
});

function checkCounter() {
    if (counter === 11 || counter === -11) {
        alert('Le compteur a depassé ' + counter + '. Réinitialisez.');
        counter = 0;
        myCounter.innerHTML = counter;
    }
}