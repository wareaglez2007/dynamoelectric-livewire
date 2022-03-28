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

<div class="bg-white sticky top-0 z-30" x-data="{ open: false, megamenu: false, women: false, men: false, links: false }">
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
    <header class="relative z-10">
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
<div class="lg:relative">
    <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
      <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
          <span class="block xl:inline">Data to enrich your</span>
          <span class="block text-indigo-600 xl:inline">online business</span>
        </h1>
        <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Get started </a>
          </div>
          <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10"> Live demo </a>
          </div>
        </div>
      </div>
    </div>
    <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
      <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
    </div>
</div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">A better way to send money</p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
      </div>

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/annotation -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-indigo-800">
    <div class="absolute inset-0">
      <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
      <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
      <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Get in touch</h1>
      <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra. Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit justo viverra non adipisicing elit distinctio.</p>
    </div>
  </div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <!-- Header -->
    <div class="relative pb-32 bg-gray-800">
      <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
        <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
      </div>
      <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Support</h1>
        <p class="mt-6 max-w-3xl text-xl text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit pulvinar.</p>
      </div>
    </div>

    <!-- Overlapping cards -->
    <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
      <h2 class="sr-only" id="contact-heading">Contact us</h2>
      <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
            <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
              <!-- Heroicon name: outline/phone -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900">Sales</h3>
            <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
          </div>
          <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
            <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>

        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
            <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
              <!-- Heroicon name: outline/support -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900">Technical Support</h3>
            <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
          </div>
          <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
            <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>

        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
            <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
              <!-- Heroicon name: outline/newspaper -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900">Media Inquiries</h3>
            <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
          </div>
          <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
            <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>
      </div>
    </section>
  </div>
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
<div class="bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center">
      <div class="lg:w-0 lg:flex-1">
        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl" id="newsletter-headline">Sign up for our newsletter</h2>
        <p class="mt-3 max-w-3xl text-lg leading-6 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
      </div>
      <div class="mt-8 lg:mt-0 lg:ml-8">
        <form class="sm:flex">
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email-address" type="email" autocomplete="email" required class="w-full px-5 py-3 border border-transparent placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-white sm:max-w-xs rounded-md" placeholder="Enter your email">
          <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
            <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Notify me</button>
          </div>
        </form>
        <p class="mt-3 text-sm text-gray-300">
          We care about the protection of your data. Read our
          <a href="#" class="text-white font-medium underline"> Privacy Policy. </a>
        </p>
      </div>
    </div>
  </div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
        <div>
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Used by the world's most average companies</h2>
          <p class="mt-3 max-w-3xl text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue.</p>
          <div class="mt-8 sm:flex">
            <div class="rounded-md shadow">
              <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Create Account </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200"> Contact Us </a>
            </div>
          </div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
          <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
            <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation">
          </div>
          <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
            <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
          </div>
          <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
            <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
          </div>
          <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
            <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
          </div>
          <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
            <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
          </div>
          <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="max-h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
