@extends('layouts.web')

@section('title', 'Команда - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
    <div class="bg-white">
        <!-- Main Team Section -->
        <div class="pt-[40px] lg:pt-[120px] pb-[60px] lg:pb-[100px]">
            <!-- Main Title Area -->
            <div
                class="lg:px-0 lg:max-w-[1200px] lg:mx-auto md:ml-[50px] mb-[60px] lg:mb-[119px] flex justify-between items-start">
                <div>
                    <h1
                        class="text-[40px] lg:text-[80px] md:text-[60px] font-extrabold text-black uppercase leading-[1.1] lg:leading-[1.02] mb-[40px] lg:mb-[77px]">
                        Команда<br />
                        ветеранського<br />
                        простору
                    </h1>
                    <p
                        class="text-[16px] lg:text-[20px] md:text-[18px] font-normal text-black text-left lg:text-justify max-w-full lg:max-w-[869px] leading-[1.43]">
                        Знайомся!<br />
                        Це команда веретанського простору та партнерська команда, що допомагає втілити задумані нами ідеї.
                    </p>
                </div>
                <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                    class="w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity ml-4 shrink-0"
                    onclick="openContactModal()">
            </div>

            <!-- Team Grid -->
            <div
                class="lg:px-0 max-w-full lg:max-w-[1200px] lg:mx-auto md:ml-[50px]">
                <div
                    class="grid grid-cols-1 min-[420px]:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-[22px] gap-y-[40px] lg:gap-y-[76px] mb-[80px] lg:mb-[195px]">
                    @foreach($mainTeam as $member)
                        <div class="w-full max-w-[270px] mx-auto sm:mx-0">
                            <div
                                class="w-full h-[225px] lg:h-[325px] mb-[20px] lg:mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->full_name }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <h3
                                class="text-[24px] lg:text-[32px] font-extrabold text-black leading-[1.25] mb-[15px] lg:mb-[35px] text-left">
                                {{ $member->first_name }}<br />{{ $member->last_name }}</h3>
                            <p
                                class="text-[16px] lg:text-[20px] font-normal text-black leading-[1.43] text-left">
                                {{ $member->role }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Partnership Section -->
            <div
                class="lg:px-0 lg:max-w-[1200px] lg:mx-auto md:ml-[50px] mb-[50px] lg:mb-[100px]">
                <h2
                    class="text-[40px] lg:text-[80px] md:text-[60px] font-extrabold text-black uppercase leading-[1.1] lg:leading-[1.02] mb-[50px] lg:mb-[100px]">
                    Партнерська<br />
                    Команда
                </h2>
            </div>

            <div
                class="lg:px-0 max-w-full lg:max-w-[1200px] lg:mx-auto md:ml-[50px]">

                <div
                    class="grid grid-cols-1 min-[420px]:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-[30px] md:gap-[20px] sm:gap-[15px] gap-y-[40px] lg:gap-y-[76px] mb-[40px] lg:mb-[66px]">
                    @foreach($partnerTeam as $member)
                    <div class="w-full max-w-[270px] mx-auto sm:mx-0">
                        <div
                            class="w-full h-[225px] lg:h-[325px] mb-[20px] lg:mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->full_name }}"
                                class="w-full h-full object-cover">
                        </div>
                        <h3
                            class="text-[24px] lg:text-[32px] font-extrabold text-black leading-[1.25] mb-[15px] lg:mb-[35px] text-left">
                            {{ $member->first_name }}<br />{{ $member->last_name }}</h3>
                        <p
                            class="text-[16px] lg:text-[20px] font-normal text-black leading-[1.43] text-left">
                            {{ $member->role }}</p>
                    </div>
                    @endforeach
                </div>

            </div>
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
