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
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.slider') }}</h4>
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
                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.slider') }}</a>
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
                    <h6 class="mb-1 text-2xl text-gray-700 dark:text-gray-100">{{ __('messages.edit') }} {{ __('messages.slider') }} Add</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('faq.index') }}">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-list-ol text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.see_list') }} </span>
                            </button>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            @foreach ($faqItems as $index => $item)
                                <div class="flex flex-col mb-4">
                                    <label for="faq_questions[{{ $index }}]" class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Question:</label>
                                    <input type="text" name="faq_questions[]" id="faq_questions[{{ $index }}]"
                                           value="{{ $item['faq_question'] }}"
                                           required
                                           class="input-class p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300"
                                           placeholder="Enter your question here">

                                    <label for="faq_answers[{{ $index }}]" class="mt-4 mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Answer:</label>
                                    <textarea name="faq_answers[]" id="faq_answers[{{ $index }}]"
                                              required
                                              class="textarea-class p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300"
                                              placeholder="Enter your answer here">{{ $item['faq_answer'] }}</textarea>
                                </div>
                            @endforeach
                        </div>

                        <div class="text-center">
                            <button type="submit" class="text-white bg-violet-500 hover:bg-violet-600 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">
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
