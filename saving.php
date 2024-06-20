<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: blue;
            z-index: 1000;
        }
        .navbar-brand img {
            height: 40px;
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
            margin-right: 10px;
        }
        h1 {
            font-size: 50px;
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

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px gray;
        }

        .centered-paragraph {
            margin: 30px 0px 30px 0px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light p-4 custom-zindex">
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
                        <a class="nav-link active card-hover" aria-current="page" href="index.php">ပင်မစာမျက်နှာ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover" href="history.php">သမိုင်း</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover" href="service.php">၀န်ဆောင်မှု</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover" href="loan.php">ချေးငွေများ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-hover" href="saving.php">ငွေစုဆောင်းအပ်နှံခြင်း</a>
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
    <div class="card bg-dark text-white" style=" height: 1700px;">
        <img class="card-img" src="money.jpg" alt="Card image" style="width: auto; height: 1700px; filter: blur(10px);">
        <div class="card-img-overlay">
            <h1 class="text-center mt-4">ငွေစုဆောင်းအပ်နှံခြင်း</h1>
            <div class="row mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <p>ငွေစုသူများသတိပြုရန်</p>
                    <p> ၁။ ငွေသွင်း ငွေထုတ် ပြုတိုင်း ငွေစုစာအုပ်ကို ဘဏ်သိုယူလာပါ။</p>
                    <p> ၂။ ငွေထုတ်လျှင် နိုင်ငံသားမှတ်ပုံတင် ယူလာပါ။</p>
                    <p>၃။ ငွေထုတ်ပုံစံတွင် ရေးထိုးသည့် လက်မှတ်သည် ဘဏ်တွင်ပေးထားသည့်လက်မှတ်နမူနာနှင့် တူညီရပါမည်။</p>
                    <p>၄။ လိုအပ်၍ ငွေစုစာအုပ်ကို ဘဏ်တွင်အပ်နှံခဲ့ရပါက လက်ခံရရှိကြောင်းအတည်ပြုချက် ရယူပါ။</p>
                    <p>၅။ ငွေစုစာအုပ်အတွင်း ရေးသွင်းချက်များအား သေချာစွာစိစစ်ပါ။ ကွဲလွဲချက်များတွေ့ရှိပါက မန်နေဂျာထံသိုချက်ချင်းတွေ့ဆုံမေးမြန်းပါ။ </p>
                    <p>၆။ ငွေစုစာအုပ်ကို လုံခြုံစွာ သိမ်းထားပါ။ ပျောက်ဆုံးပါက ဘဏ်သို ချက်ချင်းအကြောင်းကြားပါ။ ပျက်ကွက်၍ မသမာမှုပေါ်ပေါက်လျှင် ဘဏ်မှတာဝန်မယူပါ။</p>
                    <p>၇။ ငွေစုဘဏ်စာရင်းနှင့် ပတ်သက်သည့် ဘဏ်၏တည်ဆဲနှင့် နောင်အခါအားလျော်စွာ ပြဌာန်းမည့် စည်းမျဉ်းစည်းကမ်း များကို လိုက်နာရမည်။</p>
                    <p>၈။ လက်ကျန်ငွေ အနည်းဆုံး ကျပ် ၁၀,၀၀၀/- ထားရမည်ဖြစ်ပြီး၊ ဘဏ်မှ ပြင်ဆင်သတ်မှတ်သည့်အတိုင်း လိုက်နာဆောင်ရွက်ရန် ဖြစ်ပါသည်။</p>
                    <p>၉။ ငွေစုစာအုပ်အတွင်းရှိ ဘဏ်၏ ရေးသွင်းချက်များကို ပြင်ဆင်ခြင်း ဖြည့်စွက်ခြင်းအား လုံးဝ ခွင့်မပြုပါ။</p>
                    <p>၁၀။ ငွေထုတ်လွှာများပေါ်တွင် ကြိုတင်လက်မှတ်ရေးထိုးထားခြင်းမှ ရှောင်ကြည်ပါ။ ကိုယ်စားလှယ်ဖြင့် ငွေထုတ်ပါက ၎င်း၏ထိုးမြဲ လက်မှတ်ကို မိမိရှေ့တွင် ရေးထိုးစေပြီးမှ မှန်ကန်ကြောင်းအတည်ပြုပါ။</p>
                </div>
            </div>

            <div class="row mt-5 mb-3">
                <div class="col-3"></div>
                <div class="col-3">
                    <img src="office.jpg" style="border-radius: 100%;width: 350px; height: 350px;">
                </div>
                <div class="col-3">
                    <img src="b1.jpg" style="border-radius: 100%; width: 350px; height: 350px;">
                </div>
                <div class="col-3"></div>
            </div>

            <div class="container">
                <h2 class="centered-paragraph mt-5">ငွေစုစာရင်းအမျိုးအစားများ</h2>
                <div class="mr-5">
                    <h4 class="ml-5">မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်မှ လက်ခံဆောင်ရွက်ပေးနေသော ငွေစုစာရင်းအမျိုးအစားများမှာ –</h4>
                    <ul>
                        <li>တစ်ဦးချင်းစာရင်းအမျိုးအစား</li>
                        <li>ပူးတွဲစာရင်းအမျိုးအစား</li>
                    </ul>
                </div>
            </div>
            <div class="container mt-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="">
                                <div class="border" style="width: 100%; height: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">တစ်ဦးချင်းစာရင်းဖွင့်ခြင်း</h5>
                                        <p class="card-text text-sm mt-2">
                                            <ul>
                                                <li>မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်၊ သက်ဆိုင်ရာ မြို့နယ်ဘဏ်ခွဲများတွင် တောင်သူ လယ်သမား နှင့် ကျေးလက်နေပြည်သူများ ငွေစုစာရင်းဖွင့် လှစ်နိုင်ပါသည်။ စာရင်းဖွင့်လှစ်ရမည့် အနည်းဆုံး စာရင်းဖွင့် စုဆောင်းငွေမှာ ကျပ် ၁၀၀၀၀/- ဖြစ်ပါသည်။</li>
                                                <li>တောင်သူ၏ ငွေစုစာအုပ်တွင် စုဆောင်းငွေအပေါ် အတိုးနှုန်းကို တစ်နှစ်လျှင် ၅ % တွက်ချက်၍ စနစ်တကျ ထည့်သွင်းပေးလျက် ရှိပါသည်။</li>
                                                <li>ငွေထုတ်ချေးရန်အတွက် ငွေစုစာရင်း မဖြစ်မနေဖွင့်လှစ်ရမည် ဖြစ်ပါသည်။ ချေးငွေ ထုတ်ချေးခြင်း မပြုလျှင်လည်း ဘဏ်တွင် ငွေစုဆောင်းနိုင်ပါသည်။</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="">
                                <div class="border" style="width: 100%; height: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">ပူးတွဲငွေစာရင်းဖွင့်ခြင်း</h5>
                                        <p class="card-text text-sm mt-2">
                                            <ul>
                                                <li>ပူးတွဲငွေစုစာရင်းဖွင့်လိုသူများ၏ လျှောက်လွှာ။</li>
                                                <li>ပူးတွဲငွေစုစာရင်းဖွင့်မည့်သူများ၏ မှတ်ပုံတင် မိတ္တူ ( မူရင်းပူးတွဲတင်ပြရပါမည် )။</li>
                                                <li>လိုင်စင်ဓာတ်ပုံ – ရောင်စုံ ( ၁ ) ပုံ [ ကိုယ်ရေးအချက်အလက်ပုံစံ ဖြည့်သွင်းရာတွင် အသုံးပြုရန် ]</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon text-success"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon  text-success"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
 
  
    <footer class="footer text-white pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <!-- Contact Info -->
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Tel : 01 8253175</p>
                    <p>E-mail : madb.it.mgr@e-mopf.gov.mm</p>
                </div>
                <!-- Address -->
                <div class="col-md-4">
                    <h5>Address</h5>
                    <p>No#26/42, Pansodan Street (Lower Block). Kyauktada Township, Yangon. Myanmar.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row mt-1">
                <div class="col text-center">
                    <p>&copy; Thet suko final thesis project</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
     

</body>
</html>