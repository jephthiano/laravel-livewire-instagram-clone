<div class="w-full h-full">
    
    {{-- header --}}
    <header class="md:hidde sticky top-0 bg-white">
    
        <div class="grid grid-cols-12 gap-2 items-center">
  
            <div class="col-span-3">
  
              <img src="{{asset('assets/logo.png')}}"  class="h-12 max-w-lg w-full" alt="logo">
  
            </div>
  
              <div class="col-span-8 flex justify-center px-2">
  
                <input type="text" placeholder="Search" 
                 class=" border-0 outline-none w-full focus:outline-none bg-gray-100 rounded-lg focus:ring-0 hover:ring-0" 
                >
                
              </div>
  
            <div class="col-span-1 flex justify-center">
  
              <a href="#">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg>
                  
                </span>
              </a>
              
            </div>
  
  
        </div>

  
      </header>


    <div class="j-row">

        <section class='j-col xl8 j-padding' h-full>
            <section class="j-padding">
            
              {{-- stories --}}
              <section>
                <ul class="flex overflow-x-auto scrollbar-hide items-center gap-2">
                    @for ($i = 0; $i < 10; $i++)
                        <li class="flex flex-col justify-center w-20 gap-1 p-2">
                            <x-avatar story src="https://source.unsplash.com/500x500?face-{{$i}}" class="h-14 w-14"/>
                            <p class="j-bolder text-xs font-medium truncate">{{fake()->name}}</p>
                        </li>
                    @endfor
        
                </ul>
              </section>

              {{-- post --}}
              <section>
                {{-- add with livewire --}}
                <livewire:post.item />
              </section>

            </section>
        </section>

        <aside class='j-col xl4 j-padding'>

            <section class=" j-padding">
                {{-- suggestions --}}

            </section>
        </aside>
    </div>


</div>
