@extends('layouts.web')

@section('title', 'Команда - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
    <div class="bg-white">
        <!-- Main Team Section -->
        <div class="pt-[120px] pb-[100px]">
            <!-- Main Title -->
            <div
                class="ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px] mb-[119px] lg:mb-[119px] md:mb-[80px] sm:mb-[60px]">
                <h1
                    class="text-[80px] lg:text-[80px] md:text-[60px] sm:text-[48px] font-extrabold text-black uppercase leading-[1.02] mb-[77px] lg:mb-[77px] md:mb-[50px] sm:mb-[40px]">
                    Команда<br />
                    ветеранського<br />
                    простору
                </h1>
                <p
                    class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black text-justify max-w-[869px] lg:max-w-[869px] md:max-w-[700px] sm:max-w-[500px] leading-[1.43]">
                    Знайомся!<br />
                    Це команда веретанського простору та партнерська команда, що допомагає втілити задумані нами ідеї.
                </p>
            </div>

            <!-- Team Grid -->
            <div
                class="max-w-[1200px] lg:max-w-[1200px] md:max-w-[900px] sm:max-w-[600px] ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px]">
                <div
                    class="grid grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-[22px] lg:gap-[22px] md:gap-[20px] sm:gap-[15px] gap-y-[76px] lg:gap-y-[76px] md:gap-y-[60px] sm:gap-y-[40px] mb-[195px] lg:mb-[195px] md:mb-[120px] sm:mb-[80px]">
                    @foreach($mainTeam as $member)
                        <div class="w-full max-w-[270px] mx-auto">
                            <div
                                class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                                <img src="{{ asset('images/team/' . $member->photo) }}" alt="{{ $member->full_name }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <h3
                                class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">
                                {{ $member->first_name }}<br />{{ $member->last_name }}</h3>
                            <p
                                class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">
                                {{ $member->role }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Partnership Section -->
            <div
                class="ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px] mb-[100px] lg:mb-[100px] md:mb-[80px] sm:mb-[60px]">
                <h2
                    class="text-[80px] lg:text-[80px] md:text-[60px] sm:text-[48px] font-extrabold text-black uppercase leading-[1.02] mb-[100px] lg:mb-[100px] md:mb-[70px] sm:mb-[50px]">
                    Партнерська<br />
                    Команда
                </h2>
            </div>

            <div
                class="max-w-[1200px] lg:max-w-[1200px] md:max-w-[900px] sm:max-w-[600px] ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px]">

                <div
                    class="grid grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-[30px] lg:gap-[30px] md:gap-[20px] sm:gap-[15px] gap-y-[76px] lg:gap-y-[76px] md:gap-y-[60px] sm:gap-y-[40px] mb-[66px] lg:mb-[66px] md:mb-[50px] sm:mb-[40px]">
                    @foreach($partnerTeam as $member)
                    <div class="w-full max-w-[270px] mx-auto">
                        <div
                            class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                            <img src="{{ asset('images/team/' . $member->photo) }}" alt="{{ $member->full_name }}"
                                class="w-full h-full object-cover">
                        </div>
                        <h3
                            class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">
                            {{ $member->first_name }}<br />{{ $member->last_name }}</h3>
                        <p
                            class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">
                            {{ $member->role }}</p>
                    </div>
                    @endforeach
                </div>

                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="text-center py-16">
            <button onclick="openContactModal()"
                class="bg-veteran-blue hover:bg-blue-700 text-white text-xl font-bold px-12 py-4 rounded-full transition-colors duration-300">
                ЗВ'ЯЗАТИСЯ З НАМИ
            </button>
        </div>
    </div>

    <script>
        function openDonationModal() {
            document.getElementById('donation-modal').classList.remove('hidden');
            document.getElementById('donation-modal').classList.add('flex');
        }
    </script>
@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection

@include('components.contact-modal')