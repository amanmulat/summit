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
  <title>Contest</title>
  <style>
    .head {
      display: flex;
      margin-bottom: 20px;
      border-bottom: 2px solid #EDECEC;
      font-family: Plus Jakarta Sans;
      font-size: 40px;
      font-weight: 700;
      line-height: 66.24px;
      text-align: left;
      text-underline-position: from-font;
      text-decoration-skip-ink: none;
      display: flex;
      align-items: center;
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
      text-underline-position: from-font;
      text-decoration-skip-ink: none;
    }

    p {
      font-family: Plus Jakarta Sans;
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



    .card {
      width: 100%;
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
      padding: 13px 14px;
      float: right;


    }

    .btn {
      width: 100%;
      padding: 10px 13px;
      background: linear-gradient(360deg, #38AB00 -21.86%, #3CA17A 130.06%);
      border-radius: 8px;
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

    .custom-select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
      <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
          <!-- Brand -->
          <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
            <img src="{{asset('assets/images/logo.png')}}" width="210px" alt="MDB Logo" loading="lazy"
              style="margin-top: 2px;" />
          </a>

          <!-- Search form -->

        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex">
          <li class="nav-item me-3 me-lg-1 active">
            <a class="nav-link" href="#">
              <span><i class="fa-regular fa-calendar"></i></span>

            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-flag fa-lg"></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-video fa-lg"></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-shopping-bag fa-lg"></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-users fa-lg"></i></span>
              <span class="badge rounded-pill badge-notification bg-danger">2</span>
            </a>
          </li>
        </ul>
        <!-- Center elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link d-sm-flex align-items-sm-center" href="#">
              <img src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" class="rounded-circle" height="22"
                alt="Black and White Portrait of a Man" loading="lazy" />
              <strong class="d-none d-sm-block ms-1">John</strong>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-plus-circle fa-lg"></i></span>
            </a>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a data-mdb-dropdown-init class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" aria-expanded="false">
              <i class="fas fa-comments fa-lg"></i>

              <span class="badge rounded-pill badge-notification bg-danger">6</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a data-mdb-dropdown-init class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" aria-expanded="false">
              <i class="fas fa-bell fa-lg"></i>
              <span class="badge rounded-pill badge-notification bg-danger">12</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a data-mdb-dropdown-init class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" aria-expanded="false">
              <i class="fas fa-chevron-circle-down fa-lg"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Right elements -->
      </div>
    </nav>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-2">
        <h2>Choose the Categories</h2>

        <div>
          <select class="custom-select">
            <option value="" disabled selected>Select by Category</option>
            @foreach($categories as $category)
            <option value="">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <select class="custom-select">
            <option value="" disabled selected>By Technology</option>
            @foreach($technologies as $technology)
            <option value="">{{$technology->name}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <select class="custom-select">
            <option value="" disabled selected>By Award Type</option>
            @foreach($awardTypes as $awardType)
            <option value="{{$awardType->id}}">{{$awardType->name}}</option>

            @endforeach
          </select>
        </div>
      </div>

      <div class="col-12 col-md-8 col-lg-10">
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
          @foreach($nominees as $nominee)
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img src="{{ asset('storage/' .$nominee->logo) }}" alt="image" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{$nominee->name}}<span class="heart"><i class="fa-solid fa-heart">
                      {{$nominee->votes->count()}}</i></span></h5>
                <p class="card-text">{{$nominee->short_description}}</p>
              </div>
              <div class="card-footer">
                {{-- @if (Auth::check() && !$nominee->votes->contains('user_id', Auth::id())) --}}

                <form class="bottom-form" action="{{ route('vote.submit') }}" method="POST">
                  @csrf
                  @method('post')
                  <input type="hidden" name="nominee_id" value="{{ $nominee->id }}">
                  <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                  {{-- @else
                  <button type="disabled" class="btn btn-light">Voted</button>
                  @endif --}}


                  <button type="submit" class="btn btn-succes">Vote Now</button>
                </form>
                <div class=" img">

                  <img src="{{ asset('assets/images/Eye.png') }}" alt="image" class="float-end">
                </div>




              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for functionality like modals, tooltips) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>