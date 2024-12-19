import React from 'react';
import NavLink from '@/Components/NavLink';
const Header = () => {
    return (
        <nav class="navbar rounded-box shadow">
            <div class="w-full md:flex md:items-center md:gap-2">
                <div class="flex items-center justify-between">
                    <div class="items-center justify-between max-md:w-full">
                        <div class="input-group max-w-sm">
                            <span class="input-group-text ">
                                <span class="icon-[tabler--search] text-base-content/80 size-6"></span>
                            </span>
                            <input type="search" class="input input-lg grow" placeholder="Search" id="kbdInput" />
                            <label class="sr-only" for="kbdInput">Search</label>
                            <span class="input-group-text gap-2">
                                <kbd class="kbd kbd-sm">⌘</kbd>
                                <kbd class="kbd kbd-sm">K</kbd>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="default-navbar-collapse" class="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full" >
                    <ul class="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                    <button class="btn">Default</button>
                    <button class="btn">Default</button>
                    <button class="btn">Default</button>
                    </ul>
                </div>
            </div>
        </nav>
    );
}

export default Header;
