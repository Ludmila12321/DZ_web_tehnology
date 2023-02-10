<?php
$name = "Барсик";
$profession = "Кот домашний";
$city = "Моздок";
$e_mail = "meowmeow@mail.cat";
$phone = "+7(999)0123456";

$skills = [
    [
        "name" => "Мяуканье",
        "percent" => 60, 
    ],
    [
        "name" => "Мурлыкание",
        "percent" => 80, 
    ],
    [
        "name" => "Заточка когтей",
        "percent" => 100, 
    ],
    [
        "name" => "Ловля мышей",
        "percent" => 0, 
    ],
];

$languages = [
    [
        "name" => "Кошачий",
        "percent" => 100, 
    ],
    [
        "name" => "Человеческий",
        "percent" => 50, 
    ],
];

$works = [
    [
        "name" => "Ленивая тушка",
        "dateStart" => "Февраль 2023",
        "dateEnd" => "Текущее время",
        "description" => "Сплю, ем, смотрю в окно на птичек... Могу выпустить когти! Опасно!",
    ],
    [
        "name" => "Подросший котик",
        "dateStart" => "Декабрь 2022",
        "dateEnd" => "Февраль 2023",
        "description" => "Спал, ел, играл, спал, ел, играл...",
    ],
    [
        "name" => "Маленький котёнок",
        "dateStart" => "Ноябрь 2022",
        "dateEnd" => "Декабрь 2022",
        "description" => "Спал, ел, спал, ел, спал, ел...",
    ]
]; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Моё резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="https://imgfon.ru/Images/Details_img_880px/Animals/usy-bliki-oduvanchiki-beloe_pyatno-v_tsentre.webp?img.1"
                            style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-white">
                            <h2><?= $name; ?></h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $profession; ?></p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city; ?></p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $e_mail; ?></p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $phone; ?></p>
                        <hr>

                        <p class="w3-large"><b><i
                                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
                        <?php for ($i = 0; $i < count($skills); $i++): ?>
                        <p><?= $skills[$i]['name']; ?></p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]['percent']; ?>%"><?= $skills[$i]['percent']; ?>%</div>
                        </div>
                        <?php endfor; ?>
                        <br>
                        <p class="w3-large w3-text-theme"><b><i
                                    class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
                        <?php for ($i = 0; $i < count($languages); $i++): ?>            
                        <p><?= $languages[$i]['name']; ?></p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?= $languages[$i]['percent']; ?>%"></div>
                        </div>
                        <?php endfor; ?>
                        <br>
                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-black w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
                    <?php for ($i = 0; $i < count($works); $i++): ?>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>
                                    <?= $works[$i]['name']; ?>
                                </b></h5>
                            <h6 class="w3-text-teal">
                                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                <?= $works[$i]['dateStart']; ?> - 
                                <?php if ($i == 0): ?>
<span class="w3-tag w3-teal w3-round">
<?=$works[$i]['dateEnd'];?>
</span>
<?php else: ?>
<?=$works[$i]['dateEnd'] ;?>
<?php endif; ?>
                            </h6>
                            <p>
                                <?= $works[$i]['description']; ?>
                            </p>
                            <hr>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-black w3-padding-16"><i
                        class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>Уличная школа котовского мастерства</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Всегда</h6>
                    <p>Прыжки, бег с препятствиями, лазанье по деревьям, гуляние по крыше. Скоро соревнования по громкости "МЯУ" среди всех окрестных котов!</p>
                    <hr>
                </div>
            </div>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Find me on social media.</p>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <!-- End footer -->
    </footer>

</body>

</html>
