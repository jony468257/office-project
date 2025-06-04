@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Teachers')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.teachers') }}</h4>
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
                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.teachers') }}</a>
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
                    <h6 class="mb-1 text-2xl text-gray-700 dark:text-gray-100">{{ __('messages.edit') }} {{ __('messages.teachers') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('teachers.index') }}">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('teachers.update',$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Name (Bangla)<span class="text-red-500 text-lg leading-none"> *</span> </label>
                                <input type="text" id="name_bn" class=" border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="name_bn" value="{{ $data->name_bn }}">
                            </div>
                            <div>
                                <label for="name_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Name (English)</label>
                                <input type="text" id="name_en" class=" border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="name_en" value="{{ $data->name_en }}">
                            </div>
                            <div>
                                <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Designation<span class="text-red-500 text-lg leading-none"> *</span></label>
                                <input type="text" id="designation" class=" border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="designation" value="{{ $data->designation }}">
                            </div>
                            <div>
                                <label for="shift" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Shift<span class="text-red-500 text-lg leading-none"> *</span></label>
                                <select class="border-gray-200 focus:ring-violet-100 focus:border-violet-500" data-trigger name="shift" id="shift">
                                    <option value="">Select Shifts</option>
                                    <option value="0" @if($data->shift == 0) selected @endif>Day</option>
                                    <option value="1" @if($data->shift == 1) selected @endif>Evening</option>
                                    <option value="2" @if($data->shift == 2) selected @endif>Both</option>
                                </select>
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Email</label>
                                <input type="email" id="email" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="email" value="{{ $data->email }}">
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Phone</label>
                                <input type="number" id="phone" class=" border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="phone" value="{{ $data->phone }}">
                            </div>
                            <div>
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Image</label>
                                <input type="file" id="image" class=" border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="image" value="{{ $data->image }}">
                            </div>
                            <div class="my-auto">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Old Picture</label>
                                <img class="inline-block h-14 w-14 rounded ring-2 ring-white dark:ring-zinc-500" src="{{ asset('storage/').'/'. $data->image }}"  alt="{{ $data->image }}"/>
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
