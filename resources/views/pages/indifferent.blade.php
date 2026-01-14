@extends('layouts.web')
@section('title', 'Небайдужим')
@section('content')

    <div
        class="px-5 lg:pl-[50px] xl:pl-[200px] 2xl:pl-[375px] lg:pr-0 mb-[60px] lg:mb-[120px] mt-[40px] lg:mt-[140px] flex justify-between items-start pr-12">
        <h1
            class="text-[2.5rem] lg:text-[5rem] font-extrabold font-['Montserrat'] text-black dark:text-white uppercase leading-[0.92] transition-colors">
            {{ __('Indifferent Page Title') }}
        </h1>
        <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
            class="w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity ml-4 shrink-0"
            onclick="openContactModal()">
    </div>

    <div class="pb-[160px] lg:pb-48 px-4 lg:px-0">
        <x-service-cards-stack>
            <div class="service-card-wrapper">
                <x-service-card variant="compact" number="01" numberFill="#FFFFFF" numberStroke="#3973E2" title="{{ __('Rules Title') }}"
                    color="#FFFFFF" :cornerIcon="true" maxWidth="695px" maxHeight="695px">
                    <x-slot:leftContent>
                        <h2 class="text-[1.5rem] lg:text-[2.25rem] font-bold font-['Montserrat'] mb-[30px] leading-[1.3]">
                            {{ __('Golden Rules Title') }}
                        </h2>

                        <ul class="list-disc ms-[30px] space-y-[50px] py-6 uppercase">
                            <li>{{ __('Rule 1') }}</li>
                            <li>{{ __('Rule 2') }}</li>
                            <li>{{ __('Rule 3') }}</li>
                        </ul>
                    </x-slot:leftContent>
                </x-service-card>
            </div>

            <div class="service-card-wrapper">
                <x-service-card variant="compact" number="02" numberFill="#3973E2" numberStroke="#FFFFFF" title="{{ __('Business Support Title') }}"
                    color="#3971E2" textColor="#FFFFFF" cornerButton="{{ __('Khmelnytskyi Grateful') }}" maxWidth="695px"
                    maxHeight="695px">

                    <x-slot:leftContent>
                        <p class="text-[1.25rem] font-normal font-['Montserrat'] leading-[1.82]">
                            {{ __('Business Support Content') }}
                        </p>
                    </x-slot:leftContent>
                </x-service-card>
            </div>

            <div class="service-card-wrapper">
                <x-service-card variant="compact" number="03" numberFill="#2C337D" numberStroke="#FFFFFF" title="{{ __('Population Support Title') }}"
                    color="#2C337D" textColor="#FFFFFF" cornerText="{!! __('Population Details') !!}" maxHeight="695px"
                    maxWidth="695px">

                    <x-slot:leftContent>
                        <p class="text-[1.25rem] font-normal font-['Montserrat'] leading-[1.66]">
                            {{ __('Population Support Content') }}
                        </p>
                    </x-slot:leftContent>
                </x-service-card>
            </div>

            <div class="service-card-wrapper">
                <x-service-card variant="compact" number="04" numberFill="#E6E6E6" numberStroke="#000000" title="{{ __('Partners Support Title') }}"
                    color="#E6E6E6" cornerText="{!! __('Waiting For You Address') !!}"
                    maxWidth="695px" maxHeight="695px">
                    <x-slot:leftContent>
                        <p class="text-[1.25rem] font-normal font-['Montserrat'] leading-[1.66]">
                            {{ __('Partners Support Content') }}
                        </p>
                    </x-slot:leftContent>
                </x-service-card>
            </div>
        </x-service-cards-stack>
    </div>
@endsection
@section('footer')
    @include('partials.footer-extended')
@endsection