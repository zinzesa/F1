<svg class="svg" viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit"

    d="M314.412 92.4798L443.391 59.3267C479.723 49.9877 513.331 53.0133 525.593 55.6935L665.018 86.1217C742.224 102.017 754.94 193.756 764.023 228.726C771.289 251.887 755.697 290.945 747.219 309.565C739.499 324.552 729.053 325.914 720.878 320.919L628.685 263.695C597.076 241.169 599.62 196.935 625.052 172.411L668.197 132.445C677.734 119.729 663.655 106.559 650.031 110.192L616.423 117.912C600.982 119.729 576.912 148.795 553.75 169.686C524.23 186.944 490.623 155.153 527.863 115.642C537.401 94.7506 521.505 87.03 500.16 89.3008L440.666 100.655C405.696 109.283 390.709 171.957 422.046 196.935L582.816 312.29C602.345 326.369 615.061 355.889 610.973 382.229L603.707 426.282C600.074 439.453 591.899 458.073 566.466 451.715L204.961 357.705C135.93 328.639 133.659 265.058 165.904 216.009C174.078 198.297 153.642 189.344 142.288 178.315C126.392 162.874 137.292 143.799 167.266 132.899L314.412 92.4798Z"

    stroke="black" stroke-width="13" />

    <path id="start-line" d="M308.239 81.7446L313.842 103.08" stroke="white" stroke-width="3"/>            <circle class="driver_circle--Autodrome_José_Carlos_Pace" r="12" />

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
