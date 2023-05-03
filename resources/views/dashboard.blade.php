<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Technoscape 2023</title>
    <link rel="stylesheet" href="{{asset('css/userDashboard.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>
   <section id="hero-section">
        <section id="dashboard" class="container-fluid d-flex justify-content-center">
            <i class="bi bi-list"></i>
            <div id="dashboard-extend" style="color: white">
                <h1>Dashboard</h1>
                <div>
                    <a href="{{route('home')}}" style="text-decoration: none;">Home</a>
                </div>
                <div>
                    <a href="/payment" style="text-decoration: none;">Payment</a>
                </div>
                <div>
                   {{-- logout --}}
                     <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a style="text-decoration: none" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                         this.closest('form').submit();">
                            {{ __('Log Out') }}
                      </a>
                </div>
            </div>
        </section>

        <section id="hero-content">
            <nav id="navbar">
                <div class="text-awal">
                    <h2>Welcome, {{Auth::user()->name}}</h2>
                </div>
                <div class="text-akhir">
                    <a href="create-member" class="text-akhir" style="text-decoration: none;">
                        Add Member
                    </a>
                </div>
            </nav>
            <section id="content-content">
                <div class="divider">
                    <div class="display-leader">
                        <div class="display-leader-content">
                            <h1>Leader</h1>
                            <div class="input-group">
                                <h1>Name</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderName}}</h2>
                                </div>
                            </div>
                            <div class="input-group">
                                <h1>Email</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderEmail}}</h2>
                                </div>
                            </div>
                            <div class="input-group">
                                <h1>Whatsapp</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderWA}}</h2>
                                </div>
                            </div>
                            <div class="input-group">
                                <h1>Line ID</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderLine}}</h2>
                                </div>
                            </div>
                            <div class="logo-github">
                                <a href="{{$leader->leaderGithub}}">
                                    <iconify-icon icon="uiw:github" class="iconify-icon" height="30px"></iconify-icon>
                                </a>
                                <div class="button-view">
                                    <a href="{{ route('leaders.cv', ['leader' => $leader->id]) }}" target="_blank">View CV</a>
                                    <a href="{{ route('leaders.flazz', ['leader' => $leader->id]) }}" target="_blank">View Flazz</a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                    <?php $i = 1; ?>
                    @foreach($member as $m)
                        <div class="display-leader">
                            <div class="display-leader-content">
                                <h1>Member - {{$i}}</h1>
                                <div class="input-group">
                                    <h1>Name</h1>
                                    <div class="box">
                                        <h2>{{$m->memberFullName}}</h2>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h1>Email</h1>
                                    <div class="box">
                                        <h2>{{$m->memberEmail}}</h2>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h1>Whatsapp</h1>
                                    <div class="box">
                                        <h2>{{$m->memberWA}}</h2>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h1>Line ID</h1>
                                    <div class="box">
                                        <h2>{{$m->memberLine}}</h2>
                                    </div>
                                </div>
                                <div class="logo-github">
                                    <a href="{{$m->memberGithub}}">
                                        <iconify-icon icon="uiw:github" class="iconify-icon" height="30px"></iconify-icon>
                                    </a>
                                    <div class="button-view">
                                        <a href="{{ route('members.cv', ['member' => $m->id]) }}" target="_blank">View CV</a>
                                        <a href="{{ route('members.flazz', ['member' => $m->id]) }}" target="_blank">View Flazz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    @endforeach
                </div>
                <div class="divider">
                    @if(Auth::user()->verified == 1)
                        <div class="box2" style="border: 1px solid green;">
                            <iconify-icon icon="bi:check-circle-fill" style="color: green;" width="33.59" height="33.59"></iconify-icon>
                            <p style="color: green;">Your payment is confirmed</p>
                        </div>
                    @else
                        <div class="box2" style="border: 1px solid #FF0000;">  
                            <iconify-icon icon="radix-icons:cross-circled" style="color: red;" width="33.59" height="33.59"></iconify-icon>
                            <p style="color: #FF0000;">Your payment is not confirmed</p>
                        </div>
                     @endif
                </div>
                </section>
        </section>
   </section>
   <script src="{{asset('js/userDashboard.js')}}"></script>
   <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>
