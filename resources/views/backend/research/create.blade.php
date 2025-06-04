@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Research')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.history') }}</h4>
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
                               class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.history') }}</a>
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
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">{{ __('messages.add_new') }} {{ __('messages.history') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('research.index') }}">
                            <button type="button"
                                    class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('research.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Title
                                    (English)<span class="text-red-500 text-lg leading-none"> *</span></label>
                                <input type="text" id="title_en"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="title_en" value="{{ old('title_en') }}" placeholder="Title">
                                @error('title_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="title_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Title
                                    (Bangla) </label>
                                <input type="text" id="title_bn"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="title_bn" value="{{ old('title_bn') }}" placeholder="টাইটেল" required>
                                @error('title_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="description_bn"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Description
                                    (Bangla)</label>
                                <input type="text" id="description_bn"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="description_bn" value="{{ old('description_bn') }}"
                                       placeholder="ডেসক্রিপশন">
                                @error('description_bn')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="description_en"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Description
                                    (English)</label>
                                <input type="text" id="description_en"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="description_en" value="{{ old('description_en') }}"
                                       placeholder="Description">
                                @error('description_en')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="image"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Image<span
                                        class="text-red-500 text-lg leading-none"> *</span><span
                                        class=" mb-2 text-sm font-medium text-red-500"> [ Size: 492 x 370 | Type:webp,jpeg,png,jpg,gif|max:2048]</span></label>
                                <input type="file" id="image"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="image" value="{{ old('image') }}">
                                @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="button_name"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Button
                                    Name</label>
                                <input type="text" id="button_name"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="button_name" value="{{ old('button_name') }}"
                                       placeholder="Enter button name">
                                @error('button_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="problem"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Why Need
                                    this?</label>
                                <input type="text" id="problem"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="problem" value="{{ old('problem') }}" placeholder="Why Need this?">
                                @error('problem')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="problem_desc"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Why Need this? Description</label>
                                <input type="text" id="problem_desc"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="problem_desc" value="{{ old('problem_desc') }}" placeholder="Description">
                                @error('problem_desc')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="banner_image"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Banner
                                    Image<span class="text-red-500 text-lg leading-none"> *</span><span
                                        class=" mb-2 text-sm font-medium text-red-500"> [ Size: 1024 x 720 | Type:webp,jpeg,png,jpg,gif|max:5120 ]</span></label>
                                <input type="file" id="banner_image"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="banner_image" value="{{ old('banner_image') }}">
                                @error('banner_image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="solution_image"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Solutions
                                    Image<span class="text-red-500 text-lg leading-none"> *</span><span
                                        class=" mb-2 text-sm font-medium text-red-500"> [ Size: 1024 x 720 | Type:webp,jpeg,png,jpg,gif|max:5120 ]</span></label>
                                <input type="file" id="solution_image"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="solution_image" value="{{ old('solution_image') }}">
                                @error('solution_image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="solution_title"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Solutions Title</label>
                                <input type="text" id="solution_title"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="solution_title" value="{{ old('solution_title') }}"
                                       placeholder="Enter Solutions Title">
                                @error('solution_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Solution Keys -->
                            <div class="form-group mb-3">
                                <label for="solution_keys" class="form-label">Solution Keys: <span class=" mb-2 text-sm font-medium text-red-500"> [ Image Size: 80 x 80 | Type:webp,jpeg,png,jpg,gif|max:2048 ]</span></label>
                                <div id="solution-keys-wrapper">
                                    <div class="input-group mb-2">
                                        <input type="text" name="solution_keys[]" class="form-control" placeholder="Solution Key">
                                        <input type="file" name="solution_images[]" class="form-control" accept="image/*">
                                        <button type="button" class="text-white bg-red-500 hover:bg-red-700" onclick="removeKey(this)">Remove</button>
                                    </div>
                                </div>
                                <button type="button" class="text-white bg-green-500 hover:bg-green-700" onclick="addSolutionKey()">Add New</button>
                            </div>
                            <div>
                                <label for="features_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Features Title</label>
                                <input type="text" id="features_title" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="features_title" value="{{ old('features_title') }}" placeholder="Enter Features Title">
                                @error('features_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Features Keys -->
                            <div class="form-group mb-3">
                                <label for="features_keys" class="form-label">Features Keys:<span class=" mb-2 text-sm font-medium text-red-500"> [ Image Size: 80 x 80 | Type:webp,jpeg,png,jpg,gif|max:2048 ]</span></label>
                                <div id="features-keys-wrapper">
                                    <div class="input-group mb-2">
                                        <input type="text" name="features_keys[]" class="form-control" placeholder="Features Key">
                                        <input type="file" name="features_images[]" class="form-control" accept="image/*">
                                        <button type="button" class="text-white bg-red-500 hover:bg-red-700" onclick="removeKey(this)">Remove</button>
                                    </div>
                                </div>
                                <button type="button" class="text-white bg-green-500 hover:bg-green-700" onclick="addFeatureKey()">Add New</button>
                            </div>
                            <div>
                                <label for="works_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">How it Works Title</label>
                                <input type="text" id="works_title" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="works_title" value="{{ old('works_title') }}" placeholder="Enter How it Works Title">
                                @error('works_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="works_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Works Image<span class="text-red-500 text-lg leading-none"> *</span><span
                                        class=" mb-2 text-sm font-medium text-red-500"> [ Size: 1024 x 720 | Type:webp,jpeg,png,jpg,gif|max:5120 ]</span></label>
                                <input type="file" id="works_image" class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" name="works_image" value="{{ old('works_image') }}">
                                @error('works_image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="works_desc"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">How it Works Description</label>
                                <input type="text" id="works_desc"
                                       class="border border-gray-200 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                       name="works_desc" value="{{ old('works_desc') }}" placeholder="Description">
                                @error('works_desc')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Works Keys -->
                            <div class="form-group mb-3">
                                <label for="works_data" class="form-label">How it Works Keys:</label>
                                <div id="works-keys-wrapper">
                                    <div class="input-group mb-2">
                                        <input type="text" name="works_data[]" class="form-control" placeholder="Features Key">
                                        <button type="button" class="text-white bg-red-500 hover:bg-red-700" onclick="removeKey(this)">Remove</button>
                                    </div>
                                </div>
                                <button type="button" class="text-white bg-green-500 hover:bg-green-700" onclick="addWorksKey()">Add New</button>
                            </div>

                        </div>
                        <div class="text-center">
                            <button type="submit" class="text-white bg-violet-500 hover:bg-violet-700 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">
                                {{ __('messages.submit') }}
                            </button>
                        </div>
                    </form>
                    <script>
                        function addSolutionKey() {
                            const solutionKeysWrapper = document.getElementById('solution-keys-wrapper');
                            const inputGroup = document.createElement('div');
                            inputGroup.className = 'input-group mb-2';
                            inputGroup.innerHTML = `
                                                    <input type="text" name="solution_keys[]" class="form-control" placeholder="Solution Key">
                                                    <input type="file" name="solution_images[]" class="form-control" accept="image/*">
                                                    <button type="button" class="text-white bg-red-500 hover:bg-red-700" onclick="removeKey(this)">Remove</button>
                                                `;
                            solutionKeysWrapper.appendChild(inputGroup);
                        }

                        function addFeatureKey() {
                            const featuresKeysWrapper = document.getElementById('features-keys-wrapper');
                            const inputGroup = document.createElement('div');
                            inputGroup.className = 'input-group mb-2';
                            inputGroup.innerHTML = `
                                                    <input type="text" name="features_keys[]" class="form-control" placeholder="Features Key">
                                                    <input type="file" name="features_images[]" class="form-control" accept="image/*">
                                                    <button type="button" class="text-white bg-red-500 hover:bg-red-700" onclick="removeKey(this)">Remove</button>
                                                `;
                            featuresKeysWrapper.appendChild(inputGroup);
                        }
                        function addWorksKey() {
                            const featuresKeysWrapper = document.getElementById('works-keys-wrapper');
                            const inputGroup = document.createElement('div');
                            inputGroup.className = 'input-group mb-2';
                            inputGroup.innerHTML = `
                                                    <input type="text" name="works_data[]" class="form-control" placeholder="Works Key">
                                                    <button type="button" class="text-white bg-red-500 hover:bg-red-700" onclick="removeKey(this)">Remove</button>
                                                `;
                            featuresKeysWrapper.appendChild(inputGroup);
                        }

                        function removeKey(button) {
                            button.parentElement.remove();
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('vendor-js')
@endpush
@push('custom-js')

@endpush
