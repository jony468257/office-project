@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Admission Result')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.admission_result') }}</h4>
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
                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.admission_result') }}</a>
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
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">{{ __('messages.add_new') }} {{ __('messages.admission_result') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('pricing.index') }}">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pricing.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Title (Bangla)<span class="text-red-500 text-lg leading-none"> *</span>
                                </label>
                                <input type="text" id="title_bn" name="title_bn"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="টাইটেল" required value="{{ old('title_bn') }}">
                                @error('title_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Title (English)</label>
                                <input type="text" id="title_en" name="title_en"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Title" value="{{ old('title_en') }}">
                                @error('title_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="sub_title_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Subtitle (Bangla)<span class="text-red-500 text-lg leading-none"> *</span>
                                </label>
                                <input type="text" id="sub_title_bn" name="sub_title_bn"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="সাবটাইটেল" required value="{{ old('sub_title_bn') }}">
                                @error('sub_title_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="sub_title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Subtitle (English)</label>
                                <input type="text" id="sub_title_en" name="sub_title_en"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Subtitle" value="{{ old('sub_title_en') }}">
                                @error('sub_title_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="price_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Price (Bangla)<span class="text-red-500 text-lg leading-none"> *</span>
                                </label>
                                <input type="number" id="price_bn" name="price_bn"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="মূল্য" required value="{{ old('price_bn') }}">
                                @error('price_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="price_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Price (English)</label>
                                <input type="number" id="price_en" name="price_en"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Price" value="{{ old('price_en') }}">
                                @error('price_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    URL<span class="text-red-500 text-lg leading-none"> *</span>
                                </label>
                                <input type="url" id="url" name="url"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="https://example.com" required value="{{ old('url') }}">
                                @error('url')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="attachment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Attachment (Image/PDF)</label>
                                <input type="file" id="attachment" name="attachment"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100">
                                @error('attachment')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="row_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Status<span class="text-red-500 text-lg leading-none"> *</span>
                                </label>
                                <select id="row_status" name="row_status"
                                        class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100">
                                    <option value="1" {{ old('row_status') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('row_status') == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('row_status')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                    class="text-white bg-violet-500 hover:bg-violet-700 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">
                                {{ __('messages.submit') }}
                            </button>
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
