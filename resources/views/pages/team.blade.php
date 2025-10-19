@extends('layouts.web')

@section('title', 'Команда - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
<div class="bg-white">
    <!-- Main Team Section -->
    <div class="pt-[120px] pb-[100px]">
        <!-- Main Title -->
        <div class="ml-[325px] mb-[119px]">
            <h1 class="text-[80px] font-extrabold text-black uppercase leading-[1.02] mb-[77px]">
                Команда<br/>
                ветеранського<br/>
                простору
            </h1>
            <p class="text-[20px] font-normal text-black text-justify max-w-[869px] leading-[1.43]">
                Знайомся!<br/>
                Це команда веретанського простору та партнерська команда, що допомагає втілити задумані нами ідеї.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="max-w-[1200px] ml-[325px]">
            <div class="grid grid-cols-4 gap-[22px] gap-y-[76px] mb-[195px]">
                <!-- Team Member 1 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-1.jpg') }}" alt="Катерина Луцик" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Катерина<br/>Луцик</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Директор</p>
                </div>

                <!-- Team Member 2 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-2.jpg') }}" alt="Анастасія Ярова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Анастасія<br/>Ярова</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Заступник директора</p>
                </div>

                <!-- Team Member 3 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-3.jpg') }}" alt="Ольга Свіжа" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Ольга<br/>Свіжа</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Адміністратор</p>
                </div>

                <!-- Team Member 4 --> 
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-4.jpg') }}" alt="Оксана Вітошинська" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Оксана<br/>Вітошинська</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Кейс-менеджерка</p>
                </div>

                <!-- Team Member 5 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-5.jpg') }}" alt="Діана Черняк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Діана<br/>Черняк</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Кейс-менеджерка</p>
                </div>

                <!-- Team Member 6 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-6.jpg') }}" alt="Володимир Захарчук" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Володимир<br/>Захарчук</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Фахівець супроводу ветеранів війни та демобілізованих осіб</p>
                </div>

                <!-- Team Member 7 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-7.jpg') }}" alt="Марина Чорна" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Марина<br/>Чорна</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Фахівчиня супроводу ветеранів війни та демобілізованих осіб</p>
                </div>

                <!-- Team Member 8 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-8.jpg') }}" alt="Дмитро Шуляк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Дмитро<br/>Шуляк</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Фахівець супроводу ветеранів війни та демобілізованих осіб</p>
                </div>

                <!-- Team Member 9 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-9.jpg') }}" alt="Анатолій Яворський" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Анатолій<br/>Яворський</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Завідуючий<br/>господарською<br/>діяльністю</p>
                </div>

                <!-- Team Member 10 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-10.jpg') }}" alt="Надія Захарчук" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Надія<br/>Захарчук</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Бухгалтерка</p>
                </div>

                <!-- Team Member 11 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-11.jpg') }}" alt="Вікторія Ковальова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Вікторія<br/>Ковальова</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Діловод</p>
                </div>
            </div>
        </div>

        <!-- Partnership Section -->
        <div class="ml-[325px] mb-[100px]">
            <h2 class="text-[80px] font-extrabold text-black uppercase leading-[1.02] mb-[100px]">
                Партнерська<br/>
                Команда
            </h2>
        </div>
        
        <div class="max-w-[1200px] ml-[325px]">

            <div class="grid grid-cols-4 gap-[30px] gap-y-[76px] mb-[66px]">
                <!-- Partner 1 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-1.jpg') }}" alt="Леся Стебло" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Леся<br/>Стебло</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Психологиня, тренерка,<br/>експертка з ветеранських політик</p>
                </div>

                <!-- Partner 2 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-2.jpg') }}" alt="Людмила Бабенко" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Людмила<br/>Бабенко</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Адміністраторка</p>
                </div>

                <!-- Partner 3 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-3.jpg') }}" alt="Наталія Кошай" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Наталія<br/>Кошай</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Медійниця, тренерка</p>
                </div>

                <!-- Partner 4 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-4.jpg') }}" alt="Марина Лукашук" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Марина<br/>Лукашук</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 5 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-5.jpg') }}" alt="Наталія Чорна" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Наталія<br/>Чорна</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 6 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-6.jpg') }}" alt="Майя Чернова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Майя<br/>Чернова</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 7 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-7.jpg') }}" alt="Інга Москалюк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Інга<br/>Москалюк</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Дитяча психологиня</p>
                </div>

                <!-- Partner 8 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-8.jpg') }}" alt="Лілія Аршинова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Лілія<br/>Аршинова</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Арт-терапевтка</p>
                </div>

                <!-- Partner 9 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-9.jpg') }}" alt="Павло Слободянюк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Павло<br/>Слободянюк</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Юрист</p>
                </div>

                <!-- Partner 10 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-10.jpg') }}" alt="Наталія Дурдас" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Наталія<br/>Дурдас</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 11 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-11.jpg') }}" alt="Вікторія Детцель" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Вікторія<br/>Детцель</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Кінезіотерапевтка</p>
                </div>

                <!-- Partner 12 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-12.jpg') }}" alt="Олена Мельник" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Олена<br/>Мельник</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Медична консультантка</p>
                </div>

                <!-- Partner 13 -->
                <div>
                    <div class="w-[270px] h-[325px] mx-0 mb-[30px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-13.jpg') }}" alt="Юрій Горбатюк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] font-extrabold text-black leading-[1.25] mb-[35px] text-left">Юрій<br/>Горбатюк</h3>
                    <p class="text-[20px] font-normal text-black leading-[1.43] text-left">Медичний консультант</p>
                </div>
            </div>
        </div>
    </div>
<script>
function openDonationModal() {
    document.getElementById('donation-modal').classList.remove('hidden');
    document.getElementById('donation-modal').classList.add('flex');
}
</script>
@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection