<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
    <script src="{{asset("js/home.js")}}" defer></script>
</head>
<body>
    <div class="navbar" id="navbar">
        <div class="navlogo">
            {{-- <img src="./Logo Hackathon.png" width="140px"> --}}
            <img src="{{asset('assets/Logo Hackathon.png')}}" width="140px">
        </div>
        <div class="navmid">
            <a href="#prize">Champion Prizes</a>
            <a href="#mentor">Mentor & Jury</a>
            <a href="#about">About</a>
            <a href="#faq">FAQ</a>
            <a href="#timeline">Timeline</a>
        </div>

        @if (Auth::check())
            <div class="navright-container">
                <div class="navright">
                    <a href="/dashboard">Dashboard</a>
                </div>
                <div class="navright">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
            </div>
        @else
            <div class="navright-container">
                <div class="navright">
                    <a href="/register">Sign In</a>
                </div>
                <div class="navright">
                    <a href="/login">Login</a>
                </div>
            </div>
        @endif


    </div>   
    <section class="landing">
        <h1>HACKATHON 6.0</h1>
        <p>Codename: Social Impact.</p>
        <div class="kanan">
            <img src="{{asset('assets/kanan.png')}}" style="width: 330px;">
        </div>
        <div class="kiri">
            <img src="{{asset('assets/kiri.png')}}" style="width: 390px;">
        </div>
    </section>

    <section class="recap">
        <h2>Hackathon 5.0 Recap</h2> <br>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/I78b2lpYnu8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
        </div>
        
    </section>
    <br/>
    <br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


    <section class="prizes" id="prize">
        <h2>Champion Prizes</h2>
        <div class="topthree">
            <div class="cup">
                <div class="silver">
                    <img src="{{asset('assets/silver cup.png')}}" style="width: 350px; height: 334px;">
                    <div class="box">
                        <h4>2nd Place</h4>
                        <h5>Rp2.250.000</h5>
                        <p>+Merchandise</p>
                        <p>+Certificate</p>
                    </div>
                </div>
                <div class="gold">
                    <img src="{{asset('assets/golden cup.png')}}" style="width: 400px; height: 382px;">
                    <div class="box">
                        <h4>1st Place</h4>
                        <h5>Rp4.000.000</h5>
                        <p>+Merchandise</p>
                        <p>+Certificate</p>
                    </div>
                </div>
                <div class="bronze">
                    <img src="{{asset('assets/bronze cup.png')}}" style="width: 310px; height: 296px;">
                    <div class="box">
                        <h4>3rd Place</h4>
                        <h5>Rp1.500.000</h5>
                        <p>+Merchandise</p>
                        <p>+Certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <section class="mentor">
        <h2>Mentor & Jury</h2>
        <br/>
        <div class="tulisanh2">
            <p>Our Judges</p>
        </div>
        <!--Ini buat yang judge-->
        <div class="judge">
            <div class="mentor_box">
                <div class="mentor_foto">
                    <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                </div>
                <div class="tulisan">
                    <h3>David Brendi</h3>
                    <div class="utube">
                        <p>Youtuber at </p>
                        <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                    </div>
                </div>
            </div>
            <div class="mentor_box">
                <div class="mentor_foto">
                    <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                </div>
                <div class="tulisan">
                    <h3>David Brendi</h3>
                    <div class="utube">
                        <p>Youtuber at </p>
                        <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                    </div>
                </div>
            </div>
            <div class="mentor_box">
                <div class="mentor_foto">
                    <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                </div>
                <div class="tulisan">
                    <h3>David Brendi</h3>
                    <div class="utube">
                        <p>Youtuber at </p>
                        <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                    </div>
                </div>
            </div>
        </div>
        <!--End judge-->

        <!--Ini buat yang mentor-->
        <div class="ourmentor" id="mentor">
            <div class="tulisanh3">
                <p>Our Mentors</p>
            </div>
            <br/>
            <div class="mentorcard">
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mentorcard2">
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mentorcard3">
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
                <div class="mentor_box">
                    <div class="mentor_foto">
                        <img src="{{asset('assets/dapid.png')}}" style="width: 286px;">
                    </div>
                    <div class="tulisan">
                        <h3>David Brendi</h3>
                        <div class="utube">
                            <p>Youtuber at </p>
                            <img src="{{asset('assets/gadgetin.png')}}" style="width: 60px; height: 15px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <section class="about">
        <div class="kiri">
            <img src="{{asset('assets/kiri.png')}}" style="width: 330px;">
        </div>
        <h2 id="about">About Hackathon</h2>
        <div class="kanan">
            <img src="{{asset('assets/kanan.png')}}" style="width: 390px;">
        </div>
        <div class="tulisanabout">
            <p>Hackthon 6.0
            merupakan kompetisi coding online selama 36 jam, di mana setiap tim bersaing untuk membuat aplikasi atau situs web inovatif yang dapat memecahkan permasalahan dalam kehidupan nyata. Para peserta juga berkesempatan untuk berinteraksi dengan para mentor dalam sesi mentoring.</p>
        </div>
        <div class="border">
            <div class="regis">
                <a href="#">Register Now</a>
            </div>
        </div>
        <p class="blue">Ada sesuatu yang tidak kamu mengerti?</p>
        <p class="dapat">Dapatkan Guidebook Hackathon disini!</p>
        <div class="download">
            <a href="#">Download</a>
        </div>
    </section>
    <section class="why">
        <h2>Why you should join hackathon?</h2>
        <div class="cardsection">
            <div class="card">
                <img src="{{asset('assets/icon kolaborasi.png')}}" style="width: 183px;">
                <h2>Kolaborasi</h2>
                <p>Hackathon memberikan kesempatan untuk bekerja dengan orang-orang dari latar belakang yang berbeda dan belajar bagaimana berkolaborasi secara efektif dalam sebuah tim.</p>
            </div>
            <div class="card">
                <img src="{{asset('assets/icon kolaborasi.png')}}" style="width: 183px;">
                <h2>Networking</h2>
                <p>Hackathon adalah peluang bagus untuk bertemu individu yang berpikiran sama dan membangun jaringan profesional.</p>
            </div>
            <div class="card">
                <img src="{{asset('assets/icon carrerdev.png')}}" style="width: 183px;">
                <h2>Career Development</h2>
                <p>Berpartisipasi dalam hackathon dapat membantu kamu membuat resume dan menambah value CV-mu lho!</p>
            </div>
        </div>
        <div class="cardsection2">
            <div class="card">
                <img src="{{asset('assets/icon seru.png')}}" style="width: 141px;">
                <h2>Seru</h2>
                <p>Hackathon sangat menyenangkan! Hackathon adalah cara yang bagus untuk menghilangkan rutinitas kerja harian yang monoton dan ingin mencoba sesuatu yang baru.</p>
            </div>
            <div class="card">
                <img src="{{asset('assets/icon belajar.png')}}" style="width: 126px;">
                <h2>Belajar</h2>
                <p>Hackathon adalah acara berintensitas tinggi yang dapat membantu kamu mempelajari keterampilan dan teknologi baru dengan cepat.</p>
            </div>
        </div>
    </section>

    <section class="faq" id="faq">
            <h2>Frequently Asked Question</h2>
            <div class="rowbox">
                <a href="#">
                    <div class="qnabox">
                        <p>Apa saja syarat untuk berpartisipasi dalam Hackathon 6.0?</p>
                        <img src="{{asset('assets/ic_baseline-add-circle-outline.png')}}" style="width: 20px;">
                    </div>
                </a>
            </div>
            <div class="rowbox">
                <a href="#">
                    <div class="qnabox">
                        <p>Apakah saya boleh berpartisipasi jika saya tidak memiliki dasar pemrograman?</p>
                        <img src="{{asset('assets/ic_baseline-add-circle-outline.png')}}" style="width: 20px;">
                    </div>
                </a>
            </div>
            <div class="rowbox">
                <a href="#">
                    <div class="qnabox">
                        <p>Kapan batas waktu untuk pendaftaran Hackathon 6.0?</p>
                        <img src="{{asset('assets/ic_baseline-add-circle-outline.png')}}" style="width: 20px;">
                    </div>
                </a>
            </div>
            <div class="rowbox">
                <a href="#">
                    <div class="qnabox">
                        <p>Bagaimana dengan biaya pendaftaran saya apabila saya tidak lolos seleksi untuk Hackathon 6.0?</p>
                        <img src="{{asset('assets/ic_baseline-add-circle-outline.png')}}" style="width: 20px;">
                    </div>
                </a>
            </div>
            <div class="rowbox">
                <a href="#">
                    <div class="qnabox">
                        <p>Bagaimana dengan biaya pendaftaran saya jika saya lolos seleksi untuk Hackathon 6.0, tetapi saya tidak ingin melanjutkannya?</p>
                        <img src="{{asset('assets/ic_baseline-add-circle-outline.png')}}" style="width: 20px;">
                    </div>
                </a>
            </div>
    </section>
    <section class="timeline" id="timeline">
        <h2>Timeline</h2>
        <div class="timelinebox">
            <div class="tbox">
                <div class="img">
                    <img src="{{asset('assets/opreg.png')}}" style="width: 100px;">
                </div>
            </div>
            <div class="tbox">
                <div class="img">
                    <img src="{{asset('assets/closereg.png')}}" style="width: 100px;">
                </div>
            </div>
            <div class="tbox">
                <div class="img">
                    <img src="{{asset('assets/tm.png')}}" style="width: 100px;">
                </div>
            </div>
            <div class="tbox">
                <div class="img">
                    <img src="{{asset('assets/compeday.png')}}" style="width: 100px;">
                </div>
            </div>
        </div>
        <div class="ttext">
            <div class="spacetext">
                <h5>Open Registeration</h5>
                <p>Minggu, 12 Maret 2023</p>
            </div>
            <div class="spacetext">
                <h5>Closed Registeration</h5>
                <p>Kamis, 23 Juni 2023</p>
            </div>
            <div class="spacetext">
                <h5>Technical Meeting</h5>
                <p>Jumat, 24 Juni 2023</p>
            </div>
            <div class="spacetext">
                <h5>Competition Day</h5>
                <p>Sabtu, 25 Juni 2023</p>
            </div>
        </div>
        <div class="zoom">
            <img src="{{asset('assets/location.png')}}" style="width: 14px; height: 18px;">
            <p>Zoom Meeting</p>
        </div>
        <div class="zoom1">
            <img src="{{asset('assets/location.png')}}" style="width: 14px; height: 18px;">
            <p>Zoom Meeting</p>
        </div>
    </section>
    <br/>
    <section class="sponsor">
        <h2>Sponsors</h2>
        <div class="content">
            <div class="platinum">
                <h3>Platinum</h3>
                <br/>
                <img src="{{asset('assets/logo apple.svg')}}" style="width: 170px;">
            </div>
            <div class="skiri">
                <img src="{{asset('assets/kiri.png')}}" style="width: 360px;">
            </div>
            <div class="sgold">
                <h3>Gold</h3>
                <br/>
                <div class="gambar">
                    <img src="{{asset('assets/logo intel.svg')}}" style="width: 180px;">
                    <img class="google" src="{{asset('assets/logo google.svg')}}" style="width: 230px;">
                </div>
            </div>
            <div class="skanan">
                <img src="{{asset('assets/kanan.png')}}" style="width: 360px;">
            </div>
            <div class="ssilver">
                <h3>Silver</h3>
                <br/>
                <div class="gambar">
                    <img src="{{asset('assets/logo hewlettpackard.svg')}}" style="width: 50px;">
                    <img src="{{asset('assets/logo blackrock.svg')}}" style="width: 270px;">
                    <img src="{{asset('assets/logos_microsoft.svg')}}" style="width: 170px;">
                </div>
            </div>
        </div>
        
    </section>
    <section class="media_partner">
        <h2>Media Partner</h2>
        <div class="medparcontent">
            <div class="medparline1">
                <img src="{{asset('assets/bbc.svg')}}" style="width: 100px;">
                <img src="{{asset('assets/fox.svg')}}" style="width: 70px;">
                <img src="{{asset('assets/net.svg')}}" style="width: 75px;">
                <img src="{{asset('assets/nyt.svg')}}" style="width: 34px;">
                <img src="{{asset('assets/transmedia.svg')}}" style="width: 225px;">
                <img src="{{asset('assets/prambors.svg')}}" style="width: 45px;">
            </div>
            <div class="medparline2">
                <img src="{{asset('assets/binustv.png')}}" style="width: 90px;">
                <img src="{{asset('assets/Kompas.svg')}}" style="width: 130px;">
                <img src="{{asset('assets/Liputan6.svg')}}" style="width: 205px;">
                <img src="{{asset('assets/cnn.svg')}}" style="width: 64px;">
                <img src="{{asset('assets/natgeo.svg')}}" style="width: 25px;">
            </div>
            <div class="medparline3">
                <img src="{{asset('assets/cnbc.svg')}}" style="width: 40px;">
                <img src="{{asset('assets/detikcom.png')}}" style="width: 130px; height: 27px;">
                <img src="{{asset('assets/folkative.png')}}" style="width: 130px;">
                <img src="{{asset('assets/filemagz.png')}}" style="width: 121px;">
                <img src="{{asset('assets/idntimes.png')}}" style="width: 135px;">
            </div>
        </div>
    </section>
    <section class="other">
        <h2>Other Events</h2>
        <div class="ocontent">
            <div class="obox">
                <img src="{{asset('assets/vircon bg.jpg')}}" width="487px;" height="500px;">
                <h4>VIRTUAL CONFERENCE</h4>
                <h4>- TECHNOSCAPE 2023</h4>
                <div class="oregis">
                    <a href="#">
                        <p>Register Now</p>
                    </a>
                </div>
            </div>
            <div class="obox">
                <img src="{{asset('assets/workshop bg.jpg')}}" width="487px;" height="500px;">
                <h4>DEVELOPER WORKSHOP</h4>
                <h4>- TECHNOSCAPE 2023</h4>
                <div class="oregis">
                    <a href="#">
                        <p>Register Now</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="contactform">
        <h2>Contact Us</h2>
        <div class="iniform">
            <div class="tulisandiform">
                <h3>Butuh bantuan kami?</h3>
            <p>Tulisakan pesanmu disini dan akan kami jawab segera</p>
            </div>
            <form action="#" class="form1">
                <div class="input-group">
                    <label for="name">Nama</label><br>
                        <input type="text" name="fname" id="fname" placeholder="Tulisakan nama kamu!">
                    
                </div>
                <div class="input-group">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" placeholder="Tuliskan alamat email kamu!">
                </div>
                <div class="input-group">
                    <label for="text">Subject</label><br>
                    <input type="text" name="text" id="subject" placeholder="Tuliskan subject kamu!">
                </div>
                <div class="input-group">
                    <label for="message">Message</label><br>
                    <textarea name="massage" id="massage" rows="6" placeholder=" Tulisankan pesanmu!" style="width: 102%;"></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>
    <!--Ini footer-->
    <section class="footer">
        <div id="line">
            <div class="linekiri">
                <p>Get connected with us on social networks!</p>
            </div>
            <div class="linekanan">
                <a href="#">
                    <iconify-icon icon="ic:baseline-facebook" style="color: white; width: 28px;"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="ph:instagram-logo" style="color: white; width: 28px;"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="ant-design:twitter-circle-filled" style="color: white; width: 28px;"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="mdi:linkedin" style="color: white; width: 28px;"></iconify-icon>
                </a>
            </div>
        </div>
        
        <div id="footerbawah">
            <div class="bagianatas">
                <img src="{{asset('assets/logo technoscape.svg')}}" style="width: 212px;">
            </div>
            <div class="bagianbawah">
                <div class="bagiankanan">
                    <div class="power">
                        <p>Powered by</p>
                        <img src="{{asset('assets/bncclogo - Edited.png')}}" style="width: 110px;">
                    </div>
                    <div class="sponsored">
                        <p>Sponsored by</p>
                        <div class="atas">
                            <img src="{{asset('assets/logo intel.svg')}}" style="width: 51px;">
                            <img src="{{asset('assets/logos_microsoft.svg')}}" style="width: 75px;">
                        </div>
                        <div class="bawah">
                            <img src="{{asset('assets/logo hewlettpackard.svg')}}" style="width: 20px;">
                            <img src="{{asset('assets/logo blackrock.svg')}}" style="width: 18px;">
                            <img src="{{asset('assets/logo google.svg')}}" style="width: 75px;">
                        </div>
                    </div>
                    <div class="medpar">
                        <p>Media Partner</p>
                        <div class="atas">
                            <img src="{{asset('assets/bbc.svg')}}" style="width: 42px;">
                            <img src="{{asset('assets/fox.svg')}}" style="width: 28px;">
                            <img src="{{asset('assets/net.svg')}}" style="width: 29px;">
                            <img src="{{asset('assets/nyt.svg')}}" style="width: 12px;">
                            <img src="{{asset('assets/transmedia.svg')}}" style="width: 99px;">
                            <img src="{{asset('assets/prambors.svg')}}" style="width: 14px;">
                        </div>
                        <div class="tengah">
                            <img src="{{asset('assets/Liputan6.svg')}}" style="width: 83px;">
                            <img src="{{asset('assets/binustv.png')}}" style="width: 43px;">
                            <img src="{{asset('assets/Kompas.svg')}}" style="width: 64px;">
                            <img src="{{asset('assets/cnn.svg')}}" style="width: 28px;">
                            <img src="{{asset('assets/natgeo.svg')}}" style="width: 11px;">
                        </div>
                        <div class="bawah">
                            <img src="{{asset('assets/cnbc.svg')}}" style="width: 17px;">
                            <img src="{{asset('assets/detikcom.png')}}" style="width: 64px">
                            <img src="{{asset('assets/folkative.png')}}" style="width: 57px;">
                            <img src="{{asset('assets/idntimes.png')}}" style="width: 72px;">
                            <img src="{{asset('assets/filemagz.png')}}" style="width: 46px;">
                        </div>
                    </div>
                </div>
                <div class="bagiankiri">
                    <div class="link">
                        <h3>Links</h3>
                        <a href="#">Home</a><br>
                        <a href="#">Champion Prizes</a><br>
                        <a href="#">Mentor & Jury</a><br>
                        <a href="#">About</a><br>
                        <a href="#">FAQ</a><br>
                        <a href="#">Timeline</a>
                    </div>
                    <div class="contactAndSupport">
                        <div class="contact">
                        <h3>Contact Us</h3>
                            <div class="contactAtas">
                                <iconify-icon icon="ic:baseline-whatsapp" style="width: 15px;"></iconify-icon>
                                <a href="#">+62 XXXX XXXX</a>
                            </div>
                            <div class="contactBawah">
                                <iconify-icon icon="mdi:gmail" style="width: 15px;"></iconify-icon>
                                <a href="#">cs@technoscapebncc.co</a>
                            </div>
                        </div>
                        <div class="support">
                            <h3>Support</h3>
                            <u>Privacy Policy</u>
                            <u>Terms of Service</u>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="closing">
            <p class="ts">@2023 TechnoScape </p>
            <p class="rights">| All rights reserved.</p>
        </div>
        
    </section>

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>