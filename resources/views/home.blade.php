<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <title>Home</title>
    <style>
        .header {
            border-bottom: 2px solid #EDECEC;
            background-color: white;
            padding: 20px;
        }

        .head {
            margin-bottom: 20px;
            border-bottom: 2px solid #EDECEC;
            font-family: "Plus Jakarta Sans", serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 66.24px;
            text-align: left;
            text-underline-position: from-font;
            text-decoration-skip-ink: none;
            display: flex;
            align-items: center;
        }

        .container {
            padding-top: 30px;
            display: flex;
            justify-content: center;


        }



        .logo {
            margin-right: 20px;
        }

        h2 {
            font-family: "Plus Jakarta Sans", serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 43.2px;
            text-align: left;


        }

        p {
            font-family: "Plus Jakarta Sans", serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            text-underline-position: from-font;
            text-decoration-skip-ink: none;
            color: #666B72;
        }

        .heart {
            font-size: 20px;
            color: green !important;
            float: right;
        }

        .main {
            padding: 15px;
            overflow-y: auto;
            margin-left: 30px;
        }

        .sidebar {
            margin-top: 30px;
        }



        .card {

            border-radius: 8px;
            border: 2px solid#EDECEC;
            padding: 13px 14px;
            margin-bottom: 20px;
            box-shadow:
                1px 1px 3px 0px #F8F8F8E5 inset,
                -1px -1px 2px 0px #FDFDFDE5 inset,
                1px -1px 2px 0px #F8F8F833 inset,
                -1px 1px 2px 0px #F8F8F833 inset,
                -1px -1px 2px 0px #F8F8F880,
                1px 1px 2px 0px #FDFDFD4D;
        }

        .img {
            border-radius: 8px;
            background: #f8f9fa;
            border: 2px solid#EDECEC;
            padding: 10px;
            float: right;


        }

        .btn-v {
            width: 100%;
            padding: 10px 13px;
            background: linear-gradient(360deg, #38AB00 -21.86%, #3CA17A 130.06%);
            border-radius: 8px;
            color: white;
        }

        .btn-v:hover{
            color: white;
        }

        .card-footer {
            background-color: white;
            align-content: center;
            align-items: center;
            border: none;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .bottom-form {

            width: 100%;
        }



        .circle-container {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-image: url('/assets/images/Star.svg');
            background-size: cover;
            background-position: center;
            overflow: hidden;
            align-items: center;
            justify-content: center;
            margin: auto;
        }

        .circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light header">
            <div class="container-fluid justify-content-between">
                <!-- Left elements -->
                <div class="d-flex">
                    <!-- Brand -->
                    <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                        <img src="{{asset('assets/images/lg.svg')}}" width="210px" alt="MDB Logo" loading="lazy"
                            style="margin-top: 2px;" />
                    </a>

                    <!-- Search form -->

                </div>
                <!-- Left elements -->

                <!-- Center elements -->
                <ul class="navbar-nav flex-row d-none d-md-flex">
                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                            <span><i class="fa-regular fa-calendar"></i></span>
                            <strong class="d-none d-sm-block ms-1">01 Jan 2025</strong>
                        </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <strong class="d-none d-sm-block ms-1">Skylight Hotel, Addis Ababa</strong>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                            <span><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                            <span><i class="fa-brands fa-facebook-f"></i></span>
                        </a>
                    </li>


                </ul>
                <!-- Center elements -->

                <!-- Right elements -->
                <ul class="navbar-nav flex-row">
                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                            <button type="submit" class="btn btn-succes btn-v">Reserve Your Spot</button>
                        </a>
                    </li>
                </ul>

                <!-- Right elements -->
            </div>
        </nav>
    </header>

    <div class="container-fluid flex-grow-1 d-flex">
        <div class="col-md-4 col-sm-8 col-lg-3 sidebar">
            <h2>Choose the Categories</h2>
            <form action="{{ route('home') }}" method="GET">
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" name="category" value="" class="btn btn-light  {{ request('category') == '' ? 'active' : '' }}" style="width: 90%">
                        All Categories
                    </button>
                    @foreach($categories as $category)
                    <button type="submit" name="category" value="{{ $category->id }}" class="btn btn-light {{ request('category') == $category->id ? 'active' : '' }}" style="width: 90%">
                        {{ $category->name }}
                    </button>
                    @endforeach
                </div>
            </form>
        </div>


        <div class="col-md-8 col-sm-4 col-lg-9 main">
            <div class="row">
                <div class="col-12 head">
                    <div class="logo">
                        <img src="{{ asset('assets/images/award.png') }}" alt="image">
                    </div>
                    <h1>Legacy Builders Award</h1>
                </div>
            </div>
            @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
            @endif

            @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
            @endif
            <div class="row">
                @if(!empty($nominees))
                @forelse($nominees as $nominee)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" data-id="{{ $nominee->id }}">
                        <img src="{{ asset('storage/' .$nominee->logo) }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$nominee->name}}<span class="heart"><i class="fa-solid fa-heart">
                                        {{$nominee->votes->count()}}</i></span></h5>
                            <p class="card-text">{{$nominee->short_description}}</p>
                        </div>
                        <div class="card-footer">
                            @if (Auth::check() && $nominee->votes->contains('user_id', Auth::id()))
                            <form class="bottom-form">
                              @csrf
                              <input type="hidden" name="nominee_id" value="{{ $nominee->id }}">
                              <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                              <!-- Button for users who have already voted -->
                              <button type="button" class="btn btn-light" disabled>
                                Voted
                              </button>
                            </form>
                            @else

                            <form class="bottom-form" action="{{ route('vote.submit') }}" method="POST">
                              @csrf
                              @method('post')
                              <input type="hidden" name="nominee_id" value="{{ $nominee->id }}">
                              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                              <button type="submit" class="btn btn-succes btn-v">Vote Now</button>
                            </form>
                            @endif
                            <div class=" img">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#DetailModal"
                                    data-title="{{ $nominee->name }}" data-category="{{ $nominee->category->name }}"
                                    data-description="{{ $nominee->description }}" data-image="{{'storage/'.$nominee->logo }}"
                                    data-link="{{$nominee->link}}">
                                    <img src="{{ asset('assets/images/Eye.png') }}" alt="image" class="float-end">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p>No Nominees found</p>
                </div>
                @endforelse
                @endif
            </div>
        </div>
    </div>
</div>




    <!-- Modal -->
    <div class="modal fade" id="DetailModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true"
        style="background-image:url('images/assets/images/Rectangle1.png');">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header border-0 justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="circle-container d-flex flex-column align-items-center justify-content-center mb-3">
                        <img src="" alt="image" class="circle" id="modalImage">
                    </div>
                    <h5 class="modal-title mt-2" id="detailsModalLabel"></h5>
                    <h3 id="modalCategory" class="mb-2"></h3>
                    <p id="modalDescription"></p>

                </div>
                <div class="modal-footer border-0 justify-content-center margin-auto">
                    <form class="bottom-form" action="{{ route('vote.submit') }}" method="POST">
                        @csrf
                        @method('post')
                        <input type="hidden" name="nominee_id" value="modalNomineeId">
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <button type="submit" class="btn btn-primary btn-v">Vote Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll('.card a').forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        const title = this.getAttribute('data-title');
        const category = this.getAttribute('data-category');
        const description = this.getAttribute('data-description');
        const image = this.getAttribute('data-image');
        const link = this.getAttribute('data-link');
        const nomineeId = this.closest('.card').getAttribute('data-id');

        document.getElementById('detailsModalLabel').textContent = title;
        document.getElementById('modalCategory').textContent = category;
        document.getElementById('modalDescription').textContent = description;
        document.getElementById('modalImage').setAttribute('src', image);
        document.getElementById('modalNomineeId').value = nomineeId;

    }); });
    </script>


    <!-- Bootstrap JS (optional, for functionality like modals, tooltips) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
