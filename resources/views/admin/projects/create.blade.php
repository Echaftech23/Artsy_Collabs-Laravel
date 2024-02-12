@extends('layouts.app')


@section('contents')
<div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="flex c8gbp cqd18 c4ijw chmlm cy6kd">
            <main class="ckut6">
                <div class="c0nbw cofxq caadu cewyrr" x-data="{ card: true }">
                    <!-- Card header -->
                    <div>
                        <div class="c4ijw">
                            <img class="c3ff8" src="{{ asset('img/applications-image-06.jpg') }}" width="286" height="160" alt="Application 06">
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 c426q cetne cedgs cukwe" style="padding-top: 30px">
                        <!-- Card form -->
                        <div x-show="card">
                            <div class="cxebx">
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="project-name">Project Name</label>
                                    <input id="project-name" name="name" class="c03gb c3ff8" type="text" placeholder="Enter Name of the Project">
                                </div>
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="prject-budget">Budget</label>
                                    <input id="prject-budget" name="budget" class="c03gb c3ff8" type="number" placeholder="Budget">
                                </div>
                                <div class="flex">
                                    <!-- Start -->
                                    <div x-data="{ modalOpen: false }">
                                        <button class="btn cfeqx cf1ce ceqwg" @click.prevent="modalOpen = true" aria-controls="feedback-modal">Partners</button>
                                        <!-- Modal backdrop -->
                                        <div class="bg-slate-900 co20q c5o35 c1u8w citi2 cqfmf" x-show="modalOpen" x-transition:enter="c5mjj coq4n ch8aq" x-transition:enter-start="opacity-0" x-transition:enter-end="cqsra" x-transition:leave="c5mjj coq4n c4al0" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                                        <!-- Modal dialog -->
                                        <div id="feedback-modal" class="flex items-center justify-center ct1ew clpyc c1u8w citi2 cqfmf crf5v c9r0z" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="c5mjj cgpmj ch8aq" x-transition:enter-start="opacity-0 c8f6f" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj cgpmj ch8aq" x-transition:leave-start="cqsra cfwq4" x-transition:leave-end="opacity-0 c8f6f" x-cloak="">
                                            <div class="bg-white dark:bg-slate-800 rounded cn60w craqh cetne c0nbw c3ff8" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                                <!-- Modal header -->
                                                <div class="border-slate-200 dark:border-slate-700 cz4zt cx95x c8o14">
                                                    <div class="flex items-center cmgwo">
                                                        <div class="text-slate-800 dark:text-slate-100">Partners</div>
                                                        <button class="coyl7 cljes ciz4v czgoy" @click="modalOpen = false">
                                                            <div class="cbl3h">Close</div>
                                                            <svg class="c3wll cgmrc cm474">
                                                                <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="cx95x ctysv">
                                                    <div class="text-sm">
                                                        <div class="text-slate-800 dark:text-slate-100 cw92y cvavu">Add a partner to Your project</div>
                                                    </div>
                                                    <div class="cd0mw">
                                                        <div>
                                                            <label class="block text-sm cw92y ci4cg" for="name">Name</label>
                                                            <select id="name" name="name" class="c03gb c3ff8">
                                                                @foreach ($partners as $partner)
                                                                    <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="border-slate-200 dark:border-slate-700 c87xd cx95x ctysv">
                                                    <div class="flex flex-wrap justify-end cwkb0">
                                                        <button class="border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h cjusy" @click="modalOpen = false">Cancel</button>
                                                        <button class="cfeqx cf1ce ceqwg cjusy">submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div x-data="{ modalOpen: false }" class="c9o7o">
                                        <button class="btn cfeqx cf1ce ceqwg" @click.prevent="modalOpen = true" aria-controls="feedback-modal">Artists</button>
                                        <!-- Modal backdrop -->
                                        <div class="bg-slate-900 co20q c5o35 c1u8w citi2 cqfmf" x-show="modalOpen" x-transition:enter="c5mjj coq4n ch8aq" x-transition:enter-start="opacity-0" x-transition:enter-end="cqsra" x-transition:leave="c5mjj coq4n c4al0" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                                        <!-- Modal dialog -->
                                        <div id="feedback-modal" class="flex items-center justify-center ct1ew clpyc c1u8w citi2 cqfmf crf5v c9r0z" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="c5mjj cgpmj ch8aq" x-transition:enter-start="opacity-0 c8f6f" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj cgpmj ch8aq" x-transition:leave-start="cqsra cfwq4" x-transition:leave-end="opacity-0 c8f6f" x-cloak="">
                                            <div class="bg-white dark:bg-slate-800 rounded cn60w craqh cetne c0nbw c3ff8" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                                <!-- Modal header -->
                                                <div class="border-slate-200 dark:border-slate-700 cz4zt cx95x c8o14">
                                                    <div class="flex items-center cmgwo">
                                                        <div class="text-slate-800 dark:text-slate-100">Artists</div>
                                                        <button class="coyl7 cljes ciz4v czgoy" @click="modalOpen = false">
                                                            <div class="cbl3h">Close</div>
                                                            <svg class="c3wll cgmrc cm474">
                                                                <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="cx95x ctysv">
                                                    <div class="text-sm">
                                                        <div class="text-slate-800 dark:text-slate-100 cw92y cvavu">Add Artists to Your project</div>
                                                    </div>
                                                    <div class="cd0mw">
                                                        <div>
                                                            <label class="block text-sm cw92y ci4cg" for="name">Name</label>
                                                            <select id="category" name="category" class="c03gb c3ff8">
                                                                @foreach ($artists as $artist)
                                                                    <option value="{{ $artist->id }}">{{ $artist->username }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="border-slate-200 dark:border-slate-700 c87xd cx95x ctysv">
                                                    <div class="flex flex-wrap justify-end cwkb0">
                                                        <button class="border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h cjusy" @click="modalOpen = false">Cancel</button>
                                                        <button class="cfeqx cf1ce ceqwg cjusy">submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="project-desc">Description</label>
                                    <textarea name="" id="project-desc"  class="c03gb c3ff8" rows="4"></textarea>
                                </div>
                            </div>
                            <!-- Form footer -->
                            <div class="cro1p">
                                <div class="c958j">
                                    <button type="submit" class="btn cf1ce ceqwg c3ff8">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
</div>
@endsection
