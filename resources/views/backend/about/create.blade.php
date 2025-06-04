@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Aboute Us')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.glance') }}</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            {{ __('messages.dashboard') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.glance') }}</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-5">
        <div class="col-span-12 xl:col-span-6">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body pb-0">
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">{{ __('messages.add_new') }} {{ __('messages.glance') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('about.index') }}">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Title (Bangla)<span class="text-red-500 text-lg leading-none"> *</span> </label>
                                <input type="text" id="title_bn" name="title_bn" value="{{ old('title_bn') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="টাইটেল" required>
                            </div>

                            <div>
                                <label for="title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Title (English)</label>
                                <input type="text" id="title_en" name="title_en" value="{{ old('title_en') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Title">
                            </div>

{{--                            <div>--}}
{{--                                <label for="contests_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Contests (Bangla)<span class="text-red-500 text-lg leading-none"> *</span> </label>--}}
{{--                                <input type="text" id="contests_bn" name="contests_bn" value="{{ old('contests_bn') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="কন্টেস্ট">--}}
{{--                            </div>--}}

{{--                            <div>--}}
{{--                                <label for="contests_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Contests (English)</label>--}}
{{--                                <input type="text" id="contests_en" name="contests_en" value="{{ old('contests_en') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Contests">--}}
{{--                            </div>--}}

                            <div>
                                <label for="description_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Description (Bangla)</label>
                                <textarea id="description_bn" name="description_bn" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="ডেসক্রিপশন">{{ old('description_bn') }}</textarea>
                            </div>

                            <div>
                                <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Description (English)</label>
                                <textarea id="description_en" name="description_en" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Description">{{ old('description_en') }}</textarea>
                            </div>

                            <div>
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Image <span class="text-red-500 text-lg leading-none"> *</span> <span class=" mb-2 text-sm font-medium text-red-500"> [ Size: 1024 x 720 ]</span></label>
                                <input type="file" id="image" name="image" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="image" required>
                            </div>

                            <div>
                                <label for="row_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Active</label>
                                <input type="checkbox" id="row_status" name="row_status" value="1" {{ old('row_status', true) ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="text-white bg-violet-500 hover:bg-violet-700 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">{{ __('messages.submit') }}</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>

@endsection

@push('vendor-js')
@endpush
@push('custom-js')

@endpush
