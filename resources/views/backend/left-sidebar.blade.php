<div
    class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemen -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">
                    {{ __('messages.menu') }}
                </li>

                <li>
                    <a href="{{ route('dashboard') }}"
                       class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> {{ __('messages.dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                       class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="figma"></i>
                        <span data-key="t-add">Website Configuration</span>
                    </a>
                    <ul class="ml-5">
                        <li>
                            <a href="{{ route('basic-information.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="info"></i>
                                <span data-key="t-charts"> {{ __('messages.basic_information') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('slider.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="camera"></i>
                                <span data-key="t-camera"> {{ __('messages.slider') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> {{ __('messages.about_us') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mission-vision.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> {{ __('messages.mission_vision') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('research.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Research & Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('areas.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Area of Activity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pricing.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimonial.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Testimonial</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('achievement.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">Awards</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('insurance.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">Insurance</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faq.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">Gallery</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{ route('contact-us.create') }}"--}}
{{--                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">--}}
{{--                                <i data-feather="inbox"></i>--}}
{{--                                <span data-key="t-level"> {{ __('messages.contacts') }}</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                       class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="edit"></i>
                        <span data-key="t-edit">Website Configuration Edit</span>
                    </a>
                    <ul class="ml-5">
                        <li>
                            <a href="{{ route('basic-information.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="info"></i>
                                <span data-key="t-charts"> {{ __('messages.basic_information') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('slider.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="camera"></i>
                                <span data-key="t-camera"> {{ __('messages.slider') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> {{ __('messages.about_us') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mission-vision.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> {{ __('messages.mission_vision') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('research.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Research & Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('areas.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Area of Activity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pricing.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimonial.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Testimonial</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('achievement.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">Awards</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('insurance.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">Insurance</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faq.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="inbox"></i>
                                <span data-key="t-level"> {{ __('messages.contacts') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="inbox"></i>
                                <span data-key="t-level">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>


