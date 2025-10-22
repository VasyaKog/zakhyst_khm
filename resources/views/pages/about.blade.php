@extends('layouts.web')

@section('title', 'Про нас - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
<div class="bg-white">
    <!-- Main About Section -->
    <div class="pt-[120px] pb-[100px]">
        
        <!-- Page Title -->
        <div class="ml-[375px] mb-[80px]">
            <h1 class="text-[158px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
                Про нас:
            </h1>
        </div>

        <!-- Description -->
        <div class="ml-[375px] mb-[120px]">
            <div class="max-w-[869px] text-[20px] font-normal font-['Montserrat'] text-black text-justify leading-[1.43]">
                <p class="mb-0">Привіт!</p>
                <p class="mb-0">Тут ти детальніше ознайомишся з розвитком Ветеранського простору</p>
                <p class="mb-0">та зрозумієш, який шлях ми пройшли, щоб мати можливість допомогти тобі</p>
                <p>адаптуватися до нового життя.</p>
            </div>
        </div>

        <!-- Goal Section -->
        <div class="ml-[375px] mb-[100px]">
            <h2 class="text-[48px] font-extrabold font-['Montserrat'] text-black leading-[0.93] mb-[60px] max-w-[870px]">
                Заклад створений з метою надання отримувачам послуг:
            </h2>
            
            <!-- Goal Cards -->
            <div class="flex gap-[34px]">
                <x-goal-card title="адаптації" icon="adaptation-icon.svg" />
                <x-goal-card title="профілактики" icon="profilactic-icon.svg" />
                <x-goal-card title="інформування" icon="information-icon.svg" />
                <x-goal-card title="консультування" icon="consult-icon.svg" />
                <x-goal-card title="представництва інтересів" icon="interests-icon.svg" />
            </div>
        </div>

        <!-- Task Section -->
        <div class="ml-[375px] mb-[100px]">
            <h2 class="text-[48px] font-extrabold font-['Montserrat'] text-black leading-[0.92] mb-[30px]">
                Завдання:
            </h2>
            <div class="max-w-[873px] text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43]">
                <p class="mb-0">Основним завданням Закладу є забезпечення взаємодії з органами влади</p>
                <p>та місцевого самоврядування, громадськими об'єднаннями для вирішення проблемних питань ветеранської спільноти.</p>
            </div>
        </div>

        <!-- Divider -->
        <div class="ml-[375px] mb-[100px]">
            <div class="w-full max-w-[1170px] h-px bg-black"></div>
        </div>

        <!-- Timeline Section -->
        <div class="flex justify-center mb-[150px]">
            <div class="relative w-[1170px]">
                <!-- Blue connecting line between first two active events -->
                <div class="absolute left-[20px] top-[71px] w-[2px] h-[292px] bg-[#3971E2] z-0"></div>
                
                <!-- Smaller blue circle in the middle of the connecting line -->
                <div class="absolute left-[11px] top-[217px] w-[18px] h-[18px] bg-[#3971E2] rounded-full z-10"></div>
                
                <!-- Timeline Events -->
                <div class="relative z-10">
                <x-timeline-event 
                    date="01.07" 
                    year="2019" 
                    description="Створення Інформаційно-консультативного центру для родин учасників АТО/ООС" 
                    :active="true" 
                />
                
                <x-timeline-event 
                    date="24.02" 
                    year="2022" 
                    description="Об'єднання волонтерів під час початку повномасштабного вторгнення рф, створення волонтерського центру «Захист»" 
                    :active="true" 
                />
                
                <x-timeline-event 
                    date="17.03" 
                    year="2022" 
                    description="Реєстрація ГО «Захист - об'єднання волонтерів»" 
                    :active="false" 
                />
                
                <x-timeline-event 
                    date="24.06" 
                    year="2022" 
                    description="І стратегічна сесія організації, розвиток ветеранських політик в громаді стає стратегічним напрямком." 
                    :active="false" 
                />
                
                <x-timeline-event 
                    date="01.07" 
                    year="2022" 
                    description="Початок психо-соціальної підтримки військовослужбовців та їх родин" 
                    :active="false" 
                />
                
                <x-timeline-event 
                    date="21.11" 
                    year="2023" 
                    description="Відкриття ветеранського простору на базі ГО «Захист - об'єднання волонтерів»" 
                    :active="false" 
                />
                
                <x-timeline-event 
                    date="01.03" 
                    year="2024" 
                    description="Рішення сесії Хмельницької міської ради про створення Ветеранського простору як комунального закладу" 
                    :active="false" 
                />
                
                <x-timeline-event 
                    date="01.06" 
                    year="2024" 
                    description="Старт роботи КЗ «Ветеранський простір» Хмельницької міської ради" 
                    :active="false" 
                />
                
                <x-timeline-event 
                    date="Сьогодення" 
                    year="2025" 
                    description="Комунальний заклад «Ветеранський простір» Хмельницької міської ради є установою, утвореною для надання послуг військовим, ветеранам та членам їхніх сімей; членам сімей загиблих (зниклих безвісти), полеглих Захисників та Захисниць." 
                    :active="false" 
                />
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection
