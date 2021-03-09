<?php require '../inc/header.php' ?>

    <div class="titrehome">
        <h1 class="myroko">MYROKO</h1>
        <h3>Capitaine - Co-fondateur - Streamer - Youtubeur</h3>
    </div>

    <div class="grid">

        <div class="grid1">
            <img class="imgdesc" src="../assets/img/logo_myroko.png" alt="Myroko">
        </div>

        <div class="grid2">
            <ul class="description">
                <li>Membre fondateur de la <strong>Pryz</strong> avec <span class="leetro">Leetro</span>.</li>

                <li>Totalement dévoué à sa team, ne manque pas d'innovation afin de progresser.</li>

                <li>N'hésite pas à prendre le lead lors des games afin d'assurer la victoire.</li>

                <li>Dj à ses heures perdues</li>

                <li>Marque gaming préférée : Razer.</li>

                <li><a href="https://www.youtube.com/user/MyrokOnline" target="_blank"><img src="../assets/img/icon_youtube.png"
                                                                                            alt="youtube MyrokoOnline"></a>
                    <a href="https://www.twitch.tv/pryzmyroko" target="_blank"><img src="../assets/img/icon_twitch.png"
                                                                                    alt="twitch PrYzMyroko"></a></li>
            </ul>

        </div>
    </div>



    <h3>Jeu principal</h3>

    <div class="maingame">
        <div class="card">
            <img src="../assets/img/valorant.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text">VALORANT</p>
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
                channel: "pryzmyroko",
                theme: "dark",
            });
        </script>
    </div>





<?php require '../inc/footer.php'; ?>