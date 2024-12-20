<div class="bg-white lg:h-[500px] flex flex-col border gap-y-4 px-5">


    <header class="w-full py-2 border-b">
        <div class="flex justify-between">

            <button wire:click="$dispatch('closeModal')"  class="font-bold">
                X
            </button>

            <div class="text-lg font-bold">
                Create new post 
            </div>


            <button class="text-blue-500 font-bold">

                Share

            </button>


        </div>


    </header>


    <main class="grid grid-cols-12 gap-3 h-full w-full overflow-hidden">


        <aside class=" lg:col-span-7  m-auto items-center w-full overflow-scroll">

            <label for="customFileInput"  class=" m-auto max-w-fit flex-col flex gap-3 cursor-pointer">
                <input type="file" multiple accept=".jpg,.png,.jpeg" id="customFileInput" type="text" class="sr-only">

                <span class="m-auto">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                      

                </span>

                <span class="bg-blue-500 text-white text-sm rounded-lg p-2 px-4">
                    Upload files from computer 
                </span>


            </label>

            {{-- Show when file count is > 0 --}}

            <div class="
            {{-- flex  --}} hidden
            overflow-x-scroll w-[500px] h-96 snap-x snap-mandatory gap-2 px-2">

                <div class="w-full h-full shrink-0 snap-always snap-center">

                    <x-video />
                </div>

                <div class="w-full h-full snap-always shrink-0 snap-center">

                    <img src="https://images.unsplash.com/photo-1695113153412-78ff3fdd38c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=800&q=60" alt="" class="w-full h-full object-contain">
                </div>


            </div>


        </aside>


        <aside class=" lg:col-span-5  h-full border-l p-3 flex gap-4 flex-col overflow-hidden overflow-y-scroll">

        </aside>


    </main>
</div>