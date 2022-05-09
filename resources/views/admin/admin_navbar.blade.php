@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Советуем</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active">Советуем</li>
                        </ol>
                    </nav>
                </div>
                <button class="btn btn-carousel ms-auto btn-primary " data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить</button>
            </div>
            <!-- End Page Title -->
        </div>


        <section class="section dashboard mt-2">
            <div class="row row-cols-3">
              @foreach ($navbar as $item)
    
                <div class="col">
                    <div class="card info-card sales-card pb-0">

                       <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</button></li>
                                <li><a class="dropdown-item" href="/delete_navbar/{{$item->id}} ">Удалить</a></li>
                            </ul>
                            </div>
    
                            <div class="card-body">
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->home}}</h2> 
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->about}}</h2>
                                {{-- <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->servis}}</h2> 
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->portfolio}}</h2> 
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->team}}</h2> 
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->dropdown}}</h2> 
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->Contact}}</h2> 
                                <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->Get_Started}}</h2>  --}}
                                <div style="background-image: url(storage/Portfolio/); background-size: cover; height: 100px"></div>     
                            </div>
                    </section><!-- End Hero -->
                    </div>
                </div>
                <!-- End Sales Card -->

                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_navbar/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mt-2">

    
                                        <div class="form-floating mt-2">
                                            <input type="text" name="home" value="{{$item->home}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="home">home</label>
                                            @if($errors->has('home'))
                                                {{$errors->first('home')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="about"  value="{{$item->about}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="about">about</label>
                                            @if($errors->has('about'))
                                                {{$errors->first('about')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="servis" value="{{$item->servis}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="servis">servis</label>
                                            @if($errors->has('servis'))
                                                {{$errors->first('servis')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="portfolio"  value="{{$item->portfolio}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="portfolio">portfolio</label>
                                            @if($errors->has('portfolio'))
                                                {{$errors->first('portfolio')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="team"  value="{{$item->team}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="team">team</label>
                                            @if($errors->has('team'))
                                                {{$errors->first('team')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="dropdown"  value="{{$item->dropdown}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="dropdown">Drop Down</label>
                                            @if($errors->has('dropdown'))
                                                {{$errors->first('dropdown')}}
                                            @endif
                                        </div>


                                        <div class="form-floating mt-2">
                                            <input type="text" name="Contact"  value="{{$item->Contact}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="Contact">Contact</label>
                                            @if($errors->has('Contact'))
                                                {{$errors->first('Contact')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="Get_Started"  value="{{$item->Get_Started}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="Get_Started">Get Started</label>
                                            @if($errors->has('Get_Started'))
                                                {{$errors->first('Get_Started')}}
                                            @endif
                                        </div>
                                        

                                    </div>
                                    <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <!-- End Left side columns -->
        </section>
    </div>

</main>
<!-- End #main -->

<!-- Modal Add Carousel -->
<div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex border-0">
                <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add_navbar" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating mt-2">
                        
                        <div class="form-floating mt-2">
                            <input type="text" name="home" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="home">home</label>
                            @if($errors->has('home'))
                                {{$errors->first('home')}}
                            @endif
                        </div>

                        <div class="form-floating mt-2">
                            <input type="text" name="about" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="about">about</label>
                            @if($errors->has('about'))
                                {{$errors->first('about')}}
                            @endif
                        </div>

                        <div class="form-floating mt-2">
                            <input type="text" name="servis" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="servis">servis</label>
                            @if($errors->has('servis'))
                                {{$errors->first('servis')}}
                            @endif
                        </div>

                        <div class="form-floating mt-2">
                            <input type="text" name="portfolio" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="portfolio">portfolio</label>
                            @if($errors->has('portfolio'))
                                {{$errors->first('portfolio')}}
                            @endif
                        </div>

                        <div class="form-floating mt-2">
                            <input type="text" name="team" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="team">team</label>
                            @if($errors->has('team'))
                                {{$errors->first('team')}}
                            @endif
                        </div>

                        <div class="form-floating mt-2">
                            <input type="text" name="dropdown" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="dropdown">Drop Down</label>
                            @if($errors->has('dropdown'))
                                {{$errors->first('dropdown')}}
                            @endif
                        </div>


                        <div class="form-floating mt-2">
                            <input type="text" name="Contact" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="Contact">Contact</label>
                            @if($errors->has('Contact'))
                                {{$errors->first('Contact')}}
                            @endif
                        </div>

                        <div class="form-floating mt-2">
                            <input type="text" name="Get_Started" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="Get_Started">Get Started</label>
                            @if($errors->has('Get_Started'))
                                {{$errors->first('Get_Started')}}
                            @endif
                        </div>
                       
                    </div>

                    <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
