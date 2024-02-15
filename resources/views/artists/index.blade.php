@extends('layouts.home.app')


@section('contents')

    @include('layouts.home.hero')

    <div class="container my-24 mx-auto md:px-6">
        <section class="mb-32 text-center">
            <h2 class="mb-8 pb-4 text-center text-3xl font-bold">
            Latest Projects
            </h2>

            <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
                @foreach($projects as $project)
                    <div class="mt-10 lg:mb-0">
                        <div class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <div class="flex">
                                <div
                                class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                data-te-ripple-init data-te-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                                <a href="#!">
                                    <div
                                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="p-6">
                                <h5 class="mb-3 text-lg font-bold">{{$project->name}}</h5>
                                <a href="{{route('artists.show', $project->id)}}"><p class="mb-4 pb-2">{{ Str::limit($project->description, 123) }}</p></a>
                                <form action="{{route('artists.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="project_id" value="{{$project->id }}">
                                    <button  class="inline-block rounded-full bg-blue-500 px-6 py-2 text-xs font-medium uppercase text-white shadow-md transition duration-300 ease-in-out hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-700">
                                        Apply Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
