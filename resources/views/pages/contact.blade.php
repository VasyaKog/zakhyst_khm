@extends('layouts.web')
@section('title', 'Контакти - ВЕТЕРАНСЬКИЙ ПРОСТІР')
@section('content')
    <!-- Main Content -->
    <main class="min-h-screen bg-white">
        <!-- Contact Section -->
        <section class="py-20">
            <div class="max-w-[1920px] mx-auto px-[375px]">
                <!-- Page Title -->
                <div class="mb-16">
                    <h1 class="text-[158px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92] mb-8">
                        КОНТАКТИ:
                    </h1>
                    
                    <div class="max-w-[869px] text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43] mb-16">
                        <p class="mb-0">Давай разом перейдемо на наступний рівень життя!</p>
                        <p>Пиши, телефонуй, завітай до нас.</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="mb-16">
                    <div class="w-full max-w-[1170px] h-px bg-black"></div>
                </div>

                <!-- Contact Information -->
                <div class="mb-16">
                    <div class="grid grid-cols-2 gap-16 max-w-[1170px]">
                        <!-- Left Column -->
                        <div class="space-y-12">
                            <!-- Location -->
                            <div>
                                <h3 class="text-[20px] font-light font-['Montserrat'] text-black uppercase tracking-[1px] mb-4">
                                    Локація простору:
                                </h3>
                                <p class="text-[24px] font-bold font-['Montserrat'] text-black leading-[1.08]">
                                    м. Хмельницький, вул. Кам'янецька, 76
                                </p>
                            </div>

                            <!-- Schedule -->
                            <div>
                                <h3 class="text-[20px] font-light font-['Montserrat'] text-black uppercase tracking-[1px] mb-4">
                                    Розклад:
                                </h3>
                                <div class="text-[24px] font-bold font-['Montserrat'] text-black leading-[1.63]">
                                    <p class="mb-0">Пн-Пт 09:00 - 17:30</p>
                                    <p>Сб-Нд за домовленістю</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-12">
                            <!-- Phone -->
                            <div>
                                <h3 class="text-[20px] font-light font-['Montserrat'] text-black uppercase tracking-[1px] mb-4">
                                    Телефон:
                                </h3>
                                <p class="text-[24px] font-bold font-['Montserrat'] text-black leading-[1.08]">
                                    +38 067 563 0090
                                </p>
                            </div>

                            <!-- Email -->
                            <div>
                                <h3 class="text-[20px] font-light font-['Montserrat'] text-black uppercase tracking-[1px] mb-4">
                                    E-mail:
                                </h3>
                                <p class="text-[24px] font-bold font-['Montserrat'] text-black leading-[1.5]">
                                    veteranskiprostirkhm.gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="max-w-[1170px] py-[100px]">
                    <x-contact-form />
                </div>
            </div>
        </section>
    </main>

    @endsection

@section('footer')
    @include('partials.footer-basic')
@endsection