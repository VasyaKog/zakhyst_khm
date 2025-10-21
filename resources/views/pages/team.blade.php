@extends('layouts.web')

@section('title', 'Команда - ВЕТЕРАНСЬКИЙ ПРОСТІР')

@section('content')
<div class="bg-white">
    <!-- Main Team Section -->
    <div class="pt-[120px] pb-[100px]">
        <!-- Main Title -->
        <div class="ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px] mb-[119px] lg:mb-[119px] md:mb-[80px] sm:mb-[60px]">
            <h1 class="text-[80px] lg:text-[80px] md:text-[60px] sm:text-[48px] font-extrabold text-black uppercase leading-[1.02] mb-[77px] lg:mb-[77px] md:mb-[50px] sm:mb-[40px]">
                Команда<br/>
                ветеранського<br/>
                простору
            </h1>
            <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black text-justify max-w-[869px] lg:max-w-[869px] md:max-w-[700px] sm:max-w-[500px] leading-[1.43]">
                Знайомся!<br/>
                Це команда веретанського простору та партнерська команда, що допомагає втілити задумані нами ідеї.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="max-w-[1200px] lg:max-w-[1200px] md:max-w-[900px] sm:max-w-[600px] ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px]">
            <div class="grid grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-[22px] lg:gap-[22px] md:gap-[20px] sm:gap-[15px] gap-y-[76px] lg:gap-y-[76px] md:gap-y-[60px] sm:gap-y-[40px] mb-[195px] lg:mb-[195px] md:mb-[120px] sm:mb-[80px]">
                <!-- Team Member 1 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-1.jpg') }}" alt="Катерина Луцик" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Катерина<br/>Луцик</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Директор</p>
                </div>

                <!-- Team Member 2 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-2.jpg') }}" alt="Анастасія Ярова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Анастасія<br/>Ярова</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Заступник директора</p>
                </div>

                <!-- Team Member 3 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-3.jpg') }}" alt="Ольга Свіжа" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Ольга<br/>Свіжа</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Адміністратор</p>
                </div>

                <!-- Team Member 4 --> 
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-4.jpg') }}" alt="Оксана Вітошинська" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Оксана<br/>Вітошинська</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Кейс-менеджерка</p>
                </div>

                <!-- Team Member 5 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-5.jpg') }}" alt="Діана Черняк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Діана<br/>Черняк</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Кейс-менеджерка</p>
                </div>

                <!-- Team Member 6 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-6.jpg') }}" alt="Володимир Захарчук" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Володимир<br/>Захарчук</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Фахівець супроводу ветеранів війни та демобілізованих осіб</p>
                </div>

                <!-- Team Member 7 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-7.jpg') }}" alt="Марина Чорна" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Марина<br/>Чорна</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Фахівчиня супроводу ветеранів війни та демобілізованих осіб</p>
                </div>

                <!-- Team Member 8 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-8.jpg') }}" alt="Дмитро Шуляк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Дмитро<br/>Шуляк</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Фахівець супроводу ветеранів війни та демобілізованих осіб</p>
                </div>

                <!-- Team Member 9 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-9.jpg') }}" alt="Анатолій Яворський" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Анатолій<br/>Яворський</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Завідуючий<br/>господарською<br/>діяльністю</p>
                </div>

                <!-- Team Member 10 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-10.jpg') }}" alt="Надія Захарчук" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Надія<br/>Захарчук</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Бухгалтерка</p>
                </div>

                <!-- Team Member 11 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/team-11.jpg') }}" alt="Вікторія Ковальова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Вікторія<br/>Ковальова</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Діловод</p>
                </div>
            </div>
        </div>

        <!-- Partnership Section -->
        <div class="ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px] mb-[100px] lg:mb-[100px] md:mb-[80px] sm:mb-[60px]">
            <h2 class="text-[80px] lg:text-[80px] md:text-[60px] sm:text-[48px] font-extrabold text-black uppercase leading-[1.02] mb-[100px] lg:mb-[100px] md:mb-[70px] sm:mb-[50px]">
                Партнерська<br/>
                Команда
            </h2>
        </div>
        
        <div class="max-w-[1200px] lg:max-w-[1200px] md:max-w-[900px] sm:max-w-[600px] ml-[325px] lg:ml-[325px] md:ml-[200px] sm:ml-[50px]">

            <div class="grid grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-[30px] lg:gap-[30px] md:gap-[20px] sm:gap-[15px] gap-y-[76px] lg:gap-y-[76px] md:gap-y-[60px] sm:gap-y-[40px] mb-[66px] lg:mb-[66px] md:mb-[50px] sm:mb-[40px]">
                <!-- Partner 1 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-1.jpg') }}" alt="Леся Стебло" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Леся<br/>Стебло</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Психологиня, тренерка,<br/>експертка з ветеранських політик</p>
                </div>

                <!-- Partner 2 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-2.jpg') }}" alt="Людмила Бабенко" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Людмила<br/>Бабенко</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Адміністраторка</p>
                </div>

                <!-- Partner 3 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-3.jpg') }}" alt="Наталія Кошай" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Наталія<br/>Кошай</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Медійниця, тренерка</p>
                </div>

                <!-- Partner 4 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-4.jpg') }}" alt="Марина Лукашук" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Марина<br/>Лукашук</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 5 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-5.jpg') }}" alt="Наталія Чорна" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Наталія<br/>Чорна</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 6 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-6.jpg') }}" alt="Майя Чернова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Майя<br/>Чернова</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 7 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-7.jpg') }}" alt="Інга Москалюк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Інга<br/>Москалюк</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Дитяча психологиня</p>
                </div>

                <!-- Partner 8 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-8.jpg') }}" alt="Лілія Аршинова" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Лілія<br/>Аршинова</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Арт-терапевтка</p>
                </div>

                <!-- Partner 9 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-9.jpg') }}" alt="Павло Слободянюк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Павло<br/>Слободянюк</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Юрист</p>
                </div>

                <!-- Partner 10 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-10.jpg') }}" alt="Наталія Дурдас" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Наталія<br/>Дурдас</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Психологиня</p>
                </div>

                <!-- Partner 11 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-11.jpg') }}" alt="Вікторія Детцель" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Вікторія<br/>Детцель</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Кінезіотерапевтка</p>
                </div>

                <!-- Partner 12 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-12.jpg') }}" alt="Олена Мельник" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Олена<br/>Мельник</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Медична консультантка</p>
                </div>

                <!-- Partner 13 -->
                <div class="w-full max-w-[270px] mx-auto">
                    <div class="w-full h-[325px] lg:h-[325px] md:h-[280px] sm:h-[250px] mx-0 mb-[30px] lg:mb-[30px] md:mb-[25px] sm:mb-[20px] rounded-[20px] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/team/partner-13.jpg') }}" alt="Юрій Горбатюк" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-[32px] lg:text-[32px] md:text-[28px] sm:text-[24px] font-extrabold text-black leading-[1.25] mb-[35px] lg:mb-[35px] md:mb-[25px] sm:mb-[20px] text-left">Юрій<br/>Горбатюк</h3>
                    <p class="text-[20px] lg:text-[20px] md:text-[18px] sm:text-[16px] font-normal text-black leading-[1.43] text-left">Медичний консультант</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="text-center py-16">
        <button onclick="openContactModal()" class="bg-veteran-blue hover:bg-blue-700 text-white text-xl font-bold px-12 py-4 rounded-full transition-colors duration-300">
            ЗВ'ЯЗАТИСЯ З НАМИ
        </button>
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

@include('components.contact-modal')