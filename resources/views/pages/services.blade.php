@extends('layouts.web')

@section('title', __('Services Page Title'))

@section('content')
    <div class="bg-white dark:bg-zinc-900 transition-colors duration-300">
        <!-- Main Services Section -->
        <div class="pt-[40px] lg:pt-[120px] pb-[60px] lg:pb-[100px]">
            <!-- Page Title -->
            <div
                class="px-4 lg:px-8 xl:px-4 2xl:px-0 lg:max-w-[900px] xl:max-w-[1100px] 2xl:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[120px] flex justify-between items-start">
                <h1
                    class="text-[2.5rem] lg:text-[5rem] font-extrabold font-montserrat text-black dark:text-white uppercase leading-[0.92] transition-colors">
                    {{ __('Services Title') }}
                </h1>
                <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                    class="w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity ml-4 shrink-0"
                    onclick="openContactModal()">
            </div>

            <!-- Services Container -->
            <div class="px-4 lg:px-8 xl:px-4 2xl:px-0 lg:max-w-[900px] xl:max-w-[1100px] 2xl:max-w-[1170px] lg:mx-auto">

                @forelse($services as $service)
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
                @empty
                    <div class="w-full">
                        <span
                            class="block text-[1.25rem] xs:text-[1.75rem] lg:text-[2.5rem] font-montserrat text-black dark:text-white uppercase transition-colors break-words">
                            {{ __('Database Empty') }}
                        </span>
                        <span
                            class="block text-[1.25rem] xs:text-[1.75rem] lg:text-[2.5rem] font-montserrat text-black dark:text-white mt-4 mb-24 lg:mb-[300px] transition-colors">
                            {{ __('Sorry Inconvenience') }}
                        </span>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function equalizeServiceCards() {
                if (window.innerWidth < 1024) return; // Desktop only

                const cards = document.querySelectorAll('.js-service-card');
                if (cards.length === 0) return;

                // Reset heights
                cards.forEach(card => card.style.minHeight = 'auto');

                // Find Max Height
                let maxHeight = 0;
                cards.forEach(card => {
                    const h = card.offsetHeight;
                    if (h > maxHeight) maxHeight = h;
                });

                // Apply
                cards.forEach(card => card.style.minHeight = `${maxHeight}px`);
            }

            // Run on load and resize
            window.addEventListener('load', equalizeServiceCards);
            window.addEventListener('resize', equalizeServiceCards);
            // Run immediately in case
            equalizeServiceCards();
        });
    </script>
@endpush

@section('footer')
    @include('partials.footer-basic')
@endsection