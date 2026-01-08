@extends('layouts.web')

@section('title', 'Про нас - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
    <div class="bg-white">
        <!-- Main About Section -->
        <div class="pt-[40px] lg:pt-[120px] pb-[60px] lg:pb-[100px] overflow-hidden">
            <!-- Page Title -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[40px] lg:mb-[80px] flex justify-between items-start">
                <h1
                    class="text-[40px] lg:text-[158px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
                    Про нас:
                </h1>
                <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                    class="w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity ml-4 shrink-0"
                    onclick="openContactModal()">
            </div>

            <!-- Description -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[120px]">
                <div
                    class="max-w-full lg:max-w-[869px] text-[16px] lg:text-[20px] font-normal font-['Montserrat'] text-black text-left lg:text-justify leading-[1.43] space-y-2">
                    <p>Привіт!</p>
                    <p>Тут ти детальніше ознайомишся з розвитком Ветеранського простору та зрозумієш, який шлях ми пройшли,
                        щоб мати можливість допомогти тобі адаптуватися до нового життя.</p>
                </div>
            </div>

            <!-- Goal Section -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[100px]">
                <h2
                    class="text-[24px] lg:text-[48px] font-extrabold font-['Montserrat'] text-black leading-[1.1] lg:leading-[0.93] mb-[30px] lg:mb-[60px] max-w-[870px]">
                    Заклад створений з метою надання отримувачам послуг:
                </h2>

                <!-- Goal Cards -->
                <div class="grid grid-cols-2 lg:flex gap-4 lg:gap-[34px]">
                    <x-goal-card title="адаптації" icon="adaptation-icon.svg" />
                    <x-goal-card title="профілактики" icon="profilactic-icon.svg" />
                    <x-goal-card title="інформування" icon="information-icon.svg" />
                    <x-goal-card title="консультування" icon="consult-icon.svg" />
                    <x-goal-card title="представництва інтересів" icon="interests-icon.svg" />
                </div>
            </div>

            <!-- Task Section -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[100px]">
                <h2
                    class="text-[24px] lg:text-[48px] font-extrabold font-['Montserrat'] text-black leading-[1.1] lg:leading-[0.92] mb-[20px] lg:mb-[30px]">
                    Завдання:
                </h2>
                <div
                    class="max-w-[873px] text-[16px] lg:text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43]">
                    <p>Основним завданням Закладу є забезпечення взаємодії з органами влади та місцевого самоврядування,
                        громадськими об'єднаннями для вирішення проблемних питань ветеранської спільноти.</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[100px]">
                <div class="w-full border-t border-black"></div>
            </div>

            <!-- Timeline Section -->
            <div class="lg:flex lg:justify-center mb-[80px] lg:mb-[150px] px-4 lg:px-0">
                <div class="relative w-full lg:w-[1170px]">
                    <!-- Connecting Line -->
                    <div
                        class="absolute left-[19px] lg:left-[20px] top-[20px] lg:top-[71px] bottom-[50px] lg:bottom-[100px] w-[2px] bg-[#3971E2] z-0">
                    </div>

                    <!-- Timeline Events -->
                    <div class="relative z-10">
                        <x-timeline-event date="01.07" year="2019"
                            description="Створення Інформаційно-консультативного центру для родин учасників АТО/ООС" />

                        <x-timeline-event date="24.02" year="2022"
                            description="Об'єднання волонтерів під час початку повномасштабного вторгнення рф, створення волонтерського центру «Захист»" />

                        <x-timeline-event date="17.03" year="2022"
                            description="Реєстрація ГО «Захист - об'єднання волонтерів»" />

                        <x-timeline-event date="24.06" year="2022"
                            description="І стратегічна сесія організації, розвиток ветеранських політик в громаді стає стратегічним напрямком." />

                        <x-timeline-event date="01.07" year="2022"
                            description="Початок психо-соціальної підтримки військовослужбовців та їх родин" />

                        <x-timeline-event date="21.11" year="2023"
                            description="Відкриття ветеранського простору на базі ГО «Захист - об'єднання волонтерів»" />

                        <x-timeline-event date="01.03" year="2024"
                            description="Рішення сесії Хмельницької міської ради про створення Ветеранського простору як комунального закладу" />

                        <x-timeline-event date="01.06" year="2024"
                            description="Старт роботи КЗ «Ветеранський простір» Хмельницької міської ради" />

                        <x-timeline-event date="Сьогодення" year="2025"
                            description="Комунальний заклад «Ветеранський простір» Хмельницької міської ради є установою, утвореною для надання послуг військовим, ветеранам та членам їхніх сімей; членам сімей загиблих (зниклих безвісти), полеглих Захисників та Захисниць." />
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-active');
                        } else {
                            entry.target.classList.remove('is-active');
                        }
                    });
                }, {
                    threshold: 0.2, // Trigger when 20% visible
                    rootMargin: '-50px 0px -100px 0px' // Adjust scroll trigger area
                });

                document.querySelectorAll('.timeline-event').forEach(el => observer.observe(el));
            });
        </script>
@endsection

    @section('footer')
        @include('partials.footer-extended')
    @endsection