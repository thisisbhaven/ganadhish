<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>गणाधीश</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">होम</a>
            @else
                <a href="{{ route('login') }}">लॉग इन</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <img src="img/logo.png" width="250px" height="250px">
        </div>
        <h2>गणेशोत्सव स्पर्धा</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div>
                        <p>सांस्कृतिक वातावरणामुळे महाराष्ट्राला इतर राज्यांच्या तुलनेत महत्त्वाचे स्थान आहे. राज्यात सण-उत्सवांना सांस्कृतिकदृष्टय़ा महत्त्व असले तरी सामाजिक भावनाही त्यातून जपली जाते. या संदर्भात महत्त्वाचे पाऊल म्हणजे पर्यावरणपूरक गणेशोत्सव साजरा करण्याचा आग्रह. याला बळ मिळावे, पर्यावरणरक्षणाचा ध्यास तळागाळापर्यंत पोहोचावा म्हणून पर्यावरणरक्षणाच्या प्रचार आणि प्रसारासाठी “मिठालाल आणि भरत क्रिकेट व स्पोर्ट्स ट्रस्ट” आणि “मिरा भाईंदर लाइव” यांच्या संयुक्त विद्यमाने या वर्षीही ‘पर्यावरणस्नेही घरगुती आणि सार्वजनिक मंडळ गणेशोत्सव स्पर्धा २०१९’ आयोजित करण्यात आली आहे.</p>
                        <hr>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4>स्पर्धेचे स्वरुप आणि नियमावली</h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body" style="text-align: left">
                                        <ol>
                                            <li>स्पर्धेचे स्वरुप</li>
                                            <ul>
                                                <span><b>समीक्षकांची निवड | घरगुती आणि सार्वजनिक मंडळ</b></span>
                                                <li>मूर्ती</li>
                                                <li>सजावट आणि पद्धत</li>
                                                <ul>
                                                    <li>रात्र जागवायची पद्धत</li>
                                                    <li>सामाजिक कार्य</li>
                                                    <li>विसर्जनाची पद्धत</li>
                                                </ul>
                                                <br>
                                                <span><b>लोकांची निवड | घरगुती आणि सार्वजनिक मंडळ</b></span>
                                                <li>ऑनलाईन मतदान</li>
                                            </ul>
                                            <li>स्पर्धा २ सप्टेंबर, २०१९ ते १२ सप्टेंबर, २०१९ या कालावधीत पार पाडण्यात येईल</li>
                                            <li>स्पर्धेत सहभागी होण्यासाठी ऑनलाइन नोंदणी असेल</li>
                                            <li>नोंदणी करण्याची तारीख २२ ऑगस्ट, २०१९ ते ३१ ऑगस्ट, २०१९ असेल</li>
                                            <li>जे मंडळ किंवा घरगुती गणपती ऑनलाईन नोंदणी करतील त्यांनाच स्पर्धेत सहभागी होता येईल</li>
                                            <li>स्पर्धेचे परिक्षण ऑनलाईन प्रक्रियेद्वारे केले जाईल</li>
                                            <li>स्पर्धेचे परिक्षण खालीलप्रमाणे</li>
                                            <ul>
                                                <li>मूर्ती : मूर्तीचे डोळे, मूर्तीचे वेगळेपण, मुर्तीची ऊँची</li>
                                                <li>सजावट : सामाजिक संदेश, पारंपारिकता, पर्यावरण हितपर, टाकाऊ पासून टिकाऊ, मूर्तीला साजेशी सजावट</li>
                                            </ul>
                                            <li>मूर्ती आणि सजावटीशी निगडीत किमान ५ ते कमाल १० स्पष्ट आणि चांगले फोटो अपलोड करावे</li>
                                            <li>विजयी स्पर्धकाला सन्मानचिन्ह व रोखरक्कम दिले जाईल</li>
                                            <li>सहभागी झालेल्या प्रत्येक सदस्याला/मंडळाला सहभाग प्रमाणपत्र दिले जाईल</li>
                                            <li>या स्पर्धेचा पारितोषिक वितरण समारंभ दिनांक १५ सप्टेंबर, २०१९ रोजी असेल</li>
                                            <li>पारितोषिके</li>
                                            <ul>
                                                <b><li>समीक्षकांची निवड</li></b>
                                                <ul>
                                                    <li>घरगुती</li>
                                                    <ol>
                                                        <li>मूर्ती - (३ पारितोषिके)</li>
                                                        <li>सजावट - (३ पारितोषिके)</li>
                                                        <li>सर्वांगीण - (१ पारितोषिक)</li>
                                                    </ol>
                                                    <li>सार्वजनिक</li>
                                                    <ol>
                                                        <li>मूर्ती</li>
                                                        <ul>
                                                            <li>इको फ्रेंडली - (३ पारितोषिके)</li>
                                                            <li>प्लास्टर ऑफ पॅरिस - (३ पारितोषिके)</li>
                                                        </ul>
                                                        <li>सजावट - (३ पारितोषिके)</li>
                                                        <li>सर्वांगीण - (१ पारितोषिक)</li>
                                                    </ol>
                                                </ul>
                                                <b><li>लोकांची निवड (फिरती ट्रॉफी)</li></b>
                                                <ul>
                                                    <li>घरगुती - (१ पारितोषिक)</li>
                                                    <li>सार्वजनिक - (१ पारितोषिक)</li>
                                                </ul>
                                            </ul>
                                            <li>परीक्षकांचा निर्णय अंतिम राहील</li>
                                            <li>नोंदणी करण्यासाठी <a href="https://mithalalandbharat.org">mithalalandbharat.org</a> या वेबसाइट वर जा</li>
                                            <li>अधिक माहिती साठी संपर्क साधा : <span>पूजा सावंत : ९३२४ ०१६ ४०४</span> | <span>मितेश मालुसरे : ८३६९०३७९९६</span></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
