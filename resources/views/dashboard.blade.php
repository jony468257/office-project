@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','dashboard')
@push('custom-css')
<style>
    .clock {
        position: relative;
        /*top: 50%;*/
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        color: #5cb247;
        font-size: 40px;
        /*letter-spacing: 7px;*/



    }
    </style>
@endpush
@section('content')

    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.dashboard') }}</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#"
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
                               class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.dashboard') }}</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- start grid -->
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5 ">
        <div class="grid-cols-1 xl:col-span-9">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body space-y-5">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="grid-cols-1 xl:col-span-3">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body space-y-5">
                    <div id="external-events">
                    </div>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 mt-10">
                            <div class="card bg-white shadow-md rounded-lg p-6 border border-gray-200">
                                <div class="card-body">
                                    <h5 class="text-lg font-semibold text-gray-800 mb-4">Current Time</h5>
                                    <h5 id="MyClockDisplay" class="clock fs-lg" onload="showTime()"></h5>
                                </div>
                            </div>

                            <div class="card bg-white shadow-md rounded-lg p-6 border border-gray-200">
                                <div class="card-body">
                                    @php
                                        $totalContacts = \App\Models\Contact::count();
//                                        $todaysContacts = \App\Models\Contact::whereDate('created_at', today())->count();
                                    @endphp
                                    <h5 class="text-gl font-semibold text-gray-800 mb-4">Total Registration Responses</h5>
                                    <p class="text-gray-600 text-lg">Total Responses: <strong class="text-green-600">{{ $totalContacts }}</strong></p>
{{--                                    <p class="text-gray-600">Today's Responses: <strong class="text-green-600">{{ $todaysContacts }}</strong></p>--}}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>

{{--    <div class="modal relative z-10 hidden" id="event-modal" aria-labelledby="modal-title" role="dialog"--}}
{{--         aria-modal="true">--}}
{{--        <div class="fixed inset-0 overflow-y-auto z-50">--}}
{{--            <div class="modal-overlay absolute inset-0 bg-black bg-opacity-50 transition-opacity"></div>--}}
{{--            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">--}}
{{--                <div--}}
{{--                    class="relative transform overflow-hidden rounded-lg bg-white dark:bg-zinc-600 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">--}}
{{--                    <div class="bg-white dark:bg-zinc-600">--}}
{{--                        <div class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-700">--}}
{{--                            <h5 class="text-lg font-semibold text-gray-900 dark:text-gray-100 " id="modal-title">Add--}}
{{--                                Event</h5>--}}
{{--                            <button--}}
{{--                                class="btn text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ml-auto inline-flex items-center dark:hover:bg-zinc-600"--}}
{{--                                type="button" id="eventModal-close" data-tw-dismiss="modal">--}}
{{--                                <i class="mdi mdi-close  text-xl text-gray-500 dark:text-zinc-100/60"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                        <form class="needs-validation" name="event-form" id="form-event" autocomplete="off" novalidate>--}}
{{--                            <div class="p-6 space-y-6">--}}
{{--                                <div>--}}
{{--                                    <label for="event-title"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ">Event--}}
{{--                                        Name</label>--}}
{{--                                    <input type="text" id="event-title"--}}
{{--                                           class="border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 dark:text-"--}}
{{--                                           placeholder="Insert Event Name" required>--}}
{{--                                </div>--}}

{{--                                <div>--}}
{{--                                    <label for="event-category"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ">Category</label>--}}
{{--                                    <select type="text" id="event-category"--}}
{{--                                            class="border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 dark:text-"--}}
{{--                                            required>--}}
{{--                                        <option selected> --Select--</option>--}}
{{--                                        <option value="bg-red-500">Danger</option>--}}
{{--                                        <option value="bg-green-500">Success</option>--}}
{{--                                        <option value="bg-violet-500">Primary</option>--}}
{{--                                        <option value="bg-sky-500">Info</option>--}}
{{--                                        <option value="bg-zinc-800">Dark</option>--}}
{{--                                        <option value="bg-yellow-500">Warning</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:px-6 dark:bg-zinc-700">--}}
{{--                                <button type="button"--}}
{{--                                        class="btn inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm dark:focus:ring-red-500/30"--}}
{{--                                        id="btn-delete-event">Delete--}}
{{--                                </button>--}}
{{--                                <button type="button"--}}
{{--                                        class="btn mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 dark:text-gray-100 shadow-sm hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:mt-0 ml-auto sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"--}}
{{--                                        data-tw-dismiss="modal">Cancel--}}
{{--                                </button>--}}
{{--                                <button type="submit"--}}
{{--                                        class="btn inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm dark:focus:ring-green-500/30"--}}
{{--                                        id="btn-save-event">Save--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
@push('custom-js')
<script>
       function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";

    if(h == 0){
        h = 12;
    }

    if(h > 12){
        h = h - 12;
        session = "PM";
    }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);

    }

    showTime();
</script>

@endpush
