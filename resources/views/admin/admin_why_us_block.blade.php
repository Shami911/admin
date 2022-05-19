@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0 mt-2">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin Why us block</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">Why us block (Почему мы?)</li>
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
            
            @foreach ($why_block as $item)
            <div class="col" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-icon">
                  <i class="{!!$item->icon!!}"></i>
                  {{-- ri-brush-4-line --}}
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">{{$item->title}}</a></h5>
                  <p class="card-text">{{$item->slogan}} </p>
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
                          <form action="/edit_why_us_block/{{$item->id}}" method="POST">
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
                                    <input type="text" name="icon" value="{{$item->icon}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Иконка (взять с Bootsrap 5)</label>
                                    @if($errors->has('icon'))
                                        {{$errors->first('icon')}}
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

              <script>
                $(document).ready(function() {
                    $("#edit_about_boxes{{$item->id}}").submit(function(event) { //При нажатие на кнопку которая находится внутри формы срабатывает следующая функция
                        event.preventDefault() //Запрещает обновление страницы
            
                        var form_edit_about_boxes = new FormData($("#edit_about_boxes{{$item->id}}")[0]) //Собираем все данные из формы
            
                        $.ajax ({
                            type: "POST",
                            url: "/edit_about_boxes/{{$item->id}}",
                            cache: false, //для отправки файлы через Ajax
                            contentType: false, //для отправки файлы через Ajax
                            processData: false, //для отправки файлы через Ajax
                            data: form_edit_clients,
                            success: function(data) {
                                document.getElementById('img_about_boxes{{$item->id}}').setAttribute('src', `/storage/AdminAboutBoxes/${data}`)
                                document.getElementById('close_about_boxes{{$item->id}}').click()
                            }
                        })
                    })
                })
            </script>
              @endforeach
          </div>
         
      </div>
      <!-- End Left side columns -->
  </section>
</div>

</main>
@endsection