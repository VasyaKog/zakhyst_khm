@extends('layouts.web')

@section('title', __('Team Page Title'))

@section('content')
    <div class="bg-white dark:bg-zinc-900 transition-colors duration-300">
        <!-- Main Team Section -->
        <div class="pt-[40px] lg:pt-[120px] pb-[60px] lg:pb-[100px]">
            <!-- Main Title Area -->
            <div
                class="lg:px-0 lg:max-w-[1200px] lg:mx-auto md:ml-[50px] mb-[60px] lg:mb-[119px] flex justify-between items-start pt-[50px] lg:pt-0">
                <div>
                    <h1
                        class="text-[2.5rem] lg:text-[5rem] md:text-[3.75rem] font-extrabold text-black dark:text-white uppercase leading-[1.1] lg:leading-[1.02] mb-[40px] lg:mb-[77px] transition-colors">
                        {!! nl2br(__('Veteran Space Team')) !!}
                    </h1>
                    <p
                        class="text-[1rem] lg:text-[1.25rem] md:text-[1.125rem] font-normal text-black dark:text-gray-200 text-left lg:text-justify max-w-full lg:max-w-[869px] leading-[1.43] transition-colors">
                        {!! nl2br(__('Team Intro')) !!}
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
                                class="w-full h-[225px] lg:h-[325px] mb-[20px] lg:mb-[30px] rounded-[20px] overflow-hidden bg-gray-100 dark:bg-zinc-800 transition-colors">
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->full_name }}"
                                    class="w-full h-full object-cover dark:opacity-90 transition-opacity">
                            </div>
                            <h3
                                class="text-[1.5rem] lg:text-[2rem] font-extrabold text-black dark:text-white leading-[1.25] mb-[15px] lg:mb-[35px] text-left transition-colors">
                                {{ $member->first_name }}<br />{{ $member->last_name }}</h3>
                            <p
                                class="text-[1rem] lg:text-[1.25rem] font-normal text-black dark:text-gray-300 leading-[1.43] text-left transition-colors">
                                {{ $member->role }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Partnership Section -->
            <div
                class="lg:px-0 lg:max-w-[1200px] lg:mx-auto md:ml-[50px] mb-[50px] lg:mb-[100px]">
                <h2
                    class="text-[2.5rem] lg:text-[5rem] md:text-[3.75rem] font-extrabold text-black dark:text-white uppercase leading-[1.1] lg:leading-[1.02] mb-[50px] lg:mb-[100px] transition-colors">
                    {!! nl2br(__('Partner Team')) !!}
                </h2>
            </div>

            <div
                class="lg:px-0 max-w-full lg:max-w-[1200px] lg:mx-auto md:ml-[50px]">

                <div
                    class="grid grid-cols-1 min-[420px]:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-[30px] md:gap-[20px] sm:gap-[15px] gap-y-[40px] lg:gap-y-[76px] mb-[40px] lg:mb-[66px]">
                    @foreach($partnerTeam as $member)
                    <div class="w-full max-w-[270px] mx-auto sm:mx-0">
                        <div
                            class="w-full h-[225px] lg:h-[325px] mb-[20px] lg:mb-[30px] rounded-[20px] overflow-hidden bg-gray-100 dark:bg-zinc-800 transition-colors">
                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->full_name }}"
                                class="w-full h-full object-cover dark:opacity-90 transition-opacity">
                        </div>
                        <h3
                            class="text-[1.5rem] lg:text-[2rem] font-extrabold text-black dark:text-white leading-[1.25] mb-[15px] lg:mb-[35px] text-left transition-colors">
                            {{ $member->first_name }}<br />{{ $member->last_name }}</h3>
                        <p
                            class="text-[1rem] lg:text-[1.25rem] font-normal text-black dark:text-gray-300 leading-[1.43] text-left transition-colors">
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
