@extends('layouts.app')


@section('contents')
<div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

    <!-- Page header -->
    <div class="ce97l">

        <!-- Title -->
        <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">Create User ✨</h1>

    </div>

    <div class="bg-white dark:bg-slate-800 rounded-sm cetne ce97l">
        <div class="flex cygwm cfrx6 chmlm">

            <!-- Panel -->
            <div class="ckut6">

                <!-- Panel body -->
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="c3goj caod7">
                        <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr cg5st">User Account</h2>

                        @csrf

                        <!-- Picture -->
                        <section class="flex items-center">
                            <div class="mr-4">
                                <img class="rounded-full chkq1 c4a13" src="{{ asset('img/user-64-02.jpg') }}" width="80" height="80" alt="User upload">
                            </div>
                            <button class="cfeqx cf1ce ceqwg cjusy">Change</button>
                        </section>

                        <!-- Business Profile -->
                        <section>
                            <h3 class="text-slate-800 dark:text-slate-100 font-bold ctbo0 cvvcr ci4cg">Business Profile</h3>
                            <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                            <div class="cxbdy c95r9 cuga1 cxebx clk9r cggtb">
                                <div class="czb6y">
                                    <label class="block text-sm cw92y ci4cg" for="username">Business Name</label>
                                    <input id="username" name="username" class="c03gb c3ff8 @error('username') border-red-500 @enderror" type="text" placeholder="Username">
                                    @error('username')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="role">Role</label>
                                    <!-- Dropdown -->
                                    <div class="c4ijw" x-data="{ open: false, selected: 1 }">
                                        <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c46uo cn6r0 cm7vt cxc4n ch1ih cmgwo c28cu" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span>
                                                <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                                                <input id="role" name="role_id" class="c03gb c3ff8" type="hidden" x-model="selected+1" readonly>
                                            </span>
                                            <svg class="czgoy c3wll c7n6y csib2" width="11" height="7" viewBox="0 0 11 7">
                                                <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded ct1ew cetne csmh2 c8gb2 cke32 c8407 c3ff8 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n c4al0 ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n c4al0" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="text-sm ch1ih c6w4h cw92y" x-ref="options">
                                                <span tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                                    <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                                        </path>
                                                    </svg>
                                                    <span>Admin</span>
                                                </span>
                                                <sapn tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                                    <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                                        </path>
                                                    </svg>
                                                    <span>Artist</span>
                                                </sapn>
                                                <span tabindex="0" class="flex items-center c2atq cjbtp cl9dd c3ff8 cjm6w cynm4" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                                    <svg class="mr-2 text-indigo-500 c3wll c7n6y" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z">
                                                        </path>
                                                    </svg>
                                                    <span>Parnter</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="czb6y">
                                    <label class="block text-sm cw92y ci4cg" for="phone">Phone</label>
                                    <input id="phone" name="phone" class="c03gb c3ff8 @error('phone') border-red-500 @enderror" type="text" placeholder="+212-0000-000">
                                    @error('phone')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <!-- Email -->
                        <section>
                            <h3 class="text-slate-800 dark:text-slate-100 font-bold ctbo0 cvvcr ci4cg">Email</h3>
                            <div class="text-sm">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                            <div class="cggtb">
                                <div class="czb6y">
                                    <input id="email" name="email" class="c03gb c3ff8 @error('email') border-red-500 @enderror" type="text" placeholder="user@artsy.com">
                                    @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <!-- Password -->
                        <section>
                            <h3 class="text-slate-800 dark:text-slate-100 font-bold ctbo0 cvvcr ci4cg">Password</h3>
                            <div class="text-sm">Choose a strong and memorable password to enhance the security of your account.</div>
                            <div class="cggtb">
                                <div class="czb6y">
                                    <input name="password" class="c03gb c3ff8 @error('password') border-red-500 @enderror" type="password" placeholder="Enter Your Password">
                                    @error('password')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <!-- Confirm Password -->
                        <section>
                            <h3 class="text-slate-800 dark:text-slate-100 font-bold ctbo0 cvvcr ci4cg">Confirm Password</h3>
                            <div class="text-sm">The password confirmation helps prevent typos and ensures that you've entered the correct password.</div>
                            <div class="cggtb">
                                <div class="czb6y">
                                    <input name="password_confirmation" class="c03gb c3ff8 @error('password_confirmation') border-red-500 @enderror" id="exampleRepeatPassword" type="password" placeholder="Confirm Your Password">
                                    @error('password_confirmation')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <!-- Panel footer -->
                        <footer class="flex border-slate-200 dark:border-slate-700 chmlm c87xd cdsqp c7s20">
                            <div class="flex c93ao">
                                <button class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h">Cancel</button>
                                <button class="btn ml-3 cfeqx cf1ce ceqwg" type="submit">Submit</button>
                            </div>
                        </footer>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
