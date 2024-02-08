@extends('layouts.app')


@section('contents')
<div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

    <!-- Page header -->
    <div class="ce97l">

        <!-- Title -->
        <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">User Details ✨</h1>

    </div>

    <div class="bg-white dark:bg-slate-800 rounded-sm cetne ce97l">
        <div class="flex cygwm cfrx6 chmlm">

            <!-- Panel -->
            <div class="ckut6 cg5st">
                <div class="c3goj caod7">
                    <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr cg5st">User Account</h2>

                    <!-- Picture -->
                    <section>
                        <div class="mr-4">
                            <img class="rounded-full chkq1 c4a13" src="{{ asset('img/user-64-02.jpg') }}" width="80" height="80" alt="User upload">
                        </div>
                    </section>

                    <!-- Business Profile -->
                    <section>
                        <h3 class="text-slate-800 dark:text-slate-100 font-bold ctbo0 cvvcr ci4cg">Business Profile</h3>
                        <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                        <div class="cxbdy c95r9 cuga1 cxebx clk9r cggtb">
                            <div class="czb6y">
                                <label class="block text-sm cw92y ci4cg" for="username">Business Name</label>
                                <input id="username" class="c03gb c3ff8" type="text" placeholder="Username" value="{{ $user->username }}" readonly>
                            </div>

                            <div class="c4ijw">
                                <label class="block text-sm cw92y ci4cg" for="role">Role</label>
                                <input id="role" class="c03gb c3ff8" type="text" placeholder="Role" value="{{ $user->roles->first()->name }}" readonly>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="cxbdy c95r9 cuga1 cxebx clk9r cggtb">
                            <div class="czb6y">
                                <label class="block text-sm cw92y ci4cg" for="username">Email</label>
                                <input id="email" class="c03gb c3ff8 " type="text" placeholder="user@artsy.com" value="{{ $user->email }}" readonly>
                            </div>

                            <div class="czb6y">
                                <label class="block text-sm cw92y ci4cg" for="phone">Phone</label>
                                <input class="c03gb c3ff8" type="phone" placeholder="000-0000-000" value="{{ $user->phone }}" readonly>
                            </div>
                            <div class="c4ijw">
                                <label class="block text-sm cw92y ci4cg" for="created_at">Created at</label>
                                <input id="created_at" class="c03gb c3ff8" type="text" placeholder="created at" value="{{ $user->created_at }}" readonly>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
