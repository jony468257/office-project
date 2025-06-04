@extends('layouts.backend')
@section('title','Categories')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Calendar</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#"
                           class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Apps
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
                               class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Calendar</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- start grid -->
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5 ">
        <!-- start col -->
        <div class="grid-cols-1 xl:col-span-3">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body space-y-5">
                    <button class="btn border-transparent text-base bg-violet-500 w-full text-white mb-3"
                            id="btn-new-event" data-tw-toggle="modal" data-tw-target="#event-modal"><i
                            class="mdi mdi-plus-circle-outline"></i> Create
                        New Event
                    </button>

                    <div id="external-events">
                        <p class="text-gray-500 dark:text-zinc-100/80">Drag and drop your event or click in the
                            calendar</p>
                        <div class="mt-4">
                            <div
                                class="cursor-move bg-green-600/20 px-4 py-2 rounded text-green-600 mx-2 my-[5px] dark:bg-green-100"
                                data-class="bg-green-500">
                                <i class="mdi mdi-checkbox-blank-circle text-11 align-middle ltr:mr-2 rtl:ml-2"></i>New
                                Event Planning
                            </div>
                            <div
                                class="cursor-move bg-sky-500/20 px-4 py-2 rounded text-sky-500 mx-2 my-[5px] dark:bg-sky-100"
                                data-class="bg-sky-500">
                                <i class="mdi mdi-checkbox-blank-circle text-11 align-middle ltr:mr-2 rtl:ml-2"></i>Meeting
                            </div>
                            <div
                                class="cursor-move bg-yellow-500/20 px-4 py-2 rounded text-yellow-500 mx-2 my-[5px] dark:bg-yellow-100"
                                data-class="bg-yellow-500">
                                <i class="mdi mdi-checkbox-blank-circle text-11 align-middle ltr:mr-2 rtl:ml-2"></i>Generating
                                Reports
                            </div>
                            <div
                                class="cursor-move bg-red-500/20 px-4 py-2 rounded text-red-500 mx-2 my-[5px] dark:bg-red-100"
                                data-class="bg-red-500">
                                <i class="mdi mdi-checkbox-blank-circle text-11 align-middle ltr:mr-2 rtl:ml-2"></i>Create
                                New theme
                            </div>
                            <div
                                class="cursor-move bg-gray-500/20 px-4 py-2 rounded text-gray-800 mx-2 my-[5px] dark:bg-gray-100"
                                data-class="bg-zinc-800">
                                <i class="mdi mdi-checkbox-blank-circle text-11 align-middle ltr:mr-2 rtl:ml-2"></i>Team
                                Meeting
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12">
                        <div class="col-span-12 mt-10">
                            <img src="{{ asset('backend/assets/images/undraw-calendar.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <!-- start col -->
        <div class="grid-cols-1 xl:col-span-9">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body space-y-5">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>

    <div class="modal relative z-10 hidden" id="event-modal" aria-labelledby="modal-title" role="dialog"
         aria-modal="true">
        <div class="fixed inset-0 overflow-y-auto z-50">
            <div class="modal-overlay absolute inset-0 bg-black bg-opacity-50 transition-opacity"></div>
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white dark:bg-zinc-600 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white dark:bg-zinc-600">
                        <div class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-700">
                            <h5 class="text-lg font-semibold text-gray-900 dark:text-gray-100 " id="modal-title">Add
                                Event</h5>
                            <button
                                class="btn text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ml-auto inline-flex items-center dark:hover:bg-zinc-600"
                                type="button" id="eventModal-close" data-tw-dismiss="modal">
                                <i class="mdi mdi-close  text-xl text-gray-500 dark:text-zinc-100/60"></i>
                            </button>
                        </div>

                        <form class="needs-validation" name="event-form" id="form-event" autocomplete="off" novalidate>
                            <div class="p-6 space-y-6">
                                <div>
                                    <label for="event-title"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ">Event
                                        Name</label>
                                    <input type="text" id="event-title"
                                           class="border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 dark:text-"
                                           placeholder="Insert Event Name" required>
                                </div>

                                <div>
                                    <label for="event-category"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ">Category</label>
                                    <select type="text" id="event-category"
                                            class="border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 dark:text-"
                                            required>
                                        <option selected> --Select--</option>
                                        <option value="bg-red-500">Danger</option>
                                        <option value="bg-green-500">Success</option>
                                        <option value="bg-violet-500">Primary</option>
                                        <option value="bg-sky-500">Info</option>
                                        <option value="bg-zinc-800">Dark</option>
                                        <option value="bg-yellow-500">Warning</option>
                                    </select>
                                </div>
                            </div>

                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:px-6 dark:bg-zinc-700">
                                <button type="button"
                                        class="btn inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm dark:focus:ring-red-500/30"
                                        id="btn-delete-event">Delete
                                </button>
                                <button type="button"
                                        class="btn mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 dark:text-gray-100 shadow-sm hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:mt-0 ml-auto sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                        data-tw-dismiss="modal">Cancel
                                </button>
                                <button type="submit"
                                        class="btn inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm dark:focus:ring-green-500/30"
                                        id="btn-save-event">Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <x-guest-layout>--}}
{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-input-label for="email" :value="__('Email')" />--}}
{{--                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--                <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-input-label for="password" :value="__('Password')" />--}}

{{--                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}

{{--                <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-primary-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-guest-layout>--}}

@endsection

@push('vendor-js')
@endpush
@push('custom-js')

@endpush
