@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Admin Home</h1>
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
        @foreach ($home as $item)


                        <div class="card" style="width: 18rem;">
                            
                            <div class="card-body">
                                <h5 class="card-title">{{$item->title}}</h5>
                                <p class="card-text">{{$item->slogan}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$item->button}}</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice">Редактировать</a>
                            </div>
                      </div>
                    </div>
                </div>
                <!-- End Sales Card -->

                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exitservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_home" method="POST" enctype="multipart/form-data">
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
