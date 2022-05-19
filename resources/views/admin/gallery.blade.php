@extends('admin.admin_layout')
@section('admin_main')
<div id="container" class="container-fluid px-admin-laptop px-admin-tel py-2 mb-3 pe-lg-5 mx-0">
    <div class="d-flex">
        <h1 class="mt-1">Галерея</h1>
    </div>
    <div class="d-flex mt-3 flex-wrap">
        @foreach($gallery as $item)
            <div class="d-flex flex-column bg-light shadow-sm rounded-3 px-2 pt-2 pb-3 w-laptop-33 mx-1 mt-2">
                <div class="d-flex">
                    <h5>{{$item->name}}</h5>
                    <div class="dropdown ms-auto">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editgallery{{$item->id}}">Редактировать</button></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex rounded-3 text-dark px-3 w-100" style="background-image: url('/storage/gallery/{{$item->image}}'); height: 250px; background-size: 500px; object-fit: cover; background-position: center;">
                </div>
                
                <!-- Start Modal Gallery -->
                <div class="modal fade" id="editgallery{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0 pb-0">
                                <h4 class="modal-title" id="exampleModalLabel">Редактирование галереи</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_gallery/{{$item->id}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                                @csrf
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="name@example.com">
                                        <label for="name">Название</label>
                                    </div>
                                    <button class="btn btn-lg btn-dark"><i class="far fa-edit me-2"></i>Редактировать</button>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- Finish Modal Gallery -->

            </div>
        @endforeach

    </div>

</div>
@endsection