<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Kreisā puse - Menu poga -->
            <div class="flex items-center">
                <button id="sidebarToggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Centrs - Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/forsi_ieroci_logo.png') }}" alt="Logo" class="block h-16 w-auto" />
                </a>
            </div>

            <!-- Labā puse -->
            <div class="flex items-center">
    <!-- Cart Dropdown -->
<div class="sm:flex sm:items-center relative" 
     x-data="{ open: false, cartCount: {{ session('cart_count', 0) }} }"
     @mouseenter="open = true"
     @mouseleave="open = false">
    
    <!-- Cart Button -->
    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none transition ease-in-out duration-150 relative">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
            <path d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z"/>
        </svg>
        
        <!-- Cart Badge -->
        <span x-show="cartCount > 0" 
              x-text="cartCount"
              class="absolute -top-1 -right-1 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-600 rounded-full min-w-[20px]"
              style="display: none;">
        </span>
    </button>

    <!-- Dropdown Menu (appears on hover) -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="absolute right-0 -mb-8 mt-40 w-72 bg-white dark:bg-gray-800 rounded-lg shadow-lg z-50 border border-gray-200 dark:border-gray-700"
         style="display: none;">
        
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3 border-b border-gray-200 dark:border-gray-700 pb-2">
                {{ __('Iepirkumu grozs') }}
            </h3>
            
            <div class="mb-4">
                <p class="text-gray-600 dark:text-gray-400 text-sm" x-show="cartCount === 0">
                    {{ __('Jūsu grozs ir tukšs') }}
                </p>
                <p class="text-gray-600 dark:text-gray-400 text-sm" x-show="cartCount > 0" x-cloak>
                    {{ __('Jūsu grozā ir') }} <span x-text="cartCount"></span> {{ __('prece(s)') }}
                </p>
            </div>
            
            <a href="" 
               class="block w-full text-center px-4 py-2 bg-indigo-600 dark:bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 dark:hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                {{ __('Apskatīt grozu') }}
            </a>
        </div>
    </div>
</div>
    </div>
</div>

<!-- Add this to your head or layout for x-cloak -->
<style>
    [x-cloak] { display: none !important; }
</style>
        </div> 
    </div> 

    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-75 z-40 hidden transition-opacity duration-300"></div>

    <!-- Sidebar -->
<div id="sidebar" class="fixed top-0 left-0 bottom-0 w-64 bg-white dark:bg-gray-800 shadow-lg z-50 overflow-y-auto hidden transition-transform duration-300 transform -translate-x-full flex flex-col">
    
    <!-- Sidebar Header -->
    <div class="p-4 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
        <a class="flex-none font-semibold text-xl text-gray-800 dark:text-white" href="#" aria-label="Brand">
            <div class="flex items-lefts">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/forsi_ieroci_logo.png') }}" alt="Logo" class="block h-16 w-auto" />
                </a>
            </div>
        </a>
        <button id="closeSidebar" type="button" class="flex justify-center items-center gap-x-3 size-8 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-sm text-gray-600 dark:text-neutral-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-full">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
            </svg>
        </button>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="p-4 flex-1 overflow-y-auto">
        <ul class="space-y-1">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                    Visi Produkti
                </a>
            </li>

           <!-- Guns Accordion -->
<li class="accordion-item">
    <button class="accordion-trigger w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M560 120C560 106.7 549.3 96 536 96C522.7 96 512 106.7 512 120L512 128L64 128C46.3 128 32 142.3 32 160L32 272C32 289.7 46.3 304 64 304L74 304C94.8 304 110.1 323.6 105 343.8L65 504.2C62.6 513.8 64.8 523.9 70.8 531.7C76.8 539.5 86.1 544 96 544L192 544C206.7 544 219.5 534 223 519.8L249 416L353.4 416C377.1 416 398.2 401.1 406.1 378.8L432.8 304L463.9 304C472.4 304 480.5 300.6 486.5 294.6L509.1 272L575.8 272C593.5 272 607.8 257.7 607.8 240L607.8 160C607.8 142.3 593.5 128 575.8 128L559.8 128L559.8 120zM353.4 368L260.9 368L276.9 304L381.9 304L360.9 362.7C359.8 365.9 356.7 368 353.4 368zM112 192L496 192C504.8 192 512 199.2 512 208C512 216.8 504.8 224 496 224L112 224C103.2 224 96 216.8 96 208C96 199.2 103.2 192 112 192z"/></svg>
        Ieroči
        <svg class="accordion-arrow ms-auto size-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="m6 9 6 6 6-6"/>
        </svg>
    </button>
    
    <div class="accordion-content mt-1 ms-7 space-y-1 hidden">
        <div class="accordion-item">
        <button class="accordion-trigger w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
            Kategorijas
        <svg class="accordion-arrow ms-auto size-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="m6 9 6 6 6-6"/>
        </svg>
    </button>
    <div class="accordion-content mt-1 ms-7 space-y-1 hidden">
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
    </div>
    </div>
     </div>
</li>
            <!-- Ammunition Accordion -->
<li class="accordion-item">
    <button class="accordion-trigger w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
            <path d="M480 96H352V64c0-17.67-14.33-32-32-32H192c-17.67 0-32 14.33-32 32v32H32c-17.67 0-32 14.33-32 32v256c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32V128c0-17.67-14.33-32-32-32zM192 64h128v32H192V64zm288 320H32V128h448v256z"/>
            <path d="M128 192h32v128h-32zM352 192h32v128h-32zM240 224h32v64h-32z"/>
        </svg>
        Munīcija
        <svg class="accordion-arrow ms-auto size-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="m6 9 6 6 6-6"/>
        </svg>
    </button>
    
    <div class="accordion-content mt-1 ms-7 space-y-1 hidden">
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
    </div>
</li>

            <!-- Accessories Accordion -->
<li class="accordion-item">
    <button class="accordion-trigger w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <svg  class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M384 328L384 128C384 110.3 369.7 96 352 96L288 96C270.3 96 256 110.3 256 128L256 328C256 341.3 245.3 352 232 352C218.7 352 208 341.3 208 328L208 142.1C122 173.8 64 255.8 64 352L64 416L576 416L576 352C575 256.8 517.6 174.3 432 142.2L432 328C432 341.3 421.3 352 408 352C394.7 352 384 341.3 384 328zM72 464C49.9 464 32 481.9 32 504C32 526.1 49.9 544 72 544L568 544C590.1 544 608 526.1 608 504C608 481.9 590.1 464 568 464L72 464z"/></svg>
        Aksesuāri
        <svg class="accordion-arrow ms-auto size-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="m6 9 6 6 6-6"/>
        </svg>
    </button>
    
    <div class="accordion-content mt-1 ms-7 space-y-1 hidden">
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
        <a href="#" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
    </div>
</li>

            <!-- Account Accordion -->
            <li class="accordion-item">
                <button class="accordion-trigger w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/><path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m21.7 16.4-.9-.3"/><path d="m15.2 13.9-.9-.3"/><path d="m16.6 18.7.3-.9"/><path d="m19.1 12.2.3-.9"/><path d="m19.6 18.7-.4-1"/><path d="m16.8 12.3-.4-1"/><path d="m14.3 16.6 1-.4"/><path d="m20.7 13.8 1-.4"/>
                    </svg>
                    Konts
                    <svg class="accordion-arrow ms-auto size-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                
                <div class="accordion-content mt-1 ms-7 space-y-1 hidden">
                    <a href="{{ route('profile.edit') }}" class="block py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Profils</a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left py-2 px-2.5 text-sm text-gray-800 dark:text-neutral-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            Log Out
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Log Out poga sānjoslas apakšā -->
    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-red-600 dark:text-red-400 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 transition duration-150 ease-in-out">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
                <span>Log Out</span>
            </button>
        </form>
    </div>
</div>


<!-- JavaScript -->
<script>
    (function() {
        // Hamburger menu funkcionalitāte
        const hamburgerBtn = document.getElementById('hamburgerToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const hamburgerOpen = document.querySelector('.hamburger-open');
        const hamburgerClose = document.querySelector('.hamburger-close');
        
        if (hamburgerBtn && mobileMenu) {
            hamburgerBtn.addEventListener('click', function() {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                    hamburgerOpen.classList.add('hidden');
                    hamburgerClose.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    hamburgerOpen.classList.remove('hidden');
                    hamburgerClose.classList.add('hidden');
                }
            });
        }

        // Sidebar funkcionalitāte
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const closeSidebar = document.getElementById('closeSidebar');

        function openSidebar() {
            sidebar.classList.remove('hidden');
            sidebarOverlay.classList.remove('hidden');
            setTimeout(() => {
                sidebar.classList.remove('-translate-x-full');
            }, 10);
        }

        function closeSidebarFunc() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            setTimeout(() => {
                if (sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.add('hidden');
                }
            }, 300);
        }

        if (sidebarToggle && sidebar && sidebarOverlay) {
            sidebarToggle.addEventListener('click', openSidebar);
            
            if (closeSidebar) {
                closeSidebar.addEventListener('click', closeSidebarFunc);
            }
            sidebarOverlay.addEventListener('click', closeSidebarFunc);
        }

        // Accordion funkcionalitāte
        const accordionTriggers = document.querySelectorAll('.accordion-trigger');
        
        accordionTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                const accordionItem = this.closest('.accordion-item');
                const content = accordionItem.querySelector('.accordion-content');
                const arrow = this.querySelector('.accordion-arrow');
                
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    if (arrow) arrow.classList.add('rotate-180');
                } else {
                    content.classList.add('hidden');
                    if (arrow) arrow.classList.remove('rotate-180');
                }
            });
        });

        // Escape taustiņš
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && sidebar && !sidebar.classList.contains('hidden') && !sidebar.classList.contains('-translate-x-full')) {
                closeSidebarFunc();
            }
        });

        // CSS rotācijai
        const style = document.createElement('style');
        style.textContent = `
            .rotate-180 {
                transform: rotate(180deg);
            }
            .accordion-arrow {
                transition: transform 0.2s ease;
            }
        `;
        document.head.appendChild(style);
    })();
</script>