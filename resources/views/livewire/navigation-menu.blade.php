<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<div class="bg-white" x-data="{ open: false, megamenu: false, women: false, men: false, links: false }">
    <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="fixed inset-0 z-40 flex lg:hidden" role="dialog" aria-modal="true" x-show="open" x-cloak>
        <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true" x-show="open" x-cloak></div>

        <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
            @click.away="open = false">
            <div class="flex px-4 pt-5 pb-2">
                <button @click="open = ! open" type="button"
                    class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button @click="megamenu = ! megamenu" id="tabs-1-tab-1"
                            class="flex-1 whitespace-nowrap border-b-2 border-transparent py-4 px-1 text-base font-medium text-gray-900"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Women
                        </button>

                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button @click="megamenu = ! megamenu" id="tabs-1-tab-2"
                            class="flex-1 whitespace-nowrap border-b-2 border-transparent py-4 px-1 text-base font-medium text-gray-900"
                            aria-controls="tabs-1-panel-2" role="tab" type="button"
                            :class="{'border-indigo-600 text-indigo-600': megamenu, 'border-transparent text-gray-700 hover:text-gray-800': !(megamenu) }">Men
                        </button>
                    </div>
                </div>
                <!-- 'Women' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-1" class="space-y-12 px-4 pt-10 pb-6" aria-labelledby="tabs-1-tab-1"
                    role="tabpanel" tabindex="0" x-show="megamenu" x-cloak>
                    <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                            <div>
                                <p id="mobile-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                <ul role="list" aria-labelledby="mobile-featured-heading-0" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Sleep </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Swimwear </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Underwear </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                                <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Basic Tees </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Artwork Tees </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Bottoms </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Underwear </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Accessories </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                            <div>
                                <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                                <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Everything </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Core </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> New Arrivals </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Sale </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Full Nelson </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> My Way </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Re-Arranged </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Counterfeit </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Significant Other </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 'Men' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="space-y-12 px-4 pt-10 pb-6" aria-labelledby="tabs-1-tab-2"
                    role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                            <div>
                                <p id="mobile-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                <ul role="list" aria-labelledby="mobile-featured-heading-1" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Casual </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Boxers </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Outdoor </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                                <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Artwork Tees </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Pants </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Accessories </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Boxers </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Basic Tees </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                            <div>
                                <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                                <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Everything </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Core </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> New Arrivals </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Sale </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Significant Other </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> My Way </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Counterfeit </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Re-Arranged </a>
                                    </li>

                                    <li class="flex">
                                        <a href="#" class="text-gray-500"> Full Nelson </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                </div>

                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                </div>
            </div>

            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                </div>
            </div>

            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <!-- Currency selector -->
                <form>
                    <div class="inline-block">
                        <label for="mobile-currency" class="sr-only">Currency</label>
                        <div
                            class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                            <select id="mobile-currency" name="currency"
                                class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                                <option>CAD</option>

                                <option>USD</option>

                                <option>AUD</option>

                                <option>EUR</option>

                                <option>GBP</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20" class="h-5 w-5 text-gray-500">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M6 8l4 4 4-4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---End mobile menu -->
    <!--
    Desktop menu
    I need to separate them so I can create dynamic navigation based on created pages /sub pages
    -->
    <header class="relative">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-gray-900">
                <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                    <!-- Currency selector -->
                    <form class="hidden lg:block lg:flex-1">
                        <div class="flex">
                            <label for="desktop-currency" class="sr-only">Currency</label>
                            <div
                                class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                                <select id="desktop-currency" name="currency"
                                    class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 20 20" class="h-5 w-5 text-gray-300">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 8l4 4 4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>

                    <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on
                        orders over $100</p>

                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an
                            account</a>
                        <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                    </div>
                </div>
            </div>
            <!--End of Top Navigateion The login and register links should go here-->
            <!-- Secondary navigation -->
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="border-b border-gray-200">
                        <div class="flex h-16 items-center justify-between">
                            <!-- Logo (lg+) -->
                            <div class="hidden lg:flex lg:items-center">
                                <a href="#">
                                    <span class="sr-only">Workflow</span>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                        alt="">
                                </a>
                            </div>

                            <div class="hidden h-full lg:flex">
                                <!-- Mega menus -->
                                <div class="ml-8">
                                    <div class="flex h-full justify-center space-x-8">
                                        <div class="flex">
                                            <div class="relative flex">
                                                <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                <button @mouseover="women = ! women" @click="women = ! women"
                                                    type="button" x-state:on="Item active" x-state:off="Item inactive"
                                                    class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-bold text-gray-700 transition-colors duration-200 ease-out"
                                                    aria-expanded="false"
                                                    :class="{'border-indigo-600 text-indigo-600': women, 'border-transparent text-gray-700 hover:text-gray-800': !(women) }">
                                                    Women
                                                </button>
                                            </div>

                                            <!--
                          'Women' mega menu, show/hide based on flyout menu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->

                                            <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm"
                                                x-show="women" @mouseover.away="women = false" x-cloak>
                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                    aria-hidden="true"></div>

                                                <div class="relative bg-white">
                                                    <div class="mx-auto max-w-7xl px-8">
                                                        <div
                                                            class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-featured-heading-0"
                                                                        class="font-medium text-gray-900">Featured
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-featured-heading-0"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Sleep </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Swimwear </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Underwear </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div>
                                                                    <p id="desktop-categories-heading"
                                                                        class="font-medium text-gray-900">
                                                                        Categories
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-categories-heading"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Basic Tees </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Artwork Tees </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Bottoms </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Underwear </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Accessories </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-collection-heading"
                                                                        class="font-medium text-gray-900">
                                                                        Collection
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-collection-heading"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Everything </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Core </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                New Arrivals </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Sale </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div>
                                                                    <p id="desktop-brand-heading"
                                                                        class="font-medium text-gray-900">Brands
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-brand-heading"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Full Nelson </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> My
                                                                                Way </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Re-Arranged </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Counterfeit </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Significant Other </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="relative flex">
                                                <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                <button @mouseover="men = ! men" @click="men = ! men" type="button"
                                                    x-state:on="Item active" x-state:off="Item inactive"
                                                    class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-bold text-gray-700 transition-colors duration-200 ease-out"
                                                    aria-expanded="false"
                                                    :class="{'border-indigo-600 text-indigo-600': men, 'border-transparent text-gray-700 hover:text-gray-800': !(men) }">
                                                    Men
                                                </button>
                                            </div>
                                            <!--
                          'Men' mega menu, show/hide based on flyout menu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                                            <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm"
                                                x-show="men" @mouseover.away="men = false" x-cloak>
                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                    aria-hidden="true"></div>

                                                <div class="relative bg-white">
                                                    <div class="mx-auto max-w-7xl px-8">
                                                        <div
                                                            class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-featured-heading-1"
                                                                        class="font-medium text-gray-900">Featured
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-featured-heading-1"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Casual </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Boxers </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Outdoor </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div>
                                                                    <p id="desktop-categories-heading"
                                                                        class="font-medium text-gray-900">
                                                                        Categories
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-categories-heading"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Artwork Tees </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Pants </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Accessories </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Boxers </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Basic Tees </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-collection-heading"
                                                                        class="font-medium text-gray-900">
                                                                        Collection
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-collection-heading"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Everything </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Core </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                New Arrivals </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Sale </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div>
                                                                    <p id="desktop-brand-heading"
                                                                        class="font-medium text-gray-900">Brands
                                                                    </p>
                                                                    <ul role="list"
                                                                        aria-labelledby="desktop-brand-heading"
                                                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Significant Other </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> My
                                                                                Way </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Counterfeit </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Re-Arranged </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800">
                                                                                Full Nelson </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#"
                                            class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-bold text-gray-700 transition-colors duration-200 ease-out"
                                            aria-expanded="false"
                                            :class="{'border-indigo-600 text-indigo-600': links, 'border-transparent text-gray-700 hover:text-gray-800': !(links) }"
                                            @mouseover="links = ! links" @click="links = ! links"
                                            @mouseover.away="links = false">Company</a>

                                        <a href="#"
                                            class="flex items-center text-sm font-bold text-gray-700 hover:text-gray-800">Stores</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile menu and search (lg-) -->
                            <div class="flex flex-1 items-center lg:hidden">
                                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                <button @click="open = ! open" type="button"
                                    class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                                    <span class="sr-only">Open menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>

                                <!-- Search -->
                                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <!-- Heroicon name: outline/search -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Logo (lg-) -->
                            <a href="#" class="lg:hidden">
                                <span class="sr-only">Workflow</span>
                                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                    alt="" class="h-8 w-auto">
                            </a>

                            <div class="flex flex-1 items-center justify-end">
                                <div class="flex items-center lg:ml-8">
                                    <div class="flex space-x-8">
                                        <div class="hidden lg:flex">
                                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Search</span>
                                                <!-- Heroicon name: outline/search -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex">
                                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Account</span>
                                                <!-- Heroicon name: outline/user -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                                    <div class="flow-root">
                                        <a href="#" class="group -m-2 flex items-center p-2">
                                            <!-- Heroicon name: outline/shopping-cart -->
                                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            <span
                                                class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                            <span class="sr-only">items in cart, view bag</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
