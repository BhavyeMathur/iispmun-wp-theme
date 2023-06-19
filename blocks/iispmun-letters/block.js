const letters = document.getElementsByClassName("letter-container")

function showLetter(n) {
    console.log(n);
    for (let i = 0; i < letters.length; i++) {
        if (i === n) {
            letters[i].style.display = "flex";
        } else {
            letters[i].style.display = "none";
        }
    }
}

showLetter(0)