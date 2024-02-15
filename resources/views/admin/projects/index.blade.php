@extends('layouts.app')


@section('contents')
<div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
    <!-- Page header -->
    <div class="cyqq9 cxbdy clk9r cg5st">
        <!-- Left: Title -->
        <div class="clxmc c958j">
            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                List Projects ✨
            </h1>
        </div>

        <!-- Right: Actions -->
        <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
            <!-- Search form -->
            <form class="c4ijw">
                <label for="action-search" class="cbl3h">Search</label>
                <input id="action-search" class="bg-white dark:bg-slate-800 c03gb ctmd2" type="search" placeholder="Search by Project ID" />
                <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                    <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z">
                        </path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z">
                        </path>
                    </svg>
                </button>
            </form>

            <!-- Create invoice button -->
            <a href="{{ route('projects.create') }}" class="btn cfeqx cf1ce ceqwg">
                <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                    </path>
                </svg>
                <button class="hidden cmh5t c9o7o">Add Project</button>
            </a>
        </div>
    </div>

    <!-- More actions -->
    <div class="cyqq9 cxbdy clk9r cg5st">
        <!-- Left side -->
        <div class="clxmc c958j">
            <ul class="flex flex-wrap -m-1">
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border cyj9a cf1ce crp72 cw92y cgpmj ceqwg cyyn9 cl0q9 cjm6w cynm4">
                        All <span class="text-indigo-200 csib2">67</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Pending <span class="ciz4v czgoy csib2">4</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        In Progress <span class="ciz4v czgoy csib2">34</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Completed <span class="ciz4v czgoy csib2">19</span>
                    </button>
                </li>
            </ul>
        </div>

        <!-- Right side -->
        <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
            <!-- Delete button -->


            <!-- Dropdown -->
            <div class="c4ijw" x-data="{ open: false, selected: 2 }">
                <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c46uo cn6r0 cm7vt cxc4n ch1ih cmgwo c28cu" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                    <span class="flex items-center">
                        <svg class="text-slate-500 dark:text-slate-400 mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z">
                            </path>
                        </svg>
                        <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                    </span>
                    <svg class="czgoy c3wll c7n6y csib2" width="11" height="7" viewBox="0 0 11 7">
                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                    </svg>
                </button>
                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded ct1ew cetne csmh2 c8gb2 cke32 c8407 c3ff8 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n c4al0 ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n c4al0" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                    <div class="text-sm ch1ih c6w4h cw92y" x-ref="options">
                        <button tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                </path>
                            </svg>
                            <span>Today</span>
                        </button>
                        <button tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                </path>
                            </svg>
                            <span>Last 7 Days</span>
                        </button>
                        <button tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                </path>
                            </svg>
                            <span>Last Month</span>
                        </button>
                        <button tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                </path>
                            </svg>
                            <span>Last 12 Months</span>
                        </button>
                        <button tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                </path>
                            </svg>
                            <span>All Time</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Filter button -->
            <div class="inline-flex c4ijw">
                <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo c6xw6 cm7vt cxc4n">
                    <span class="cbl3h">Filter</span><wbr />
                    <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                        <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    @if(Session::has('success'))
         <!-- Start -->
        <div x-show="open" x-data="{ open: true }" role="alert" class="cg5st">
            <div class="inline-flex rounded-sm text-sm ck3g6 ceqwg ckj5k c9r0z cfnh0">
                <div class="flex cmgwo cxbmt c3ff8">
                    <div class="flex">
                        <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                        </svg>
                        <div class="cw92y"> {{ Session::get('success') }}</div>
                    </div>
                    <button class="ml-3 csvyn c9r0f csask" @click="open = false">
                        <div class="cbl3h">Close</div>
                        <svg class="c3wll cgmrc cm474">
                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- End -->
    @endif
    <!-- Table -->
    <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cetne ce97l">
        <header class="cx95x ctysv">
            <h2 class="text-slate-800 dark:text-slate-100 cqosy">
                Projects <span class="ciz4v czgoy cw92y">67</span>
            </h2>
        </header>
        <div x-data="handleSelect">
            <!-- Table -->
            <div class="cjrun">
                <table class="ch1ih c07b2 c3ff8">
                    <!-- Table header -->
                    <thead class="text-slate-500 dark:text-slate-400 border-slate-200 dark:border-slate-700 csx2x cqosy cn1je cw3n3 cz4zt c87xd c0qeg">
                        <tr>
                            <th class="c626f ccr3m cwqwq c63v7 ciamg c8o14">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="cbl3h">Select all</span>
                                        <input id="parent-checkbox" class="cybz1" type="checkbox" @click="toggleAll" />
                                    </label>
                                </div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">#</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Image</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">name</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">description</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">status</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">budget</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Created at</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Actions</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm ci5zp ccc5r cxw08">
                        @if($projects->count() > 0)
                        @foreach($projects as $project)
                        <!-- Row -->
                        <tr>
                            <td class="c626f ccr3m cwqwq c63v7 ciamg c8o14">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="cbl3h">Select</span>
                                        <input class="table-item cybz1" type="checkbox" @click="uncheckParent" />
                                    </label>
                                </div>
                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="text-slate-800 dark:text-slate-100 cw92y">{{ $loop->iteration }}</div>
                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cefw2 cw92y"><img class="rounded-full chmgx c6dxj" src="{{ asset('img/applications-image-03.jpg') }}" width="32" height="32" alt="User"></div>
                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="text-slate-800 dark:text-slate-100 cw92y">{{ $project->name }}</div>
                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cw92y">{{ Str::limit($project->description, 50) }}</div>
                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div>{{ ($project->budget ? $project->budget : '-') }}</div>
                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="inline-flex rounded-full
                                    @switch($project->status)
                                        @case(0) cxdv7 ctksn ckrqz ccfka @break
                                        @case(1) cq2p6 cdbjv c6rpu cwvsn @break
                                        @case(2) crfrs cna26 c6tg6 cgaep @break
                                    @endswitch
                                    cob4g cw92y csq8i cxcbl">
                                    @switch($project->status)
                                        @case(0) Pending @break
                                        @case(1) In Progress @break
                                        @case(2) Completed @break
                                    @endswitch
                                </div>

                            </td>
                            <td class="c626f ccr3m cwqwq ciamg c8o14">
                                <div>{{ $project->created_at->format('d/m/Y') }}</div>
                            </td>
                            <td class="c626f ccr3m cwqwq c63v7 ciamg c8o14">
                                <div class="cisva flex items-center">
                                    <a href="{{ route('projects.show', $project->id)}}" class="rounded-full coyl7 cljes ciz4v czgoy mr-2">
                                        <span class="cbl3h">Details</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#3367d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <line x1="12" y1="16" x2="12" y2="12" />
                                            <line x1="12" y1="8" x2="12" y2="8" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('projects.edit', $project->id)}}" class="rounded-full coyl7 cljes ciz4v czgoy mr-2">
                                        <span class="cbl3h">Edit</span>
                                        <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </a>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="rounded-full cvu65 c6tg6" onsubmit="return confirm('Are You sure You want To Delete This User?')">
                                        @csrf
                                        @method('DELETE')
                                        <span class="cbl3h">Delete</span>
                                        <button>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-center" colspan="5">User not found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        // A basic demo function to handle "select all" functionality
        document.addEventListener("alpine:init", () => {
            Alpine.data("handleSelect", () => ({
                selectall: false,
                selectAction() {
                    countEl = document.querySelector(".table-items-action");
                    if (!countEl) return;
                    checkboxes = document.querySelectorAll("input.table-item:checked");
                    document.querySelector(".table-items-count").innerHTML =
                        checkboxes.length;
                    if (checkboxes.length > 0) {
                        countEl.classList.remove("hidden");
                    } else {
                        countEl.classList.add("hidden");
                    }
                },
                toggleAll() {
                    this.selectall = !this.selectall;
                    checkboxes = document.querySelectorAll("input.table-item");
                    [...checkboxes].map((el) => {
                        el.checked = this.selectall;
                    });
                    this.selectAction();
                },
                uncheckParent() {
                    this.selectall = false;
                    document.getElementById("parent-checkbox").checked = false;
                    this.selectAction();
                },
            }));
        });
    </script>

    <!-- Pagination -->
    <div class="flex cyqq9 cxbdy cv5du chmlm">
        <nav class="c2o5h clxmc c958j" role="navigation" aria-label="Navigation">
            <ul class="flex justify-center">
                <li class="ml-3 cpjc9">
                    <span class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 cdfsn cweq2">&lt;-
                        Previous</span>
                </li>
                <li class="ml-3 cpjc9">
                    <a class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-indigo-500 c46uo cm7vt" href="#0">Next -&gt;</a>
                </li>
            </ul>
        </nav>
        <div class="text-sm text-slate-500 dark:text-slate-400 ca943 cob4g">
            Showing <span class="ch1ih c6w4h cw92y">1</span> to
            <span class="ch1ih c6w4h cw92y">10</span> of
            <span class="ch1ih c6w4h cw92y">467</span> results
        </div>
    </div>
</div>
@endsection
