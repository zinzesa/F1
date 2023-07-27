<svg class="svg" viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit"

    d="M664.713 400.758C686.713 400.758 705.713 398.258 721.713 393.758C760.713 382.789 772.713 331.256 733.213 330.256L479.213 324.756C465.213 324.756 467.713 318.256 457.713 311.756C451.425 307.669 441.919 307.391 433.213 309.256C426.213 310.756 422.213 310.756 419.213 307.256L302.213 193.256C295.713 186.256 284.713 174.256 278.213 163.756L234.213 97.757C230.213 90.557 225.213 91.7564 219.713 92.757L159.713 102.757C145.213 104.757 138.602 119.257 143.713 130.757C149.713 144.257 172.713 194.257 172.713 201.757C174.213 216.257 185.713 204.257 187.213 218.257L202.713 319.757C207.213 352.757 234.213 390.404 269.713 398.757C286.713 402.757 310.713 401.757 331.213 400.257C340.213 399.257 357.047 392.257 367.713 388.258C371.713 386.258 373.713 390.257 373.713 391.258V395.758C373.713 400.758 374.213 399.758 378.713 399.758L664.713 400.758Z"

    stroke="black" stroke-width="13" />

    <path id="start-line" d="M661.713 389.256L661.801 413.542" stroke="white" stroke-width="3"/>

    <circle class="circle-path" r="12.5">
        <animateMotion keyPoints="1;0" keyTimes="0;1" dur="5s" repeatCount="indefinite">
            <mpath xlink:href="#circuit" />
        </animateMotion>
    </circle>
</svg>

<style>
    .circle-path {
        fill: var(--accent);
        offset-distance: -25;
    }

    svg:not(:root) {
        overflow: visible;
    }

    .svg {
        display: block;
        width: 50vw;
        min-width: 20em;
        position: relative;

    }

</style>
