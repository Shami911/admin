@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin Servis</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">Admin Servis (Сервис)</li>
                  </ol>
              </nav>
          </div>
          {{-- <button class="btn btn-carousel ms-auto btn-primary " data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить</button> --}}
      </div>
      <!-- End Page Title -->
  </div>
    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes mt-5">
        <div class="container" data-aos="fade-up">
          <div class="row row-cols-3">
            
            @foreach ($servis as $item)

            <div class="col" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->descripteon}}</p>
                    </div>
                  </div>

                <div class="card-body">
                  <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                  <a  href="/delete_servis/{{$item->id}}" class="btn btn-Danger">Удалить</a>
                </div>
              </div>
            </div>



             <!-- Modal Exit Carousel -->
             <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex border-0">
                          <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                          <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="/edit_servis/{{$item->id}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                                <div class="form-floating mt-2">
                                    <input type="text" name="icon" value="{{$item->icon}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Иконка (взять в с Bootstrap 5)</label>
                                    @if($errors->has('icon'))
                                        {{$errors->first('icon')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="title" value="{{$item->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Название карты</label>
                                    @if($errors->has('title'))
                                        {{$errors->first('title')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="descripteon" value="{{$item->descripteon}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Описание краткое</label>
                                    @if($errors->has('descripteon'))
                                        {{$errors->first('descripteon')}}
                                    @endif
                                </div>

                              

                                </div>
                                </div>
                              
                              </div>
                              <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                          </form>
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
<!-- End #main -->
          </div>
  
        </div>
      </section><!-- End About Boxes Section -->

  </div>

<!-- Modal Add Carousel -->
{{-- <div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_servis" method="POST" enctype="multipart/form-data">
                  @csrf


                <div class="form-floating mt-2">
                    <input type="text" name="icon" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Иконка (взять в с Bootstrap 5)</label>
                    @if($errors->has('icon'))
                        {{$errors->first('icon')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Название карты</label>
                    @if($errors->has('title'))
                        {{$errors->first('title')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="descripteon" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Описание краткое</label>
                    @if($errors->has('descripteon'))
                        {{$errors->first('descripteon')}}
                    @endif
                </div>


                  <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
              </form>
          </div>
      </div>
  </div> --}}

@endsection