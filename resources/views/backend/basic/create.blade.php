@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Basic Information')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

{{-- Breadcrumb --}}
<div class="grid grid-cols-1 mb-5">
    <div class="flex items-center justify-between">
        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ (__('messages.basic_information')) }}</h4>
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                        {{ (__('messages.dashboard')) }}
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ (__('messages.basic_information')) }}</a>
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
                <h6 class="mb-1 text-2xl text-gray-700 dark:text-gray-100"> {{ (__('messages.basic_information')) }} {{ (__('messages.add')) }}</h6>
                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                    <a href="{{ route('basic-information.index') }}">
                        <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                            <i class="bx bx-list-ol text-16 align-middle"></i>
                            <span class="align-middle ml-2">{{ __('messages.see_list') }}</span>
                        </button>
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('basic-information.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="name_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                Name (English)
{{--                                <span class="text-red-500 text-lg leading-none"> *</span>--}}
                            </label>
                            <input type="text" id="name_en" name="name_en" value="{{ old('name_en') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Name">
                            @error('name_en')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="name_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Name (Bangla)</label>
                            <input type="text" id="name_bn" name="name_bn" value="{{ old('name_bn') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="নাম">
                            @error('name_bn')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="favicon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Favicon <span class=" mb-2 text-sm font-medium text-red-500"> [Size:16x16]</span></label>
                            <input type="file" id="favicon" name="favicon" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100">
                            @error('favicon')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                Logo
                                <span class=" mb-2 text-sm font-medium text-red-500"> [Size: file|mimes:png,jpg,jpeg,webp,svg|max:2048']</span>
                            </label>
                            <input type="file" id="logo" name="logo" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100">
                            @error('logo')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Description (English)</label>
                            <textarea id="description_en" name="description_en" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Description">{{ old('description_en') }}</textarea>
                            @error('description_en')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="description_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Description (Bangla)</label>
                            <textarea id="description_bn" name="description_bn" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Description">{{ old('description_bn') }}</textarea>
                            @error('description_bn')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Address</label>
                            <input type="text" id="address" name="address" value="{{ old('address') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Address">
                            @error('address')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Email">
                            @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="copyrights" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Copyrights</label>
                            <input type="text" id="copyrights" name="copyrights" value="{{ old('copyrights') }}" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Copyrights">
                            @error('copyrights')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="row_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                Active
                            </label>
                            <input type="checkbox" id="row_status" name="row_status" value="1" checked>
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
