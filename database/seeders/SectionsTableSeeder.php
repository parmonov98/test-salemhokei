<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'alias' => '1-detsko-yunosheskaya-sportivnaya-shkola-barys',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: KZ;">&laquo;Барыс&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: KZ;">Мұз </span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">алаңы</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: KZ;">: &laquo;Барыс-Арена&raquo; МА</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: KZ;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Нұр-Сұлтан қ., Тұран даңғылы, 57</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: KZ;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7172-613-523</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Электрондық мекенжайы:</strong> <a href="mailto:Barys_school@mail.ru"><span style="font-size: 11.0pt; line-height: 107%; color: windowtext; text-decoration: none; text-underline: none;">Barys_school@mail.ru</span></a></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Басшы:</strong> Нурмухамедов Руслан Болатович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Детско-юношеская спортивная школа "Барыс"<br /><strong>Хоккейная команда:</strong> Барыс<br /><strong>Руководитель:</strong> Нурмухамедов Руслан Болатович<br /><strong>Адрес:</strong> г. Нур-Султан, пр. Туран 57<br /><strong>Телефон:</strong> +7-7172-613523<br /><strong>E-mail:</strong> barys_school@mail.ru</p>',
                'avatar' => '/images/1594354624.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:00:37',
                'description_en' => NULL,
                'description_kk' => '<p><span style="font-size: 12pt;"><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы</strong>: </span><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif;">&laquo;Барыс&raquo; балалар мен жасөспірімдерге арналған спорт мектебі 2011 жылы құрылған, бастапқы даму кезеңінде мектепте жастық топтарға қарай 6 команда құрылды. 2017 жылы мектеп 1999 жылы туған жас хоккей ойыншыларды, алғашқы түлектерін шығарды. &laquo;Барыс&raquo; балалар мен жасөспірімдерге арналған спорт мектебінің командалары балалар және жасөспірімдер командаларының арасында Қазақстан Республикасының Чемпионатына және Ресей Федерациясының біріншілігіне қатысады, сондай-ақ ресми халықаралық чемпионаттарға және турнирлерге қатысады. Қазіргі таңда хоккей мектебінде 13 жас топтарында 700-ге жуық спортсмендер оқиды. Әр түрлі жастық топтарға жататын командалар республикалық және халықаралық жарыстардың жеңімпаздары және жүлдегерлері болып табылады.&nbsp; &nbsp;</span></span></p>',
                'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;"> Детско-юношеская спортивная школа &laquo;Барыс&raquo; была основана 2011 году, на начальном этапе развития в школе было создано 6 команд своих возрастных групп. В 2017 году школа осуществила первый выпуск молодых хоккеистов &ndash; игроков команды 1999 г.р. Команды детско-юношеской спортивной школы &laquo;Барыс&raquo; выступают в Чемпионате Республики Казахстан</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> среди детско-юношеских команд<span style="mso-bidi-font-weight: bold;"> и Первенстве Российской Федерации, а также на официальных международных чемпионатах и турнирах. На сегодня в хоккейной школе занимаются около 700 спортсменов в 13 возрастных группах. Команды разных возрастных групп являются неоднократными победителями и призерами республиканских и международных соревнований</span></span></p>',
                'id' => 1,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Нұр-Сұлтан қ. «Барыс» балалар мен жасөспірімдерге арналған спорт мектебі',
                'name_ru' => 'Детско-юношеская спортивная школа «Барыс»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 04:30:48',
            ),
            1 => 
            array (
                'alias' => '2-kgu-spetsializirovannaya-detsko-yunosheskaya-sportivnaya-shkola-10-po-khokkeyu-s-shayboy-akimata-gnur-sultan',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span style="font-family: \'Times New Roman\', serif; font-size: 12pt;">&laquo;АSTANA&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> &laquo;Барыс&raquo; СК</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Нұр-Сұлтан қ., Қажымұқан көшесі, 9</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7172 578-453</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Электрондық мекенжайы: </span></strong><a href="mailto:school-hockey-10@mail.ru"><span style="font-size: 12.0pt; line-height: 107%; color: black;">school-hockey-10@mail.ru</span></a></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;Китаров Талгат Булатович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> КГУ &laquo;Специализированная детско-юношеская спортивная школа №10 по хоккею с шайбой&raquo; <br /><strong>Хоккейная команда:</strong> Астана<br /><strong>Руководитель:</strong> Китаров Талгат Булатович<br /><strong>Адрес:</strong> г.Нур-Султан, ул. Кажымукана 9<br /><strong>Телефон:</strong> +7-7172-578453 <br /><strong>E-mail:</strong> school-hockey-10@mail.ru</p>',
                'avatar' => '/images/1594354613.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:01:57',
                'description_en' => NULL,
                'description_kk' => '<p><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы: </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: KZ; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">&laquo;№10 шайбалы хоккей бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі 2002 жылдың қаңтарында құрылды. </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">2014-2015 ж.ж., 2015-2016 ж.ж., 2018-2019 ж.ж. 3 маусымның қорытындылары бойынша мектеп Қазақстан Республикасында шайбалы хоккей бойынша үздік мектеп атағына үш рет ие болды. Спорт мектебінде 49 жастық топтардан 680 тәрбиеленушілер оқиды. Тәрбиеленушілер Қазақстан Республикасының Чемпионаты, Ресей Федерациясының біріншілігі, Қазақстанның Жастардың хоккей лигасы сияқты ресми спорт жарыстарына қатысады.</span></p>',
                'description_ru' => '<p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify;"><strong><span style="font-size: 10pt; font-family: Arial, sans-serif;">История:</span></strong><span style="font-size: 10pt; font-family: Arial, sans-serif;"> Специализированная детско-юношеская спортивная школа №10 по хоккею с шайбой была образована в январе 2002 года. По результатам 3-х сезонов 2014-2015гг., 2015-2016гг., 2018-2019 гг. школа признана трижды лучшая школа в Республике Казахстан по хоккею с шайбой.</span></p>
<p><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;">В спортивной школе занимаются: 680 воспитанников</span><span lang="KZ" style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: KZ; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;"> из 49 возрастных групп</span><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;">, Воспитанники школы принимают участие в официальных спортивных соревнованиях, таких как: Чемпионат Республики Казахстан, Первенство Российской Федерации, Молодежная хоккейная Лига Казахстана</span></p>',
                'id' => 2,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Нұр-Сұлтан қ. әкімдігінің «№10 шайбалы хоккей бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі» КММ',
                'name_ru' => 'КГУ «Специализированная детско-юношеская спортивная школа №10 по хоккею с шайбой» акимата г.Нур-Султан',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:59:44',
            ),
            2 => 
            array (
                'alias' => '3-of-detskaya-khokkeynaya-shkola-hockey-planet',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span style="font-size: 12pt;"><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;">&laquo;NOMAD&raquo;</span><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;"> хоккей командасы</span></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black;"><strong>Мұз алаңы:</strong> &laquo;НОМАД&raquo; СК</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Нұр-Сұлтан қ., Мичурино а., Бастау көшесі, 1/1</span></p>
<p class="MsoNormal" style="background: white;"><span style="font-size: 12pt;"><strong><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;">Байланыс телефоны: </span></strong><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;">+7 7172 494-923, +7 775 000-08-29</span></span></p>
<p class="MsoNormal" style="background: white;"><span style="font-size: 12pt;"><strong><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;">Электрон</span><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;">дық мекенжайы</span></strong><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: black;"><strong>:</strong>&nbsp;</span><a href="mailto:viacheslav8222@gmail.com"><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: windowtext; text-decoration: none;">viacheslav8222@gmail.com</span></a></span></p>
<p class="MsoNormal" style="background: white;"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif; color: black;"><strong>Басшы:</strong>&nbsp;Борисов Вячеслав Андреевич</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ОФ &laquo;Детская хоккейная школа &laquo;HOCKEY PLANET&raquo;<br /><strong>Хоккейная команда:</strong> Brigantina<br /><strong>Руководитель:</strong> Борисов Вячеслав Андреевич<br /><strong>Адрес:</strong> г. Нур-Султан, п. Мичурино, ул. Бастау 1/1<br /><strong>Телефон:</strong> +7-7172-494923, +7-775-000-0829 <br /><strong>E-mail:</strong> viacheslav8222@gmail.com </p>',
                'avatar' => '/images/1594354605.jpeg',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:03:37',
                'description_en' => NULL,
            'description_kk' => '<p style="text-align: justify;"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы</strong>: &laquo;Hockey&nbsp;Planet&raquo; балаларға арналған хоккей мектебі 2016 жылы құрылды, мектепте 10 жастық топтардан 110 спортшылар оқиды (2006-2015 ж.т.). &laquo;NOMAD&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp; &nbsp;</span></p>',
            'description_ru' => '<p class="MsoNormalCxSpMiddle" style="text-align: justify; line-height: normal;"><span style="font-size: 10pt;"><strong style="mso-bidi-font-weight: normal;"><span style="font-family: Arial, sans-serif;">История:</span></strong><span style="font-family: Arial, sans-serif;"> Детская хоккейная школа <span style="mso-bidi-font-weight: bold;">&laquo;</span></span><span lang="EN-US" style="font-family: Arial, sans-serif;">Hockey</span> <span lang="EN-US" style="font-family: Arial, sans-serif;">Planet</span><span style="font-family: Arial, sans-serif;">&raquo; основана в 2016 году</span><strong style="mso-bidi-font-weight: normal;"><span style="font-family: Arial, sans-serif;">, </span></strong><span style="font-family: Arial, sans-serif;">количество занимающихся воспитанников 110 спортсменов из 10 возрастных групп (2006-2015г.р.). </span><span style="font-family: Arial, sans-serif;">Команда &laquo;</span><span lang="EN-US" style="font-family: Arial, sans-serif;">NOMAD</span><span style="font-family: Arial, sans-serif;">&raquo; принимает</span><span style="font-family: Arial, sans-serif;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></span></p>',
                'id' => 3,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«HOCKEY PLANET» балаларға арналған хоккей мектебі» ҚҚ',
                'name_ru' => 'ОФ «Детская хоккейная школа «HOCKEY PLANET»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:58:16',
            ),
            3 => 
            array (
                'alias' => '4-chu-shkola-khokkeynogo-masterstva-brigantina',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;BRIGANTINA&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> &laquo;Қазақстан&raquo; СС</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Нұр-Сұлтан қ., Қажымұқан көшесі, 7</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 747&nbsp;135-94-94,&nbsp;+7 702&nbsp;466-48-12&nbsp;&nbsp;</span></p>
<p class="MsoNormal" style="text-align: justify;"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Электрондық мекенжайы:</strong> </span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">brigantina@mail.ru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:&nbsp;Баубеков Асхат Нурланович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ЧУ &laquo;Школа хоккейного мастерства &laquo;BRIGANTINA&raquo;<br /><strong>Хоккейная команда:</strong> Brigantina<br /><strong>Руководитель:</strong> Баубеков Асхат Нурланович<br /><strong>Адрес:</strong> г. Нур-Султан, ул. Кажымукана 7<br /><strong>Телефон:</strong> +7-747-1359494, +7-702-4664812<br /><strong>E-mail:</strong> brigantina@mail.ru </p>',
                'avatar' => '/images/1594354597.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:04:38',
                'description_en' => NULL,
            'description_kk' => '<p style="text-align: justify;"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> Жеке хоккей мектебі 2016 жылы құрылды, мектепте 5 жастық топтардан 60-тан астам спортшылар оқиды (2008-2012 ж.т.). &laquo;BRIGANTINA&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>',
            'description_ru' => '<p class="MsoNormalCxSpMiddle" style="text-align: justify; line-height: normal;"><strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Частная хоккейная школа основана в 2016 года, количество занимающихся составляет более 60 спортсменов по 5 возрастным группам (2008-2012г.р.) Команда &laquo;</span><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: EN-US;">BRIGANTINA</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>',
                'id' => 4,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«BRIGANTINA» хоккей шеберлігінің мектебі» ЖМ',
                'name_ru' => 'ЧУ «Школа хоккейного мастерства «BRIGANTINA»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:56:54',
            ),
            4 => 
            array (
                'alias' => '5-detskiy-khokkeynyy-klub-dinamo-almaty',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;ДИНАМО&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы</strong><span style="mso-bidi-font-weight: bold;"><strong>:</strong> &laquo;Халық Арена&raquo;</span></span></p>
<p class="MsoNormal" style="text-align: justify;"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Алматы қ., Кульжин жолы 2Д, кеңсе </span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">№198</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"> телефон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">ы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;+7&nbsp;747&nbsp;915-00-87</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электро</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">ндық мекенжайы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;</span><a href="mailto:hcdinamo01@gmail.com"><span style="font-size: 12.0pt; line-height: 107%; color: black;">hcdinamo01@gmail.com</span></a></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;Богайчук Иван Юрьевич</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Детский хоккейный клуб &laquo;ДИНАМО АЛМАТЫ&raquo; <br /><strong>Хоккейная команда:</strong> Динамо<br /><strong>Руководитель:</strong> Богайчук Иван Юрьевич<br /><strong>Адрес:</strong> г. Алматы, Кульжинский тракт 2Д<br /><strong>Телефон:</strong> +7-747-915-0087 <br /><strong>E-mail:</strong> hcdinamo01@gmail.com </p>',
                'avatar' => '/images/1594354589.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:05:48',
                'description_en' => NULL,
            'description_kk' => '<p style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы: </span></strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">&laquo;ДИНАМО АЛМАТЫ&raquo; балаларға арналған хоккей клубы 2019 жылы құрылды, мектепте 6 жастық топтардан 220-ден астам спортшылар оқиды (2015-2010 ж.т.). &laquo;ДИНАМО&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>',
            'description_ru' => '<p class="MsoNormalCxSpMiddle" style="text-align: justify; line-height: normal;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Детский хоккейный клуб &laquo;ДИНАМО АЛМАТЫ&raquo; было основано </span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-language: RU; mso-no-proof: yes;">2019 года</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">, численность занимающихся составляет более 220 спортсменов по 6 возрастным группам (2015-2010г.р.). Команда &laquo;ДИНАМО&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>',
                'id' => 5,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«ДИНАМО АЛМАТЫ» балаларға арналған хоккей клубы',
                'name_ru' => 'Детский хоккейный клуб «ДИНАМО АЛМАТЫ»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:54:34',
            ),
            5 => 
            array (
                'alias' => '6-khokkeynyy-klub-medvedi',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;МЕДВЕДИ&raquo; хоккей клубы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы</strong><span style="mso-bidi-font-weight: bold;"><strong>:</strong> &laquo;Халық Арена&raquo;</span></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Алматы қ., Кульжин жолы 2а</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 777 681-00-12&nbsp;</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong> medvedi.hk@mail.ru; shtur10@mail.ru</span></p>
<p class="MsoNormal"><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%;">Басшы</span></strong><span style="font-size: 12pt; line-height: 107%;"><strong>:</strong>&nbsp; Штельмайстер Роман Брониславович</span></span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Хоккейный клуб&laquo;МЕДВЕДИ&raquo;<br /><strong>Хоккейная команда:</strong> Медведи<br /><strong>Руководитель:</strong> Штельмайстер Роман Брониславович<br /><strong>Адрес:</strong> г. Алматы, ул. Радлова 65<br /><strong>Телефон:</strong> +7-777-681-0012 <br /><strong>E-mail:</strong> medvedi.hk@mail.ru; shtur10@mail.ru </p>',
                'avatar' => '/images/1594354582.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:06:54',
                'description_en' => NULL,
            'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> Хоккей клубы 2014 жылы құрылды, оқушылардың саны &ndash; 12 жастық топтардан 300 спортшы (2006-2015 ж.т.). &laquo;МЕДВЕДИ&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>',
            'description_ru' => '<p>История: Хоккейный клуб основан в 2014 году, количество занимающихся 300 спортсменов по 12 возрастным группам (2006-2015г.р.)&nbsp;</p>
<p>Команда &laquo;МЕДВЕДИ&raquo; принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд&nbsp; &nbsp; &nbsp;</p>
<p>&nbsp;</p>',
                'id' => 6,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«МЕДВЕДИ» хоккей клубы',
                'name_ru' => 'Хоккейный клуб «МЕДВЕДИ»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:52:45',
            ),
            6 => 
            array (
                'alias' => '7-detskiy-khokkeynyy-klub-strizhi',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;Стрижи&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы</strong><span style="mso-bidi-font-weight: bold;"><strong>:</strong> Балуан Шолақ атындағы СС</span></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Алматы қ., Абай даңғылы, 44</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 705 660-21-23</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong> i.m.uteyev@mail.ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong> Утеев Инар Мамырбекович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ТОО &laquo;Спорт Клуб Аспан&raquo;<br /><strong>Хоккейная команда:</strong> Стрижи<br /><strong>Руководитель:</strong> Утеев Инар Мамырбекович<br /><strong>Адрес:</strong> г. Алматы, пр. Абая 44<br /><strong>Телефон:</strong> +7-705-660-2123<br /><strong>E-mail:</strong> i.m.uteyev@mail.ru, info@aspanhocкey.kz </p>',
                'avatar' => '/images/1594354565.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:10:02',
                'description_en' => NULL,
            'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> &laquo;Стрижи&raquo; балаларға арналған хоккей клубы 2015 жылы құрылған, оқушылар саны &ndash; 10 жастық топтардан 228 спортшы (2006-2015 ж.т.). &laquo;СТРИЖИ&raquo; командасы </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады. Команданың үздік жетістіктері: Қазақстан Республикасының чемпионы (2017-2018 ж.ж. маусымында &laquo;А&raquo; тобында 2007 ж.т. жастық топ арасында). Қазақстан Республикасы Чемпионатының екі мәрте күміс жүлдегері (2016-2017 ж.ж. және 2018-2019 ж.ж. маусымында &laquo;А&raquo; тобында 2007 ж.т. жастық топ арасында). &nbsp;</span></p>',
            'description_ru' => '<p>История: Детский хоккейный клуб &laquo;Стрижи&raquo; основано в 2015 году, количество занимающихся составляет 228 спортсменов в 10 возрастных группах (2006-2015г.р.) Команда &laquo;СТРИЖИ&raquo; принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд. Лучшие достижения команды: Чемпион Республики Казахстан (сезон 2017-2018гг., среди возрастной группы 2007г.р. группе &laquo;А&raquo;). Двухкратный серебренные призёр Чемпионата Республики Казахстан (сезон 2016-2017гг. и 2018-2019гг. среди возрастной группы 2007г.р. группа &laquo;А&raquo;)&nbsp; &nbsp;&nbsp;</p>
<p>&nbsp;</p>',
                'id' => 7,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«Стрижи» балаларға арналған хоккей клубы',
                'name_ru' => 'Детский хоккейный клуб «Стрижи»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:49:03',
            ),
            7 => 
            array (
                'alias' => '8-khokkeynyy-klub-rahimzhan',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;RAHIMZHAN&raquo; хоккей клубы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы<span style="mso-bidi-font-weight: bold;">: </span></strong>&laquo;Hockey World&raquo;</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Алматы қ., Абай даңғылы, 216</span></p>
<p class="MsoNormal" style="background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс </span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">телефон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">ы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;+7 727&nbsp;272-72-32, + 7 727&nbsp;327-77-07</span></p>
<p class="MsoNormal" style="background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;hockey.world@mail.ru,&nbsp;&nbsp;</span><a href="mailto:usmar@mail.ru"><span style="font-size: 12.0pt; line-height: 107%; color: black;">usmar@mail.ru</span></a></p>
<p class="MsoNormal" style="background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&laquo;Hockey World&raquo;</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"> ЖШС директоры</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong> Симоненко Оксана Николаевна</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Спорт директор</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">ы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;&laquo;Рахимжан&raquo;</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"> ХК</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"> Осинцев С.С.&nbsp;</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Хоккейный клуб &laquo;RAHIMZHAN&raquo;<br /><strong>Хоккейная команда:</strong> Рахимжан<br /><strong>Руководитель:</strong> Осинцев Сергей Сергеевич<br /><strong>Адрес:</strong> г.Алматы, пр. Абая 216<br /><strong>Телефон:</strong> +7-7272-727232, + 7-7273-277707 <br /><strong>E-mail:</strong> hockey.world@mail.ru, usmar@mail.ru </p>',
                'avatar' => '/images/1594354552.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:11:14',
                'description_en' => NULL,
                'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> &laquo;RAHIMZHAN&raquo; командасы </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады. &nbsp;&nbsp;</span></p>',
                'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><span style="mso-bookmark: _Hlk39581837;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong></span><span style="mso-bookmark: _Hlk39581837;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Команда &laquo;</span></span><span style="mso-bookmark: _Hlk39581837;"><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;">RAHIMZHAN</span></span><span style="mso-bookmark: _Hlk39581837;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span></span><span style="mso-bookmark: _Hlk39581837;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></span></p>',
                'id' => 8,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«RAHIMZHAN» хоккей клубы',
                'name_ru' => 'Хоккейный клуб «RAHIMZHAN»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:46:27',
            ),
            8 => 
            array (
                'alias' => '9-too-sport-klub-aspan-g-almaty',
                'annotation_en' => NULL,
                'annotation_kk' => NULL,
                'annotation_ru' => NULL,
                'avatar' => '/images/1594354544.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:12:06',
                'description_en' => NULL,
                'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Спорт клубының базасында &laquo;Стрижи&raquo; балаларға арналған хоккей клубы жұмыс істейді.</span></p>
<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><a style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;" href="mailto:info@aspanhoc%D0%BAey.kz"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; color: blue; mso-fareast-language: RU;">info@aspanhocкey.kz</span></a><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;"><br /></span><a style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;" href="http://www.xn--aspanhocey-cui.kz/"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;">www.aspanhocкey.kz</span></a></span></p>',
                'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;">На базе спортивного клуба функционирует</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;">Детский Хоккейный Клуб &laquo;Стрижи&raquo;</span></strong></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><a href="mailto:info@aspanhoc%D0%BAey.kz"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; color: blue; mso-fareast-language: RU;">info@aspanhocкey.kz</span></a><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;"><br /></span><a href="http://www.xn--aspanhocey-cui.kz/"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;">www.aspanhocкey.kz</span></a></p>',
                'id' => 9,
                'is_published' => 0,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«Аспан Спорт Клубы» ЖШС Алматы қ.',
                'name_ru' => 'ТОО «Спорт Клуб Аспан» г. Алматы',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:31:24',
            ),
            9 => 
            array (
                'alias' => '10-akademiya-khokkeya-arlan-imeni-aygaybekova-rb',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;АRLAN&raquo; хоккей клубы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы</strong><span style="mso-bidi-font-weight: bold;"><strong>:</strong> &laquo;Бурабай&raquo; СС</span></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Ақмола облысы, Көкшетау қ., Әуелбеков көшесі, 70</span></p>
<p class="MsoNormal" style="margin-right: -18.25pt; text-align: justify; background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7&nbsp;776&nbsp;049-17-17</span></p>
<p class="MsoNormal" style="margin-right: -18.25pt; text-align: justify; background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;akademiasyhokeiarlan@mail.ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong>&nbsp;&nbsp;Севастьянова Марина Сергеевна</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Академия хоккея &laquo;АRLAN&raquo; имени Айгайбекова Р.Б.<br /><strong>Хоккейная команда:</strong> Арлан<br /><strong>Руководитель:</strong> Севастьянова Марина Сергеевна<br /><strong>Адрес:</strong> г. Кокшетау, ул. Ауельбекова 70<br /><strong>Телефон:</strong> +7-776-049-1717<br /><strong>E-mail:</strong> akademiasyhokeiarlan@mail.ru</p>',
                'avatar' => '/images/1594354534.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:13:32',
                'description_en' => NULL,
                'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> Айғайбеков Р.Б. атындағы &laquo;АRLAN&raquo; хоккей академиясы 2019 жылы негізделген. Оқушылар саны &ndash; 7 жастық топтардан 130 тәрбиеленушілер. &laquo;АRLAN&raquo; командасы 2003, 2005, 2006 ж.т. жастық топтарда Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp; &nbsp;</span></p>',
                'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;"> Академия хоккея &laquo;<a name="_Hlk39588929"></a>А</span><span style="mso-bookmark: _Hlk39588929;"><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;">RLAN</span></span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&raquo; имени Айгайбекова Р.Б основана в 2019 году, в Академии занимаются 130 воспитанников по 7 возрастным группам. </span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">Команда &laquo;</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;">А</span><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;">RLAN</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд в возрастных группах 2003г.р., 2005г.р., 2006г.р.</span><span style="font-size: 9.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>',
                'id' => 10,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Айғайбеков Р.Б. атындағы «АRLAN» хоккей академиясы',
                'name_ru' => 'Академия хоккея «АRLAN» имени Айгайбекова Р.Б.',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:30:48',
            ),
            10 => 
            array (
                'alias' => '11-vostochno-kazakhstanskaya-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-shkola-olimpiyskogo-rezerva-torpedo-g-ust-kamenogorsk',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;TORPEDO&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> &laquo;Олимпиада чемпионы Борис Александров атындағы спорт сарайы&raquo; </span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Шығыс Қазақстан облысы, Өскемен қ., Абай даңғылы, 2</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7232 767-922, +7&nbsp;777 281-29-17&nbsp;&nbsp;</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><a href="mailto:uk_sport@mail.ru"><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">uk</span><span style="font-size: 12.0pt; line-height: 107%;">_</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">sport</span><span style="font-size: 12.0pt; line-height: 107%;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">mail</span><span style="font-size: 12.0pt; line-height: 107%;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">ru</span></a><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Шёлков Станислав Сергеевич</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Восточно-Казахстанская областная специализированная детско-юношеская школа олимпийского резерва &laquo;TORPEDO&raquo; <br /><strong>Хоккейная команда:</strong> Торпедо <br /><strong>Руководитель:</strong> Шёлков Станислав Сергеевич<br /><strong>Адрес:</strong> г. Усть-Каменогорск, пр. Абая 2<br /><strong>Телефон:</strong> +7-7232-767922, +7-777-281-2917 <br /><strong>E-mail:</strong> uk_sport@mail.ru </p>',
                'avatar' => '/images/1594354526.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:14:50',
                'description_en' => NULL,
            'description_kk' => '<p style="text-align: justify;"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> &laquo;TORPEDO&raquo; Шығыс Қазақстан облыстық мамандандырылған балалар мен жасөспірімдерге арналған олимпиадалық қордың мектебі 1965 жылы құрылды. Тәрбиеленушілер саны &ndash; 650 астам бала, 29 жаттықтырушы, соның ішінде әйелдер бөлімшесі, 12 жастық топ (2015-2003 ж.т.). Хоккей мектебінің тәрбиеленушілері </span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: KZ; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">Қазақстан Республикасының Чемпионатына және Ресей Федерациясының біріншілігіне қатысады. Мектеп тәрбиеленушілері бірнеше рет республикалық және халықаралық жарыстардың жеңімпаздары мен жүлдегерлері болып атанды. Мектептің танымал тәрбиеленушілері 1976 ж. Инсбрук қ. (Австрия) Олимпиадасында КСРО құрама команданың құрамында Олимпиада чемпионы Борис Александров, КСРО құрамында Әлем чемпионы, КСРО еңбең сіңірген спорт шебері Евгений Паладьев. Хоккей мектебінің 100-ден астам тәрбиеленушілері ҰХЛ ойнады, атап айтқанда: </span><span style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Евгений Набоков, Андрей Трощинский, Антон Худобин, Андрей Райский</span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">. КХЛ-да ағайындылар Александр және Евгений Корешковтар, Игорь Земляной, Михаил Бородулин, Игорь Никитин, Алексей Трощинский, Виталий Еремеев, Федор Полищук, Рустам Есеркенов және көптеген басқа қазіргі ұрпақтың тәрбиеленушілері, ойыншылар: Старченко Роман, Талгат Жайлауов, Савченко Роман, Кошелев Семен, Асетов Алихан, Шестаков Аркадий және басқа тәрбиеленушілер РФ және ҚР ЖХЛ чемпионаттарында ойнайды.</span></p>',
            'description_ru' => '<p><strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;">История:</span></strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;"> Восточно-Казахстанская областная специализированная школа олимпийского резерва &laquo;Т</span><span lang="EN-US" style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;">ORPEDO</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;">&raquo; была основана в 1965 году. Число занимающихся более 650 детей, 29 тренеров в том числе женское отделение, 12 возрастных групп (2015-2003г.р.). Воспитанники хоккейной школы участвуют в Чемпионате Республики Казахстан <a name="_Hlk39490686"></a>среди детско-юношеских команд и в Первенстве Российской Федерации.</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;"> Воспитанники хоккейной школы неоднократно становились победителями и призерами в республиканских и международных соревнованиях</span><span style="font-size: 9.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">.</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;"> Знаменитыми воспитанниками школы являются Олимпийский чемпион в составе сборной СССР на Олимпиаде 1976г. в г. Инсбруке (Австрия) Борис Александров, чемпион Мира в составе СССР, Заслуженный мастер спорта СССР Евгений Паладьев. Более 100 воспитанников хоккейной школы играли и играют в НХЛ, а именно: Евгений Набоков, Андрей Трощинский, Антон Худобин, Андрей Райский. В КХЛ братья Корешковы Александр и Евгений, Игорь Земляной, Михаил Бородулин, Игорь Никитин, Алексей Трощинский, Виталий Еремеев, Федор Полищук, Рустам Есеркенов и многие другие воспитанники нынешнего поколения действующие игроки: Старченко Роман, Талгат Жайлауов, Савченко Роман, Кошелев Семен, Асетов Алихан, Шестаков Аркадий и другие воспитанники играют в чемпионатах&nbsp; ВХЛ РФ и РК.</span></p>',
                'id' => 11,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«TORPEDO» Шығыс Қазақстан облыстық мамандандырылған балалар мен жасөспірімдерге арналған олимпиадалық қордың мектебі, Өскемен қ.',
                'name_ru' => 'Восточно-Казахстанская областная специализированная детско-юношеская школа олимпийского резерва «TORPEDO» г. Усть-Каменогорск',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:28:52',
            ),
            11 => 
            array (
                'alias' => '12-kgu-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-shkola-olimpiyskogo-rezerva-po-khokkeyu-s-shayboy-upravleniya-fizicheskoy-kultury-i-sporta-karagandinskoy-oblasti',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Юность</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&raquo;</span> <span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">және</span> <span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Юность-Металлург</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&raquo; хоккей командалары</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> &laquo;Қарағанды-Арена&raquo; МС</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Қарағанды қ., Республика даңғылы, 13-ші құрылыс</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс </span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU; mso-bidi-font-weight: bold;">телефон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">ы</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU; mso-bidi-font-weight: bold;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;+7 7172 505-580</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Электро</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">ндық мекенжайы</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU; mso-bidi-font-weight: bold;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><a href="mailto:hokkeykar@inbox.ru"><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #003467; mso-ansi-language: EN-US; mso-fareast-language: RU;">hokkeykar</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #003467; mso-fareast-language: RU;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #003467; mso-ansi-language: EN-US; mso-fareast-language: RU;">inbox</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #003467; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #003467; mso-ansi-language: EN-US; mso-fareast-language: RU;">ru</span></a></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Басшы</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU; mso-bidi-font-weight: bold;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Спицын Константин Сергеевич</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> КГУ &laquo;Областная специализированная детско-юношеская школа олимпийского резерва по хоккею с шайбой&raquo; Управления физической культуры и спорта Карагандинской области<br /><strong>Хоккейная команда:</strong> Юность, Юность-Металлург <br /><strong>Руководитель:</strong> Спицын Константин Сергеевич <br /><strong>Адрес:</strong> г. Караганда, пр. Республики 13<br /><strong>Телефон:</strong> +7-7172-505580<br /><strong>E-mail:</strong> hokkeykar@inbox.ru </p>',
                'avatar' => '/images/1594354517.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:17:20',
                'description_en' => NULL,
                'description_kk' => '<p style="text-align: justify;"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> Қарағанды облысы әкімінің 2003 жылғы қаулысымен &laquo;Облыстық мамандандырылған балалар мен жасөспірімдерге арналған шайбалы хоккей бойынша олимпиадалық қордың мектебі&raquo; құрылды. Облыстық мамандандырылған балалар мен жасөспірімдерге арналған шайбалы хоккей бойынша олимпиадалық қордың мектебінде шайбалы хоккей бойынша 2 спорт түрі дәріптеледі: шайбалы хоккей және конькимен мәнерлеп сырғанау. </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">&laquo;Юность&raquo; және &laquo;Юность-Металлург&raquo; мектептің 2 хоккей командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады. Хоккейді үйренетін оқушылардың саны &ndash; 12 жастық топтарда 500-ден астам спортшылар. Хоккей мектебінің тәрбиеленушілері бірнеше рет республикалық және халықаралық жарыстардың жеңімпаздары және жүлдегерлері болып атанды.&nbsp; &nbsp;&nbsp;</span></p>',
                'description_ru' => '<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';"> Распоряжением Акима Карагандинской области 2003 года была создана &laquo;Областная Специализированная детско-юношеская школа олимпийского резерва по хоккею с шайбой&raquo;. В ОСДЮШОР по хоккею с шайбой культивируется 2 вида спорта: хоккей с шайбой и фигурное катание на коньках, школа принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд 2 хоккейными командами &laquo;Юность&raquo; и &laquo;Юность-Металлург&raquo;.<span style="mso-spacerun: yes;">&nbsp; </span>Число занимающихся по хоккею составляет более 500 спортсменов по 12 возрастным группам. <a name="_Hlk39594430"></a>Воспитанники хоккейной школы неоднократно становились победителями и призерами в республиканских и международных соревнованиях</span></p>',
                'id' => 12,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Қарағанды облысының Дене шынықтыру және спорт басқармасының «Облыстық мамандандырылған балалар мен жасөспірімдерге арналған шайбалы хоккей бойынша олимпиадалық қордың мектебі» КММ',
                'name_ru' => 'КГУ «Областная специализированная детско-юношеская школа олимпийского резерва по хоккею с шайбой» Управления физической культуры и спорта Карагандинской области',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:27:34',
            ),
            12 => 
            array (
                'alias' => '13-obshchestvennyy-fond-khokkeynyy-klub-pso-g-ekibastuz',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;ПСО&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы</strong><span style="mso-bidi-font-weight: bold;"><strong>:</strong></span></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Павлодар обл., Екібастұз қ., Пшембаев көш., 2</span></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7187 278-848, +7&nbsp;701&nbsp;263-76-55</span></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><a href="mailto:hcpso@m%D0%B0il.ru"><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">hcpso</span><span style="font-size: 12.0pt; line-height: 107%;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">m</span><span style="font-size: 12.0pt; line-height: 107%;">а</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">il</span><span style="font-size: 12.0pt; line-height: 107%;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">ru</span></a></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Дручинин Владислав Сергеевич</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Әкімші</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">: Понуждаев Анатолий Валентинович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ОФ Хоккейный клуб &laquo;ПСО&raquo; <br /><strong>Хоккейная команда:</strong> ПСО <br /><strong>Руководитель:</strong> Дручинин Владислав Сергеевич <br /><strong>Адрес:</strong> г. Экибастуз, ул. Пшембаева 2<br /><strong>Телефон:</strong> +7-7187-278848, +7-701-263-7655 <br /><strong>E-mail:</strong> hcpso@mаil.ru </p>',
                'avatar' => '/images/1594354509.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:18:38',
                'description_en' => NULL,
                'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> &laquo;ПСО&raquo; хоккей клубы 2004 жылы құрылды. 2005 жылы балаларға арналған хоккей мектебі ашылды, қазіргі уақытта мектепте 200 спортшы оқиды, 9 жаттықтырушы жұмыс істейді. &laquo;ПСО&raquo; командасы 2004-2005 ж.т., 2007 ж.т. жастық топтарда Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>',
                'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Хоккейный клуб &laquo;ПСО&raquo; создан в 2004 году. В 2005 году открылось детская хоккейная школа, в настоящее время в клубе занимаются 200 спортсменов, 9 тренеров. Команда &laquo;</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;">ПСО</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд в возрастных группах 2004-2005г.р.,2007г.р.</span><span style="font-size: 9.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>',
                'id' => 13,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«ПСО» хоккей клубы қоғамдық қоры, Екібастұз қ.',
                'name_ru' => 'Общественный Фонд хоккейный клуб «ПСО» г. Экибастуз',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:21:23',
            ),
            13 => 
            array (
                'alias' => '14-kgu-shymkentskaya-gorodskaya-spetsializirovannaya-detsko-yunosheskaya-sportivnaya-shkola-olimpiyskogo-rezerva-8-po-zimnim-vidam-sporta-g-shymkent',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;ТУРАН&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз </span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>алаңы</strong><span style="mso-bidi-font-weight: bold;"><strong>:</strong> &laquo;Спорт сарайы&raquo; ЖШС</span></span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Шымкент қ., Желтоқсан көш., 15/2</span></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7&nbsp;771 566-77-77; +7&nbsp;778 777-22-28</span></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;8</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">sport</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">-</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">mektep</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">mail</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Зиябеков Бахытжан Ордабекулы</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><span style="mso-spacerun: yes;">&nbsp; </span></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ГУ Шымкентская городская специализированная Детско-юношеская спортивная школа олимпийского резерва №8 по зимним видам спорта <br /><strong>Хоккейная команда:</strong> Туран, Торнадо <br /><strong>Руководитель:</strong> Зиябеков Бахытжан Ордабекулы <br /><strong>Адрес:</strong> г. Шымкент, ул. Желтоксан 15/2<br /><strong>Телефон:</strong> +7-771-566-7777; +7-778-777-2228<br /><strong>E-mail:</strong> 8sport-mektep@mail.ru </p>',
                'avatar' => '/images/1594401479.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:19:53',
                'description_en' => NULL,
            'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> №8 Шымкент қаласының қыс спорт түрлері бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі 2010 жылы құрылды. Мектепте 6 спорт түрлерінен 496 астам спортшы оқиды: шайбалы хоккей, фристайл, конькимен мәнерлеп сырғанау, шорт-трек, әмбебап жекпе-жек, жазғы биатлон. Шайбалы хоккеймен айналысатындардың саны 5 жастық топтар бойынша 113 спортшы (2008-2014 ж.т.). &laquo;ТУРАН&raquo; командасы </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>',
            'description_ru' => '<p class="MsoNormal"><strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">История:</span></strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;"> Шымкентская городская специализированная детско-юношеская спортивная школа олимпийского резерва №8 по зимним видам спорта основана в 2010 году. Число занимающихся составляет более 496 спортсменов по 6 видам спорта: хоккей с шайбой, фристайл, фигурное катание на коньках, шорт-трек, универсальный бой, летний биатлон. Количество занимающихся отделения хоккея с шайбой составляет 113 спортсменов по 5 возрастным группам (2008-2014г.р.).</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';"> Команда &laquo;</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;">ТУРАН</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>',
                'id' => 14,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '№8 Шымкент қаласының қыс спорт түрлері бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі КММ, Шымкент қ.',
                'name_ru' => 'КГУ Шымкентская городская специализированная Детско-юношеская спортивная школа олимпийского резерва №8 по зимним видам спорта г. Шымкент',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:19:38',
            ),
            14 => 
            array (
                'alias' => '15-kgu-detsko-yunosheskaya-sportivnaya-shkola-1-otdela-fizicheskoy-kultury-i-sporta-goroda-pavlodar-akimata-goroda-pavlodara',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;ERTIS&raquo; хоккей командасы</span></p>
<p class="MsoNormal" style="background: white;"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> &laquo;ШВСМ&raquo; МС</span></p>
<p class="MsoNormal" style="background: white;"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Павлодар қ., Бектуров көш., 97</span></p>
<p class="MsoNormal" style="background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+77180-2-321-020</span></p>
<p class="MsoNormal" style="background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Амангельдинов Нурлан Сагадатович</span></p>
<p class="MsoNormal" style="background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><a href="mailto:zimcholpv@mail.ru"><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">zimcholpv</span><span style="font-size: 12.0pt; line-height: 107%;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">mail</span><span style="font-size: 12.0pt; line-height: 107%;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">ru</span></a></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> КГУ &laquo;Детско-юношеская спортивная школа №1, отдела физической культуры и спорта города Павлодар<br /><strong>Хоккейная команда:</strong> Ertis <br /><strong>Руководитель:</strong> Амангельдинов Нурлан Сагадатович <br /><strong>Адрес:</strong> г. Павлодар, ул. Бектурова 97<br /><strong>Телефон:</strong> +7-7180-2321020 <br /><strong>E-mail:</strong> zimcholpv@mail.ru </p>',
                'avatar' => '/images/1594354481.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:21:42',
                'description_en' => NULL,
                'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> &laquo;№1 балалар мен жасөспірімдерге арналған спорт мектебі 2005 жылы құрылды. Мектепте 205 астам спортшы оқиды. Мектептің құрамына 5 бөлімше кіреді: шайбалы хоккей, конькимен мәнерлеп сырғанау, биатлон, шаңғы жарысы, фристайл. &laquo;ERTIS&raquo; хоккей командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>',
                'description_ru' => '<p class="MsoNormal"><strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">История:</span></strong><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;"> Детско-юношеская спортивная школа №1 основана в 2005 году, численность занимающихся </span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">составляет более 205 спортсменов. В состав школы входит 5 отделений: хоккей с шайбой, фигурное катание на коньках, биатлон, лыжные гонки, фристайл.</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';"> Команда &laquo;</span><span lang="EN-US" style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;">ERTIS</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span><span style="font-size: 9.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>',
                'id' => 15,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Павлодар қаласы әкімдігінің Павлодар қаласының Дене шынықтыру және спорт бөлімінің «№1 балалар мен жасөспірімдерге арналған спорт мектебі» КММ',
                'name_ru' => 'КГУ «Детско-юношеская спортивная школа №1, отдела физической культуры и спорта города Павлодар, акимата города Павлодара',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:17:27',
            ),
            15 => 
            array (
                'alias' => '16-kommunalnoe-gosudarstvennoe-kazennoe-predpriyatie-detsko-yunosheskaya-sportivnaya-shkola-goroda-aksu-gosudarstvennogo-uchrezhdeniya-otdel-fizicheskoy-kultury-i-sporta-goroda-aksu-akimata-goroda-aksu',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;МОЛНИЯ&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мұз алаңы:</strong> &laquo;Ақсу&raquo; жабық мұз айдыны</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Павлодар обл., Ақсу қ., Әуезов көш., 8</span></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7183 750-011, +7 7183 742-316</span></p>
<p class="MsoNormal" style="text-align: justify; background: white;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электро</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">ндық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><a href="mailto:kgkpdyshaksu@mail.ru"><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; color: #003467; mso-ansi-language: EN-US;">kgkpdyshaksu</span><span style="font-size: 12.0pt; line-height: 107%; color: #003467;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; color: #003467; mso-ansi-language: EN-US;">mail</span><span style="font-size: 12.0pt; line-height: 107%; color: #003467;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; color: #003467; mso-ansi-language: EN-US;">ru</span></a><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">,&nbsp;</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">director</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">_</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">dyshaksu</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">mail</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Горохов Андрей Владимирович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Коммунальное государственное казенное предприятие &laquo;Детско-юношеская спортивная школа города Аксу&raquo;, государственного учреждения &laquo;Отдел физической культуры и спорта города Аксу&raquo;<br /><strong>Хоккейная команда:</strong> Молния<br /><strong>Руководитель:</strong> Горохов Андрей Владимирович <br /><strong>Адрес:</strong> г. Аксу, ул. Ауэзова 8<br /><strong>Телефон:</strong> +7-7183-750011, +7-7183-742316 <br /><strong>E-mail:</strong> kgkpdyshaksu@mail.ru, director_dyshaksu@mail.ru </p>',
                'avatar' => '/images/1594354473.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:22:57',
                'description_en' => NULL,
            'description_kk' => '<p><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы</span></strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">: Ақсу қаласының балалар мен жасөспірімдерге арналған спорт мектебі 1966 жылы құрылды. Қазіргі уақытта мектепте 14 спорт түрлері бойынша 1113 спортшы оқиды (олардың ішінде 709 спортшы қалада және 404 спортшы ауыл мекенде). 28 жаттықтырушы-мұғалімдер жұмыс істейді. Шайбалы хоккей бөлімшесі балалар мен жасөспірімдерге арналған спорт мектебінде 2016 жылдың қыркүйек айынан ашық. Осы уақыт ішінде </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">&laquo;Молния &ndash; 2009&raquo; командасы құрылды, бұл команда 2017-2018 оқу жылында 4 шайбалы хоккей бойынша турнирлерге қатысып, 2-де жеңімпаз және жүлдегер болып атанды (Славгород қ. БЖАСМ Ашық турнирі &ndash; 1-ші орын) және Ақсу қ. БЖАСМ Ашық біріншілігінде 2-ші орын. 2018 жылдың тамыз айында команда Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысуға тіркелді (2018-2019 ж.ж. маусымы). Маусым қорытындылары бойынша &laquo;Молния&raquo; ХК 2-ші орынға ие болды (В тобы); 2019-2020 ж.ж. маусымының қорытындылары бойынша команда 1-ші орын алды (В тобы).</span></p>',
            'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> Детско-юношеская спортивная школа г. Аксу было открыто в 1966 году. В настоящее время в спортивной школе тренируются спортсмены по 14-ти видам спорта, общей численностью 1113 человек (из них 709 человек в городе и 404 человек в сельской местности). Работает 28 тренеров-преподавателей. Отделение по хоккею с шайбой в ДЮСШ открыто с сентября 2016 года. За период работы отделения была сформирована команда &laquo;Молния &ndash; 2009&raquo;, которая 2017-2018 учебном году приняла участие в 4-х турнирах по хоккею с шайбой, в 2-х из них становилась победителем и призером (Открытый турнир ДЮСШ г. Славгорода &ndash; 1 место) и второе место в Открытом Первенстве ДЮСШ г. Аксу. В августе 2018 года команда была заявлена <a name="_Hlk39571116"></a>на участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд (сезон 2018-2019 гг.). По итогам сезона ХК &laquo;Молния&raquo; заняла 2 место (группе В); По итогам сезона 2019-2020 гг. команда заняла 1 место (группа В).</span></p>',
                'id' => 16,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Ақсу қаласы әкімдігінің «Ақсу қаласының дене шынықтыру және спорт бөлімі» мемлекеттік мекемесінің «Ақсу қаласының балалар мен жасөспірімдерге арналған спорт мектебі» коммуналдық мемлекеттік қазыналық кәсіпорны',
                'name_ru' => 'Коммунальное государственное казенное предприятие «Детско-юношеская спортивная школа города Аксу», государственного учреждения «Отдел физической культуры и спорта города Аксу», акимата города Аксу',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:04:32',
            ),
            16 => 
            array (
                'alias' => '17-kgu-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-sportivnaya-shkola-imeni-kazbeka-baybolova-kgu-upravlenie-fizicheskoy-kultury-i-sporta-akimata-severo-kazakhstanskoy-oblasti',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&laquo;QULAGER&raquo;</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"> хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> Александ Винокуров атындағы спорт сарайы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Солтүстік Қазақстан облысы, Петропавл қ., Жамбыл көш., 173</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7152 314-653</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong> baibolova_uso@mail.ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"><strong>:</strong> Щербаков Владимир Петрович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> КГУ &laquo;Областная специализированная детско-юношеская спортивная школа имени Казбека Байболова&raquo; КГУ &laquo;Управление физической культуры и спорта акимата Северо-Казахстанской области<br /><strong>Хоккейная команда:&nbsp;</strong>Кулагер<br /><strong>Руководитель:</strong> Щербаков Владимир Петрович<br /><strong>Адрес:</strong> г. Петропавловск, ул. Жамбыла 173<br /><strong>Телефон:</strong> +7-7152-314653<br /><strong>E-mail:</strong> baibolova_uso@mail.ru </p>',
                'avatar' => '/images/1594354465.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:24:50',
                'description_en' => NULL,
            'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> Қазбек Байболов атындағы облыстық мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі 2003 жылы құрылды. Мектепте 6 мамандандырылған бөлімше жұмыс істейді: шайбалы хоккей, шаңғы жарысы, шорт-трек, биатлон, допты хоккей және конькимен жүгіру спорты. Шайбалы хоккей бөлімшесіне 3 жастық топтар бойынша 111 тәрбиеленушілер барады (2006 ж.т.,2008 ж.т., 2010 ж.т.). &laquo;QULAGER&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp; &nbsp;&nbsp;</span></p>',
            'description_ru' => '<p>История: &laquo;Областная специализированная детско-юношеская спортивная школа имени Казбека Байболова&raquo; создана 2003 году. В школе 6 специализированных отделений: хоккей с шайбой, лыжные гонки, шорт-трек, биатлон, хоккей с мячом и конькобежный спорт. В отделение хоккея с шайбой занимаются 111 воспитанников по 3 возрастным группам (2006г.р.,2008г.р.,2010г.р.). Команда &laquo;QULAGER&raquo; принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</p>
<p>&nbsp;</p>',
                'id' => 17,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«Солтүстік Қазақстан облысы әкімдігінің Дене шынықтыру және спорт басқармасы» КММ «Қазбек Байболов атындағы облыстық мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі» КММ',
                'name_ru' => 'КГУ «Областная специализированная детско-юношеская спортивная школа имени Казбека Байболова» КГУ «Управление физической культуры и спорта акимата Северо-Казахстанской области»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 16:00:16',
            ),
            17 => 
            array (
                'alias' => '18-mangystauskaya-federatsiya-khokkeya-s-shayboy',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;CASPIY&raquo; хоккей клубы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;CASPIY&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> &laquo;Сауда-ойын-сауық кешені&raquo;</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Маңғыстау облысы, Ақтау қ., 6-шы шағын ауданы, 32-1/2</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7292 509-831, +7&nbsp;701&nbsp;342-26-03, +7&nbsp;705&nbsp;502-04-66</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><a href="mailto:41-17@mail.ru"><span style="font-size: 12.0pt; line-height: 107%; color: #003467;">41-17@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; color: #003467; mso-ansi-language: EN-US;">mail</span><span style="font-size: 12.0pt; line-height: 107%; color: #003467;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; color: #003467; mso-ansi-language: EN-US;">ru</span></a></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Президент:&nbsp;</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Марфин Владимир Викторович</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Атқарушы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;"> директор</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:&nbsp;&nbsp;Шахов Дмитрий Александрович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong>Мангыстауская Федерация хоккея с шайбой<br /><strong>Хоккейная команда:</strong>Caspiy<br /><strong>Руководитель:</strong> Шахов Дмитрий Александрович <br /><strong>Адрес:</strong>г. Актау, 6 мкр., 32-1/2<br /><strong>Телефон:</strong> +7-7292-509831, +7-701-342-2603, +7-705-502-0466 <br /><strong>E-mail:</strong> 41-17@mail.ru</p>',
                'avatar' => '/images/1594354455.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:26:06',
                'description_en' => NULL,
            'description_kk' => '<p><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы</span></strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">: Хоккей клубы 2012 жылы құрылды, мектеп оқушыларының жалпы саны &ndash; әр түрлі жастық топтарда 60 спортшы (2004-2016 ж.т.). &laquo;CASPIY&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>',
            'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Хоккейный клуб создан в 2012 году, общее количество занимающихся составляет 60 спортсменов по разным возрастным группам (2004-2016г.р.) Команда &laquo;</span><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: EN-US;">CASPIY</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>',
                'id' => 18,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Маңғыстау шайбалы хоккей федерациясы',
                'name_ru' => 'Мангыстауская Федерация хоккея с шайбой',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 08:51:28',
            ),
            18 => 
            array (
                'alias' => '19-kgu-detsko-yunosheskaya-sportivnaya-shkola-5-g-aktobe',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;ОЛИМП&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мұз алаңы:</strong> &laquo;Олимп&raquo;</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Мекенжайы</span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">: Қазақстан Республикасы, Ақтөбе облысы, Ақтөбе қ., 11-ші шағын ауданы, 74б</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны</span></strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">: </span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7132 948-808, +7 7132 948-806</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">olimp</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">dyussh</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">5</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">aktobe</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">mail</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Шварц Виталий Николаевич</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong>КГУ Детско-юношеская спортивная школа №5 <br /><strong>Хоккейная команда:</strong>Олимп<br /><strong>Руководитель:</strong> Шварц Виталий Николаевич <br /><strong>Адрес:</strong>г.Актобе, 11 мкр., 7<br /><strong>Телефон:</strong> +7-7132-948808, +7-7132-948806 <br /><strong>E-mail:</strong> olimp.dyussh5aktobe@mail.ru </p>',
                'avatar' => '/images/1594354447.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:27:50',
                'description_en' => NULL,
            'description_kk' => '<p><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы</span></strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">: Балалар мен жасөспірімдерге арналған спорт мектебі 2017 жылы құрылған, мектептің құрамына 3 бөлімше кіреді: шайбалы хоккей, конькимен мәнерлеп сырғанау, шорт-трек. Шайбалы хоккей бөлімшесіне 9 жастық топ бойынша 200-ден астам спортшы қатысады (2006-2014 ж.т.). &laquo;Олимп&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады. &nbsp;</span></p>',
            'description_ru' => '<p class="MsoNoSpacing" style="text-align: justify;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Детско-юношеская спортивная школа основана в 2017 году, в состав школы входит 3 отделения: хоккей с шайбой, фигурное катание на коньках, шорт-трек. В отделение хоккея с шайбой занимается более 200 спортсменов по 9 возрастным группам (2014-2006 г.р.). Команда &laquo;</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">Олимп</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>',
                'id' => 19,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'Ақтөбе қ. №5 балалар мен жасөспірімдерге арналған спорт мектебі КММ',
                'name_ru' => 'КГУ Детско-юношеская спортивная школа № 5 г. Актобе',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 06:51:36',
            ),
            19 => 
            array (
                'alias' => '20-dkkh-beibarys',
                'annotation_en' => NULL,
                'annotation_kk' => '<h1 style="margin-top: 0cm;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">&laquo;BEIBARYS&raquo; хоккей командасы</span></strong></h1>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мұз алаңы:</strong> Х. Доспанова атындағы мұз сарайы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Атырау облысы, Атырау қ., Абылхайыр хан даңғылы, 54</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7&nbsp;702</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">&nbsp;</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">000-52-97&nbsp;&nbsp;</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электро</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">ндық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">beibarysatyrau</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">2015@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">gmail</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">com</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p class="MsoNormal" style="text-align: justify;"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;Макеев Сагиндык Махметович</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ДКХ &laquo;BEIBARYS&raquo;<br /><strong>Хоккейная команда:</strong>Beibarys<br /><strong>Руководитель:</strong> Макеев Сагиндык Махметович<br /><strong>Адрес:</strong>г. Атырау, пр. Абылхайыр хана 54<br /><strong>Телефон:</strong>+7-7242-230548<br /><strong>E-mail:</strong> beibarysatyrau2015@gmail.com</p>',
                'avatar' => '/images/1594354436.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:29:06',
                'description_en' => NULL,
                'description_kk' => '<p><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Тарихы:</strong> &laquo;BEIBARYS&raquo; командасы 2008, 2010, 2012 ж.т. Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>',
                'description_ru' => '<p class="MsoNormalCxSpMiddle" style="text-align: justify; line-height: normal;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Команда &laquo;</span><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: EN-US;">BEIBARYS</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; принимает</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд в возрастных группах 2008г.р., 2010г.р., 2012г.р.</span></p>',
                'id' => 20,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«BEIBARYS» БХК',
                'name_ru' => 'ДКХ «BEIBARYS»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 06:46:40',
            ),
            20 => 
            array (
                'alias' => '21-oblastnaya-detsko-yunosheskaya-sportivnaya-shkola-po-zimnim-vidam-sporta-upravleniya-fizicheskoy-kultury-i-sporta-zko',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">&laquo;ЯСТРЕБЫ&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Мұз алаңы &ndash; &laquo;ЗКО&raquo;</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Шығыс Қазақстан облысы, Орал қ., Евразия даңғылы, 236</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU; mso-bidi-font-weight: bold;">Байланыс телефоны: </span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">+7 7112 543-239</span></p>
<p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">Электрон</span></strong><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">дық мекенжайы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">uralsk</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">_</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">Ids</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">@</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">mail</span><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">.</span><span lang="EN-US" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: EN-US; mso-fareast-language: RU;">ru</span></p>
<p class="MsoNormal"><strong><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Басшы</span></strong><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">:</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: RU;">&nbsp;</span><span lang="KZ" style="font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-language: KZ; mso-fareast-language: RU;">Тұрарбек Алтынбекұлы</span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> Областная детско-юношеская спортивная школа по зимним видам спорта Управления физической культуры и спорта Западно-Казахстанской области<br /><strong>Хоккейная команда:</strong>Ястребы <br /><strong>Руководитель:</strong> Тұрарбек Алтынбекұлы<br /><strong>Адрес:</strong>г. Уральск, пр. Евразия 236<br /><strong>Телефон:</strong>+7-7112-543239<br /><strong>E-mail:</strong> uralsk_Ids@mail.ru</p>',
                'avatar' => '/images/1594354427.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:30:02',
                'description_en' => NULL,
            'description_kk' => '<p><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы</span></strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">: Облыстық қыс спорт түрлері бойынша балалар мен жасөспірімдерге арналған спорт мектебіне 5 бөлімшелер кіреді: шайбалы хоккей, шорт-трек, шаңғы жарысы, допты хоккей, конькимен мәнерлеп сырғанау. Шайбалы хоккей бөлімшесі 2013 жылы құрылды, тәрбиеленушілердің саны &ndash; 6 жастық топтар бойынша 150-ден астам спортшылар (2008-2014 ж.т.). &laquo;ЯСТРЕБЫ&raquo; командасы </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>',
            'description_ru' => '<p><strong><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">История:</span></strong><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"> В областная детско-юношеская спортивной школе по зимним видам спорта</span> <span lang="KZ" style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">культивируются </span><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">5 отделений: </span><span lang="KZ" style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">хоккей с шайбой, шорт-трек, лыжные гонки, хоккей с мячом, фигурное катание на коньках. Отделение хоккея с шайбой создана 2013 году, количество воспитанников составляет более 150 спортменов по 6 возрастным группам (2008-2014г.р.).</span> <span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">Команда &laquo;</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;">ЯСТРЕБЫ</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">&raquo; принимает</span><span style="font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span><span style="font-size: 9.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;">&nbsp;</span></p>',
                'id' => 21,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => 'БҚО Дене шынықтыру және спорт басқармасының Облыстық қыс спорт түрлері бойынша балалар мен жасөспірімдерге арналған спорт мектебі',
                'name_ru' => 'Областная детско-юношеская спортивная школа по зимним видам спорта Управления физической культуры и спорта ЗКО',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 06:44:52',
            ),
            21 => 
            array (
                'alias' => '22-too-professionalnyy-klub-ayat',
                'annotation_en' => NULL,
                'annotation_kk' => '<p class="MsoNormal"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">&laquo;GORNAK&raquo; хоккей командасы</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Мұз алаңы:</strong> &laquo;Мұз спорт сарайы&raquo;</span></p>
<p class="MsoNormal"><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;"><strong>Мекенжайы:</strong> Қазақстан Республикасы, Қостанай облысы, Рудный қ., Парковая көшесі, құрылыс 30Б</span></p>
<p class="MsoNormal" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt;"><strong><span lang="KZ" style="line-height: 107%; font-family: \'Times New Roman\', serif;">Байланыс телефоны: </span></strong><span style="line-height: 107%; font-family: \'Times New Roman\', serif;">+7 7143 144-481, +7 7143 143-333, + 7&nbsp;701 716-76-47</span></span></p>
<p class="MsoNormal" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt;"><strong><span style="line-height: 107%;">Электрон</span></strong><strong><span lang="KZ" style="line-height: 107%;">дық мекенжайы</span></strong><strong><span style="line-height: 107%;">:</span></strong><span style="line-height: 107%; font-family: \'Times New Roman\', serif;">&nbsp;</span><a href="mailto:pk-ayat18@mail.ru"><span lang="EN-US" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">pk</span><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">-</span><span lang="EN-US" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">ayat</span><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">18@</span><span lang="EN-US" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">mail</span><span style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">.</span><span lang="EN-US" style="line-height: 107%; font-family: \'Times New Roman\', serif; color: #003467;">ru</span></a></span></p>
<p><span style="font-size: 12pt;"> <strong><span lang="KZ" style="line-height: 107%;">Басшы</span></strong><strong><span style="line-height: 107%; font-family: Calibri, sans-serif;">:</span></strong><span style="line-height: 107%; font-family: \'Times New Roman\', serif;">&nbsp;Казбеков Кайрат Казиханович</span></span></p>',
                'annotation_ru' => '<p><strong>Полное название:</strong> ТОО &laquo;Профессиональный клуб &laquo;Аят&raquo; <br /><strong>Хоккейная команда:</strong>Gornak <br /><strong>Руководитель:</strong> Казбеков Кайрат Казиханович <br /><strong>Адрес:</strong>г. Рудный, ул. Парковая 30Б <br /><strong>Телефон:</strong>+7-7143-144481, +7-7143-143333, + 7-701-7167647 <br /><strong>E-mail:</strong>pk-ayat18@mail.ru</p>',
                'avatar' => '/images/1594354413.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:30:54',
                'description_en' => NULL,
                'description_kk' => '<p><strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Тарихы</span></strong><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">: &laquo;GORNAK&raquo; хоккей командасы 1958 жылы Қостанай облысының Рудный қаласында құрылған, қазіргі уақытта клуб 3 командадан тұрады: ересек, жас және балалар-жасөспірімдер. Балалар мен жасөспірімдердің хоккей командасы 1986 жылы құрылды, тәрбиеленушілердің жалпы саны &ndash; 250, жастық топтар: 2007 ж.т., 2009 ж.т., 2015 ж.т. Әр түрлі жастық топтарға жататын командалар </span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатының жеңімпаздары мен жүлдегерлері болып атанды.</span><span lang="KZ" style="font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;">&nbsp;</span></p>',
                'description_ru' => '<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">История:</span></strong><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';"> Команда &laquo;</span><span lang="EN-US" style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;">GORNAK</span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';">&raquo; была создана в 1958 году в городе Рудном Костанайской области, в настоящее время в состав клуба входят 3 команды: взрослая, молодежная и детско-юношеская. Команда детско-юношеского хоккея создана 1986 году, количество занимающихся составляет более 250 воспитанников по следующим возрастным группам: 2007г.р., 2009г.р.-2015г.р. Команды разных возрастных групп становилась победителями и призерами </span><span style="font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">Чемпионата Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span><span style="font-size: 9.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;">.<span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span></span></p>',
                'id' => 22,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«Аят» кәсіби клубы» ЖШС',
                'name_ru' => 'ТОО «Профессиональный клуб «Аят»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 06:42:13',
            ),
            22 => 
            array (
                'alias' => '23-kgkp-sportivno-ozdorovitelnyy-kompleks-azastan-gu-otdela-fizicheskoy-kultury-i-sporta-goroda-satpaev',
                'annotation_en' => NULL,
                'annotation_kk' => '<p><span lang="KZ">&laquo;</span><span lang="EN-US">YASTREBY</span><span lang="KZ">&raquo; және&nbsp;&laquo;Сатпаевские волки&raquo; хоккей командалары</span></p>
<p><span lang="KZ"><strong>Мұз алаңы:</strong> &laquo;Қазақстан&raquo; МС</span></p>
<p><span lang="KZ"><strong>Мекенжайы:</strong> Қарағанды облысы, Сәтпаев қаласы, Тәуелсіздік даңғылы, 26</span></p>
<p><span lang="KZ"><strong>Байланыс телефоны:</strong> + 7&nbsp;710 63 7-17-40, 7-42-55</span></p>
<p><strong><span lang="KZ">Электрондық мекенжайы:</span></strong>&nbsp;<a href="mailto:kosc_sat@mail.ru"><span lang="EN-US">kosc</span>_<span lang="EN-US">sat</span>@<span lang="EN-US">mail</span>.<span lang="EN-US">ru</span></a></p>
<p><strong><span lang="KZ">Басшының м.а.</span></strong> -&nbsp;Айтбаев Манат Такешевич</p>',
                'annotation_ru' => '<p><span lang="KZ">Хоккейные команды &laquo;</span><span lang="EN-US">YASTREBY</span><span lang="KZ">&raquo;</span>&nbsp;и<span lang="KZ">&nbsp;&laquo;Сатпаевские волки&raquo;</span></p>
<p><span lang="KZ"><strong>Ледовая Арена:</strong> ЛД &laquo;Қазақстан&raquo;</span></p>
<p><strong><span lang="KZ">Адрес:</span></strong><span lang="KZ">&nbsp;Карагандинская область, город Сатпаев, проспект Независимости 26</span></p>
<p><strong><span lang="KZ">Контактный телефон:</span></strong><span lang="KZ">&nbsp;+ 7&nbsp;710 63 7-17-40, 7-42-55</span></p>
<p><strong><span lang="KZ">Электронный адрес:</span></strong>&nbsp;<a href="mailto:kosc_sat@mail.ru"><span lang="EN-US">kosc</span>_<span lang="EN-US">sat</span>@<span lang="EN-US">mail</span>.<span lang="EN-US">ru</span></a></p>
<p><strong><span lang="KZ">И.о. Руководителя</span></strong>&nbsp;-&nbsp;Айтбаев Манат Такешевич</p>',
                'avatar' => '/images/1594354359.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-05-20 14:32:15',
                'description_en' => NULL,
                'description_kk' => '<p><strong><span lang="KZ">Тарихы</span></strong><span lang="KZ"><strong>:</strong> &laquo;</span><span lang="EN-US">YASTREBY</span><span lang="KZ">&raquo; командасы 2016 жылы құрылды, спортшылардың саны &ndash; 20. &laquo;Сатпаевские волки&raquo; хоккей командасы 2010 жылы құрылды, спортшылардың саны &ndash; 15. Хоккей командалары 2009 және 2005 жылы туған </span><span lang="KZ">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады. </span><span lang="KZ">&nbsp;&nbsp;</span></p>',
                'description_ru' => '<p><strong>История:</strong> Хоккейная команда <span lang="KZ">&laquo;</span><span lang="EN-US">YASTREBY</span><span lang="KZ">&raquo; создана в 2016 году, количество занимающихся 20 спортменов.</span> Хоккейная команда <span lang="KZ">&laquo;</span>Сатпаевские волки<span lang="KZ">&raquo; создана в 2010 году, количество занимающихся 15 спортменов.</span> Хоккейные команды участвуют в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд представляют команды в возрастных группах 2009г.р. и 2005 г.р.</p>',
                'id' => 23,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => '«Сәтпаев қаласының Дене шынықтыру және спорт бөлімі» ММ «Қазақстан» спорт-сауықтыру кешені» КМҚК',
                'name_ru' => 'КГКП «Спортивно – оздоровительный комплекс «Қазақстан»  ГУ «Отдела физической культуры и спорта города Сатпаев»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 03:12:42',
            ),
            23 => 
            array (
                'alias' => '24-kgu-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-shkola-olimpiyskogo-rezerva-4',
                'annotation_en' => NULL,
                'annotation_kk' => NULL,
                'annotation_ru' => '<p><strong>Полное название:</strong> КГУ &laquo;Областная специализированная детско-юношеская школа олимпийского резерва №4&raquo;<br /><strong>Хоккейная команда:</strong> Кайсар<br /><strong>Руководитель:</strong> Акбергенов Абылайхан Жайылханович<br /><strong>Адрес:</strong> г. Кызылорда ул. Г.Муратбаева 3<br /><strong>Телефон:</strong> + 7-7242-230548<br /><strong>E-mail:</strong> atletika2004@mail.ru</p>',
                'avatar' => '/images/1594404101.png',
                'city_en' => NULL,
                'city_kk' => NULL,
                'city_ru' => NULL,
                'created_at' => '2020-07-10 17:01:42',
                'description_en' => NULL,
                'description_kk' => NULL,
                'description_ru' => NULL,
                'id' => 24,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => NULL,
                'name_ru' => 'КГУ «Областная специализированная детско-юношеская школа олимпийского резерва №4»',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'updated_at' => '2020-07-10 17:01:42',
            ),
        ));
        
        
    }
}