function cambiarColor(sectionId) {
    var cardIds = ["git1", "git2", "git3", "git4", "git5", "git6", "git7", "git8", "git9"];

    cardIds.forEach(function (cardId) {
        cambiarColorCard(cardId);
    });
}

function cambiarColorCard(cardId) {
    var card = document.getElementById(cardId);
    card.style.backgroundColor = getRandomColor();
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}