<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Registration.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Registrasi Member</title>
</head>
<body>
    <section id="contact-form">
        <div class="information-group">
            <div class="sign-up">
                <h2>Registrasi Member</h2>
            </div>
            <form  action="store-member" method="POST" enctype="multipart/form-data" class="form" onsubmit="return Check()">
                @csrf
                <div class="tab">
                    <div class="input-group">
                        <label for="Nama-leader">Nama Member</label>
                        <input type="text" name="memberFullName" id="Nama-leader" placeholder="Tuliskan nama kamu!">
                    </div>
                    <div class="input-group">
                        <label for="Email">Email</label>
                        <input type="email" name="memberEmail" id="Email" placeholder="Tuliskan email kamu! (Cth: contoh@domain.com)" oninput="CheckEmail()">
                        <div class="symbol">
                            <div class="hide" id="Email-validation1">
                                There must be one @ symbol in your email
                            </div>
                            <div class="hide" id="Email-validation2">
                                There must be one fullstop after the @ symbol
                            </div>
                            <div class="hide" id="Email-validation3">
                                There must be a name before your @ symbol
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="NoWhatsapp">Nomor Whatsapp</label>
                        <input type="number" name="memberWA" id="NoWhatsapp" placeholder="Tuliskan nomor Whatsapp-mu! (Cth: 08xxxxxxxx)" oninput="CheckNumber()">
                        <div class="hide" id="NO-WA">
                            Your number should be atleast 9 digits
                        </div>
                    </div>
                    <div class="dua">
                        <div class="bagi-dua">
                            <label for="ID-Line">ID LINE</label>
                            <input type="text" name="memberLine" id="ID-Line" placeholder="Tuliskan ID LINE kamu!">
                        </div>
                        <div class="bagi-dua">
                            <label for="ID-Github">Link Github</label>
                            <input type="text" name="memberGithub" id="ID-Github" placeholder="cth: https://github.com/JhonDoe" pattern="https:\/\/github\.com\/\w+(?:\/\w+)?" />
                        </div>                        
                    </div>
                    <div class="next">
                        <button type="button" id="Next-Btn" class="Next-Btn" onclick="next_page(1)">Next &#62</button>
                        <button type="button" id="Back-Btn" class="Back-Btn" onclick="next_page(-1)"> &#60 Back </button>
                    </div>
                </div>
                <div class="tab">
                    <div class="dua">
                        <div class="bagi-dua">
                            <label for="Tempat-Lahir">Tempat Lahir
                            </label>
                            <div class="dropdown">
                                <input type="text" placeholder="-Pilih Provinsi-" readonly class="provinsi" id="tempat-lahir" name="birthPlace">
                                <div class="option">
                                    <div onclick="show('Nanggroe Aceh Darussalam')">Nanggroe Aceh Darussalam</div>

                                    <div onclick="show('Sumatera Utara')">Sumatera Utara</div>

                                    <div onclick="show('Sumatera Selatan')">Sumatera Selatan</div>

                                    <div onclick="show('Sumatera Barat')">Sumatera Barat</div>

                                    <div onclick="show('Bengkulu')">Bengkulu</div>

                                    <div onclick="show('Riau')">Riau</div>

                                    <div onclick="show('Kepulauan Riau')">Kepulauan Riau</div>

                                    <div onclick="show('Jambi')">Jambi</div>

                                    <div onclick="show('Lampung')">Lampung</div>

                                    <div onclick="show('Bangka Belitung')">Bangka Belitung</div>

                                    <div onclick="show('Kalimantan Barat')">Kalimantan Barat</div>

                                    <div onclick="show('Kalimantan Timur')">Kalimantan Timur</div>

                                    <div onclick="show('Kalimantan Selatan')">Kalimantan Selatan</div>

                                    <div onclick="show('Kalimantan Tengah')">Kalimantan Tengah</div>

                                    <div onclick="show('Kalimantan Utara')">Kalimantan Utara</div>

                                    <div onclick="show('Banten')">Banten</div>

                                    <div onclick="show('DKI Jakarta')">DKI Jakarta</div>

                                    <div onclick="show('Jawa Barat')">Jawa Barat</div>

                                    <div onclick="show('Jawa Tengah')">Jawa Tengah</div>

                                    <div onclick="show('DI Yogyakarta')">DI Yogyakarta</div>

                                    <div onclick="show('Jawa Timur')">Jawa Timur</div>

                                    <div onclick="show('Bali')">Bali</div>

                                    <div onclick="show('Nusa Tenggara Timur')">Nusa Tenggara Timur</div>

                                    <div onclick="show('Nusa Tenggara Barat')">Nusa Tenggara Barat</div>

                                    <div onclick="show('Gorontalo')">Gorontalo</div>

                                    <div onclick="show('Sulawesi Barat')">Sulawesi Barat</div>

                                    <div onclick="show('Sulawesi Tengah')">Sulawesi Tengah</div>

                                    <div onclick="show('Sulawesi Utara')">Sulawesi Utara</div>

                                    <div onclick="show('Sulawesi Tenggara')">Sulawesi Tenggara</div>

                                    <div onclick="show('Sulawesi Selatan')">Sulawesi Selatan</div>

                                    <div onclick="show('Maluku Utara')">Maluku Utara</div>

                                    <div onclick="show('Maluku')">Maluku</div>

                                    <div onclick="show('Papua Barat')">Papua Barat</div>

                                    <div onclick="show('Papua')">Papua</div>

                                    <div onclick="show('Papua Tengah')">Papua Tengah</div>

                                    <div onclick="show('Papua Pengunungan')">Papua Pengunungan</div>

                                    <div onclick="show('Papua Selatan')">Papua Selatan</div>

                                    <div onclick="show('Papua Barat Daya')">Papua Barat Daya</div>
                                </div> 
                            </div>
                        </div>
                        <div class="bagi-dua">
                            <label for="Tanggal-Lahir">Tanggal Lahir</label>
                            <input type="date" name="birthDate" id="Tanggal-Lahir" oninput="CheckDate()" required>
                            <div class="hide" id="date">You must be atleast 17 years old!</div>
                        </div>
                    </div>
                    <div class="dua">
                        <div class="bagi-dua">
                            <label for="CV">Curriculum Vitae</label>
                            <div class="drag-drop">
                                <input type="file" class="dropzone-input" id="Curriculum-Vitae" name="memberCV" required>
                            </div>
                        </div>
                        <div class="bagi-dua CV">
                            <label for="FlazzCard">Flazz Card / ID Card</label>
                            <div class="drag-drop1">
                                <input type="file" class="dropzone-input1" id="Flazz/ID" name="memberFlazz" required >
                            </div>
                        </div>
                    </div>
                    <div class="next">
                        <button type="submit" id="submit" class="submit">Confirm</button>
                        <button type="button" id="Back-Btn" class="Back-Btn" onclick="next_page(-1)"> &#60 Back </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="logo-regis">
            <img src="assets/logoRegis.png" width="205.74px" height="29.87px" alt="LogoTechnoscape2023">
        </div>
    </section>
    <script src="{{ asset('js/Registration.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>