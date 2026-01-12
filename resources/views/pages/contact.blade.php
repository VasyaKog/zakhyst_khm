@extends('layouts.web')
@section('title', 'Контакти - ВЕТЕРАНСЬКИЙ ПРОСТІР')
@section('content')
    <!-- Main Content -->
    <div class="bg-white dark:bg-zinc-900 transition-colors duration-300">
        <!-- Contact Section -->
        <section class="py-10 lg:py-20">
            <div class="max-w-[1170px] mx-auto">
                <!-- Page Title -->
                <div class="mb-8 lg:mb-16">
                    <h1
                        class="text-[2.5rem] lg:text-[9.875rem] font-extrabold font-['Montserrat'] text-black dark:text-white uppercase leading-[0.92] mb-6 lg:mb-8 transition-colors">
                        {{ __('Contacts:') }}
                    </h1>

                    <div
                        class="max-w-full lg:max-w-[869px] text-[1rem] lg:text-[1.25rem] font-normal font-['Montserrat'] text-black dark:text-gray-200 leading-[1.43] mb-8 lg:mb-16 transition-colors">
                        <p class="mb-0">{{ __('Contact Intro Next Level') }}</p>
                        <p>{{ __('Contact Intro Write Call') }}</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="mb-8 lg:mb-16">
                    <div class="w-full h-px bg-black dark:bg-zinc-700 transition-colors"></div>
                </div>

                <!-- Contact Information -->
                <div class="mb-8 lg:mb-16">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                        <!-- Left Column -->
                        <div class="space-y-8 lg:space-y-12">
                            <!-- Location -->
                            <div>
                                <h3
                                    class="text-[1rem] lg:text-[1.25rem] font-light font-['Montserrat'] text-black dark:text-white uppercase tracking-[1px] mb-2 lg:mb-4 transition-colors">
                                    {{ __('Space Location') }}
                                </h3>
                                <p
                                    class="text-[1.25rem] lg:text-[1.5rem] font-bold font-['Montserrat'] text-black dark:text-gray-200 leading-[1.08] transition-colors">
                                    м. Хмельницький, вул. Кам'янецька, 76
                                </p>
                            </div>

                            <!-- Schedule -->
                            <div>
                                <h3
                                    class="text-[1rem] lg:text-[1.25rem] font-light font-['Montserrat'] text-black dark:text-white uppercase tracking-[1px] mb-2 lg:mb-4 transition-colors">
                                    {{ __('Schedule') }}
                                </h3>
                                <div
                                    class="text-[1.25rem] lg:text-[1.5rem] font-bold font-['Montserrat'] text-black dark:text-gray-200 leading-[1.63] transition-colors">
                                    <p class="mb-0">{{ __('Mon-Fri') }} 09:00 - 17:30</p>
                                    <p>{{ __('Sat-Sun') }} {{ __('By Appointment') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-8 lg:space-y-12">
                            <!-- Phone -->
                            <div>
                                <h3
                                    class="text-[1rem] lg:text-[1.25rem] font-light font-['Montserrat'] text-black dark:text-white uppercase tracking-[1px] mb-2 lg:mb-4 transition-colors">
                                    {{ __('Phone') }}
                                </h3>
                                <p
                                    class="text-[1.25rem] lg:text-[1.5rem] font-bold font-['Montserrat'] text-black dark:text-gray-200 leading-[1.08] transition-colors">
                                    +38 067 563 0090
                                </p>
                            </div>

                            <!-- Email -->
                            <div>
                                <h3
                                    class="text-[1rem] lg:text-[1.25rem] font-light font-['Montserrat'] text-black dark:text-white uppercase tracking-[1px] mb-2 lg:mb-4 transition-colors">
                                    {{ __('E-mail') }}
                                </h3>
                                <p
                                    class="text-[1.25rem] lg:text-[1.5rem] font-bold font-['Montserrat'] text-black dark:text-gray-200 leading-[1.5] break-words transition-colors">
                                    veteranskiprostirkhm.gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="py-[60px] lg:py-[100px]">
                    <x-contact-form />
                </div>
            </div>
        </section>
    </div>

@endsection

@section('footer')
    @include('partials.footer-basic')
@endsection