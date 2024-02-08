<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/vendors/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('resources/css/vendors/flatpickr.min.css') }}">
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>

    <script defer data-domain='preview.cruip.com,rollup.cruip.com' src='../../plausible.cruip.com/js/script.js'></script>
</head>

<body class="dark:text-slate-400 c3jt4 c6w4h c6vqo c0ndv csf1w" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex ct1ew c3z79">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content area -->
        <div class="flex c8gbp cqd18 c4ijw chmlm cy6kd">

            <!-- Site header -->
            @include('layouts.header')

            <main class="ckut6">
                <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

                    <!-- Welcome banner -->
                    <div class="rounded-sm clgz1 ct1ew clq63 c4ijw c917q ce97l c5mbg">

                        <!-- Background illustration -->
                        <div class="pointer-events-none hidden cyz0i csmh2 cke32 cvqv9 ckyft czrz8" aria-hidden="true">
                            <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                                    <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                        <stop stop-color="#A5B4FC" offset="0%"></stop>
                                        <stop stop-color="#818CF8" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                        <stop stop-color="#4338CA" offset="0%"></stop>
                                        <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="rotate(64 36.592 105.604)">
                                        <mask id="welcome-d" fill="#fff">
                                            <use xlink:href="#welcome-a"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                                    </g>
                                    <g transform="rotate(-51 91.324 -105.372)">
                                        <mask id="welcome-f" fill="#fff">
                                            <use xlink:href="#welcome-e"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                    <g transform="rotate(44 61.546 392.623)">
                                        <mask id="welcome-h" fill="#fff">
                                            <use xlink:href="#welcome-g"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="c4ijw">
                            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr ci4cg">Good afternoon, {{ auth()->user()->username }}. 👋</h1>
                            <p class="c6jet">Here is what’s happening with your projects today:</p>
                        </div>

                    </div>

                    <!-- Dashboard actions -->
                    <div class="cyqq9 cxbdy clk9r ce97l">

                        <!-- Left: Avatars -->
                        <ul class="flex flex-wrap justify-center cejow c2707 clxmc c6tal ce97l">
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="{{ asset('img/user-36-01.jpg') }}" width="36" height="36" alt="User 01">
                                </a>
                            </li>
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="{{ asset('img/user-36-02.jpg') }}" width="36" height="36" alt="User 01">
                                </a>
                            </li>
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="{{ asset('/img/user-avatar-32.png') }}" width="36" height="36" alt="User 02">
                                </a>
                            </li>
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="{{ asset('img/user-36-04.jpg') }}" width="36" height="36" alt="User 04">
                                </a>
                            </li>
                            <li>
                                <button class="flex justify-center items-center rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-indigo-500 c46uo cm7vt crp72 c5mjj cl0q9 c9o7o ccqvu ce4tq">
                                    <span class="cbl3h">Add new user</span>
                                    <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>

                        <!-- Right: Actions -->
                        <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">

                            <!-- Filter button -->
                            <div class="inline-flex c4ijw" x-data="{ open: false }">
                                <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo c6xw6 cm7vt cxc4n" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="cbl3h">Filter</span><wbr>
                                    <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cfw1s ckdlb cozyg cetne csmh2 c8gb2 cad6v cbzcj c76e0 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="ciz4v czgoy cqosy cw3n3 cbzcj c0qeg cjm6w c622v">Filters</div>
                                    <ul class="c958j">
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1" checked="">
                                                <span class="text-sm cw92y c9o7o">Direct VS Indirect</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1" checked="">
                                                <span class="text-sm cw92y c9o7o">Real Time Value</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1" checked="">
                                                <span class="text-sm cw92y c9o7o">Top Channels</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1">
                                                <span class="text-sm cw92y c9o7o">Sales VS Refunds</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1">
                                                <span class="text-sm cw92y c9o7o">Last Order</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1">
                                                <span class="text-sm cw92y c9o7o">Total Spent</span>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="border-slate-200 dark:border-slate-700 cezv5 cn1je c87xd cjm6w cfnh0">
                                        <ul class="flex items-center cmgwo">
                                            <li>
                                                <button class="btn-xs bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c46uo cn6r0 cm7vt cxc4n ch1ih">Clear</button>
                                            </li>
                                            <li>
                                                <button class="btn-xs cfeqx cf1ce ceqwg" @click="open = false" @focusout="open = false">Apply</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Datepicker built with flatpickr -->
                            <div class="c4ijw">
                                <input class="datepicker dark:bg-slate-800 text-slate-500 cn6r0 cxc4n ch1ih caowp cw92y c03gb ctmd2" placeholder="Select dates" data-class="flatpickr-right">
                                <div class="flex items-center pointer-events-none cozyg csmh2 c1u8w">
                                    <svg class="text-slate-500 dark:text-slate-400 ml-3 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Add view button -->
                            <button class="btn cfeqx cf1ce ceqwg">
                                <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden cmh5t c9o7o">Add View</span>
                            </button>

                        </div>

                    </div>

                    <!-- Cards -->
                    <div class="czwnc cki30 c5va1">

                        <!-- Line chart (Acme Plus) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <div class="cx95x cc5dk">
                                <header class="flex cmgwo cxbmt c7j98">
                                    <!-- Icon -->
                                    <img src="{{ asset('img/icon-01.svg') }}" width="32" height="32" alt="Icon 01">
                                    <!-- Menu button -->
                                    <div class="inline-flex c4ijw" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="cbl3h">Menu</span>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy cs31h c7j98">Acme Plus</h2>
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg ci4cg">Sales</div>
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$24,780</div>
                                    <div class="text-sm rounded-full ck3g6 cqosy ceqwg c6er6">+49%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ctn2p ci7ed ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-01" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Acme Advanced) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <div class="cx95x cc5dk">
                                <header class="flex cmgwo cxbmt c7j98">
                                    <!-- Icon -->
                                    <img src="{{ asset('img/icon-02.svg') }}" width="32" height="32" alt="Icon 02">
                                    <!-- Menu button -->
                                    <div class="inline-flex c4ijw" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="cbl3h">Menu</span>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy cs31h c7j98">Acme Advanced</h2>
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg ci4cg">Sales</div>
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$17,489</div>
                                    <div class="text-sm rounded-full cqosy ctnuc ceqwg c6er6">-14%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ctn2p ci7ed ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-02" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Acme Professional) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <div class="cx95x cc5dk">
                                <header class="flex cmgwo cxbmt c7j98">
                                    <!-- Icon -->
                                    <img src="{{ asset('img/icon-03.svg') }}" width="32" height="32" alt="Icon 03">
                                    <!-- Menu button -->
                                    <div class="inline-flex c4ijw" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="cbl3h">Menu</span>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy cs31h c7j98">Acme Professional</h2>
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg ci4cg">Sales</div>
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$9,962</div>
                                    <div class="text-sm rounded-full ck3g6 cqosy ceqwg c6er6">+29%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ctn2p ci7ed ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-03" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Bar chart (Direct vs Indirect) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c4osb cetne chmlm">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Direct VS Indirect</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div id="dashboard-card-04-legend" class="cx95x c8o14">
                                <ul class="flex flex-wrap"></ul>
                            </div>
                            <div class="ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-04" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Real Time Value) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c4osb cetne chmlm">
                            <header class="dark:border-slate-700 flex items-center cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Real Time Value</h2>
                                <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                        <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                        <div class="bg-white dark:text-slate-100 border border-slate-200 rounded crhoe ce4zx ct1ew cetne c7j98 cmue4" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="c626f cob4g c0qeg">Built with <a class="cn69j" @focus="open = true" @focusout="open = false" href="https://www.chartjs.org/" target="_blank">Chart.js</a></div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="cx95x c8o14">
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 cgfr7">$<span id="dashboard-card-05-value">57.81</span></div>
                                    <div id="dashboard-card-05-deviation" class="text-sm rounded-full cqosy ceqwg c6er6"></div>
                                </div>
                            </div>
                            <div class="ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-05" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Doughnut chart (Top Countries) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Top Countries</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="flex justify-center chmlm ckut6">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="dashboard-card-06" width="389" height="260"></canvas>
                                </div>
                                <div id="dashboard-card-06-legend" class="cx95x cukwe c1rth">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>

                        <!-- Table (Top Channels) -->
                        <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cvgln c4osb cetne">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Top Channels</h2>
                            </header>
                            <div class="cmue4">

                                <!-- Table -->
                                <div class="cjrun">
                                    <table class="ch1ih c07b2 c3ff8">
                                        <!-- Table header -->
                                        <thead class="rounded-sm ciz4v c1vyl ce4zx czgoy cn1je cw3n3 c0qeg">
                                            <tr>
                                                <th class="cnk1n">
                                                    <div class="cqosy cojuf">Source</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Visitors</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Revenues</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Sales</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Conversion</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm ci5zp cz8yz cw92y cxw08">
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" fill="#FFF"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Github.com</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">2.4K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$3,877</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">267</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.7%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1DA1F2" cx="18" cy="18" r="18"></circle>
                                                            <path d="M26 13.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H10c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Twitter</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">2.2K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$3,426</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">249</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.4%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Google (organic)</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">2.0K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$2,444</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">224</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.2%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#4BC9FF" cx="18" cy="18" r="18"></circle>
                                                            <path d="M26 14.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C14 19.9 13.4 15 12 15c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Vimeo.com</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">1.9K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$2,236</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">220</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.2%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#0E2439" cx="18" cy="18" r="18"></circle>
                                                            <path d="M14.232 12.818V23H11.77V12.818h2.46zM15.772 23V12.818h2.462v4.087h4.012v-4.087h2.456V23h-2.456v-4.092h-4.012V23h-2.461z" fill="#E6ECF4"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Indiehackers.com</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">1.7K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$2,034</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">204</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">3.9%</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>

    </div>

    <script src="{{ mix('resources/js/vendors/alpinejs.min.js') }}" defer=""></script>
    <script src="{{ mix('resources/js/main.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/chart.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/moment.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/chartjs-adapter-moment.js') }}"></script>
    <script src="{{ mix('resources/js/dashboard-charts.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/flatpickr.js') }}"></script>
    <script src="{{ mix('resources/js/flatpickr-init.js') }}"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"851a6c54be386eb4","version":"2024.2.0","r":1,"token":"59cc17d45d734f9ba118c63036ab1b84","b":1}' crossorigin="anonymous"></script>
</body>

</html>
