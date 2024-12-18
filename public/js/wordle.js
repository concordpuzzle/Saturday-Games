// Wordle Game Logic

const words = ['apple', 'grape', 'peach', 'berry', 'melon']; // Sample words
let currentWord = words[Math.floor(Math.random() * words.length)];
let attempts = 6;
let guessedLetters = [];

function submitGuess(guess) {
    if (guessedLetters.includes(guess)) {
        alert('You already guessed that letter!');
        return;
    }
    guessedLetters.push(guess);
    attempts--;
    checkGuess(guess);
}

function checkGuess(guess) {
    // Logic to check the guess against the current word
    // Provide feedback to the user
}

// Event listener for the submit button
document.getElementById('submit-guess').addEventListener('click', function() {
    const guess = prompt('Enter your guess:');
    if (guess) {
        submitGuess(guess.toLowerCase());
    }
});
