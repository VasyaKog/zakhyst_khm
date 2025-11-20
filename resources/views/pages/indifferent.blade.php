@extends('layouts.web')
@section('title', 'Небайдужим')
@section('content')

    <div class="ml-[375px] mb-[120px] mt-[140px]">
            <h1 class="text-[80px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
                Небайдужим
            </h1>
    </div>

    <div class="pb-48">
        <x-service-cards-stack>
            <div class="service-card-wrapper">
                <x-service-card
                    variant="compact"
                    number="01" 
                    numberFill="#FFFFFF"
                    numberStroke="#3973E2"
                    title="Правила"
                    color="#FFFFFF"
                    :cornerIcon="true"
                    maxWidth="695px"
                    maxHeight="695px">
                    <x-slot:leftContent>
                        <h2 class="text-[36px] font-bold font-['Montserrat'] mb-[30px] leading-[1.3]">
                            Три "золотих" правила по роботі з ветеранами:
                        </h2>

                        <ul class="list-disc ms-[30px] space-y-[50px] py-6 uppercase">
                            <li>Усе для ветерана разом із ветераном</li>
                            <li>Хочеш допомогти - спитай чи потрібно.</li>
                            <li>Повага в основі кожної взаємодії</li>
                        </ul>
                    </x-slot:leftContent>
                </x-service-card>
            </div>

            <div class="service-card-wrapper">
                <x-service-card
                    variant="compact"
                    number="02" 
                    numberFill="#3973E2"
                    numberStroke="#FFFFFF"
                    title="Бізнесу"
                    color="#3971E2"
                    textColor="#FFFFFF"
                    cornerButton="Хмельницький вдячний"
                    maxWidth="695px"
                    maxHeight="695px">
                    
                    <x-slot:leftContent>
                        <p class="text-[20px] font-normal font-['Montserrat'] leading-[1.82]">
                            Підтримай ветеранську спільноту, долучайся
до проєкту «Хмельницький Вдячний». Ініціатива
присвячена підтримці захисників та захисниць
зі сторони свідомого, соціально-орієнтованого бізнесу Хмельницької міської територіальної громади. Проєкт передбачає надання спеціальних знижок
та пропозицій для захисників і захисниць
та ветеранської спільноти. Мета — зібрати в одному місці інформацію про ці компанії, щоб зробити доступ до актуальних пропозицій більш простим та легким.
                        </p>
                    </x-slot:leftContent>
                </x-service-card>
            </div>

            <div class="service-card-wrapper">
                <x-service-card
                    variant="compact"
                    number="03"
                    numberFill="#2C337D"
                    numberStroke="#FFFFFF"
                    title="Населенню"
                    color="#2C337D"
                    textColor="#FFFFFF"
                    cornerText="Детальніше:<br>096 563 00 90"
                    maxHeight="695px"
                    maxWidth="695px">

                    <x-slot:leftContent>
                        <p class="text-[20px] font-normal font-['Montserrat'] leading-[1.66]">
                            Ветеранський простір пропонує навчання з
актуальних тем, які покликані допомогти цивільним усвідомити важливість підтримки ветеранів та
ветеранок. Серед тем: ветеранські політики та
програми, особливості комунікації з військовими та
ветеранами, специфіка психологічних реакцій людей з бойовою травмою, можливості для ветеранів та їх
сімей в освіті, працевлаштуванні та створенні власної справи, важливість поваги військовослужбовців
та ветеранів, а також вшанування пам'яті полеглих Захисників та Захисниць для сучасного українського суспільства та майбутнього покоління.
                        </p>
                    </x-slot:leftContent>
                </x-service-card>
            </div>

            <div class="service-card-wrapper">
                <x-service-card
                    variant="compact"
                    number="04" 
                    numberFill="#E6E6E6"
                    numberStroke="#000000"
                    title="Партнерам"
                    color="#E6E6E6"
                    cornerText="Чекаємо вас за адресою:<br>м.Хмельницький,<br>вул.Кам'янецька, 76"
                    maxWidth="695px"
                    maxHeight="695px">
                    <x-slot:leftContent>
                        <p class="text-[20px] font-normal font-['Montserrat'] leading-[1.66]">
                            КЗ «Ветеранський простір» ХРМ  є відкритим до
співпраці з небайдужими підприємцями,
організаціями та установами, які у своїй діяльності
прагнуть зробити громаду більш інклюзивною для ветеранської спільноти, підтримати ветеранів та їхні сім'ї. Наша команда шукає надійних партнерів аби зробити Україну кращою.
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
