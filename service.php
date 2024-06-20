<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: blue;
            z-index: 1000; /* Adjust the z-index as needed */
        }
        .navbar-brand img {
            height: 40px; /* Adjust height as needed */
            margin-right: 10px;
            border-radius: 100%;
        }
        .navbar-nav {
            margin-left: auto;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
        }
        .navbar-nav .nav-link {
            margin-right: 10px; /* Add a little space to the right of each nav item */
        }
        h1 {
            font-size: 80px; /* Adjust the font size as needed */
            font-weight: bold;
        }
        .spanc {
            color: blue;
        }
        .img-custom {
            width: 450px;
            height: 450px;
        }
        .footer {
            background-color: blue;
        }
        .card-hover {
            transition: transform 0.8s, box-shadow 1s;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(66, 99, 196, 0.8);
        }
        .card-hover img {
            transition: transform 0.8s;
        }
        .card-hover:hover img {
            transform: scale(0.9);
        }

        .card-hover1:hover{
            transform: translateY(-10px);
            box-shadow: 0 8px 30px gray;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light p-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.jpg" alt="Logo" class="text-white"> <!-- Replace 'logo.jpg' with the actual URL of your logo -->
                မြန်မာ့လယ်ယာစိုက်ပျိုးရေးဘဏ်
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active card-hover1" aria-current="page" href="index.php">ပင်မစာမျက်နှာ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover1" href="history.php">သမိုင်း</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover1" href="service.php">၀န်ဆောင်မှု</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover1" href="loan.php">ချေးငွေများ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover1" href="saving.php">ငွေစုဆောင်းအပ်နှံခြင်း</a>
                    </li>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-2 text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ဆက်သွယ်ရန်
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="contact.php"><b>ရုံးချုပ်</b></a>
                                <a class="dropdown-item" href="branch.php"><b>ရုံးခွဲများ</b></a>
                                <a class="dropdown-item" href="app.php"><b>လျှောက်လွှာတင်ရန်</b></a>
                                
                            </div>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card bg-dark text-white" style="height: 400px;">
        <img class="card-img" src="rice.jpg" alt="Card image" style="width: auto; height: 400px; filter: blur(15px);">
        <div class="card-img-overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title mt-4">မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်၊ ဖွံ့ဖြိုးရေးဌာနခွဲမှ တောင်သူလယ်သမားများသို့ ဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းများ</h5>
                            <p class="card-text mt-4">မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်သည် တောင်သူလယ်သမားများအတွက် လိုအပ်သော ချေးငွေ အရင်းအနှီးများကို တိုင်းဒေသကြီး / ပြည်နယ် ( ၁၅ ) ခု ရှိ ခရိုင်ဘဏ်ခွဲ ( ၅၇ ) ဘဏ်နှင့် မြို့နယ်ဘဏ်ခွဲ ( ၁၅၁ ) ဘဏ်တို့မှ စိုက်ပျိုးစရိတ်ချေးငွေများကို မိုးရာသီချေးငွေ၊ ဆောင်းရာသီ ချေးငွေ၊ မိုးကြိုရာသီချေးငွေ အဖြစ် တစ်နှစ်လျှင် ရာသီအလိုက် ( ၃ ) ကြိမ် စိုက်ပျိုးရာသီအလိုက် ထုတ်ချေးပေးလျက်ရှိပါသည် –.</p>
                            <ul>
                                <li>လယ်ယာမြေလုပ်ပိုင်ခွင့်ပြုလက်မှတ် ( ပုံစံ – ၇ ) မူရင်းအား ဘဏ်သို့ အာမခံ ( အပေါင် ) ပေးအပ်နိုင်သူ တောင်သူလယ်သမားများကို ချေးငွေအတွက် ကိုယ်တိုင်တာဝန်ယူသည့် စနစ်ဖြင့် ၂၀၁၈ ခုနှစ်မှ စတင်၍ စိုက်ပျိုးစရိတ်ချေးငွေများအား ထုတ်ချေးပေးလျက်ရှိပါသည်။</li>
                                <li>( ၁၀ ) ဧက အောက်ပိုင်ဆိုင်သူ ( လုပ်ကွက်ငယ် ) တောင်သူလယ်သမားများသို့ ( ၁ ) ဧကလျှင် စပါး သီးနှံ ကျပ်-၁,၅၀၀၀၀/-၊ အခြား သီးနှံ ကျပ်-၁,၀၀၀၀၀/- နှုန်းဖြင့် ထုတ်ချေးပါသည်။</li>
                                <li>အတိုးနှုန်း( ၁ ) နှစ်လျှင် ၅ % ကောက်ခံပါသည်။</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-5 card-hover">
                <div class="">
                    <img class="card-img-top" src="fam.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mt-2">စိုက်ပျိုးစရိတ်ချေးငွေ </h5>
                        <p class="card-text mt-2">တောင်သူလယ်သမားများသို့ မိုး ၊ ဆောင်း ၊ မိုးကြို စိုက်ပျိုးစရိတ်ချေးငွေများကို လယ်ယာ မြေလုပ်ပိုင်ခွင့်ပြုလက်မှတ် (ပုံစံ-၇) မူရင်းကို ဘဏ်သို့အပေါင် ( အာမခံ ) အဖြစ်ပေးအပ်၍ တစ်ဦးချင်း ကိုယ်တိုင် အာမခံသော စနစ်ဖြင့် လွယ်ကူရှင်းလင်းစွာ ထုတ်ချေးပေးပါသည် ။ အတိုးနှုန်း တစ်နှစ် ၅ % သာ ကောက်ခံပါသည်။ စပါးသီးနှံချေးငွေ တစ်ဧက ( ၁၅၀၀၀၀ ) နှုန်း၊ အခြားသီးနှံများ တစ်ဧက ကျပ် ( ၁၀၀၀၀၀ ) နှုန်း၊</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 card-hover">
                <div class="">
                    <img class="card-img-top" src="winter.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mt-3">ချေးငွေထုတ်ချေးသော သီးနှံအမျိုးအစားများ</h5>
                        <p class="card-text mt-4">စပါး ပဲမျိုးစုံ မတ်ပဲ၊ ပဲတီစိမ်း၊ မြေပဲ ပဲစဉ်းငုံ၊ပဲပုပ်၊ပဲလွန်း၊ နှမ်း ကုလားပဲဖြူလုံးကြီး၊ ထောပတ်ပဲ၊ ပဲကြီး၊ အစေ့ထုတ်ပြောင်း ပဲယဉ်း၊ ဘိုကိတ်၊ စားတော်ပဲ ပန်းနှမ်း၊ နေကြာ၊ ငရုတ် .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 card-hover p-3">
                <div class="">
                    <img class="card-img-top" src="money.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mt-3">နှစ်စဉ်ချေးငွေ </h5>
                        <p class="card-text mt-4">တောင်သူလယ်သမားများသို့ မိုး ၊ ဆောင်း စိုက်ပျိုးစရိတ်ချေးငွေများကို လယ်ယာ မြေလုပ်ပိုင်ခွင့်ပြုလက်မှတ် (ပုံစံ-၇) မူရင်းကို ဘဏ်သို့အပေါင် ( အာမခံ ) အဖြစ်ပေးအပ်၍ တစ်ဦးချင်း ကိုယ်တိုင် အာမခံသော စနစ်ဖြင့် လွယ်ကူရှင်းလင်းစွာ ထုတ်ချေးပေးပါသည် ။  အတိုးနှုန်း တစ်နှစ် ၅ % သာ ကောက်ခံပါသည်။  စပါးသီးနှံချေးငွေ တစ်ဧက ( ၁၅၀၀၀၀ ) နှုန်း အခြားသီးနှံများ တစ်ဧက ကျပ် ( ၁၀၀၀၀၀ ) နှုန်း နေကြာသီးနှံ တိုးချဲ့စိုက်ပျိုးရေး အထူးချေးငွေ တစ်ဧက ကျပ် ( ၁၀၀၀၀၀ ) နှုန်း </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 card-hover">
                <div class="mt-5">
                    <img class="card-img-top" src="village.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mt-3">ကျေးလက်စုဆောင်း အပ်ငွေလုပ်ငန်း</h5>
                        <p class="card-text mt-4">မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်၊ သက်ဆိုင်ရာ မြို့နယ်ဘဏ်ခွဲများတွင် တောင်သူလယ်သမား နှင့် ကျေးလက်နေပြည်သူများ ငွေစုစာရင်းဖွင့် လှစ်နိုင်ပါသည် ။ • စာရင်းဖွင့်လှစ်ရမည့် အနည်းဆုံး စာရင်းဖွင့် စု ဆောင်းငွေမှာ ကျပ် ၁၀၀၀၀/ ဖြစ်ပါသည် ။ • တောင်သူ၏ ငွေစုစာအုပ်တွင် စုဆောင်းငွေ အပေါ် အတိုးနှုန်းကို တစ်နှစ်လျှင် ၅% တွက် ချက်၍ စနစ်တကျ ထည့်သွင်းပေးလျက်ရှိ ပါသည်။ ငွေထုတ်ချေးရန်အတွက် ငွေစုစာရင်း မဖြစ် မနေဖွင့်လှစ်ရမည် ဖြစ်ပါသည်။ ချေးငွေထုတ် ချေးခြင်း မပြုလျှင်လည်း ဘဏ်တွင် ငွေစု ဆောင်းနိုင်ပါသည် ။ .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 card-hover">
                <div class="mt-5">
                    <img class="card-img-top" src="fam2.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mt-3">စိုက်ပျိုးစရိတ်ချေးငွေ ချေးယူရန် လိုအပ်သည့် အချက်များ</h5>
                        <p class="card-text mt-4">အချိန်စေ့ချေးငွေများ ပြေကျေရမည် ။ လယ်ယာမြေလုပ်ပိုင်ခွင့်ပြုလက်မှတ် (ပုံစံ-၇) မူရင်းကို မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ် သို့အပေါင်ပေးအပ်ရမည် ။ သက်ဆိုင်ရာ ခရိုင်/မြို့နယ် ဘဏ်ခွဲတွင် ငွေစု စာရင်း ဖွင့်ထားပြီးသူဖြစ်ရမည် ။  ချေးငွေ ရရှိနိုင်ရန်အတွက် မိမိနေထိုင်ရာ ရပ်ကွက်/ကျေးရွာအုပ်စုရှိ ချေးငွေစိစစ်ရေး အဖွဲ့နှင့် ဆက်သွယ်ဆောင်ရွက်ပါ ။</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-white pt-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <!-- Contact Info -->
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Tel : 01 8253175</p>
                    <p>E-mail : madb.it.mgr@e-mopf.gov.mm</p>
                </div>
                <!-- Quick Links -->
                <!-- Social Media -->
                <div class="col-md-4">
                    <h5>Address</h5>
                    <p>No#26/42, Pansodan Street (Lower Block).
                        Kyauktada Township, Yangon.
                        Myanmar.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row mt-1">
                <div class="col text-center">
                    <p>&copy;Thet suko final thesis project</p>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>