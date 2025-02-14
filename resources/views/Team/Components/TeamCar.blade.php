<section class="team__car--wrapper">
    <h2 class="team--title team_{{ $team->id }}--text">
        Voiture
    </h2>
    <div class="team__car--container">
        <div class="team__car--card">
            <h3 class="team__car--title team_{{ $team->id }}--textStoke">{{ $team->car->name }}</h3>
            <img src="{{ asset('Images/Car/' . $team->Name . '.avif') }}" alt="">
        </div>
        <div class="team__car--infos team_{{ $team->id }}--text">
            <h3>Moteur: <span>{{ $team->car->power_unit }}</span></h3>
        </div>


    </div>

</section>

<style>
    .team__car--wrapper {
        width: 100%;
        height: 50dvh;
        padding: 4rem;
    }

    .team__car--container {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .team__car--card {
        display: flex;
        justify-content: center;
        position: relative;
    }

    .team__car--card img {
        margin-left: -7rem;
        height: 19.5rem;
        align-self: flex-end;
    }

    .team__car--title {
        font-size: 18.8rem;

        color: transparent;
        z-index: -1;
    }

    .team__car--infos {
        font-size: 2.4rem;
    }

    @media screen and (max-width: 1275px) {
        .team__car--title {
            font-size: 12.8rem;

        }

        .team__car--card img {
            height: 12.8rem;
        }

    }

    @media screen and (max-width: 850px) {
        .team__car--title {
            font-size: 8.2rem;

        }

        .team__car--card img {
            height: 8.2rem;
        }

    }

    @media screen and (max-width: 530px) {
        .team__car--wrapper {
            height: 100dvh;
            border-top: solid black 2px;


        }

        .team__car--container {
            height: 100%;
            justify-content: center;

        }

        .team__car--title {
            font-size: 6.4rem;

        }

        .team__car--card img {
            height: 6.4rem;
        }

    }

    @media screen and (max-height: 750px) {
        .team__car--wrapper {
            height: 100dvh;
            border-top: solid black 2px;


        }

        .team__car--container {
            height: 100%;
            justify-content: center;

        }

    }
</style>
