@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0 mt-2">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin why us</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">About(О нас (Карточки))</li>
                  </ol>
              </nav>
          </div>
      </div>
      <!-- End Page Title -->
  </div>
    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes mt-5">
        <div class="container" data-aos="fade-up">
          <div class="row row-cols-3">
            
            @foreach ($why as $item)
            <div class="col" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-icon">
                  {{-- ri-brush-4-line --}}
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">{{$item->title}}</a></h5>
                  <p class="card-text">{{$item->slogan}} </p>
                  <p class="card-text">{{$item->button}} </p>

                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                  {{-- <a  href="/delete_about_boxes/{{$item->id}}" class="btn btn-Danger">Удалить</a> --}}
                </div>
              </div>
            </div>



             <!-- Modal Exit Carousel -->
             <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex border-0">
                          <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                          <button id="close_about_boxes{{$item->id}}" type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="/edit_why_us/{{$item->id}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                              
                                

                                <div class="form-floating mt-2">
                                    <input type="text" name="title" value="{{$item->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Название карты</label>
                                    @if($errors->has('title'))
                                        {{$errors->first('title')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="slogan" value="{{$item->slogan}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Краткое описание</label>
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
                                </div>
                              
                              <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                            </form>
                            </div>
                      </div>
                  </div>
              </div>

              @endforeach
          </div>
         
      </div>
      <!-- End Left side columns -->
  </section>
</div>

</main>
@endsection