<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Login - Admin & Dashboard</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
        content="Tailwind Admin & Dashboard Template"
        name="description"
    />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}" />


    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">


    <link rel="stylesheet" href="{{ asset('backend/assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tailwind.css') }}" />
</head>

<body data-mode="light" data-sidebar-size="lg">

<div class="container-fluid">
    <div class="h-screen md:overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-12 ">
            <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                <div class="w-full xl:p-12 p-10 dark:bg-zinc-800">
                    <div class="flex h-[90vh] flex-col">
                        <div class="mx-auto my-auto">
                            <a href="#" class="">
                                <img src="{{ asset('backend/assets/images/mimba.png') }}" alt="" class="h-50 inline">
                            </a>
                        </div>

                        <div class="my-auto">
                            <div class="text-center">
                                <h5 class="text-gray-600 dark:text-gray-100">Welcome Back !</h5>
                                <p class="text-gray-500 dark:text-gray-100/60 mt-1">Sign in to continue to Mimba.</p>
                            </div>

                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4 flex justify-between">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ ('Remember me') }}</span>
                                    </label>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                            {{ ('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="flex items-center justify-center mt-4">
                                    <x-primary-button class="ml-3 btn border-transparent bg-violet-500 py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600">
                                        {{ ('Log in') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>


                        <div class=" text-center">
                            <p class="text-gray-500 dark:text-gray-100 relative mb-5">
                                © <script>document.write(new Date().getFullYear())</script> Mimba . Developed by:
{{--                                <i class="mdi mdi-heart text-red-400"></i>--}}
                                <a href="https://www.ussbd.net/" target="_blank">United Software Solutions</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                    <div class="absolute inset-0 bg-violet-500/5"></div>

                    <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                        <li class="h-10 w-10 rounded-3xl bg-white/30 absolute left-[10%] "></li>
                        <li class="h-28 w-28 rounded-3xl bg-white/30 absolute left-[20%]"></li>
                        <li class="h-10 w-10 rounded-3xl bg-white/30 absolute left-[25%]"></li>
                        <li class="h-20 w-20 rounded-3xl bg-white/30 absolute left-[40%]"></li>
                        <li class="h-24 w-24 rounded-3xl bg-white/30 absolute left-[70%]"></li>
                        <li class="h-32 w-12 rounded-3xl bg-white/30 absolute left-[70%]"></li>
                        <li class="h-36 w-20 rounded-3xl bg-white/30 absolute left-[32%]"></li>
                        <li class="h-20 w-20 rounded-3xl bg-white/30 absolute left-[55%]"></li>
                        <li class="h-12 w-12 rounded-3xl bg-white/30 absolute left-[25%]"></li>
                        <li class="h-36 w-10 rounded-3xl bg-white/30 absolute left-[90%]"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
        <span class="ltr:hidden">Left</span>
        <span  class="rtl:hidden">Right</span>
    </a>
</div>

<script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('backend/assets/js/pages/login.init.js') }}"></script>

<script src="{{ asset('backend/assets/js/app.js') }}"></script>
</body>

</html>
