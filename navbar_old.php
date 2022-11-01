<div x-data="Components.popover({ open: false, focus: true })" x-init="init()"
     @keydown.escape="onEscape"
     @close-popover-group.window="onClosePopoverGroup">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center"
             aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/kanjuruhan/">
                        <span class="sr-only">UCiputra</span>
                        <img class="h-10 w-auto sm:h-16"
                             src="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-PANJANG-FIX-SEP-2021-01.png"
                             alt="">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button type="button"
                                class="bg-gray-50 bg-opacity-0 rounded-md p-2 inline-flex items-center justify-center text-black hover:text-gray-500 hover:bg-gray-100"
                                @click="toggle" @mousedown="if (open) $event.preventDefault()"
                                aria-expanded="true" :aria-expanded="open.toString()">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex md:space-x-10">
                <a href="/kanjuruhan/" class="font-medium text-gray-200 hover:text-white">Home</a>
                <a href="https://sites.kevinchr.com/kanjuruhan/" class="font-medium text-gray-200 hover:text-white">Breaking News</a>
                <a href="/kanjuruhan/about.php" class="hidden font-medium text-gray-200 hover:text-white">About</a>
            </div>
        </nav>
    </div>
    <div x-show="open" x-transition:enter="duration-150 ease-out"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
         x-description="Mobile menu, show/hide based on menu open state."
         class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
         x-ref="panel"
         @click.away="open = false">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto"
                         src="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-PANJANG-FIX-SEP-2021-01.png"
                         alt="">
                </div>
                <div class="-mr-2">
                    <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100"
                            @click="toggle">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-2 pt-2 pb-3">
                <a href="/kanjuruhan/"
                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>
                <a href="https://sites.kevinchr.com/kanjuruhan/"
                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Breaking
                    News</a>
                <a href="/kanjuruhan/about.php"
                   class="hidden block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>
            </div>
        </div>
    </div>

</div>