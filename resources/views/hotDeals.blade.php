<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trav |
          {{$page}}
        </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
            <nav class="w-full flex justify-around items-center  py-4 px-4 fixed top-0 bg-white z-[999] max-md:justify-between"> 
                <img src="{{ asset('assets/logo.png') }}" alt="Logo"  
                >

                <ul class="max-lg:hidden text-sm font-semibold flex justify-evenly items-center list-none space-x-10" > 
                    <li class="hover:text-blue-300 transition-all ease-in-out delay-300">
                      <a href="/hotdeals">
                        hot deals
                      </a>
                    </li>
                    <li class="hover:text-blue-300 transition-all ease-in-out delay-300">
                      <a href="reviews">reviews</a>
                    </li>
                    <li class="hover:text-blue-300 transition-all ease-in-out delay-300">
                      <a href="contact">contact</a>
                    </li>
                    <li  class="text-sm bg-blue-500 px-8 py-4 rounded-full text-white font-extrabold capitalize tracking-wider ">get your deal</li>
                </ul>
                  <img src="{{ asset('assets/hamburger.svg') }}" alt="hamburger"  class="max-lg:block hidden checked:bg-blue-400" style="height:25px;width:25px" />

            </nav>
            {{-- main frame --}}
          <section id="home" style="background-image: url({{ asset('assets/header.jpg') }})" class="min-h-[100vh] min-w-full bg-cover">
            <div class="min-h-[90vh] min-w-full flex justify-center items-center bg-[#00000033]">
              <div class="w-[80%] flex p-12 pt-[120px] justify-evenly max-lg:flex-col max-[860px]:justify-center max-[860px]:items-center gap-10 max-md:w-full" >

                  <div class="max-md:place-content-start">
                    <h3 class="text-6xl text-white mb-5  max-md:text-3xl">We make your Trip a happy one</h3>
                    <h1 class="text-8xl text-white mb-8  max-md:text-4xl">Scorching Savings Await!</h1>
                    <button  class="hover:bg-black text-sm bg-blue-500 px-8 py-4 rounded-full text-white font-extrabold capitalize 
                    tracking-wider max-md:py-4 max-md:px-6 max-md:text-lg">Book your seat now</button>
                  </div>

              </div>
            </div>
          </section>
          
          {{-- services cards --}}
          <section class="w-[75%] py-16 px-10 mx-auto">
            <div class="flex max-md:flex-wrap flex-nowrap justify-evenly items-center gap-5 max-md:gap-14">
              <div class="flex ">
                <div class="flex gap-5 items-center max-md:gap-10">
                  <div>
                    <svg fill="black" width="40px" height="40px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                      <g>
                      
                      <g>
                      
                      <path d="M17.115,42.135c-0.538,0-0.982-0.428-0.999-0.969c-0.014-0.439,0-0.863,0.04-1.271c-0.242-0.029-0.475-0.147-0.644-0.35    c-0.741-0.884-1.474-1.774-2.207-2.666c-1.626-1.977-3.308-4.021-5.049-5.937c-2.991-3.293-3.794-6.837-2.387-10.536    c1.853-4.867,4.994-7.047,9.894-6.843c5.761,0.234,9.434,2.845,11.229,7.979c1.363,3.893-0.381,8.713-4.24,11.722    c-2.475,1.931-4.75,4.216-4.637,7.839c0.017,0.553-0.417,1.014-0.969,1.031C17.136,42.135,17.125,42.135,17.115,42.135z     M15.156,15.551c-3.707,0-5.941,1.689-7.417,5.566c-1.149,3.021-0.514,5.715,1.998,8.479c1.774,1.952,3.472,4.017,5.113,6.012    c0.589,0.716,1.178,1.432,1.771,2.145c0.913-2.63,2.918-4.519,4.902-6.064c3.192-2.49,4.665-6.391,3.583-9.485    c-1.536-4.391-4.442-6.438-9.424-6.642C15.503,15.555,15.328,15.551,15.156,15.551z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M33.028,30.41c-0.093,0-0.187-0.013-0.278-0.039c-0.531-0.154-0.836-0.709-0.683-1.239l0.065-0.225    c0.375-1.299,0.756-2.611,1.236-3.891c-0.543-0.628-1.074-1.267-1.605-1.905c-1.165-1.398-2.369-2.846-3.658-4.132    c-2.402-2.398-2.909-5.222-1.596-8.888c1.135-3.162,3.563-4.579,7.422-4.332c3.615,0.233,5.997,1.813,7.281,4.83    c1.723,4.045,1.223,6.966-1.53,8.931c-3.466,2.473-4.517,6.102-5.63,9.943l-0.064,0.225C33.861,30.126,33.462,30.41,33.028,30.41z     M33.066,7.731c-2.503,0-3.92,0.933-4.674,3.036c-1.05,2.928-0.713,4.961,1.126,6.796c1.354,1.352,2.589,2.835,3.782,4.269    c0.316,0.38,0.633,0.761,0.952,1.139c0.948-1.891,2.255-3.642,4.268-5.079c1.296-0.924,2.563-2.5,0.853-6.519    c-0.986-2.316-2.704-3.433-5.569-3.617C33.549,7.739,33.303,7.731,33.066,7.731z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M33.867,19.243c-0.05,0-0.1-0.004-0.15-0.011c-2.717-0.41-3.818-2.468-4.475-4.214c-0.084-0.221-0.086-0.465-0.006-0.688    l0.209-0.576c0.141-0.388,0.275-0.755,0.396-1.127c0.451-1.385,1.573-3.034,4.336-2.929c0.204,0.007,0.408,0.008,0.609,0.006    c1.336-0.002,3.168,0,4.215,2.231c0.772,1.645,0.795,3.247,0.064,4.512c-0.779,1.35-2.357,2.221-4.467,2.476    C34.414,19.122,34.15,19.243,33.867,19.243z M31.246,14.652c0.602,1.461,1.285,2.209,2.31,2.503    c0.144-0.104,0.315-0.172,0.505-0.188c1.624-0.137,2.787-0.677,3.273-1.521c0.506-0.873,0.201-1.93-0.143-2.662    c-0.486-1.036-1.051-1.081-2.388-1.081c-0.021,0-0.041,0-0.063,0c-0.208,0-0.419,0-0.63-0.008    c-1.301-0.029-1.996,0.406-2.368,1.552c-0.129,0.394-0.271,0.782-0.419,1.191L31.246,14.652z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M23.816,42.414h-4.467c-0.552,0-1-0.447-1-1s0.448-1,1-1h4.467c0.552,0,1,0.447,1,1S24.368,42.414,23.816,42.414z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M27.761,32.575c-0.456,0-0.867-0.313-0.974-0.775c-0.123-0.539,0.212-1.075,0.75-1.199l3.629-0.837    c0.533-0.125,1.074,0.211,1.199,0.75c0.124,0.538-0.211,1.075-0.75,1.199l-3.629,0.837C27.91,32.567,27.835,32.575,27.761,32.575z    "/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M35.682,42.414h-3.351c-0.552,0-1-0.447-1-1s0.448-1,1-1h3.351c0.552,0,1,0.447,1,1S36.233,42.414,35.682,42.414z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M29.809,42.414h-3.35c-0.553,0-1-0.447-1-1s0.447-1,1-1h3.35c0.553,0,1,0.447,1,1S30.361,42.414,29.809,42.414z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M36.411,37.411c-0.028,0-0.056-0.001-0.084-0.004l-3.35-0.279c-0.551-0.045-0.96-0.528-0.914-1.079    s0.536-0.973,1.079-0.913l3.351,0.279c0.55,0.045,0.96,0.528,0.913,1.079C37.363,37.017,36.926,37.411,36.411,37.411z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M41.802,39.776c-0.185,0-0.37-0.051-0.538-0.157l-2.831-1.813c-0.466-0.298-0.602-0.916-0.304-1.381    c0.297-0.465,0.914-0.602,1.381-0.305l2.832,1.813c0.465,0.298,0.602,0.916,0.304,1.381    C42.455,39.613,42.132,39.776,41.802,39.776z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M38.156,42.461c-0.468,0-0.886-0.329-0.98-0.806c-0.107-0.542,0.245-1.068,0.787-1.175l3.297-0.652    c0.545-0.112,1.068,0.244,1.176,0.785c0.107,0.542-0.244,1.068-0.785,1.176l-3.299,0.652    C38.286,42.455,38.221,42.461,38.156,42.461z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M30.268,36.763c-0.18,0-0.362-0.049-0.526-0.15l-2.855-1.773c-0.47-0.291-0.614-0.907-0.323-1.377    c0.291-0.468,0.908-0.611,1.377-0.322l2.856,1.773c0.47,0.291,0.614,0.907,0.322,1.377C30.929,36.595,30.602,36.763,30.268,36.763    z"/>
                      
                      </g>
                      
                      <g>
                      
                      <path d="M17.273,30.191c-1.145,0-2.242-0.354-3.254-1.062c-1.743-1.217-2.71-2.896-2.724-4.728    c-0.015-2.061,1.151-4.04,3.282-5.575c0.218-0.157,0.478-0.215,0.724-0.179c0.01-0.001,0.02-0.003,0.029-0.004    c3.568-0.399,5.708,1.817,7.337,4.032c0.126,0.172,0.194,0.38,0.194,0.593c0,0.132-0.005,0.265-0.011,0.397    c-0.009,0.21-0.018,0.408,0.006,0.552c0.368,2.21-0.601,4.193-2.529,5.178C19.289,29.927,18.263,30.191,17.273,30.191z     M15.496,20.637c-1.432,1.109-2.21,2.433-2.201,3.751c0.009,1.183,0.655,2.255,1.869,3.103c1.261,0.882,2.691,0.923,4.254,0.125    c1.158-0.591,1.692-1.709,1.466-3.068c-0.058-0.347-0.044-0.672-0.032-0.959c-1.535-2.025-2.996-3.214-5.301-2.955    C15.533,20.635,15.514,20.636,15.496,20.637z"/>
                      
                      </g>
                      
                      </g>
                      
                      </svg>
                  </div>
                  <div>
                    <h3 class="font-sans font-semibold text-sm  uppercase mb-3" >Select destination</h3>
                    <p class="text-md text-slate-400 ">At first choose the place you always wanted to go.</p>
                  </div>
                </div>
                </div>
              <div class="flex gap-5 items-center max-md:gap-10">
                <div>
                  <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.005 4H9.99502C6.21439 4 4.32407 4 3.14958 5.17157C2.34091 5.97823 2.08903 7.12339 2.01058 8.98947C1.99502 9.35954 1.98724 9.54458 2.05634 9.66802C2.12545 9.79147 2.40133 9.94554 2.95308 10.2537C3.56586 10.5959 3.98007 11.2497 3.98007 12C3.98007 12.7503 3.56586 13.4041 2.95308 13.7463C2.40133 14.0545 2.12545 14.2085 2.05634 14.332C1.98724 14.4554 1.99502 14.6405 2.01058 15.0105C2.08903 16.8766 2.34091 18.0218 3.14958 18.8284C4.32407 20 6.21439 20 9.99502 20H14.005C17.7856 20 19.6759 20 20.8504 18.8284C21.6591 18.0218 21.911 16.8766 21.9894 15.0105C22.005 14.6405 22.0128 14.4554 21.9437 14.332C21.8746 14.2085 21.5987 14.0545 21.0469 13.7463C20.4341 13.4041 20.0199 12.7503 20.0199 12C20.0199 11.2497 20.4341 10.5959 21.0469 10.2537C21.5987 9.94554 21.8746 9.79147 21.9437 9.66803C22.0128 9.54458 22.005 9.35954 21.9894 8.98947C21.911 7.12339 21.6591 5.97823 20.8504 5.17157C19.6759 4 17.7856 4 14.005 4Z" stroke="#1C274C" stroke-width="1.5"/>
                    <path d="M9 15L15 9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M15.5 14.5C15.5 15.0523 15.0523 15.5 14.5 15.5C13.9477 15.5 13.5 15.0523 13.5 14.5C13.5 13.9477 13.9477 13.5 14.5 13.5C15.0523 13.5 15.5 13.9477 15.5 14.5Z" fill="#1C274C"/>
                    <path d="M10.5 9.5C10.5 10.0523 10.0523 10.5 9.5 10.5C8.94772 10.5 8.5 10.0523 8.5 9.5C8.5 8.94772 8.94772 8.5 9.5 8.5C10.0523 8.5 10.5 8.94772 10.5 9.5Z" fill="#1C274C"/>
                    </svg>
                </div>
                <div>
                  <h3 class="font-sans font-semibold text-sm uppercase mb-3">BOOK A TRIP</h3>
                  <p  class="text-md text-slate-400 ">Then book your trip from our exclusive offers.</p>
                </div>
              </div>
              <div class="flex gap-5 items-center max-md:gap-10">
                <div>
                  <svg width="40px" height="40px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>flight_takeoff_fill</title>
                    <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Transport" transform="translate(-624.000000, -48.000000)" fill-rule="nonzero">
                            <g id="flight_takeoff_fill" transform="translate(624.000000, 48.000000)">
                                <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero">
                
                </path>
                                <path d="M21.0001,20 C21.5524,20 22.0001,20.4477 22.0001,21 C22.0001,21.51285 21.614073,21.9355092 21.1167239,21.9932725 L21.0001,22 L3.00008,22 C2.44779,22 2.00008,21.5523 2.00008,21 C2.00008,20.48715 2.38611566,20.0644908 2.8834579,20.0067275 L3.00008,20 L21.0001,20 Z M7.93041,4.17678 L14.492975,9.53711375 L14.492975,9.53711375 L19.0655,8.68222 C20.1891,8.47192 21.3346,8.91842 22.0194,9.83365 L22.1805778,10.0527357 C22.3605123,10.3095728 22.4965889,10.5770333 22.4262,10.9212 C22.205,12.002 21.3922,12.8651 20.3266,13.1506 L5.20745,17.2017 C4.59963,17.3646 3.95476,17.1308 3.59258,16.6162 L0.929819,12.8329 C0.72978,12.5486 0.873576,12.1521 1.20929,12.0621 L2.83331,11.627 C3.31775,11.4972 3.83501,11.6181 4.21174,11.9491 L4.95832,12.6052 L4.96856,12.607 L4.96856,12.607 L9.16743,10.9666 C9.17376,10.9641 9.17583,10.9562 9.17152,10.9509 L4.44679,5.19599 C4.21618,4.9151 4.35278,4.48982 4.70382,4.39576 L6.59315,3.88951 C7.05916,3.76464 7.55679,3.87154 7.93041,4.17678 Z" id="形状" fill="#09244B">
                
                </path>
                            </g>
                        </g>
                    </g>
                </svg>
                </div>
                  <div>
                    <h3 class="font-sans font-semibold text-sm uppercase mb-3">TAKE YOUR FLIGHT</h3>
                    <p  class="text-md text-slate-400 ">Take yourr flight on selected date and enjoy.</p>
                  </div>
              </div>
            </div>
          </section>
          
          {{-- Hot deals --}}
          <section class="py-[100px] px-40 bg-blue-100 max-sm:px-5">
             <h2 class="text-3xl font-sans text-center font-bold"><span class="text-blue-500">Hot</span> Deals</h2>

             <p class="text-center text-slate-400 text-xl mt-4 mb-12">please check out our latest packages</p>

             <div class="flex gap-14 justify-center px-5 max-xl:min-w-[200px] max-xl:min-h-[450px] flex-wrap">
              <div class="min-h-[400px] min-w-[300px] bg-white relative flex flex-col "  >
                <div class="min-w-full flex-1 bg-[#00000033] flex flex-row py-8 px-4 self-start" style="background-image: url({{ asset('assets/1.jpg') }})">
                  <div class="self-end">
                    <h4 class="text-white/50 px-4 font-bold line-through mb-4 text-2xl">$1600.00</h4>
                    <h4 class="text-white font-bold  px-4 mb-4 text-xl">$1299.00</h4>
                    <button class="hover:bg-black transition-all ease-in uppercase font-bold py-2 px-4 text-sm text-white bg-blue-400 rounded-full mb-4">
                      get offer
                    </button>
                  </div>

                    <div class="text-white">
                      <h4 class="uppercase font-bold text-white text-xl">5 star hotel</h4>
                      <p class="uppercase font-bold text-white text-lg mt-3">2 persons</p>
                    </div>
                </div>
                <div class="basis-20 py-5 px-5">
                  <p class="text-slate-500 text-sm mb-3">3 days, 4 nights</p>
                  <p class="text-sm font-bold tracking-wider ">Forest Hill, united kingdom</p>
                </div>
              </div>
              {{-- card 2 --}}
              <div class="min-h-[400px] min-w-[300px] bg-white relative flex flex-col "  >
                <div class="min-w-full flex-1 bg-[#00000033] flex flex-row py-8 px-4 self-start" style="background-image: url({{ asset('assets/2.jpg') }})">
                  <div class="self-end">
                    <h4 class="text-white/50 px-4 font-bold line-through mb-4 text-2xl">$1600.00</h4>
                    <h4 class="text-white font-bold  px-4 mb-4 text-xl">$1199.00</h4>
                    <button class="hover:bg-black transition-all ease-in uppercase font-bold py-2 px-4 text-sm text-white bg-blue-400 rounded-full mb-4">
                      get offer
                    </button>
                  </div>

                    <div class="text-white">
                      <h4 class="uppercase font-bold text-white text-xl">5 star hotel</h4>
                      <p class="uppercase font-bold text-white text-lg mt-3">2 persons</p>
                    </div>
                </div>
                <div class="basis-20 py-5 px-5">
                  <p class="text-slate-500 text-sm mb-3">4 days 5 night</p>
                  <p class="text-sm font-bold tracking-wider ">MIAMI BEACH, FLORIDA</p>
                </div>
              </div>
              {{-- card 3 --}}
              <div class="min-h-[400px] min-w-[300px] bg-white relative flex flex-col">
                <div class="min-w-full flex-1 bg-[#00000033] flex flex-row py-8 px-4 self-start" style="background-image: url({{ asset('assets/3.jpg') }})">
                  <div class="self-end">
                    <h4 class="text-white/50 px-4 font-bold line-through mb-4 text-2xl">$1600.00</h4>
                    <h4 class="text-white font-bold  px-4 mb-4 text-xl">$899.00</h4>
                    <button class="hover:bg-black transition-all ease-in  uppercase font-bold py-2 px-4 text-sm text-white bg-blue-400 rounded-full mb-4">
                      get offer
                    </button>
                  </div>

                    <div class="text-white">
                      <h4 class="uppercase font-bold text-white text-xl">5 star hotel</h4>
                      <p class="uppercase font-bold text-white text-lg mt-3">2 persons</p>
                    </div>
                </div>
                <div class="basis-20 py-5 px-5">
                  <p class="text-slate-500 text-sm mb-3">2 days 3 night</p>
                  <p class="text-sm font-bold tracking-wider ">GURUKUL TEMPLE, INDIA</p>
                </div>
              </div>

             </div>
              
          </section>

          {{-- Offers card --}}

          <section class="py-[100px] max-md:py-5">
              <div class="w-full flex flex-wrap justify-center gap-10 px-10">
                  <div style="background-image: url({{asset('/assets/offer.jpg')}});background-size:cover;background-position:center;" class="min-w-[350px] min-h-[350px] px-28 flex justify-center items-center text-white">
                      <h1 class="text-5xl">$1399.00</h1>
                  </div>
                  <div class="py-2 px-5">
                    <p class="p-2 text-sm text-white inline-block uppercase bg-blue-500">special offer</p>
                    <h2 class="text-3xl font-thin text-slate-800 tracking-wide my-4">4 days 5 night</h2>
                    
                    <h2 class="font-bold text-5xl capitalize tracking-wide">Forest Hill Tour</h2>
                    <p class="text-md text-slate-400 my-4">you gonn to regret if you miss the chance</p>
                  
                    <ul class="grid grid-cols-3 w-full gap-x-10 gap-y-2 text-sm">
                      <li  style="list-style-image: url({{asset('check-svgrepo-com.svg')}})"  >5 star hotel</li>
                      <li>2 person</li>
                      <li>free breakfast</li>
                      <li>tour guide</li>
                      <li>mountain view</li>
                      <li>single room</li>
                      <li>free wifi</li>
                      <li>room service</li>
                    </ul>
                  
                    <button  class="hover:bg-black transition-all ease-in  uppercase font-bold py-2 px-4 text-sm text-white bg-blue-500 rounded-full mt-8">
                      get offer
                    </button>
                  
                  
                  </div>
              </div>
          </section>

          {{-- Offer panel --}}
          <section id="home" style="background-image: url({{ asset('assets/backgound-2.jpg') }});background-position:center;" class="min-h-[80vh] min-w-full bg-cover">
            <div class="min-h-[80vh] min-w-full flex justify-center items-center bg-[#00000033]">
              <div class="w-[80%] flex p-12 justify-evenly max-lg:flex-col max-[860px]:justify-center max-[860px]:items-center gap-10 max-md:w-full" >
                  <div class="max-md:place-content-start">
                    <h4 class="text-2xl text-white mb-5 font-extrabold max-md:text-xl">$469/<small class="text-sm">per person</small> </h4> 
                    <h3 class="text-3xl text-white mb-5 font-extrabold max-md:text-2xl">5 days 4 nights</h3>
                    <h1 class="text-5xl text-white mb-8 font-extrabold  max-md:text-3xl">amalfi fort</h1>
                    <button  class="text-xl bg-blue-500 px-4 py-3 rounded-full text-white font-extrabold capitalize tracking-wider max-md:py-4 max-md:px-6 max-md:text-lg">get your deal</button>
                  </div>

                  <div class="w-[350px]  border-solid bg-white relative p-4 ">
                    <h4 class="text-xl capitalize text-blue-500 mt-2 mb-5">package features</h4>
                    <ul class="grid grid-cols-2 w-full gap-x-10 gap-y-4 text-sm items-center justify-center text-wrap">
                      <li  style="list-style-image: url({{asset('check-svgrepo-com.svg')}})"  >5 star hotel</li>
                      <li>2 person</li>
                      <li>free breakfast</li>
                      <li>tour guide</li>
                      <li>mountain view</li>
                      <li>single room</li>
                      <li>free wifi</li>
                      <li>room service</li>
                    </ul>

                    <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="w-20 h-20 rounded-full bg-blue-500 outline-4 outline-blue-400 outline flex justify-center items-center absolute -top-8 -right-4">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-10 h-10 fill-white"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                    </a>
                  </div>
              </div>
            </div>
          </section>

          {{-- footer --}}

          <footer class="pb-16 mx-auto bg-blue-500 max-sm:px-5 max-md:py-16">
              <div class="mx-12">
                  <div class="flex justify-center gap-10 flex-wrap">
                    <div class="self-center">
                      <img src="{{asset('assets/footer-logo.png')}}" alt="logo" class="w-[100px]">
                      <div class="text-white text-sm">
                        <p>All rights reservev by themeyn</p>
                        <ul class="flex list-none items-center gap-2 text-white">
                          <li>License</li>
                          <li>policy</li>
                          <li>Discussion</li>
                        </ul>
                      </div>
                    </div>
                      <div class="bg-white px-6 self-start flex-wrap -mt-12 max-xl:mt-4">
                          <h2 class="text-blue-500 py-4 border-b-2 font-bold">Location of our office's</h2>
                          <div class="flex gap-8 flex-wrap py-4">
                              <div class="text-sm">
                                <h2 class="py-5 text-xl">california</h2>
                                <p>2701 Ming Avenue</p>
                                <p>Bakersfield, CA 93304</p>
                                <p>(661) 396-3480</p>
                                <small class="text-blue-500">Locate on map &rArr;</small>
                              </div>
                              <div class="text-sm">
                                <h2 class="py-5 text-xl">california</h2>
                                <p>2701 Ming Avenue</p>
                                <p>Bakersfield, CA 93304</p>
                                <p>(661) 396-3480</p>
                                <small class="text-blue-500">Locate on map &rArr;</small>
                              </div>
                              <div class="text-sm">
                                <h2 class="py-5 text-xl">california</h2>
                                <p>2701 Ming Avenue</p>
                                <p>Bakersfield, CA 93304</p>
                                <p>(661) 396-3480</p>
                                <small class="text-blue-500">Locate on map &rArr;</small>
                              </div>
                              <div class="text-sm">
                                <h2 class="py-5 text-xl">california</h2>
                                <p>2701 Ming Avenue</p>
                                <p>Bakersfield, CA 93304</p>
                                <p>(661) 396-3480</p>
                                <small class="text-blue-500">Locate on map &rArr;</small>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
    </body>
</html>
