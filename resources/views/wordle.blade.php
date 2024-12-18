<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Saturday</title>
    <script src="/js/wordle.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Faculty+Glyphic&family=Orelega+One&family=Ultra&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/1373d7f0f5.js" crossorigin="anonymous"></script>    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #0c2461;
            font-family: "Orelega One", serif;        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .grid-item {
            width: 100px;
            height: 100px;
            background-color: #fff;
            border:5px solid #b71540;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 16px;
        }
        .white-22{
            color:#b71540;
            font-size: 33px;
            padding-top:10px;
        }
        .logo {

            font-family: "Ultra", serif;
  font-weight: 400;
  font-style: normal;
  color:#b71540;
        }
        .arvo-bold {
  font-family: "Arvo", serif;
  font-weight: 700;
  font-style: normal;
  color:#b71540;
  text-align: center;
  font-size: 17px;

}
    </style>
</head>
<body>
    <div>
        <div class="logo" style="text-align: center; margin-bottom: 20px; font-size: 40px;">
            Saturday
        
        </div>
        <div class="grid">
            <!-- 6x6 Input Boxes -->
            <div id="input-container">
                <!-- Generate 6 rows of input boxes -->
                @for ($i = 0; $i < 6; $i++)
                    <div class="grid-item">
                        <input type="text" maxlength="1" class="letter-input" data-row="{{ $i }}" />
                    </div>
                @endfor
            </div>
        </div>
        <div id="keyboard" class="grid">
            <!-- Alphabet Keyboard -->
            @foreach (range('A', 'Z') as $letter)
                <div class="grid-item keyboard-key" data-letter="{{ $letter }}">{{ $letter }}</div>
            @endforeach
        </div>
        <script>
            const targetWord = 'puzzle';
            const inputs = document.querySelectorAll('.letter-input');
            const keys = document.querySelectorAll('.keyboard-key');
            let currentRow = 0;

            // Function to handle input and color change
            function handleInput() {
                const guess = Array.from(inputs).slice(currentRow * 6, currentRow * 6 + 6).map(input => input.value.toLowerCase()).join('');
                if (guess.length === 6) {
                    for (let i = 0; i < 6; i++) {
                        const input = inputs[currentRow * 6 + i];
                        if (guess[i] === targetWord[i]) {
                            input.style.backgroundColor = 'green';
                        } else if (targetWord.includes(guess[i])) {
                            input.style.backgroundColor = 'yellow';
                        } else {
                            input.style.backgroundColor = 'gray';
                        }
                    }
                    currentRow++;
                    if (currentRow >= 6) {
                        alert('Game Over! The word was ' + targetWord);
                    }
                }
            }

            // Event listener for keyboard keys
            keys.forEach(key => {
                key.addEventListener('click', () => {
                    const letter = key.getAttribute('data-letter');
                    const currentInput = inputs[currentRow * 6 + (Array.from(inputs).filter(input => input.value === '').length - 1)];
                    if (currentInput) {
                        currentInput.value = letter;
                        handleInput();
                    }
                });
            });

            // Event listener for letter inputs
            inputs.forEach(input => {
                input.addEventListener('input', (e) => {
                    if (e.target.value.length > 1) {
                        e.target.value = e.target.value.slice(0, 1);
                    }
                });
            });
        </script>
        <a href="https://concordpuzzle.com" style="text-decoration: none;"><p class="arvo-bold" >Concord Puzzle</p>
    </div>
</body>
</html>
