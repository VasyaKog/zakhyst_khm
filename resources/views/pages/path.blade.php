@extends('layouts.web')
@section('title', 'Шлях ветерана')
@section('content')

    <div class="ml-[375px] mb-[120px] mt-[140px] flex justify-between items-start pr-12">
        <div>
            <h1 class="text-[80px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92] mb-24">
                Шлях ветерана
            </h1>

            <span class="block text-[40px] font-['Montserrat'] text-black uppercase">
                База даних в процесі наповнення!
            </span>

            <span class="block text-[40px] font-['Montserrat'] text-black mt-4 mb-[500px]">
                Просимо вибачення за незручності.
            </span>
        </div>
        <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
            class="w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity ml-4 shrink-0"
            onclick="openContactModal()">
    </div>

@endsection
@section('footer')
    @include('partials.footer-extended')
@endsection