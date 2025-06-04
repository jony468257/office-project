@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Chairman Message')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.chairman') }}</h4>
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
                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.chairman') }}</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body pb-0">
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">{{ __('messages.chairman') }} {{ __('messages.list') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">

                    </h6>
                </div>
                <div class="card-body relative overflow-x-auto">
                    <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                        <thead>
                        <tr>
                            <th class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">S/L</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Name</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Email</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Mobile</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Number Of Cattle</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Chosen Package</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Address</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Description</th>
                            <th class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $key => $data)
                            <tr>
                                <td class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600">{{ $key+1 }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->name }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->email }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->mobile }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->cattle }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->package }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->address }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->description }}</td>
                                <td class="border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                    <div class="gap-1 text-center flex justify-center">
                                        <div>

                                        <form action="{{ route('cattle-registration.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600" title="{{ __('messages.delete') }}">
                                                <i class="bx bx-trash text-16 align-middle"></i>
                                            </button>
                                        </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('vendor-js')
@endpush
@push('custom-js')

@endpush
