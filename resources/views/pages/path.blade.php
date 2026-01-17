@extends('layouts.web')
@section('title', 'Шлях ветерана')
@section('content')

    <div class="px-5 lg:ml-[50px] xl:ml-[200px] 2xl:ml-[375px] mb-16 lg:mb-[120px] mt-10 lg:mt-[140px]">
        <div class="flex flex-col-reverse xs:flex-row xs:items-start xs:justify-between gap-4 lg:gap-0 pr-0 xs:pr-12">
            <div>
                <h1
                    class="text-[1.75rem] xs:text-[2.5rem] lg:text-[5rem] font-extrabold font-['Montserrat'] text-black dark:text-white uppercase leading-[0.92] mb-12 lg:mb-24 transition-colors break-words">
                    Шлях ветерана
                </h1>

                <span
                    class="block text-[1.25rem] xs:text-[1.75rem] lg:text-[2.5rem] font-['Montserrat'] text-black dark:text-white uppercase transition-colors break-words">
                    База даних в процесі наповнення!
                </span>

                <span
                    class="block text-[1.25rem] xs:text-[1.75rem] lg:text-[2.5rem] font-['Montserrat'] text-black dark:text-white mt-4 mb-24 lg:mb-[500px] transition-colors">
                    Просимо вибачення за незручності.
                </span>
            </div>
            <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                class="w-[50px] xs:w-[70px] h-[50px] xs:h-[70px] cursor-pointer hover:opacity-80 transition-opacity shrink-0 self-end xs:self-start"
                onclick="openContactModal()">
        </div>
    </div>

@endsection
@section('footer')
    @include('partials.footer-extended')
@endsection