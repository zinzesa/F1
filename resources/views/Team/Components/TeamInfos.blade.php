@php
    $teamPoints = 0;
    foreach ($team->drivers as $driver) {
        $teamPoints += $driver->points;
    }
    $socials = $team->socials;

@endphp
<section class="team__infos--wrapper">
    <h2 class="team--title team_{{ $team->id }}--text">
        Informations
    </h2>
    <div class="team__infos--container">
        <div class="team__infos__datas">
            <p class="team__infos__data">Points: <span
                    class="team_{{ $driver->team->id }}--text">{{ $teamPoints }}</span></p>
            <p class="team__infos__data">Chef-Équipe: <span
                    class="team_{{ $driver->team->id }}--text">{{ $team->teamChief->firstname }}
                    {{ $team->teamChief->Lastname }}</span></p>
            <p class="team__infos__data">Pays: <span
                    class="team_{{ $driver->team->id }}--text">{{ $team->country->name }}<img
                        src="{{ asset('Images/Flags/' . $team->country->name . '.jpg') }}" alt=""></span></p>
        </div>
        <div class="team__text">
            {{ $socials->teamText }}
        </div>
    </div>
    <div class="team__socials">
        <div class="team__social"><i class="fa-brands fa-twitter team_{{ $driver->team->id }}--text "></i><a
                class="team_{{ $driver->team->id }}--text "
                href="{{ $socials->twitterLink }}">{{ $socials->twitterName }}</a></div>
        <div class="team__social"><i class="fa-brands fa-instagram team_{{ $driver->team->id }}--text"></i> <a
                href="{{ $socials->instagramLink }}"
                class="team_{{ $driver->team->id }}--text ">{{ $socials->instagramName }}</a></div>
        <div class="team__social"><i class="fa-solid fa-globe team_{{ $driver->team->id }}--text"></i></i><a
                href="{{ $socials->websiteLink }}"
                class="team_{{ $driver->team->id }}--text ">{{ $socials->websiteName }}</a></div>
    </div>


</section>

<style>
    .team__infos--wrapper {
        width: 100%;
        height: 100dvh;
        padding: 2rem 4rem 4rem 4rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: var(--background-darker);
        scroll-snap-align: center;
        scroll-snap-stop: always;


    }

    .team__infos--container {
        width: 100%;
        display: flex;
        place-items: center;
        flex-wrap: wrap;
        gap: 2rem;

    }

    .team__infos__datas {
        flex: 2 0 20rem;
    }

    .team__infos__data {
        font-size: 3.2rem;
    }

    .team__infos__data span {
        font-weight: 800;

    }

    .team__infos__data span img {
        height: 2.5rem;
        margin-left: 1rem;
    }

    .team__text {
        flex: 1 0 20rem;
        font-size: 2rem;

    }

    .team__socials {
        display: flex;
        flex-direction: row;
        justify-content: center;
        font-size: 2.4rem;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .team__social i {
        margin-right: 1rem;
        font-size: 3.2rem;
    }


    @media screen and (max-width: 475px) {


        .team__infos__data {
            font-size: 2.4rem;
        }

        .team__socials {
            font-size: 1.6rem;
        }

    }

    @media screen and (max-height: 700px) {
        .team__infos__data {
            font-size: 1.6rem;
        }

        .team__text {
            font-size: 1.2rem;
        }
        .team__socials{
            font-size: 1.2rem;
        }
        .team__socials i {
            font-size: 1.6rem;
        }
    }
</style>
