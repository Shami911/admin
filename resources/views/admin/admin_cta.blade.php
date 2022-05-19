@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Admin Cta</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active">Home(Главное окно)</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End Page Title -->
        </div>
    </div>
    @foreach ($cta as $item)
                <!-- End Sales Card -->

                <a href="#" class="btn btn-info w-100 m-2" data-bs-toggle="modal" data-bs-target="#exitservice">Редактировать</a>
                
                <div class="card text-center m-2" style="width: 100%; height: 60%; object-fit: cover">
                    <div class="card-body"  style="background-image: url(storage/HomeBagImg/hero-bg.jpg);background-size:100%; color:rgb(3, 3, 3)">
                        <h5 class="card-title mt-3 pt-5" style="font-size: 48px; font-weight: 700">{{$item->title}}</h5>
                        <p class="card-text" style="font-size: 25px; font-weight: 700">{{$item->slogan}}</p>
                        <a id="button" class="btn" style="width: 110px; background: rgb(255, 153, 0);align-items: center">{{$item->button}}</a><br>
                      
                    </div>
                  </div>


                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exitservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                                <button type="button" class="btn-close fs-4" id="close_home" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_cta/{{$item->id}}" method="POST">
                                    @csrf
                                    <div class="form-floating mt-2">


                                        <div class="form-floating mt-2">
                                            <input type="text" name="title" value="{{$item->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Название</label>
                                            @if($errors->has('title'))
                                                {{$errors->first('title')}}
                                            @endif
                                        </div>
    
                                        <div class="form-floating mt-2">
                                            <input type="text" name="slogan" value="{{$item->slogan}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Описание</label>
                                            @if($errors->has('slogan'))
                                                {{$errors->first('slogan')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="button" value="{{$item->button}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Кнопка</label>
                                            @if($errors->has('button'))
                                                {{$errors->first('button')}}
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


@endsection
