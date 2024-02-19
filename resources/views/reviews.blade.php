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
          <section id="home" style="background-image: url({{ asset('assets/reviews-bg.jpeg') }})" class="min-h-[100vh] min-w-full bg-cover">
            <div class="min-h-[90vh] min-w-full flex justify-center items-center bg-[#00000033]">
              <div class="w-[80%] flex p-12 pt-[120px] justify-evenly max-lg:flex-col max-[860px]:justify-center max-[860px]:items-center gap-10 max-md:w-full" >

                  <div class="max-md:place-content-start">
                    <h3 class="text-6xl text-white mb-5  max-md:text-3xl">We make your Trip a happy one</h3>
                    <h1 class="text-8xl text-white mb-8  max-md:text-4xl">Scorching Savings Await!</h1>
                  </div>

              </div>
            </div>
          </section>
          

          {{-- reviews --}}
          
          <section class="py-[100px]  bg-blue-100/50 max-sm:px-5">
            <h2 class="text-3xl font-sans text-center font-bold"><span class="text-blue-500">Customer</span> Words</h2>

             <p class="text-center text-slate-400 text-xl mt-4 mb-12">take it from our amaging customers</p>

             <div class="w-[70%] mx-auto">
                <div class="grid grid-cols-2 w-full gap-4 grid-rows-[1fr_20px_1fr_20px] max-[900px]:grid-cols-1 max-[900px]:grid-rows-4">
                  {{-- card 1 --}}
                    <div class="min-h-64 min-w-[430px] row-span-2 max-[800px]:row-span-1" style="background-image: url({{asset('assets/video.jpg')}});background-size:cover;background-position:center;">
                      <div class="w-full h-full bg-[#00000033] flex flex-col align-baseline">
                        <div class="basis-3/4 flex justify-center items-end">
                          <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="w-8 h-8 self-center rounded-full bg-blue-500 outline-4 outline-blue-400 outline flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4 fill-white"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                          </a>
                        </div>
                        <div class=" py-4 basis-2/4">
                          <h4 class="text-white capatilize text-xl font-thinner p-2 text-center">Lawrance Duncan</h4>
                          <p class="text-white text-[10px] font-bold tracking-wider uppercase p-2 text-center">Businessman, from sudney</p>
                           <div class="flex justify-center gap-2">
                          <svg class="w-3 h-3  inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                           </div>
                        </div>
                      </div>
                    </div>
                    {{-- card 2 --}}
                    <div class="min-h-64 min-w-[430px] flex flex-col p-8 bg-white border-solid border-slate-200 shrink-0">
                        <div class="basis-1/5 border-b-2 border-b-slate-200 items-center pb-4">
                          <div class="inline-block ">
                            <img src="{{asset('/assets/1 (1).jpg')}}" alt="" class="rounded-full h-20 w-20 mr-5" >
                          </div>
                          <div class="inline-block">
                            <p class="text-2xl font-thin text-slate-500">Stephney Stanley</p>
                            <p class="text-[10px] uppercase font-bold"> TRAVELER, MELBORNE</p>
                            <div>
                              <svg class="w-3 h-3  inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                               </div>
                          </div>
                        </div>
                        <div class="basis-4/5 relative flex items-center ">
                          <svg  class="absolute w-12 h-12 -z-1 top-0 fill-slate-500/50"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                          <p class="z-50">collection of textile samples lay spread out on the table Samsa was a travelling salesman.</p>
                        </div>
                    </div>

                  {{-- card 3 --}}
                  <div class="min-h-64 min-w-[430px] flex flex-col p-8 bg-white border-solid border-slate-200 shrink-0">
                    <div class="basis-1/5 border-b-2 border-b-slate-200 items-center pb-4 flex flex-nowrap">
                      <div class="inline-block ">
                        <img src="{{asset('/assets/3 (1).jpg')}}" alt="" class="rounded-full h-20 w-20 mr-5" >
                      </div>
                      <div class="inline-block">
                        <p class="text-2xl font-thin text-slate-500">William Beck</p>
                        <p class="text-[10px] uppercase font-bold">DESIGNER, PERTH</p>
                        <div>
                          <svg class="w-3 h-3  inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                          <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                           </div>
                      </div>
                    </div>
                    <div class="basis-4/5 relative flex items-center ">
                      <svg  class="absolute w-12 h-12 -z-1 top-0 fill-slate-500/50"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                      <p class="z-50">Never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams.</p>
                    </div>
                </div>

                    {{-- card -4 --}}
                    <div class="min-h-64 min-w-[430px] row-span-2 ax-[800px]:row-span-1 flex flex-col p-8 bg-white border-solid border-slate-200">
                        <div class="basis-1/4 border-b-2 border-b-slate-200 items-center pb-4">
                          <div class="inline-block ">
                            <img src="{{asset('/assets/2 (1).jpg')}}" alt="" class="rounded-full h-20 w-20 mr-5" >
                          </div>
                          <div class="inline-block">
                            <p class="text-2xl font-thin text-slate-500">Lisa Hernandez</p>
                            <p class="text-[10px] uppercase font-bold"> Traveller, perth</p>
                            <div>
                              <svg class="w-3 h-3  inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                              <svg class="w-3 h-3 inline-block fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                               </div>
                          </div>
                        </div>
                        <div class="basis-3/4 relative flex items-center ">
                          <svg  class="absolute w-12 h-12 -z-1 top-0 fill-blue-900/40"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                          <p class="z-50">When Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour like back, and if he lifted his head a little he could see his brown belly.</p>
                        </div>
                    </div>
                    
                </div>
             </div>
          </section>

          {{-- Our customers --}}

          <section class="py-[100px]   max-sm:px-5">
            <h2 class="text-3xl font-sans text-center font-bold"><span class="text-blue-500">Our</span> Customers</h2>

            <p class="text-center text-slate-400 text-xl mt-4 mb-12">lets introduce with our partners</p>

              <div class="flex items-center justify-center gap-x-16 gap-y-5 flex-wrap">
                <img src="{{asset('assets/1.png')}}" alt="" class="p-x-10">
                <img src="{{asset('assets/2.png')}}" alt="" class="p-x-10">
                <img src="{{asset('assets/3.png')}}" alt="" class="p-x-10">
                <img src="{{asset('assets/4.png')}}" alt="" class="p-x-10">
                <img src="{{asset('assets/5.png')}}" alt="" class="p-x-10">
                <img src="{{asset('assets/6.png')}}" alt="" class="p-x-10">
                <img src="{{asset('assets/7.png')}}" alt="" class="p-x-10">
              </div>
          </section >

          {{-- contact --}}

          <section style="background-image: url({{asset('assets/subscribe.jpg')}});background-size:cover;background-position:center;" class="">
              <div class="min-w-full h-full bg-[#00000033] py-[100px]   max-sm:px-5 flex items-center justify-around flex-wrap">
                  <div class="my-4">
                    <h1 class="text-3xl text-white font-bold mb-2">Get our offers to your inbox</h1>
                    <p class="text-md text-white font-extralight">leave us your mail we will take care of the rest.</p>
                  </div>
                  <div class="my-3">
                    <div class="w-[500px] flex bg-white rounded-full px-2 py-2 justify-between max-md:w-full max-md:mx-auto">
                      <input type="email" placeholder="Your Email" class="w-64 py-2 px-4 basis-1 outline-none">
                      <button class="bg-blue-500 py-1 px-4 text-white rounded-full text-sm capitalize tracking-wider font-bold">subscribe</button>
                    </div>
                  </div>
              </div>
          </section>

          <section class="py-[100px] px-40  max-sm:px-5">
            <h2 class="text-3xl font-sans text-center font-bold"><span class="text-blue-500">Have</span> Questions</h2>

            <p class="text-center text-slate-400 text-xl mt-4 mb-12">we got you covered with your questions</p>

              <div class="grid grid-cols-3 gap-5 max-w-[700px] mx-auto max-[800px]:grid-cols-2 max-[500px]:grid-cols-1">
                <div>
                  <h4 class="font-sans whitespace-nowrap text-xs uppercase font-extrabold mb-3 tracking-wide">1. What is smart watch ?</h4>
                  <p class="text-xs text-slate-500 tracking-wider leading-6">
                    A mobile device with a touch screen display, designed to be worn on the wrist and keeps .
                  </p>
                </div>

                <div>
                  <h4 class="font-sans whitespace-nowrap text-xs uppercase font-extrabold mb-3 tracking-wide">2. HOW IT REALY WORKS ?</h4>
                  <p class="text-xs text-slate-500 tracking-wider leading-6">
                    The main benefit of a smartwatch is that it keeps you constantly updated without having to whipout .
                  </p>
                </div>

                <div>
                  <h4 class="font-sans whitespace-nowrap text-xs uppercase font-extrabold mb-3 tracking-wide">3. HOW IT REALY WORKS ?</h4>
                  <p class="text-xs text-slate-500 tracking-wider leading-6">
                    The main benefit of a smartwatch is that it keeps you constantly updated without having to whipout .
                  </p>
                </div>

                <div>
                  <h4 class="font-sans whitespace-nowrap text-xs uppercase font-extrabold mb-3 tracking-wide">4. HOW IT REALY WORKS ?</h4>
                  <p class="text-xs text-slate-500 tracking-wider leading-6">
                    The main benefit of a smartwatch is that it keeps you constantly updated without having to whipout .
                  </p>
                </div>
                <div>
                  <h4 class="font-sans whitespace-nowrap text-xs uppercase font-extrabold mb-3 tracking-wide">5. HOW IT REALY WORKS ?</h4>
                  <p class="text-xs text-slate-500 tracking-wider leading-6">
                    The main benefit of a smartwatch is that it keeps you constantly updated without having to whipout .
                  </p>
                </div>
                <div>
                  <h4 class="font-sans whitespace-nowrap text-xs uppercase font-extrabold mb-3 tracking-wide">6. HOW IT REALY WORKS ?</h4>
                  <p class="text-xs text-slate-500 tracking-wider leading-6">
                    The main benefit of a smartwatch is that it keeps you constantly updated without having to whipout .
                  </p>
                </div>

              </div>
          </section >
          
          <section class="pt-[100px] pb-[150px] px-10 bg-blue-100/50 max-sm:px-5">
            <h2 class="text-3xl font-sans text-center font-bold"><span class="text-blue-500">Get in </span> Touch</h2>

             <p class="text-center text-slate-400 text-xl mt-4 mb-12">the best way to connect with us</p>
            
            <div class="flex w-2/3 mx-auto gap-8 justify-center flex-wrap">
              <div>
               <div class="flex gap-5 mb-4">
                <input type="text" placeholder="Name" class="py-3 px-3">
               <input type="text" placeholder="Email" class="py-3 px-3">
               </div>
               <input type="text" placeholder="Subject" class="block py-3 px-3 w-full mb-4">
               <textarea type="textarea" placeholder="Message" class="block w-full py-3 px-3" rows="5" placeholder="Message"> </textarea>
               <button  class="hover:bg-black text-xs bg-blue-500 px-8 py-2 rounded-full text-white font-extrabold capitalize my-8
                    tracking-wider max-md:py-4 max-md:px-6 max-md:text-lg">Send Message</button>
             </div>
             <iframe height="300px" class="row-start-1 col-start-3 row-span-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201139.82294503038!2d-84.63637468317779!3d38.02821492455628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88424429cc9ceb25%3A0x84f08341908c4fdd!2sLexington%2C%20KY%2C%20USA!5e0!3m2!1sen!2sin!4v1707212145777!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
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
