<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AdminDashboard | Technoscape 2023</title>
    <link rel="stylesheet" href="{{asset('css/adminDashboard.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

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
            </nav>
            <section id="content-content">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Team Name</th>
                        <th scope="col">Registration Fee</th>
                        <th scope="col">Status</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach($teams as $team)
                      <tr>
                        <th scope="row">{{$i}}</th>
                        {{-- team name --}}
                        <td><a href="#" style="text-decoration: none">{{$team->name}}</a></td>

                        {{-- regist fee --}}
                        <td>
                            {{-- if created at date is between 12 march 2023 & 12 April 2023, fee = 100.000, else 200.000 --}}
                            @if($team->created_at->between('2023-03-12', '2023-04-12'))
                                Rp.100.000
                            @else
                                Rp.200.000
                            @endif
                        </td>

                        {{-- status --}}
                        <td>
                            @if($team->verified == 0)
                                <span class="badge bg-danger">Not Verified</span>
                            @else
                                <span class="badge bg-success">Verified</span>
                            @endif
                        </td>

                        {{-- invoice --}}
                        <td>
                            @if($team->invoice == Null)
                                <span class="badge bg-danger">Not Paid</span>
                            @else
                                <span class="badge bg-success">Paid</span>
                            @endif
                        </td>

                        {{-- action --}}
                        <td>
                            <a href="#" class="btn btn-primary">Verify</a>
                            <a href="#" class="btn btn-warning">Denied</a>
                        </td>
                      </tr>
                        @php
                            $i = $i + 1;
                        @endphp
                    @endforeach
                    </tbody>
                  </table>
            </section>
        </section>
   </section>
   <script src="{{asset('js/userDashboard.js')}}"></script>
   <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>
