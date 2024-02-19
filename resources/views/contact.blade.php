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
          <section id="home" style="background-image: url({{ asset('assets/contactUs-bg.jpeg') }})" class="min-h-[100vh] min-w-full bg-cover">
            <div class="min-h-[90vh] min-w-full flex justify-center items-center bg-[#00000033]">
              <div class="w-[80%] flex p-12 pt-[120px] justify-evenly max-lg:flex-col max-[860px]:justify-center max-[860px]:items-center gap-10 max-md:w-full" >

                  <div class="max-md:place-content-start">
                    <h3 class="text-6xl text-white mb-5  max-md:text-3xl">We are here to help you...</h3>
                    <h1 class="text-8xl text-white mb-8  max-md:text-4xl">Get in Touch - We're Here to Help!</h1>
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

          <section style="background-image: url({{asset('assets/subscribe.jpg')}});background-size:cover;background-position:center;" class="mt-12">
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