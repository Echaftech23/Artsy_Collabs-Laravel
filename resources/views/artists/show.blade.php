@extends('layouts.home.app')


@section('contents')
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="https://www.whitmorerarebooks.com/pictures/medium/2465.jpg">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-900 font-medium tracking-widest">Project NAME</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$project->name}}</h1>
                <p class="leading-relaxed">{{$project->description}}</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                <div class="flex">
                    <span class="text-gray-900 font-medium mr-3">Created at :</span>
                    <span class="title-font font-medium text-gray-900">{{$project->created_at->format('d/m/Y')}}</span>
                </div>
                <div class="flex ml-6 items-center">
                    <span class="text-gray-900 font-medium mr-3">Budget :</span>
                    <span class="title-font font-medium text-gray-900">{{$project->budget}}$</span>
                </div>
                </div>
                <div class="flex">
                    <form class="flex ml-auto" action="{{route('artists.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="project_id" value="{{$project->id }}">
                        <button type="submit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Apply Now</button>
                    </form>

                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
