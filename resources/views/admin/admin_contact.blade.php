@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin Contact</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">Clients Contact (Связь с нами)</li>
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
          <div class="d-flex flex-wrap">
            

            {{-- <div class="col " data-aos="fade-up" data-aos-delay="100">
              <div class="card">
              <h1>{{$item->address}}</h1>
              <h1>{{$item->email_1}}</h1>

                <div class="card-body">
                  <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                  <a  href="/delete_features_section/{{$item->id}}" class="btn btn-Danger">Удалить</a>
                </div>
              </div>
            </div> --}}

            
            <div class="card text-white py-2 px-3 mx-1 w-laptop-33 mt-2" style="background-color: rgb(42, 170, 170);">
                <div class="d-flex flex-column">
                    <h3 class="card-title">Наш адрес</h3>
                    <h5 class="card-title">{{$contact->address}}</h5>
                </div>
            </div>
            
            <div class="card text-white py-2 px-3 mx-1 w-laptop-33 mt-2" style="background-color: rgb(42, 170, 170);">
                <div class="d-flex flex-column">
                    <h3 class="card-title">Электронная почта</h3>
                    <h5 class="card-title">{{$contact->email}}</h5>
                </div>
            </div>
            
            <div class="card text-white py-2 px-3 mx-1 w-laptop-33 mt-2" style="background-color: rgb(42, 170, 170);">
                <div class="d-flex flex-column">
                    <h3 class="card-title">Позвоните нам</h3>
                    <h5 class="card-title">{{$contact->tel}}</h5>
                </div>
            </div>


        
          </div>

          <div class="card-body w-100">
            <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$contact->id}}">Редактировать</a>
            <a  href="/delete_features_section/{{$contact->id}}" class="btn btn-Danger">Удалить</a>
         </div>
         
      </div>
      <!-- End Left side columns -->
  </section>
</div>

</main>

     <!-- Modal Exit Carousel -->
     <div class="modal fade" id="exitservice{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex border-0">
                    <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                    <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/edit_contact/{{$contact->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mt-2">
                            <div class="row">


                                <div class="form-floating mt-2">
                                    <input type="text" name="address" value="{{$contact->address}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Aдрес</label>
                                    @if($errors->has('address'))
                                        {{$errors->first('address')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="email" name="email" value="{{$contact->email}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Введите email</label>
                                    @if($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </div>

            
                                <div class="form-floating mt-2">
                                    <input type="tel" name="tel" value="{{$contact->tel}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Пункты с двумя галочками</label>
                                    @if($errors->has('tel'))
                                        {{$errors->first('tel')}}
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
<!-- End #main -->

<!-- Modal Add Carousel -->
{{-- <div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_features_section" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-floating mt-2">
                    <input type="text" name="icon" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Иконка блока</label>
                    @if($errors->has('icon'))
                        {{$errors->first('icon')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Название</label>
                    @if($errors->has('title'))
                        {{$errors->first('title')}}
                    @endif

              </div>

            <div>
                <label>Фото определенного блока</label>
                <input type="file" name="img" class="form-control mt-1">
                @if($errors->has('img'))
                    {{$errors->first('img')}}
                @endif
            </div>


            <div class="form-floating mt-2">
                <input type="text" name="slogan" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Описание</label>
                @if($errors->has('slogan'))
                    {{$errors->first('slogan')}}
                @endif
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="point1" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Пункты с двумя галочками</label>
                @if($errors->has('point1'))
                    {{$errors->first('point1')}}
                @endif
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="point2" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Пункты с двумя галочками</label>
                @if($errors->has('point2'))
                    {{$errors->first('point2')}}
                @endif
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="point3" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Пункты с двумя галочками</label>
                @if($errors->has('point3'))
                    {{$errors->first('point3')}}
                @endif
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Нижнее описание</label>
                @if($errors->has('description'))
                    {{$errors->first('description')}}
                @endif
            </div>

                  <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
              </form>
          </div>
      </div>
  </div> --}}

@endsection