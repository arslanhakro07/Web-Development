<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row{
            display: flex;
            clear: both;

        }
        .col-2{
            width: 16.66%;
            float: left;
            text-align: center;
            cursor: pointer;
            margin: 10px;
            height: 200px;
        
            
            
        }
        .col-2 img{
            height: 100%;
            width: 100%;
            margin-left: 50px;
            border-radius: 10px;
           
           
        }
        h1{
            text-align: center;
        }
        .lightbox{
			position: absolute;
			width:50%;
			height:50%;
			top:25%;
			left:25%;
			border: 2px solid white;
			display: none; 
		}
        #close-btn{
            position: absolute;
            top:-5%;
			left:97%;
            cursor: pointer;
            

        }

    </style>
</head>

<body>
    <h1>Light Box</h1>
    <div class="row">
        <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/football-player-stylishly-celebrating-with-raised-arms-animated-extravaganza-confetti-lig_1015980-85521.jpg?w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/male-soccer-player-with-ball-grass-field_23-2150821444.jpg?t=st=1720810884~exp=1720814484~hmac=7a08c5412c54e83aa3c50710a9c8a9ce6f366bb625ec99daa45d547cd2872144&w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/male-soccer-player-with-ball-grass-field_23-2150821434.jpg?t=st=1720810927~exp=1720814527~hmac=76625f5dec2ac4024d9533e50ebb002a5bca285dd31097c8aa8be1928b17b327&w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/male-soccer-player-with-ball-grass-field_23-2150821526.jpg?t=st=1720810978~exp=1720814578~hmac=ab19493dce63881243715dac96974a39471e7cc6f8a3b6c64715e49f3cf557ee&w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/male-soccer-player-with-ball-grass-field_23-2150821428.jpg?t=st=1720811005~exp=1720814605~hmac=0d4b93f2dec305395178f88d96dfaf5f474595e63c1d08b5dfb4469af9ed5ba7&w=740" alt="">
      </div> 
    </div>
    <div class="row">
        <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/male-soccer-player-with-ball-grass-field_23-2150821406.jpg?t=st=1720811070~exp=1720814670~hmac=1577affe22206aca18721b69c689a180ceb638510ef23cddea2360a45647a9cf&w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/male-soccer-player-with-ball-grass-field_23-2150821400.jpg?t=st=1720811109~exp=1720814709~hmac=da2147701b731fcabf10e4bba03ec6e09289f25aeb58f7cb4b0e9562142eaffc&w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/free-photo/soccer-player-staring-green-field-with-ball_176420-16447.jpg?w=360&t=st=1720811156~exp=1720811756~hmac=cc67b385f062e824b2b1760cfe7e8c55178fdae8aece78eef79adf77123dadb1" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/football-match-inter-forever-barca-legends_1015980-162802.jpg?w=360" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/epic-clash-marseille-s-soccer-maestro-vs-montpellier-s-champions-league-encounter-unleashing_1015980-50116.jpg?w=900" alt="">
      </div>
    </div>

    <div class="row">
        <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/football-player-stylishly-celebrating-with-raised-arms-animated-extravaganza-confetti-lig_1015980-85521.jpg?w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/futuristic-glow-immersive-cinematic-capture-soccer-player-match-with-vibrant-purple-aura_1015980-17567.jpg?w=900" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/legends-unleashed-unveiling-supreme-soccer-stars-all-time_1015980-17738.jpg?w=360" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/salah-secures-victory-with-spectacular-goal-unforgettable-celebration_1015980-819.jpg?w=740" alt="">
      </div>
      <div class="col-2">
            <img onclick="box(this)" src="https://img.freepik.com/premium-photo/thrilling-victory-jubilant-celebrations-france-s-triumph-2018-world-cup_1015980-92057.jpg?w=740" alt="">
      </div>  
    </div>
    <div class="lightbox">
        <button id="close-btn" onclick="closeBox()">X</button>
        <img id="lightbox-img" src="" width="100%" height="100%">
    </div>

    <script>
        var lightbox = document.querySelector(".lightbox");
        var lightboxImg = document.querySelector("#lightbox-img");
        var divImgs = document.querySelector("#row > img");
        

        function box(obj) {
            lightboxImg.src = obj.src;
            lightbox.style.display = "block";
        }

        function closeBox() {
            lightbox.style.display = "none";
        }

        window.onkeyup = function() {
            if (event.keyCode == 27) {
                closeBox();
            }
        }
    </script>
</body>
</html>