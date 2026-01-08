@extends('layouts.web')

@section('title', 'Послуги - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
    <div class="bg-white">
        <!-- Main Services Section -->
        <div class="pt-[40px] lg:pt-[120px] pb-[60px] lg:pb-[100px]">
            <!-- Page Title -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[120px] flex justify-between items-start">
                <h1
                    class="text-[40px] lg:text-[80px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
                    Послуги
                </h1>
                <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                    class="w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity ml-4 shrink-0"
                    onclick="openContactModal()">
            </div>

            <!-- Services Container -->
            <div class="px-4 lg:px-0 lg:max-w-[1170px] lg:mx-auto">

                @foreach($services as $service)
                    <x-service-card :number="$service->number" :title="$service->title">
                        <x-slot:leftContent>
                            {!! $service->left_content !!}
                        </x-slot:leftContent>
                        @if($service->right_content)
                            <x-slot:rightContent>
                                {!! $service->right_content !!}
                            </x-slot:rightContent>
                        @endif
                    </x-service-card>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer-basic')
@endsection