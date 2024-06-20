<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><style>
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
                font-size: 30px; /* Adjust the font size as needed */
                text-align: center;
                font-weight: bold;
            }
      .spanc{
            color:blue;
        }
        .img-custom {
                width: 450px;
                height: 450px;
            }  
            .card-title{
                color: blue;

            }    
            
            .fixed-margin {
            margin-left:200px; /* Adjust the value as needed */
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px gray;
        }

        .footer{
                background-color: blue;
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
    <div class="container mt-5">
        <h1>ဟင်္သာတခရိုင်မှ ရရှိနိုင်သော ချေးငွေများ</h1>
        <h4 class="mt-5 text-center">တောင်သူလယ်သမားများအတွက် မြန်မာ့လယ်ယာဖွံ့ဖြိုးရေးဘဏ်၏ စိုက်ပျိုးစရိတ်ချေးငွေများမှာ –</h4>
        
            <div class="fixed-margin mt-4">
             <div>
                <ul >
                    <li>မိုးချေးငွေ</li>
                    <li>ဆောင်းချေးငွေ</li>
                </ul>
             </div>
            </div>
        
        <div class="row mt-5">
            <div class="col-md-2"></div>
          
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="rain.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">မိုးချေးငွေ</h5>
                  <p class="card-text text-sm">၂၀၂၃ – ၂၀၂၄ ဘဏ္ဍာရေးနှစ်တွင် ဆောင်းရာသီစိုက်ပျိုးစရိတ်ချေးငွေများ....</p>
                  <a href="rain1.php" class="btn btn-primary  btn-sm">ဆက်ကြည့်ရန်</a>
                </div>
              </div>
            </div>
    
            <div class="col-md-1"></div>
                <div class="col-md-5">

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="winter.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">ဆောင်းချေးငွေ</h5>
                  <p class="card-text text-sm">၂၀၂၃ – ၂၀၂၄ ဘဏ္ဍာရေးနှစ်တွင် ဆောင်းရာသီစိုက်ပျိုးစရိတ်ချေးငွေများ...</p>
                  <a href="winter.php" class="btn btn-primary btn-sm">ဆက်ကြည့်ရန်</a>
                </div>
              </div>
            </div>
        
            </div>  


    </div>     
    
    <footer class="footer text-white pt-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
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
                
                <div class="col-md-2">
                    
                </div>
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
