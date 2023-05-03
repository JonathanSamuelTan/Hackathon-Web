
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Registration.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sign-Up Technoscape 2023</title>
</head>
<body>
    <section id="contact-form">
        <div class="information-group">
            <div class="sign-up">
                <h2>Sign Up</h2>
            </div>
            <form  action="{{ route('register') }}" id="form1" class="form" onsubmit="return CheckInformationGroup()" method="POST">
                @csrf
                <div>
                    <div class="input-group">
                        <label for="Nama-group">Nama Group</label>
                        <input type="text" name="name" id="Nama-group" placeholder="Tuliskan nama team kamu!">
                    </div>
                    <div class="input-group">
                        <label for="Password">Password</label>
                        <div class="password">
                            <input type="password" name="password" id="Password" placeholder="Tuliskan kata sandimu! (cth : b!Nu$123)" oninput="ValidationPassword()">
                            <span onclick="showPassword()">
                                <iconify-icon icon="ph:eye-closed-duotone" class="hidden-icon" id="hide1"></iconify-icon>
                                <iconify-icon icon="pepicons-pop:eye" class="hidden-icon" id="hide2"></iconify-icon>
                            </span>
                                <div class="hide" id="message1">
                                    Minimal Panjang 8 karakter
                                </div>
                                <div class="hide" id="message2">
                                    Harus ada huruf besar
                                </div>
                                <div class="hide" id="message3">
                                    Harus ada huruf kecil
                                </div>
                                <div class="hide" id="message4">
                                    Harus ada angka
                                </div>
                                <div class="hide" id="message5">
                                    Harus ada tanda
                                </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="Confirm-Password">Confirm Password</label>
                        <div class="password">
                            <input type="password" name="Confirm-Password" id="Confirm-Password" placeholder="Tuliskan ulang kata sandimu!" oninput="ValidationConfirmPassword()">
                            <span onclick="showPassword()">
                                <iconify-icon icon="ph:eye-closed-duotone" class="hidden-icon" id="hide3"></iconify-icon>
                                <iconify-icon icon="pepicons-pop:eye" class="hidden-icon" id="hide4"></iconify-icon>
                            </span>
                            <div class="hide" id="message6">
                                Password harus sama
                            </div>
                        </div>
                    </div>
                    <div class="input-group spacing">
                        <label for="binusian">Binusian / Non-Binusian</label>
                        <div class="radio-button">
                          <label class="radio-class">
                            <input type="radio" value="binusian" name="binusian" id="Binusian">
                            <span></span>
                            Binusian
                          </label>
                          <label class="radio-class">
                          <input type="radio" value="NonBinusian" name="binusian" id="Non-Binusian">
                            <span></span>
                            Non-Binusian
                          </label>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4 next">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
            
                        <x-primary-button class="ml-4 Next-Btn">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
        <div class="logo-regis">
            <img src="assets/logoRegis.png" width="205.74px" height="29.87px" alt="LogoTechnoscape2023">
        </div>
    </section>
    <script src="{{asset('Js/RegistrationInfoGroup.js')}}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>