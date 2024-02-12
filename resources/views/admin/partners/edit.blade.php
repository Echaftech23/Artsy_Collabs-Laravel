@extends('layouts.app')

@section('contents')


    <!-- Panel body -->
    <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <main class="ckut6">

            <div class="c4ijw c9on9">
                <div class="ct1ew csj4z csmh2 c1u8w" aria-hidden="true">
                    <img class="cbq5m coe73 crszu c3ff8 cgdfi cs93n" src="{{ asset('img/pay-bg.jpg') }}" width="460" height="180" alt="Pay background">
                </div>
                <div class="c4ijw c0nbw clpyc cj3hv cofxq c9r0z">
                    <img class="cfx0b cetne" src="{{ asset('img/pay-bg.jpg') }}" width="460" height="180" alt="Pay background">
                </div>
            </div>

            <div class="c4ijw c0nbw clpyc cj3hv cofxq c9r0z caadu" x-data="{ card: true }">
                <div class="bg-white dark:bg-slate-800 c426q cetne cedgs cukwe">

                    <!-- Card header -->
                    <div class="cob4g crkc7">
                        <div class="c7j98">
                            <img class="inline-flex rounded-full cfqlj" src="{{ asset('img/group-avatar-04.png') }}" width="80" height="80" alt="User">
                            <input type="hidden" name="logo" value="{{ asset('img/group-avatar-04.png') }}">
                        </div>
                        <h1 class="text-slate-800 dark:text-slate-100 cqosy ctbo0 cvvcr c7j98">Partner infos Section</h1>
                        <div class="text-sm">
                            Please ensure that all Partner data fields are filled.
                        </div>
                    </div>

                    <!-- Card form -->
                    <div x-show="card">
                        <div class="cxebx">
                            <!-- Partner Name -->
                            <div>
                                <label class="block text-sm cw92y ci4cg" for="name">Name</label>
                                <input id="name" name="name" class="c03gb c3ff8"  type="text" placeholder="Partner Name" value="{{ $partner->name }}">
                            </div>
                            <!-- Partner Expertise -->
                            <div>
                                <label class="block text-sm cw92y ci4cg" for="expertise">Expertise</label>
                                <textarea name="expertise" id="expertise" class="c03gb c3ff8" rows="6" placeholder="Add Parnter Expertise">{{ $partner->expertise }}</textarea>
                            </div>
                        </div>
                        <!-- Form footer -->
                        <div class="cro1p">
                            <div class="c958j">
                                <button type="submit" class="btn cfeqx cf1ce ceqwg c3ff8">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </form>
@endsection
