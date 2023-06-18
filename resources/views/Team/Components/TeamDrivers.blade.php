<section class="team__drivers__container">
  <h2 class="team__drivers--titles team_{{$team->id}}--text">
    Pilotes
  </h2>
    @foreach ($team->drivers as $driver)
        <div class="team__driver__card__container ">
            <img src="{{ asset('Images/Drivers/Side-profil/' . $driver->Lastname . '.avif') }}" alt=""
                class="team__driver__photo">
            <div class="team__driver__infos">
                <div class="team__driver--firstname team__driver__info--container">Prénom: <span
                        class="team_{{ $driver->team->id }}--text">{{ $driver->FirstName }}</span></div>
                <div class="team__driver--points team__driver__info--container">Points: <span
                        class="team_{{ $driver->team->id }}--text">{{ $driver->points }}</span></div>
                <div class="team__driver--lastname team__driver__info--container">Nom de Famille: <span
                        class="team_{{ $driver->team->id }}--text">{{ $driver->Lastname }}</span></div>
                <div class="team__driver--country team__driver__info--container">Pays: <span
                        class="team_{{ $driver->team->id }}--text">{{ $driver->country->name }}</span><span><img src="{{asset('Images/Flags/'.$driver->country->name.'.jpg')}}" alt=""></span></div>
                <div class="team__driver__infos--line team_{{ $driver->team->id }}--background"></div>
            </div>
            <img src="{{asset('Images/Drivers/Number/'.$driver->Lastname.'.avif')}}" alt="" class="team__driver--number">
        </div>
    @endforeach

</section>


<style>

    .team__drivers__container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        padding: 0 4rem;
        justify-content: space-evenly;
        background-color: var(--background-dark);
        align-items: center;
    }

    .team__drivers--titles{
      font-size: 6.4rem;
      flex: .3 0 auto;
      font-weight: 900;
    }

    .team__driver__card__container {
        flex: 1 0 auto;
        display: flex;
        padding: 10rem;
        justify-content: center;

    }

    .team__driver__card__container:hover,
    .team__driver__card__container:active {
        box-shadow: none;

    }

    .team__driver__photo {
        aspect-ratio: 1/1;
        align-self: flex-end;
        width: 25rem;

    }

    .team__driver__infos {
        padding: 0 1rem;
        align-self: flex-end;
        height: fit-content;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-row-gap: 1rem;
        grid-column-gap: 2rem;
        flex: 0 0 80rem;
    }

    .team__driver__info--container {
        width: fit-content;
        height: fit-content;
        font-size: 2.4rem;
        overflow: hidden;
    }

    .team__driver__info--container span {
        display: inline-block;
        transform: translateY(100%);

        transition: .75s;
        font-weight: 800;
    }
    .team__driver__info--container span img {
        height: 2.5rem;
        margin-left: 1rem;

    }

    .visible_driver .team__driver__info--container span {
      transition-delay: .5s;
        transform: translateY(0%);

    }

    .team__driver__infos--line{
      height: .2rem;
      width: 0%;
      grid-column: 1 / span 2;
      transition: .75s;

    }

    .visible_driver .team__driver__infos--line{

      width: 100%;

    }

    .team__driver--number{
      aspect-ratio: 183/103;
      align-self: flex-end;
      width: 20rem;
    }
</style>
