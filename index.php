<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HACK</title>
    <style>
        <?php
        echo "
        body {
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('back.gif') no-repeat center center fixed;
            background-size: cover;
            color: #00ff00;
        }
        #notebook {
            font-size: 3em;
            font-weight: bold;
            margin-top: 20px;
            color: #00ff00;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.8), 0 0 20px rgba(0, 255, 0, 0.6), 0 0 30px rgba(0, 255, 0, 0.4);
            position: absolute;
            top: 10%;
            z-index: 10;
        }
        #prank-button {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff0000, #ff5500);
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            font-size: 1.5em;
            font-weight: bold;
            color: white;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            margin-bottom: 20px;
        }
        #prank-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }
        #tg-button {
            width: 200px;
            height: 50px;
            border-radius: 25px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
        }
        #tg-button:hover {
            background: #0056b3;
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.85);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        #overlay img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }
        ";
        ?>
    </style>
</head>
<body>
    <?php
    echo '<div id="notebook" style="white-space: nowrap;">TAP BELOW BUTTON</div>';
    echo '<button id="prank-button">START</button>';

    echo '<a href="https://t.me/a1mbotaxe" target="_blank">';
    echo '<button id="tg-button">Telegram Join</button>';
    echo '</a>';

    echo '<div id="overlay">';
    echo '<img src="fuck.jpg" alt="Prank GIF">';
    echo '</div>';

    echo '<audio id="prank-audio" src="x.mp3" loop></audio>';
    ?>

    <script>
        <?php
        echo "
        const button = document.getElementById('prank-button');
        const overlay = document.getElementById('overlay');
        const audio = document.getElementById('prank-audio');

        const enterFullScreen = () => {
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
                document.documentElement.webkitRequestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            }
        };

        button.addEventListener('click', () => {
            audio.play();
            overlay.style.display = 'flex';
            enterFullScreen();
        });
        ";
        ?>
    </script>
</body>
</html>
