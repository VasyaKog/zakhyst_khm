@extends('layouts.web')

@section('title', 'Послуги - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
    <div class="bg-white">
        <!-- Main Services Section -->
        <div class="pt-[120px] pb-[100px]">
            <!-- Page Title -->
            <div class="ml-[375px] mb-[120px]">
                <h1 class="text-[80px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
                    Послуги
                </h1>
            </div>

            <!-- Services Container -->
            <div class="max-w-[1170px] mx-auto px-[50px]">

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