@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp
@extends('layouts.backend')
@section('title','Mission and Vision')

@push('vendor-css')
@endpush
@push('custom-css')

@endpush
@section('content')

    {{-- Breadcrumb --}}
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('messages.mission_vision') }}</h4>
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
                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{ __('messages.mission_vision') }}</a>
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
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">{{ __('messages.mission_vision') }} {{ __('messages.list') }}</h6>
                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-right">
                        <a href="{{ route('mission-vision.create') }}">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                <i class="bx bx-folder-plus text-16 align-middle"></i>
                                <span class="align-middle ml-2">{{ __('messages.add_new') }}</span>
                            </button>

                        </a>
                    </h6>
                </div>
                <div class="card-body relative overflow-x-auto">
                    <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                        <thead>
                        <tr>
                            <th class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">S/L</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Title ( বাংলা )</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Title ( English )</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Type</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Description ( বাংলা )</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Description ( English )</th>
                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Image</th>
                            <th class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $key => $data)
                            <tr>
                                <td class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600">{{ $key+1 }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->title_bn }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->title_en }}</td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                    @if ($data->type === 0)
                                        <span class="badge font-medium bg-violet-50 text-violet-500 text-xl px-1.5 py-[1.5px] rounded dark:bg-violet-500/20">Mission</span>
                                    @elseif ($data->type === 1)
                                        <span class="badge font-medium bg-green-50 text-green-500 text-xl px-1.5 py-[1.5px] rounded dark:bg-green-500/20">Value</span>
                                    @else
                                        <span class="badge font-medium bg-red-50 text-red-500 text-xl px-1.5 py-[1.5px] rounded dark:bg-red-500/20">Target Customer</span>
                                    @endif

                                </td>
                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->description_en }}</td>
                                <td class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{ $data->description_bn }}</td>
                                <td class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                    <img class="inline-block h-14 w-14 rounded ring-2 ring-white dark:ring-zinc-500" src="{{ asset('storage/').'/'. $data->image }}"  alt="{{ $data->image }}"/>
                                </td>
                                <td class="border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                    <div class="gap-1 text-center flex justify-center">
                                         <button type="button" class="btn text-white bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600" title="{{ __('messages.edit') }}" onclick="window.location.href='{{ route('mission-vision.edit', $data->id) }}'"><i class="bx bx-pencil text-16 align-middle "></i></button>
                                        <div>

                                        <form action="{{ route('mission-vision.destroy', $data->id) }}" method="POST">
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
