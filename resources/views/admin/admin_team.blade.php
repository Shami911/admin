@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin Team</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="admin_layout">Главная</a></li>
                      <li class="breadcrumb-item active">Admin Team(Персонал и должностья)</li>
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
          <div class="row row-cols-3 g-2">
            
            @foreach ($team as $item)
            <div class="col" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <img src="storage/AdminTeam/{{$item->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="">{{$item->name}}</a></h5>
                  <p class="card-text">{{$item->work}} </p>
                  <p class="card-text">{{$item->slogan}} </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                  <a  href="/delete_team/{{$item->id}}" class="btn btn-Danger">Удалить</a>
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
                          <form action="/edit_team/{{$item->id}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                                  <div>
                                      <label>Фото</label>
                                      <input type="file" name="img" value="{{$item->img}}"  class="form-control mt-1">
                                      @if($errors->has('img'))
                                          {{$errors->first('img')}}
                                      @endif
                                  </div>


                                  <div class="form-floating mt-2">
                                      <input type="text" name="name" value="{{$item->name}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                      <label for="floatingInput">Имя</label>
                                      @if($errors->has('name'))
                                          {{$errors->first('name')}}
                                      @endif
                                  </div>

                                  <div class="form-floating mt-2">
                                    <input type="text" name="work" value="{{$item->work}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Должность</label>
                                    @if($errors->has('work'))
                                        {{$errors->first('work')}}
                                    @endif
                                  </div>

                                  <div class="form-floating mt-2">
                                      <input type="text" name="slogan" value="{{$item->slogan}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                      <label for="floatingInput">Краткое описание</label>
                                      @if($errors->has('slogan'))
                                          {{$errors->first('slogan')}}
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
              <form action="/add_team" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div>
                    <label>Фото</label>
                    <input type="file" name="img" class="form-control mt-1">
                    @if($errors->has('img'))
                        {{$errors->first('img')}}
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
                  <input type="text" name="work" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Должность</label>
                  @if($errors->has('work'))
                      {{$errors->first('work')}}
                  @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="slogan" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Краткое описание</label>
                    @if($errors->has('slogan'))
                        {{$errors->first('slogan')}}
                    @endif
                </div>


              </div>

                  <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
              </form>
          </div>
      </div>
  </div> --}}

@endsection