<?php require '../inc/header.php' ?>

    <div class="titrehome">
        <h1 class="fyrox">FYROX</h1>
        <h3>Membre officiel - Streamer - Youtuber</h3>
    </div>

    <div class="grid">

        <div class="grid1">
            <img class="imgdesc" src="../assets/img/logo_fyrox_anim.gif" alt="FYROX HD" style="box-shadow: 0 0 10px #52AAFC;">
        </div>

        <div class="grid2">
            <ul class="description">
                <li>Mes copains me diront quoi mettre.</li>
                <li>Marque gaming préférée : Corsair Gaming, Roccat.</li>
                <li><a href="https://www.youtube.com/channel/UCF_kKzhWddO8G4FJsDYDahQ" target="_blank"><img src="../assets/img/icon_youtube.png"
                                                                                                            alt="youtube FYROX HD"></a>
                    <a href="https://www.twitch.tv/fyroxhd" target="_blank"><img src="../assets/img/icon_twitch.png"
                                                                                 alt="twitch FYROXHD"></a></li>
            </ul>
        </div>

    </div>



    <h3>Jeu principal</h3>

    <div class="maingame">
        <div class="card">
            <img src="../assets/img/fifa.jpg" class="card-img-top" alt="fifa 21">
            <div class="card-body">
                <p class="card-text">FIFA</p>
            </div>
        </div>
    </div>


    <h3>Jeux secondaires</h3>

    <div class="secondarygame">
        <div class="card">
            <img src="../assets/img/lol.jpg" class="card-img-top" alt="league of legend">
            <div class="card-body">
                <p class="card-text">LEAGUE OF LEGEND</p>
            </div>
        </div>

        <div class="card">
            <img src="../assets/img/wow.jpg" class="card-img-top" alt="world of warcraft">
            <div class="card-body">
                <p class="card-text">WORLD OF WARCRAFT</p>
            </div>
        </div>

        <div class="card">
            <img src="../assets/img/rocketleague.jpg" class="card-img-top" alt="rocket league">
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
                channel: "fyroxhd",
                theme: "dark",
            });
        </script>
    </div>





<?php require '../inc/footer.php'; ?>