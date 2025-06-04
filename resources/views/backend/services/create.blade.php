@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Services')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.infrastructure') }}</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}"
                           class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            {{ __('messages.dashboard') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                               class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.infrastructure') }}</a>
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
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">{{ __('messages.add_new') }} {{ __('messages.infrastructure') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('services.index') }}">
                            <button type="button"
                                    class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Title (English)
                                </label>
                                <input type="text" id="title_en" name="title_en" value="{{ old('title_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Title">
                                @error('title_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="title_bn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Title (Bangla)<span class="text-red-500 text-lg leading-none"> *</span>
                                </label>
                                <input type="text" id="title_bn" name="title_bn" value="{{ old('title_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="টাইটেল" required>
                                @error('title_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="description_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Description (English)
                                </label>
                                <input type="text" id="description_en" name="description_en"
                                       value="{{ old('description_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Description">
                                @error('description_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="description_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Description (Bangla)
                                </label>
                                <input type="text" id="description_bn" name="description_bn"
                                       value="{{ old('description_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="ডেসক্রিপশন">
                                @error('description_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="image"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Image<span class="text-red-500 text-lg leading-none"> *</span> <span class=" mb-2 text-sm font-medium text-red-500"> [ Size: 200 x 150 ]</span>
                                </label>
                                <input type="file" id="image" name="image"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="image">
                                @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="image"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Banner Image<span class="text-red-500 text-lg leading-none"> *</span><span class=" mb-2 text-sm font-medium text-red-500"> [ Size: 1200 x 400 ]</span>
                                </label>
                                <input type="file" id="banner_image" name="banner_image"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Banner Image">
                                @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_one_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (English)
                                </label>
                                <input type="text" id="benefits_one_en" name="benefits_one_en" value="{{ old('benefits_one_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Benefits One">
                                @error('benefits_one_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_one_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (Bangla)
                                </label>
                                <input type="text" id="benefits_one_bn" name="benefits_one_bn" value="{{ old('benefits_one_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="বেনিফিট এক ">
                                @error('benefits_one_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_two_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (English)
                                </label>
                                <input type="text" id="benefits_two_en" name="benefits_two_en" value="{{ old('benefits_two_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Benefits Two">
                                @error('benefits_two_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_two_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (Bangla)
                                </label>
                                <input type="text" id="benefits_two_bn" name="benefits_two_bn" value="{{ old('benefits_two_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="বেনিফিট দুই">
                                @error('benefits_two_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_three_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (English)
                                </label>
                                <input type="text" id="benefits_three_en" name="benefits_three_en" value="{{ old('benefits_three_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Benefits Three">
                                @error('benefits_three_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_three_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (Bangla)
                                </label>
                                <input type="text" id="benefits_three_bn" name="benefits_three_bn" value="{{ old('benefits_three_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="বেনিফিট তিন">
                                @error('benefits_three_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_four_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (English)
                                </label>
                                <input type="text" id="benefits_four_en" name="benefits_four_en" value="{{ old('benefits_four_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Benefits Four">
                                @error('benefits_four_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_four_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (Bangla)
                                </label>
                                <input type="text" id="benefits_four_bn" name="benefits_four_bn" value="{{ old('benefits_four_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="বেনিফিট চার">
                                @error('benefits_four_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_five_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (English)
                                </label>
                                <input type="text" id="benefits_five_en" name="benefits_five_en" value="{{ old('benefits_five_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Benefits Five">
                                @error('benefits_five_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_five_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (Bangla)
                                </label>
                                <input type="text" id="benefits_five_bn" name="benefits_five_bn" value="{{ old('benefits_five_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="বেনিফিট পাঁচ">
                                @error('benefits_five_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_six_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (English)
                                </label>
                                <input type="text" id="benefits_six_en" name="benefits_six_en" value="{{ old('benefits_six_en') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="Benefits Six">
                                @error('benefits_six_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="benefits_six_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">
                                    Benefits (Bangla)
                                </label>
                                <input type="text" id="benefits_six_bn" name="benefits_six_bn" value="{{ old('benefits_six_bn') }}"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       placeholder="বেনিফিট ছয়">
                                @error('benefits_six_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="row_status"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Row
                                    Status</label>
                                <select class="border-gray-200 focus:ring-violet-100 focus:border-violet-500"
                                        name="row_status" id="row_status">
                                    <option value="1" {{ old('row_status') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('row_status') == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('row_status')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
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
