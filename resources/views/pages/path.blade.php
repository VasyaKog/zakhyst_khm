@extends('layouts.web')
@section('title', __('Veteran Path Page Title'))
@section('content')

    <div class="px-5 lg:ml-[50px] xl:ml-[200px] 2xl:ml-[375px] mb-16 lg:mb-[120px] mt-10 lg:mt-[140px]">
        <div class="flex flex-col-reverse xs:flex-row xs:items-start xs:justify-between gap-4 lg:gap-0 pr-0 xs:pr-12">
            <div>
                <h1
                    class="text-[1.75rem] xs:text-[2.5rem] lg:text-[5rem] font-extrabold font-montserrat text-black dark:text-white uppercase leading-[0.92] mb-12 lg:mb-24 transition-colors break-words">
                    {{ __('Veteran Path') }}
                </h1>

                @if($documents->count())
                    <div class="mb-12 lg:mb-16">
                        <span
                            class="text-base lg:text-lg font-montserrat text-black dark:text-white border-b border-black dark:border-white pb-2 transition-colors">
                            {{ __('Useful Documents') }}
                        </span>
                    </div>

                    @foreach($documents as $document)
                        <div class="mb-8 lg:mb-10">
                            <h3
                                class="text-base lg:text-lg font-bold font-montserrat text-black dark:text-white transition-colors">
                                {{ $document->name }}
                            </h3>
                            @if($document->description)
                                <p
                                    class="text-sm lg:text-base font-montserrat text-black dark:text-white mt-1 transition-colors max-w-[600px]">
                                    {{ $document->description }}
                                </p>
                            @endif
                            <a href="{{ $document->getFileUrl() }}" target="_blank" rel="noopener noreferrer"
                                class="inline-block mt-3 px-6 py-2 bg-[#4361ee] hover:bg-[#3651d4] text-white text-sm font-montserrat font-medium rounded-full transition-colors">
                                {{ __('View Document') }}
                            </a>
                        </div>
                    @endforeach
                @else
                    <span
                        class="block text-[1.25rem] xs:text-[1.75rem] lg:text-[2.5rem] font-montserrat text-black dark:text-white uppercase transition-colors break-words">
                        {{ __('Database Empty') }}
                    </span>

                    <span
                        class="block text-[1.25rem] xs:text-[1.75rem] lg:text-[2.5rem] font-montserrat text-black dark:text-white mt-4 mb-24 lg:mb-[500px] transition-colors">
                        {{ __('Sorry Inconvenience') }}
                    </span>
                @endif
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