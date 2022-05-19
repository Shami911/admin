@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin Bag Img Home</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">Admin Bag Img Home (Задний фон главной страницы)</li>
                  </ol>
              </nav>
          </div>
      </div>
      <!-- End Page Title -->
  </div>
    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes mt-5">
      <div class="container" data-aos="fade-up">
        @foreach ($Bag_Img as $item)
        <a href="#" class="btn btn-info m-2" style="width: 82%" data-bs-toggle="modal" data-bs-target="#exitservice">Редактировать</a>
        <div class="col" data-aos="fade-up" data-aos-delay="100">
          <img src="storage/HomeBagImg/{{$item->img}}" class="img-fluid m-2" style="width: 900px" alt="...">
            <div class="card-body ">
            </div>
        </div>
        <div class="row row-cols-3">
          
    

             <!-- Modal Exit Carousel -->
             <div class="modal fade" id="exitservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex border-0">
                          <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                          <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="/edit_bag_imgHome/{{$item->id}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                                  <div>
                                      <label>Фото для карты</label>
                                      <input type="file" name="img" value="{{$item->img}}"  class="form-control mt-1 w-75">
                                      @if($errors->has('img'))
                                          {{$errors->first('img')}}
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


@endsection