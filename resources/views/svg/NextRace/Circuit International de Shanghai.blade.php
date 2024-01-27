<svg class="usa-svg"  viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit" d="M528.201 107.453C542.201 109.278 594.204 103.79 628.704 104.956C673.704 104.956 688.204 88.9563 722.204 76.956C798.204 41.4561 783.704 53.4563 800.204 81.456C811.704 103.953 804.204 104.473 783.704 112.956C740.204 130.956 736.204 138.956 708.704 166.956C655.704 225.456 644.704 227.956 609.704 243.456C567.704 263.956 565.704 264.456 562.204 256.456C560.204 246.456 551.704 250.956 470.704 254.456C389.204 259.456 386.204 258.789 376.204 252.956C364.204 245.956 359.204 251.456 349.704 267.956C338.704 282.956 337.704 292.956 345.704 316.956C348.204 328.456 365.256 367.956 354.204 399.456C344.204 427.956 341.704 448.456 291.704 434.956C257.704 429.456 241.704 425.956 137.701 446.956C112.704 456.956 55.2032 452.956 134.201 396.456C166.201 359.956 178.351 368.456 166.201 341.456C157.201 321.456 168.701 321.956 195.201 233.956C218.701 182.956 210.201 163.165 247.701 150.956C263.701 145.747 273.309 131.956 271.201 125.956C264.701 107.453 315.201 103.953 315.201 103.953C429.701 77.9547 459.201 98.4553 528.201 107.453Z" stroke="black" stroke-width="13"/>
    <path id="start-line" d="M627.644 91.9895L627.018 120.37" stroke="white" stroke-width="3"/>
    <circle class="circle-path" r="12.5" >
        <animateMotion
          keyPoints="1;0" keyTimes="0;1"
          dur="5s"
          repeatCount="indefinite">
          <mpath xlink:href="#circuit" />
        </animateMotion>
      </circle>
    </svg>




<style>
    .circle-path{
        fill: var(--accent);
        offset-distance: -25;
    }
    svg:not(:root){
        overflow: visible;
    }
    .usa-svg{
        display: block;
        width: 50vw;
        min-width: 20em;
        position: relative;

    }

    /* Solution 2 risque detre meilleure pour + tard dans quali */

    /* .square{
        position: absolute;
        offset-distance: 0%;
        fill: red;
        aspect-ratio:1/1;
        width: 25px;
        z-index: 1;
        offset-path: path("M291.909 171.809C295.572 171.809 311.369 165.549 318.81 162.419C327.205 157.501 347.886 146.68 363.455 142.746C399.17 148.111 393.981 134.25 386.922 126.649C412.678 107.423 512.842 43.4843 579.809 10.3972C586.868 5.62784 599.27 -0.780925 609 9.50291C600.414 56.898 564.737 87.3024 544.895 99.8219C493.954 136.486 453.889 109.075 432.711 116.365C398.941 127.991 410.961 135.592 399.514 145.428C388.066 155.265 384.632 144.534 349.145 156.607C313.659 168.679 298.205 204.896 271.876 206.684C245.547 208.473 232.382 221.887 218.073 234.406C203.764 246.926 181.442 250.055 173.429 250.95C163.23 252.088 153.396 241.113 149.389 238.43C147.057 236.869 140.613 237.536 132.791 240.219C131.417 241.649 103.027 242.007 94.442 241.113C73.3789 237.178 47.1263 260.935 36.6329 273.306C-5.03541 282.964 3.24483 264.363 12.5935 253.632C75.3249 231.455 106.271 222.632 114.475 221.439L141.376 220.992C145.001 220.694 154.541 218.31 160.264 218.31C178.58 229.04 182.777 233.363 183.731 232.17C193.08 229.488 214.41 223.139 218.073 220.992C221.736 218.846 223.034 211.752 223.225 208.473C229.177 198.1 242.113 196.401 247.836 196.848C298.777 212.944 287.33 171.809 291.909 171.809Z");
        animation: followpath 5s linear infinite reverse;
    }

    @keyframes followpath {
        from {
            offset-distance: 10%;
        }
  to {
    motion-offset: 100%;
    offset-distance: 110%;
  }
} */

</style>


