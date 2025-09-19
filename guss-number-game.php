<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>لعبة تخمين الرقم</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background: #f0f0f0;
            text-align: center;
            margin-top: 50px;
        }
        .game-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            margin: auto;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="number"] {
            padding: 8px;
            width: 80px;
            font-size: 16px;
        }
        button {
            padding: 8px 16px;
            font-size: 16px;
            margin-left: 10px;
        }
        .message {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="game-container">
        <h2>لعبة تخمين الرقم</h2>
        <p>اختر رقمًا بين 1 و 100</p>
        <input type="number" id="guess" min="1" max="100">
        <button onclick="checkGuess()">تحقق</button>
        <div class="message" id="message"></div>
    </div>
    <script>
        let secretNumber = Math.floor(Math.random() * 100) + 1;
        let attempts = 0;

        function checkGuess() {
            const guess = Number(document.getElementById('guess').value);
            const message = document.getElementById('message');
            attempts++;

            if (guess === secretNumber) {
                message.textContent = `مبروك! لقد خمنت الرقم الصحيح (${secretNumber}) بعد ${attempts} محاولة.`;
                message.style.color = 'green';
            } else if (guess < secretNumber) {
                message.textContent = 'الرقم أكبر!';
                message.style.color = 'blue';
            } else if (guess > secretNumber) {
                message.textContent = 'الرقم أصغر!';
                message.style.color = 'red';
            }
        }
    </script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
