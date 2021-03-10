<?php require '../inc/header.php' ?>

<div class="titrehome">
    <h1 class="cazertox">CAZERTOX</h1>
    <h3>Membre officiel - streamer</h3>
</div>

<div class="grid">

    <div class="grid1">
        <img class="imgdesc" src="../assets/img/logo_cazertox.jpg" alt="cazertox" style="box-shadow: 0 0 10px #FB8527;">
    </div>

    <div class="grid2">
        <ul class="description">
            <li>L'une des premières recrue, membre pilier de la <strong>pryz</strong>.</li>
            <hr>
            <li>Calme, réfléchis, ne perds jamais son sang-froid.</li>

            <li>Possède un Draven de génie et un très beau skin offert par <span class="fyrox">Fyrox</span>.</li>

            <li>Énorme et sec !</li>

            <li>Marque gaming préférée : Razer, Roccat.</li>

            <li><a href="https://www.twitch.tv/cazertox" target="_blank"><img src="../assets/img/icon_twitch.png"
                                                                              alt="twitch Cazertox"></a></li>
        </ul>
    </div>

</div>


<h3>Jeu principal</h3>

<div class="maingame">
    <div class="card">
        <img src="../assets/img/skyrim.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">SKYRIM</p>
        </div>
    </div>
</div>


<h3>Jeux secondaires</h3>

<div class="secondarygame">
    <div class="card">
        <img src="../assets/img/lol.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">LEAGUE OF LEGEND</p>
        </div>
    </div>

    <div class="card">
        <img src="../assets/img/callofduty.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">CALL OF DUTY</p>
        </div>
    </div>

    <div class="card">
        <img src="../assets/img/rocketleague.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">ROCKET LEAGUE</p>
        </div>
    </div>
</div>

<h3>En direct</h3>
<div class="twitch">
    <div id="twitch-embed"></div>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script type="text/javascript">
        new Twitch.Embed("twitch-embed", {
            width: "80%",
            height: 600,
            channel: "cazertox",
            theme: "dark",
        });
    </script>
</div>





<?php require '../inc/footer.php'; ?>
