<x-app-layout>

         <section class="bg-cover bg-center" style="background-image: url({{asset('image/bg_intranet_admin2.jpg'); }})">

            <div class="mx-auto pt-64">
                
               <div class="w-full">
                    <h1 class="text-white font-fold text-4xl text-center font-bold w-full py-4" style="background-color: rgb(0,0,0,0.5); border-bottom: 5px solid #45ac01;">Bienvenido A Appaña</h1>
                    
                        <!-- component -->
                        <!-- This is an example component -->
                
               </div>
                
            </div>

        </section>

       @if (IS_NULL(auth()->user()->rut) || IS_NULL(auth()->user()->lastname) || IS_NULL(auth()->user()->fono))
            <div class="grid mt-4 place-items-center" x-data="{open: true}">
               <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

              
                  <div x-show="open" class="bg-indigo-600 text-white rounded shadow-xl py-5 px-5 w-full lg:w-10/12 xl:w-3/4" x-data="{welcomeMessageShow:true}" x-show="welcomeMessageShow" x-transition:enter="transition-all ease duration-500 transform" x-transition:enter-start="opacity-0 scale-110" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition-all ease duration-500 transform" x-transition:leave-end="opacity-0 scale-90">
                     <div class="flex flex-wrap -mx-3 items-center">
                           <div class="w-1/4 px-3 text-center hidden md:block">
                              <div class="p-5 xl:px-8 md:py-5">
                                 <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 868 731"><style>.st0{opacity:.5;fill:#434190;enable-background:new}.st1{fill:url(#SVGID_1_)}.st2{fill:url(#SVGID_2_)}.st3{fill:#434190}.st4{fill:url(#SVGID_3_)}.st5{fill:url(#SVGID_4_)}.st6{fill:url(#SVGID_5_)}.st7{fill:url(#SVGID_6_)}.st8{fill:url(#SVGID_7_)}.st9{fill:url(#SVGID_8_)}.st10{fill:url(#SVGID_9_)}.st11{fill:url(#SVGID_10_)}.st12{fill:url(#SVGID_11_)}.st13{fill:url(#SVGID_12_)}.st14{fill:url(#SVGID_13_)}.st15{fill:url(#SVGID_14_)}.st16{fill:url(#SVGID_15_)}.st17{fill:url(#SVGID_16_)}.st18{fill:url(#SVGID_17_)}.st19{fill:#fff}.st20{fill:url(#SVGID_18_)}.st21{fill:url(#SVGID_19_)}.st22{fill:url(#SVGID_20_)}.st23{opacity:.5;enable-background:new}.st24{fill:url(#SVGID_21_)}.st25{fill:#263238}.st26{fill:#f8c198}.st27{fill:#ff9800}.st28,.st29{opacity:.2}.st29{fill:#fff;enable-background:new}</style><title>welcome</title><path class="st0" d="M179 68.2h510v595.5H179V68.2z"/><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="731.5" y1="102" x2="731.5" y2="627" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-color="gray" stop-opacity=".25"/><stop offset=".54" stop-color="gray" stop-opacity=".12"/><stop offset="1" stop-color="gray" stop-opacity=".1"/></linearGradient><path class="st1" d="M595 105h273v525H595V105z"/><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="136.5" y1="100" x2="136.5" y2="625" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-color="gray" stop-opacity=".25"/><stop offset=".54" stop-color="gray" stop-opacity=".12"/><stop offset="1" stop-color="gray" stop-opacity=".1"/></linearGradient><path class="st2" d="M0 107h273v525H0V107z"/><path class="st3" d="M604 113h255v506H604V113zM264 619H9V113h255v506z"/><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="136.5" y1="542" x2="136.5" y2="573" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st4" d="M51 159h171v31H51v-31z"/><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="732.5" y1="495" x2="732.5" y2="526" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st5" d="M647 206h171v31H647v-31z"/><linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="731.5" y1="447" x2="731.5" y2="478" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st6" d="M646 254h171v31H646v-31z"/><linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="731.5" y1="399" x2="731.5" y2="430" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st7" d="M646 302h171v31H646v-31z"/><linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="731.5" y1="351" x2="731.5" y2="382" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st8" d="M646 350h171v31H646v-31z"/><linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="731.5" y1="303" x2="731.5" y2="334" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st9" d="M646 398h171v31H646v-31z"/><linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="731.5" y1="255" x2="731.5" y2="286" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st10" d="M646 446h171v31H646v-31z"/><linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="731.5" y1="207" x2="731.5" y2="238" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st11" d="M646 494h171v31H646v-31z"/><linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="731.5" y1="159" x2="731.5" y2="190" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st12" d="M646 542h171v31H646v-31z"/><linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="731.5" y1="542" x2="731.5" y2="573" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st13" d="M646 159h171v31H646v-31z"/><linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="51" y1="508.5" x2="222" y2="508.5" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st14" d="M51 208h171v31H51v-31z"/><linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="51" y1="461.5" x2="222" y2="461.5" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st15" d="M51 255h171v31H51v-31z"/><linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="51" y1="414.5" x2="222" y2="414.5" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st16" d="M51 302h171v31H51v-31z"/><linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="51" y1="366.5" x2="222" y2="366.5" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st17" d="M51 350h171v31H51v-31z"/><linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="51" y1="318.5" x2="222" y2="318.5" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st18" d="M51 398h171v31H51v-31z"/><path class="st19" d="M55 163h164v24H55v-24zm-.5 47h164v24h-164v-24zm0 48h164v24h-164v-24zm0 48h164v24h-164v-24zm0 48h164v24h-164v-24zm0 48h164v24h-164v-24z"/><linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="51" y1="270.5" x2="222" y2="270.5" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-opacity=".12"/><stop offset=".55" stop-opacity=".09"/><stop offset="1" stop-opacity=".02"/></linearGradient><path class="st20" d="M51 446h171v31H51v-31z"/><path class="st19" d="M54.5 450h164v24h-164v-24z"/><path class="st19" d="M54.5 450h164v24h-164v-24zm0 48h164v24h-164v-24zm0 48h164v24h-164v-24zM650 162h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24zm0 48h164v24H650v-24z"/><linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="132" y1="68" x2="735" y2="68" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-color="gray" stop-opacity=".25"/><stop offset=".54" stop-color="gray" stop-opacity=".12"/><stop offset="1" stop-color="gray" stop-opacity=".1"/></linearGradient><path class="st21" d="M132 645h603v38H132v-38z"/><path class="st3" d="M137 649h594v30H137v-30z"/><linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="435" y1="643" x2="435" y2="682" gradientTransform="matrix(1 0 0 -1 0 732)"><stop offset="0" stop-color="gray" stop-opacity=".25"/><stop offset=".54" stop-color="gray" stop-opacity=".12"/><stop offset="1" stop-color="gray" stop-opacity=".1"/></linearGradient><path class="st22" d="M134 50h602v39H134V50z"/><path class="st3" d="M137 53h594v30H137V53z"/><path class="st23" d="M289 113h292v506H289V113z"/><linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="601" y1="27.2" x2="601" y2="326.022" gradientTransform="matrix(1 0 0 -1 -166 647.5)"><stop offset="0" stop-color="gray" stop-opacity=".25"/><stop offset=".54" stop-color="gray" stop-opacity=".12"/><stop offset="1" stop-color="gray" stop-opacity=".1"/></linearGradient><path class="st24" d="M659.7 333c7 9.4-3.5 20.5-3.5 20.5l1.8.6c-2.6 2.9-12.8 15.8-52.3 74.4-50.5 75-118.5 93.7-118.5 93.7-8.3-6.5-17.7-11.3-27.7-14.3v-7.1c26.1-7.7 46.7-27.7 55.3-53.5 6-11.9 9.2-25.1 9.1-38.4 0-48-39.8-86.9-88.8-86.9s-88.8 38.9-88.8 86.9c0 13.4 3.1 26.5 9.1 38.4 8.6 25.8 29.2 45.8 55.3 53.5v7.1c-10.1 3-19.5 7.8-27.7 14.3 0 0-68.1-18.7-118.6-93.7-39.4-58.6-49.7-71.5-52.3-74.4l1.8-.6s-10.5-11.1-3.5-20.5-46.1-20.5-40.1 0 13.9 30.7 13.9 30.7 111.2 175.4 169.2 204.4c-1.4 5.9-2.1 12-2.1 18.1v34.1h167.2v-34.1c0-6.1-.7-12.2-2.1-18.1 58-29 169.2-204.4 169.2-204.4s7.8-10.2 13.9-30.7-46.8-9.3-39.8 0z"/><circle class="st25" cx="435" cy="413.5" r="85.1"/><circle class="st26" cx="435" cy="426.8" r="80.1"/><circle class="st25" cx="403.3" cy="409.3" r="10"/><circle class="st25" cx="468.4" cy="409.3" r="10"/><path class="st19" d="M458.4 463.5c0 6-10.5 15.9-23.4 15.9s-23.4-9.9-23.4-15.9 10.5-5.8 23.4-5.8 23.4-.2 23.4 5.8z"/><circle class="st19" cx="405.8" cy="409.3" r="3.3"/><circle class="st19" cx="471.7" cy="409.3" r="3.3"/><path class="st25" d="M443 382.4c-4.9 0-9.3-4.2-9.8-9.1-.3-5 2.4-9.7 7-11.8.5-.2 1-.4 1.5-.4 1.7 0 2.5 2 3 3.6 1.7 4.9 4.7 9.7 9.3 12s11.2 1.1 13.7-3.5c-6.6-3-9.5-12.2-5.6-18.4 1.5-2.4 3.8-4.4 4.3-7.1.9-5-4.6-8.6-9.5-10.1-14-4.3-62.8-4.8-65.5 16.1-2.7 22.1 36.2 31.6 51.6 28.7z"/><ellipse transform="rotate(-21.534 358.22 427.678)" class="st26" cx="358.3" cy="427.7" rx="5" ry="14.2"/><ellipse transform="rotate(-68.469 511.725 427.634)" class="st26" cx="511.7" cy="427.6" rx="14.2" ry="5"/><path class="st27" d="M484.9 524.3s65.2-18.3 113.5-91.7 50.9-73.6 50.9-73.6l25.8 10.2S555 562.7 503.3 572.7s-18.4-48.4-18.4-48.4z"/><path class="st26" d="M646.8 359.3s10-10.8 3.3-20 44.2-20 38.4 0-13.3 30-13.3 30l-28.4-10z"/><path class="st27" d="M385.1 524.3s-65.2-18.3-113.5-91.7-50.9-73.6-50.9-73.6l-25.9 10.2s120.1 193.5 171.8 203.5 18.5-48.4 18.5-48.4z"/><path class="st26" d="M223.2 359.3s-10-10.8-3.3-20-44.2-20-38.4 0 13.3 30 13.3 30l28.4-10z"/><g class="st28"><path class="st19" d="M462.3 342.8c-.5 2.8-2.8 4.8-4.3 7.1-3.4 5.4-1.6 13.2 3.3 17-1.4-3.6-1.1-7.8.9-11.1 1.5-2.4 3.8-4.4 4.3-7.1.5-3.1-1.4-5.7-4.1-7.6 0 .5 0 1.1-.1 1.7zM441.5 362c-.3-.8-.6-1.5-.9-2.3-.5-1.6-1.4-3.5-3-3.6-.5 0-1 .1-1.5.4-4.6 2.1-7.3 6.8-7 11.8.4 3 2 5.6 4.5 7.4l-.3-1.5c-.3-5 2.4-9.7 7-11.8.3-.2.7-.3 1.2-.4zm-7.1 15.9c-12.2.5-31.8-4.1-41.5-14 7.2 15.4 37 21.8 50 19.3-3.5-.2-6.8-2.2-8.5-5.3zm28.3-8.3c-2.9 3.4-8.6 4.1-12.8 2.1-1.4-.7-2.6-1.6-3.7-2.6 1.6 3.6 4.4 6.6 7.9 8.4 4.7 2.3 11.2 1.1 13.7-3.5-2.1-.9-3.9-2.4-5.1-4.4z"/></g><path class="st29" d="M671.8 369.3S551.7 562.8 500 572.8c-3 .6-6 1-9.1 1.1 4.2.1 8.3-.3 12.4-1.1 51.7-10 171.8-203.5 171.8-203.5l-2.7-1c-.3.7-.5 1-.6 1zm-473.7 0S318.2 562.8 370 572.8c3 .6 6 1 9.1 1.1-4.2.1-8.3-.3-12.4-1.1-51.7-10-171.8-203.5-171.8-203.5l2.7-1c.3.7.5 1 .5 1z"/><path class="st27" d="M435 506.9c44.2 0 80.1 35.8 80.1 80.1v33.4H354.9V587c0-44.3 35.9-80.1 80.1-80.1z"/><path class="st29" d="M435.8 507.3c-2.9 0-5.8.2-8.7.5 1 0 1.9-.1 2.9-.1 44.2 0 80.1 35.8 80.1 80.1v32.9h5.8v-33.3c0-44.3-35.9-80.1-80.1-80.1z"/><path class="st29" d="M434.2 507.3c2.9 0 5.8.2 8.7.5-1 0-1.9-.1-2.9-.1-44.2 0-80.1 35.8-80.1 80.1v32.9h-5.8v-33.3c0-44.3 35.9-80.1 80.1-80.1z"/><path class="st26" d="M435 484.8c12.9 0 23.4 10.5 23.4 23.4v9.6c0 12.9-10.5 23.3-23.4 23.3-12.9 0-23.4-10.5-23.4-23.3v-9.6c0-13 10.5-23.4 23.4-23.4z"/></svg>
                              </div>
                           </div>
                           <div class="w-full sm:w-1/2 md:w-2/4 px-3 text-left">
                              <div class="p-5 xl:px-8 md:py-5">
                                 <h3 class="text-2xl">Welcome, Scott!</h3>
                                 <h5 class="text-xl mb-3">Lorem ipsum sit amet</h5>
                                 <p class="text-sm text-indigo-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro sit asperiores perferendis odit enim natus ipsum reprehenderit eos eum impedit tenetur nemo corporis laboriosam veniam dolores quos necessitatibus, quaerat debitis.</p>
                              </div>
                           </div>
                           <div class="w-full sm:w-1/2 md:w-1/4 px-3 text-center">
                              <div class="p-5 xl:px-8 md:py-5">
                                 <a href="{{ route('profile.show') }}" class="block w-full py-2 px-4 rounded text-indigo-600 bg-gray-200 hover:bg-white hover:text-gray-900 focus:outline-none transition duration-150 ease-in-out mb-3">Rellenar datos</a>
                                 <button x-on:click="open=false" class="w-full py-2 px-4 rounded text-white bg-indigo-900 hover:bg-gray-900 focus:outline-none transition duration-150 ease-in-out" @click.prevent="welcomeMessageShow=false;setTimeout(()=>{welcomeMessageShow=true},2000)">No thanks</button>
                              </div>
                           </div>
                     </div>
                  </div>
           
               <div class="absolute bottom-0 pb-2 text-gray-700 text-xs w-full text-center">
               See more: <a href="https://codepen.io/ScottWindon" class="underline hover:text-gray-500" target="_blank">https://codepen.io/ScottWindon</a>
               </div>

               <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
               <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
                  <div>
                     <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                           <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
                     </a>
                  </div>
               </div>
            </div>
       @endif

   
@isset($user)

   @livewire('admin.graficos-productor', ['user' => $user], ($user->id))

   <div class="mx-2 sm:mx-12">
      @livewire('productor.production-show', ['user' => $user], ($user->id))
   </div>

@else
   @can('Ver produccion_total') 
      @livewire('admin.graficos-admin')
   @endcan

   @can('Ver produccion_propia')
      @livewire('admin.graficos-productor', ['user' => auth()->user()], key(auth()->user()->id))
   @endcan

   @can('Ver produccion_propia')
      <div class="mx-2 sm:mx-12">
         @livewire('productor.production-show', ['user' => auth()->user()], key(auth()->user()->id))
      </div>
   @endcan

@endisset

  
   

    <div class="pb-12 pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>

                  


                  <nav class="bg-white border-b border-gray-200 fixed z-30 hidden">
                     <div class="px-3 py-3 lg:px-5 lg:pl-3">
                        <div class="flex items-center justify-between">
                           <div class="flex items-center justify-start">
                              <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                                 <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                 </svg>
                                 <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                 </svg>
                              </button>
                              <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                              <img src="https://demo.themesberg.com/windster/images/logo.svg" class="h-6 mr-2" alt="Windster Logo">
                              <span class="self-center whitespace-nowrap">Windster</span>
                              </a>
                              <form action="#" method="GET" class="hidden lg:block lg:pl-32">
                                 <label for="topbar-search" class="sr-only">Search</label>
                                 <div class="mt-1 relative lg:w-64">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                       <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                       </svg>
                                    </div>
                                    <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                                 </div>
                              </form>
                           </div>
                           <div class="flex items-center">
                              <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                                 <span class="sr-only">Search</span>
                                 <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                 </svg>
                              </button>
                              <div class="hidden lg:flex items-center">
                                 <span class="text-base font-normal text-gray-500 mr-5">Open source ❤️</span>
                                 <div class="-mb-1">
                                    <a class="github-button" href="#" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/windster-tailwind-css-dashboard on GitHub">Star</a>
                                 </div>
                              </div>
                              <a href="#" class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3">
                                 <svg class="svg-inline--fa fa-gem -ml-1 mr-2 h-4 w-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path>
                                 </svg>
                                 Upgrade to Pro
                              </a>
                           </div>
                        </div>
                     </div>
                  </nav>
                  <div class="hidden overflow-hidden bg-white pt-16">
                     
                     <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                     <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto">
                        <main>
                           <div class="pt-6 px-4">
                              <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                                 <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                                    <div class="flex items-center justify-between mb-4">
                                       <div class="flex-shrink-0">
                                          <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">100</span>
                                          <h3 class="text-base font-normal text-gray-500">Kilos Recibidos</h3>
                                       </div>
                                       <div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                                          <h3 class="text-base font-normal text-gray-500 mr-2">Exportación  </h3>
                                          12.5%
                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                          </svg>
                                       </div>
                                    </div>
                                    <div id="main-chart">
                                       
                                    </div>
                                 </div>
                                 <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                    <div class="mb-4 flex items-center justify-between">
                                       <div>
                                          <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                                          <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
                                       </div>
                                       <div class="flex-shrink-0">
                                          <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View all</a>
                                       </div>
                                    </div>
                                    <div class="flex flex-col mt-8">
                                       <div class="overflow-x-auto rounded-lg">
                                          <div class="align-middle inline-block min-w-full">
                                             <div class="shadow overflow-hidden sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                   <thead class="bg-gray-50">
                                                      <tr>
                                                         <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Transaction
                                                         </th>
                                                         <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Date & Time
                                                         </th>
                                                         <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Amount
                                                         </th>
                                                      </tr>
                                                   </thead>
                                                   <tbody class="bg-white">
                                                      <tr>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Bonnie Green</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 23 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $2300
                                                         </td>
                                                      </tr>
                                                      <tr class="bg-gray-50">
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment refund to <span class="font-semibold">#00910</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 23 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            -$670
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment failed from <span class="font-semibold">#087651</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 18 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $234
                                                         </td>
                                                      </tr>
                                                      <tr class="bg-gray-50">
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment from <span class="font-semibold">Lana Byrd</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 15 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $5000
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Jese Leos</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 15 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $2300
                                                         </td>
                                                      </tr>
                                                      <tr class="bg-gray-50">
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment from <span class="font-semibold">THEMESBERG LLC</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 11 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $560
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Lana Lysle</span>
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 6 ,2021
                                                         </td>
                                                         <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $1437
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                 <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0">
                                          <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
                                          <h3 class="text-base font-normal text-gray-500">New products this week</h3>
                                       </div>
                                       <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                                          14.6%
                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0">
                                          <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">5,355</span>
                                          <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
                                       </div>
                                       <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                                          32.9%
                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0">
                                          <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>
                                          <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
                                       </div>
                                       <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                                          -2.7%
                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
                                 <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                                    <div class="flex items-center justify-between mb-4">
                                       <h3 class="text-xl font-bold leading-none text-gray-900">Mejores productores</h3>
                                       <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                                       View all
                                       </a>
                                    </div>
                                    <div class="flow-root">
                                       <ul role="list" class="divide-y divide-gray-200">
                                          <li class="py-3 sm:py-4">
                                             <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                   <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                   <p class="text-sm font-medium text-gray-900 truncate">
                                                      Neil Sims
                                                   </p>
                                                   <p class="text-sm text-gray-500 truncate">
                                                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>
                                                   </p>
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                   $320
                                                </div>
                                             </div>
                                          </li>
                                          <li class="py-3 sm:py-4">
                                             <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                   <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/bonnie-green.png" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                   <p class="text-sm font-medium text-gray-900 truncate">
                                                      Bonnie Green
                                                   </p>
                                                   <p class="text-sm text-gray-500 truncate">
                                                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>
                                                   </p>
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                   $3467
                                                </div>
                                             </div>
                                          </li>
                                          <li class="py-3 sm:py-4">
                                             <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                   <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/michael-gough.png" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                   <p class="text-sm font-medium text-gray-900 truncate">
                                                      Michael Gough
                                                   </p>
                                                   <p class="text-sm text-gray-500 truncate">
                                                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>
                                                   </p>
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                   $67
                                                </div>
                                             </div>
                                          </li>
                                          <li class="py-3 sm:py-4">
                                             <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                   <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                   <p class="text-sm font-medium text-gray-900 truncate">
                                                      Thomes Lean
                                                   </p>
                                                   <p class="text-sm text-gray-500 truncate">
                                                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>
                                                   </p>
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                   $2367
                                                </div>
                                             </div>
                                          </li>
                                          <li class="pt-3 sm:pt-4 pb-0">
                                             <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                   <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/lana-byrd.png" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                   <p class="text-sm font-medium text-gray-900 truncate">
                                                      Lana Byrd
                                                   </p>
                                                   <p class="text-sm text-gray-500 truncate">
                                                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>
                                                   </p>
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                   $367
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                    <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>
                                    <div class="block w-full overflow-x-auto">
                                       <table class="items-center w-full bg-transparent border-collapse">
                                          <thead>
                                             <tr>
                                                <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Top Channels</th>
                                                <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Users</th>
                                                <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px"></th>
                                             </tr>
                                          </thead>
                                          <tbody class="divide-y divide-gray-100">
                                             <tr class="text-gray-500">
                                                <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Organic Search</th>
                                                <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">5,649</td>
                                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                   <div class="flex items-center">
                                                      <span class="mr-2 text-xs font-medium">30%</span>
                                                      <div class="relative w-full">
                                                         <div class="w-full bg-gray-200 rounded-sm h-2">
                                                            <div class="bg-cyan-600 h-2 rounded-sm" style="width: 30%"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="text-gray-500">
                                                <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Referral</th>
                                                <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">4,025</td>
                                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                   <div class="flex items-center">
                                                      <span class="mr-2 text-xs font-medium">24%</span>
                                                      <div class="relative w-full">
                                                         <div class="w-full bg-gray-200 rounded-sm h-2">
                                                            <div class="bg-orange-300 h-2 rounded-sm" style="width: 24%"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="text-gray-500">
                                                <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Direct</th>
                                                <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">3,105</td>
                                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                   <div class="flex items-center">
                                                      <span class="mr-2 text-xs font-medium">18%</span>
                                                      <div class="relative w-full">
                                                         <div class="w-full bg-gray-200 rounded-sm h-2">
                                                            <div class="bg-teal-400 h-2 rounded-sm" style="width: 18%"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="text-gray-500">
                                                <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Social</th>
                                                <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">1251</td>
                                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                   <div class="flex items-center">
                                                      <span class="mr-2 text-xs font-medium">12%</span>
                                                      <div class="relative w-full">
                                                         <div class="w-full bg-gray-200 rounded-sm h-2">
                                                            <div class="bg-pink-600 h-2 rounded-sm" style="width: 12%"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="text-gray-500">
                                                <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Other</th>
                                                <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">734</td>
                                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                   <div class="flex items-center">
                                                      <span class="mr-2 text-xs font-medium">9%</span>
                                                      <div class="relative w-full">
                                                         <div class="w-full bg-gray-200 rounded-sm h-2">
                                                            <div class="bg-indigo-600 h-2 rounded-sm" style="width: 9%"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="text-gray-500">
                                                <th class="border-t-0 align-middle text-sm font-normal whitespace-nowrap p-4 pb-0 text-left">Email</th>
                                                <td class="border-t-0 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4 pb-0">456</td>
                                                <td class="border-t-0 align-middle text-xs whitespace-nowrap p-4 pb-0">
                                                   <div class="flex items-center">
                                                      <span class="mr-2 text-xs font-medium">7%</span>
                                                      <div class="relative w-full">
                                                         <div class="w-full bg-gray-200 rounded-sm h-2">
                                                            <div class="bg-purple-500 h-2 rounded-sm" style="width: 7%"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </main>
                        <footer class="bg-white md:flex md:items-center md:justify-between shadow rounded-lg p-4 md:p-6 xl:p-8 my-6 mx-4">
                           <ul class="flex items-center flex-wrap mb-6 md:mb-0">
                              <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Terms and conditions</a></li>
                              <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Privacy Policy</a></li>
                              <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Licensing</a></li>
                              <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Cookie Policy</a></li>
                              <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline">Contact</a></li>
                           </ul>
                           <div class="flex sm:justify-center space-x-6">
                              <a href="#" class="text-gray-500 hover:text-gray-900">
                                 <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <a href="#" class="text-gray-500 hover:text-gray-900">
                                 <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <a href="#" class="text-gray-500 hover:text-gray-900">
                                 <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                 </svg>
                              </a>
                              <a href="#" class="text-gray-500 hover:text-gray-900">
                                 <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <a href="#" class="text-gray-500 hover:text-gray-900">
                                 <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                           </div>
                        </footer>
                        <p class="text-center text-sm text-gray-500 my-10">
                           &copy; 2019-2021 <a href="#" class="hover:underline" target="_blank">Themesberg</a>. All rights reserved.
                        </p>
                     </div>
                  </div>
                  <script async defer src="https://buttons.github.io/buttons.js"></script>
                  <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>



               </div>
            </div>
        </div>
    </div>
</x-app-layout>
