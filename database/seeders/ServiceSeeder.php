<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'number' => '01',
                'title' => ['ua' => 'Супровід ветеранів', 'en' => 'Veteran Support'],
                'left_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Розробка індивідуального плану підтримки.</li>
                    <li>Допомога в оформленні пільг, соціальних виплат, житла.</li>
                    <li>Підтримка у випадках складних життєвих обставин.</li>
                    <li>Інформація про доступ до медичних послуг, реабілітаційних центрів.</li>
                    <li>Залучення ветеранів до соціально-культурних заходів.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Development of an individual support plan.</li>
                    <li>Assistance in processing benefits, social payments, and housing.</li>
                    <li>Support in difficult life circumstances.</li>
                    <li>Information on access to medical services and rehabilitation centers.</li>
                    <li>Involvement of veterans in socio-cultural events.</li>
                </ul>'
                ],
                'right_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Сприяння у створенні ветеранських спільнот.</li>
                    <li>Допомога родинам ветеранів.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Facilitating the creation of veteran communities.</li>
                    <li>Assistance to veteran families.</li>
                </ul>'
                ],
                'sort_order' => 1,
            ],
            [
                'number' => '02',
                'title' => ['ua' => 'Психологічна підтримка', 'en' => 'Psychological Support'],
                'left_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Індивідуальні психологічні консультації для дорослих.</li>
                    <li>Психоедукаційні групи для дорослих.</li>
                    <li>Групи підтримки, «кола своїх».</li>
                    <li>Індивідуальні психологічні консультації для дітей.</li>
                    <li>Психологічні групи для дітей.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Individual psychological consultations for adults.</li>
                    <li>Psychoeducational groups for adults.</li>
                    <li>Support groups, "circles of our own".</li>
                    <li>Individual psychological consultations for children.</li>
                    <li>Psychological groups for children.</li>
                </ul>'
                ],
                'right_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Арт-терапевтичні групи для дорослих та дітей.</li>
                    <li>Кризове консультування.</li>
                    <li>Психологічне консультування сімейних пар.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Art therapy groups for adults and children.</li>
                    <li>Crisis counseling.</li>
                    <li>Psychological counseling for couples.</li>
                </ul>'
                ],
                'sort_order' => 2,
            ],
            [
                'number' => '03',
                'title' => ['ua' => 'Юридичні консультації', 'en' => 'Legal Consultations'],
                'left_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Правова інформація, консультації та роз\'яснення з правових питань;</li>
                    <li>Допомога у складенні рапортів, заяв, скарг та інших документів правового характеру (крім документів процесуального характеру);</li>
                    <li>Проведення заходів правопросвітництва для підвищення правової освіти для відвідувачів Ветеранського простору на актуальні теми.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Legal information, consultations, and clarifications on legal issues;</li>
                    <li>Assistance in drafting reports, applications, complaints, and other legal documents (except procedural documents);</li>
                    <li>Conducting legal awareness events to improve legal literacy for Veteran Space visitors on relevant topics.</li>
                </ul>'
                ],
                'right_content' => null,
                'sort_order' => 3,
            ],
            [
                'number' => '04',
                'title' => ['ua' => 'Кар\'єрне консультування', 'en' => 'Career Counseling'],
                'left_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Допомога в реєстрації на освітні програми.</li>
                    <li>Сприяння у перекваліфікації або підвищенні кваліфікації.</li>
                    <li>Консультації щодо відкриття бізнесу.</li>
                    <li>Допомога у складанні бізнес-плану.</li>
                    <li>Інформація про програми підтримки підприємництва для ветеранів.</li>
                    <li>Складання та редагування резюме й мотиваційного листа з урахуванням специфіки ринку праці.</li>
                    <li>Консультації щодо заповнення заявок на вакансії.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Assistance with registration for educational programs.</li>
                    <li>Facilitating retraining or qualification upgrades.</li>
                    <li>Consultations on starting a business.</li>
                    <li>Assistance in drafting a business plan.</li>
                    <li>Information on entrepreneurship support programs for veterans.</li>
                    <li>Creating and editing resumes and cover letters taking into account labor market specifics.</li>
                    <li>Consultations on filling out job applications.</li>
                </ul>'
                ],
                'right_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Тренінги з підготовки до співбесіди.</li>
                    <li>Сприяння участі у державних або місцевих програмах підтримки ветеранів.</li>
                    <li>Допомога у використанні платформ для пошуку роботи.</li>
                    <li>Мотиваційна підтримка для розвитку кар\'єри.</li>
                    <li>Допомога в комунікації з роботодавцями, які готові наймати ветеранів.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Interview preparation trainings.</li>
                    <li>Facilitating participation in state or local veteran support programs.</li>
                    <li>Assistance in using job search platforms.</li>
                    <li>Motivational support for career development.</li>
                    <li>Assistance in communication with employers ready to hire veterans.</li>
                </ul>'
                ],
                'sort_order' => 4,
            ],
            [
                'number' => '05',
                'title' => ['ua' => 'Реабілітація', 'en' => 'Rehabilitation'],
                'left_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Оцінка фізичного стану</li>
                    <li>Кінезіотейпування та відновлення рухливості через м\'які мануальні техніки.</li>
                    <li>Розробка індивідуальних реабілітаційних програм.</li>
                    <li>Консультації з профілактики травм.</li>
                    <li>Рекомендації з фізичної активності для загального зміцнення організму.</li>
                    <li>Рекомендації з раціонального підходу до навантажень у повсякденному житті.</li>
                    <li>Консультації щодо зв\'язку між фізичним і психологічним станом.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Assessment of physical condition.</li>
                    <li>Kinesio taping and restoring mobility through soft manual techniques.</li>
                    <li>Development of individual rehabilitation programs.</li>
                    <li>Consultations on injury prevention.</li>
                    <li>Recommendations on physical activity for general strengthening of the body.</li>
                    <li>Recommendations on a rational approach to loads in daily life.</li>
                    <li>Consultations on the connection between physical and psychological state.</li>
                </ul>'
                ],
                'right_content' => [
                    'ua' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Проведення освітніх заходів для ветеранів та їхніх сімей з питань фізичної реабілітації.</li>
                    <li>Проведення тематичних занять щодо покращення фізичного стану організму.</li>
                    <li>Інструкції з використання ходунків, милиць, крісел колісних і т.д.</li>
                    <li>Проведення лекцій для ветеранів та їхніх родин з теми паліативного догляду.</li>
                </ul>',
                    'en' => '<ul class="list-disc ms-[30px] space-y-[10px]">
                    <li>Conducting educational events for veterans and their families on physical rehabilitation issues.</li>
                    <li>Conducting thematic sessions on improving the physical state of the body.</li>
                    <li>Instructions on using walkers, crutches, wheelchairs, etc.</li>
                    <li>Conducting lectures for veterans and their families on palliative care.</li>
                </ul>'
                ],
                'sort_order' => 5,
            ],
            [
                'number' => '06',
                'title' => ['ua' => 'Робота в громадах', 'en' => 'Community Work'],
                'left_content' => [
                    'ua' => '<p class="mb-[20px]">
                    Ветеранський простір активно працює в громадах, забезпечуючи підтримку ветеранам та їхнім родинам у найвіддаленіших куточках області. Одним з ключових напрямків є виїзди мобільної бригади спеціалістів, які надають юридичні консультації, психологічну підтримку та допомогу у вирішенні нагальних питань.
                </p>
                <p>
                    Ми також активно займаємося навчанням команд, які працюють з ветеранською спільнотою, підвищуючи їх кваліфікацію та забезпечуючи ефективну взаємодію з ветеранами та їх родинами. Важливим елементом роботи є менторство громад щодо створення та розвитку власних ветеранських просторів, щоб кожна громада могла забезпечити належну підтримку своїм захисникам.
                </p>',
                    'en' => '<p class="mb-[20px]">
                    The Veteran Space actively works in communities, providing support to veterans and their families in the most remote corners of the region. One of the key directions is mobile team visits providing legal consultations, psychological support, and assistance in resolving urgent issues.
                </p>
                <p>
                    We also actively engage in training teams working with the veteran community, improving their qualifications and ensuring effective interaction with veterans and their families. An important element of work is mentoring communities on creating and developing their own veteran spaces so that every community can provide proper support to its defenders.
                </p>'
                ],
                'right_content' => [
                    'ua' => '<p>
                    Крім того, Ветеранський простір активно підтримує розвиток місцевих ветеранських програм та ініціатив, сприяючи їх впровадженню та ефективному функціонуванню. Ми прагнемо створити мережу, де кожен ветеран має можливість отримати допомогу, а громада — ресурси для підтримки та розвитку.
                </p>',
                    'en' => '<p>
                    In addition, the Veteran Space actively supports the development of local veteran programs and initiatives, facilitating their implementation and effective functioning. We strive to create a network where every veteran has the opportunity to receive help, and the community has resources for support and development.
                </p>'
                ],
                'sort_order' => 6,
            ],
            [
                'number' => '07',
                'title' => ['ua' => 'Тренінговий центр', 'en' => 'Training Center'],
                'left_content' => [
                    'ua' => '<p class="mb-[20px]">
                    Тренінговий центр Ветеранського простору є важливою частиною нашої діяльності, спрямованої на просвітництво та інтеграцію ветеранської спільноти у громади.
                </p>
                <p class="mb-[20px]">
                    Ми займаємося навчанням і підвищенням кваліфікації спеціалістів, які працюють з військовими та ветеранами, щоб забезпечити ефективну взаємодію та допомогу.
                </p>
                <p>
                    Центр також активно працює з родинами військовослужбовців та ветеранів, організовуючи тренінги та семінари, які допомагають розв\'язувати соціальні та психологічні питання, що виникають у зв\'язку з військовим досвідом.
                </p>',
                    'en' => '<p class="mb-[20px]">
                    The Veteran Space Training Center is an important part of our activities aimed at education and integration of the veteran community into society.
                </p>
                <p class="mb-[20px]">
                    We engage in training and professional development of specialists working with military personnel and veterans to ensure effective interaction and assistance.
                </p>
                <p>
                    The Center also actively works with families of military personnel and veterans, organizing trainings and seminars that help resolve social and psychological issues arising from military experience.
                </p>'
                ],
                'right_content' => [
                    'ua' => '<p>
                    Крім того, ми проводимо різноманітні групові заняття для широких верств населення, де ознайомлюємо з ветеранськими політиками та специфікою потреб цієї категорії. Це сприяє кращій комунікації між цивільним населенням та ветеранами, допомагаючи створювати атмосферу розуміння та підтримки в громадах. Ми прагнемо, щоб кожен мав можливість отримати знання про ветеранські ініціативи, що, в свою чергу, сприяє побудові гармонійних відносин між різними соціальними групами.
                </p>',
                    'en' => '<p>
                    In addition, we conduct various group sessions for the general public, where we introduce veteran policies and the specifics of this category\'s needs. This contributes to better communication between the civilian population and veterans, helping to create an atmosphere of understanding and support in communities. We strive for everyone to have the opportunity to gain knowledge about veteran initiatives, which in turn contributes to building harmonious relationships between different social groups.
                </p>'
                ],
                'sort_order' => 7,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['number' => $service['number']],
                $service
            );
        }
    }
}
