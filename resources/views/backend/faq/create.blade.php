@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Officers and Staffs')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.faq') }}</h4>
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
                               class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.faq') }}</a>
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
                    <h6 class="mb-1 text-2xl text-gray-700 dark:text-gray-100">{{ __('messages.add') }} {{ __('messages.faq') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('faq.index') }}">
                            <button type="button"
                                    class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('faq.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="form-group mb-3">
                                <label for="faq" class="form-label">FAQ:
                                    <span class="mb-2 text-sm font-medium text-red-500">[ Provide Question and Answer ]</span>
                                </label>
                                <div id="faq-wrapper">
                                    <div class="input-group mb-2">
                                        <input type="hidden" name="faq_ids[]" value="0">
                                        <input type="text" name="faq_questions[]" class="form-control faq-input w-full p-2.5 border border-gray-300 rounded mb-2" placeholder="FAQ Question">
                                        <textarea name="faq_answers[]" class="form-control faq-input w-full p-2.5 border border-gray-300 rounded mb-2 h-24" placeholder="FAQ Answer"></textarea>
                                        <button type="button" class="text-white bg-red-500 hover:bg-red-700 py-2 px-4 ml-2" onclick="removeFAQ(this)">Remove</button>
                                    </div>
                                </div>
                                <button type="button" class="text-white bg-green-500 hover:bg-green-700 py-2 px-4" onclick="addFAQ()">Add New FAQ</button>
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
    <script>
        let faqCount = 1;

        function addFAQ() {
            const faqWrapper = document.getElementById('faq-wrapper');
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-2';
            inputGroup.innerHTML = `
        <input type="hidden" name="faq_ids[]" value="${faqCount}">
        <input type="text" name="faq_questions[]" class="form-control faq-input w-full p-2.5 border border-gray-300 rounded mb-2" placeholder="FAQ Question">
        <textarea name="faq_answers[]" class="form-control faq-input w-full p-2.5 border border-gray-300 rounded mb-2 h-24" placeholder="FAQ Answer"></textarea>
        <button type="button" class="text-white bg-red-500 hover:bg-red-700 py-2 px-4 ml-2" onclick="removeFAQ(this)">Remove</button>
    `;
            faqWrapper.appendChild(inputGroup);
            faqCount++;
        }

        function removeFAQ(button) {
            const inputGroup = button.parentNode;
            inputGroup.remove();
        }

    </script>
@endpush
