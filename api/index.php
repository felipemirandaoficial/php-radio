<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Simasul Siderurgia</title>
    <!-- Load FontAwesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- CSS style -->
    <style>
        body {
          background-color: lightgreen;
        
          /* Smoothly transition the background color */
          transition: background-color .5s;
        }
		h2{
			text-align:center;
		}
		#name {
            top: 0;
            left: 0;
            width: 410px;
            height: 110px;
			margin:auto;
            background: url('main.png') no-repeat;
            background-size: contain;
            z-index: 1;
        }
		.tv-container {
            position: relative;
            width: 600px;
            margin: auto;
        }

        .tv-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 460px;
            height: 250px;
            background: url('img/tv2.png') no-repeat;
            background-size: contain;
            z-index: 1;
        }
		.ps2 {
            position: absolute;
            top: 68px;
			left: 442px;
            width: 260px;
            height: 200px;
            background: url('img/ps2.png') no-repeat;
            background-size: contain;
            z-index: 1;
        }
        #videoPlayer {
            width: 60%;
			left: 55px;
			top: 20px;
            height: auto;
            display: block;
            position: relative;
            z-index: 0;
        }
		#somplayer{
			max-width: 600px;
			margin:auto;
		}
		
		@media only screen and (max-width: 600px) {
			.tv-container {
				width: 90%; /* Largura total da tela */
			}

			
			#videoPlayer {
				    width: 75%;
					left: 43px;
					top: 21px;
				margin: 0;
			}
			.tv-overlay{
				width: 100%;
				left: 0;
				top: 0;
				margin: 0;
			}
			.ps2{
				width: 15%;
				left: -20px;
				top: 115px;
				margin: 0;
				
			}
		}
		
    </style>
</head>

<body>
            <div id='name'></div>	
			<div class="tv-container">
			<div class="tv-overlay"></div>
			<div class="ps2"></div>
				<video id="videoPlayer" loop muted>
					<source src="video2.mp4" type="video/mp4">
					Seu navegador não suporta o elemento de vídeo.
				</video>
			</div>
			
			<script>
				document.addEventListener("DOMContentLoaded", function() {
				var video = document.getElementById('videoPlayer');
				var container = document.getElementById('tv-container');

				// Garanta que o vídeo comece a tocar quando o DOM estiver carregado
				video.play();

				// Defina o tamanho do vídeo para o tamanho da div
				//video.style.width = container.offsetWidth + 'px';
				//video.style.height = container.offsetHeight + 'px';

				// Atualize o tamanho do vídeo quando o tamanho da janela for alterado
				window.addEventListener('resize', function() {
					//video.style.width = container.offsetWidth + 'px';
					//video.style.height = container.offsetHeight + 'px';
				});
			});
			</script>
		<br><br><br><br>
		<div id='somplayer'>
			<script type="text/javascript">var cstrFreePlayerUid = 565511;var cstrFreePlayerTheme = "yellow";var cstrFreePlayerColor = "";</script>
			<script type="text/javascript" src="FreePlanPlayerEmbed.js"></script>
			<a id="cstrFreePlayerBL1" href="//www.caster.fm/">Free Shoutcast Hosting</a><a id="cstrFreePlayerBL2" href="//www.caster.fm/">Radio Stream Hosting</a>
			<div id="cstrFreePlayerDiv"></div>
		</div>
</body>

</html>
