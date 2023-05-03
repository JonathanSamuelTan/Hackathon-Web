
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Payment.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Payment</title>
</head>
<body>
    <section id="price-info">
        <div id="price-information">
            <h2>Price Info</h2>
            <p>Early Bid (12 Maret - 12 April 2023) : Rp100.000,-</p>
            <p>Normal (13 April - 23 Juni 2023) : Rp200.000,-</p>
        </div>
    </section>
    <section id="contact-form">
        <div class="information-group">
            <div class="sign-up">
                <h2>Payment</h2>
            </div>
            <form  action="{{ route('payment.store', $user->id) }}" id="form1" class="form" onsubmit="return CheckInformationGroup()" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="input-group">
                        <label for="Norek">No Rekening</label>
                        <input type="text" name="NoRek" id="Norek" placeholder="Masukan No Rekening Anda">
                    </div>
                    <div class="input-group">
                        <label for="Bank">Bank</label>
                        <input type="text" name="bank" id="Bank" placeholder="Masukan Nama Bank Anda">
                    </div>
                    <div class="input-group">
                        <label for="rekBNCC">No Rekening Tujuan</label>
                       {{-- not fillable input field --}}
                        <input type="text" id="rekBNCC" placeholder="549731123 (BCA)" disabled>
                    </div>
                    <div class="input-group">
                        <label for="invoice">Upload Bukti Pembayaran</label>
                       {{-- not fillable input field --}}
                        <input type="file" name="invoice" id="invoice">
                    </div>
                    <div class="flex items-center justify-end mt-4 next">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('dashboard') }}">
                            {{ __('Back') }}
                        </a>
            
                        <x-primary-button class="ml-4 Next-Btn">
                            {{ __('Send') }}
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