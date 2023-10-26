<svg viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="svg">
        <path id="circuit"
            d="M664.713 400.758C686.713 400.758 705.713 398.258 721.713 393.758C760.713 382.789 772.713 331.256 733.213 330.256L479.213 324.756C465.213 324.756 467.713 318.256 457.713 311.756C451.425 307.669 441.919 307.391 433.213 309.256C426.213 310.756 422.213 310.756 419.213 307.256L302.213 193.256C295.713 186.256 284.713 174.256 278.213 163.756L234.213 97.757C230.213 90.557 225.213 91.7564 219.713 92.757L159.713 102.757C145.213 104.757 138.602 119.257 143.713 130.757C149.713 144.257 172.713 194.257 172.713 201.757C174.213 216.257 185.713 204.257 187.213 218.257L202.713 319.757C207.213 352.757 234.213 390.404 269.713 398.757C286.713 402.757 310.713 401.757 331.213 400.257C340.213 399.257 357.047 392.257 367.713 388.258C371.713 386.258 373.713 390.257 373.713 391.258V395.758C373.713 400.758 374.213 399.758 378.713 399.758L664.713 400.758Z"
            stroke="black" stroke-width="13" />
            <path id="start-line" d="M661.713 389.256L661.801 413.542" stroke="white" stroke-width="3"/>
        <circle class="driver_circle pause team_{{ $teamid }}--fill" r="12" />
    </g>


    <style>
        svg {
            padding: 25px;

        }



        .driver_circle {
            position: absolute;
            offset-distance: 0%;
            aspect-ratio: 1/1;
            width: 25px;
            z-index: 1;
            offset-path: path("M664.713 400.758C686.713 400.758 705.713 398.258 721.713 393.758C760.713 382.789 772.713 331.256 733.213 330.256L479.213 324.756C465.213 324.756 467.713 318.256 457.713 311.756C451.425 307.669 441.919 307.391 433.213 309.256C426.213 310.756 422.213 310.756 419.213 307.256L302.213 193.256C295.713 186.256 284.713 174.256 278.213 163.756L234.213 97.757C230.213 90.557 225.213 91.7564 219.713 92.757L159.713 102.757C145.213 104.757 138.602 119.257 143.713 130.757C149.713 144.257 172.713 194.257 172.713 201.757C174.213 216.257 185.713 204.257 187.213 218.257L202.713 319.757C207.213 352.757 234.213 390.404 269.713 398.757C286.713 402.757 310.713 401.757 331.213 400.257C340.213 399.257 357.047 392.257 367.713 388.258C371.713 386.258 373.713 390.257 373.713 391.258V395.758C373.713 400.758 374.213 399.758 378.713 399.758L664.713 400.758Z");
            animation: followpath {{ $time }}s linear forwards;

        }

        .pause {
            animation-play-state: paused;
        }


        @keyframes followpath {
            {{-- Start --}} 0% {
                offset-distance: 0%;
            }
            
            {{-- T1 --}} 14.19% {
                offset-distance: -18%;
            }

            {{-- T2 --}} 16.29% {
                offset-distance: -19%;
            }

            {{-- T3 --}} 28.94% {
                offset-distance: -27%;
            }

            {{-- T4 --}} 37.92% {
                offset-distance: -39%;
            }

            {{-- T5 --}}  39.48% {
                offset-distance: -40%;
            }

            {{-- T6 --}} 47.73% {
                offset-distance: -46%;
            }

            {{-- T7 --}} 53.80% {
                offset-distance: -52%;

            }

            {{-- T8 --}} 70.40% {
                offset-distance: -71%;

            }

            {{-- T9 --}} 72.63% {
                offset-distance: -72.25%;
            }

            {{-- T10 --}} 74.06% {
                offset-distance: -73.5%;
            }

            {{-- T11 --}} 89.51% {
                offset-distance: -91%;
            }

            {{-- End --}} 100% {
                motion-offset: -100%;
                offset-distance: -100%;
            }

        }
    </style>


</svg>
