@extends('back.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form"  method="POST">
{{--                                @csrf--}}
{{--                                @if(session('success'))--}}
{{--                                    <div class="alert alert-success">--}}
{{--                                        {{session('success')}}--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                @if(session('error'))--}}
{{--                                    <div class="alert alert-danger">--}}
{{--                                        {{session('error')}}--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                @if($errors->any())--}}
{{--                                    <div class="alert alert-danger">--}}
{{--                                        <ul>--}}
{{--                                            @foreach($errors->all() as $error)--}}
{{--                                                <li>{{$error}}</li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Kategori Adı</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                   placeholder="Kategori Adı" name="category_name">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Ekle</button>
                                        <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Sıfırla</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th >Kategori</th>
                                        <th >Aktiflik</th>
                                        <th >İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($categories as $category)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$category->name}}</td>--}}
{{--                                            <td><input class="switch" category-id="{{$category->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success" @if($category->status == 1) checked @endif  data-toggle="toggle"></td>--}}
{{--                                            <td>--}}
{{--                                                <i id="{{$category->id}}" data-value="{{$category->name}}" class="bi bi-pencil-fill edit-category"></i>--}}
{{--                                                <i id="{{$category->id}}" class="bi bi-trash-fill delete-category"></i>--}}
{{--                                                <i class="bi bi-eye-fill"></i>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('back_title')
    Kategoriler
@endsection
@section('js')
    <script src="{{asset('back/dist/')}}/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
{{--    <script>--}}
{{--        $('.edit-category').click(function () {--}}
{{--            let value = $(this).attr('data-value');--}}
{{--            let id = $(this).attr('id');--}}
{{--            Swal.fire({--}}
{{--                title: 'Kategoriyi Güncelle',--}}
{{--                text: 'Yeni kategori adını girin!',--}}
{{--                input: 'text',--}}
{{--                inputValue:value,--}}
{{--                inputAttributes: {--}}
{{--                    autocapitalize: 'off'--}}
{{--                },--}}
{{--                showCancelButton: true,--}}
{{--                confirmButtonText: 'Güncelle',--}}
{{--                showLoaderOnConfirm: true,--}}
{{--                preConfirm: (login) => {--}}
{{--                    $.ajax({--}}
{{--                        url:"{{route('admin.category.update', 0) }}"+id,--}}
{{--                        method: 'PUT',--}}
{{--                        data:{--}}
{{--                            name:login,--}}
{{--                        },--}}
{{--                        headers: {--}}
{{--                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                        },--}}
{{--                        success: function(result) {--}}
{{--                            Swal.fire(--}}
{{--                                'Güncellendi!',--}}
{{--                                'Kategori başarılı bir şekilde güncellendi.',--}}
{{--                                'success'--}}
{{--                            )--}}
{{--                        }--}}
{{--                    });--}}
{{--                },--}}
{{--                allowOutsideClick: () => !Swal.isLoading()--}}
{{--            }).then((result) => {--}}
{{--                if (result.isConfirmed) {--}}
{{--                    window.location.reload();--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--        $('.delete-category').click(function () {--}}
{{--            let id = $(this).attr('id');--}}
{{--            Swal.fire({--}}
{{--                title: 'Emin misin?',--}}
{{--                text: "Kategori silinecek emin misin?",--}}
{{--                icon: 'warning',--}}
{{--                showCancelButton: true,--}}
{{--                confirmButtonColor: '#3085d6',--}}
{{--                cancelButtonColor: '#d33',--}}
{{--                confirmButtonText: 'Evet,sil!'--}}
{{--            }).then((result) => {--}}
{{--                if (result.isConfirmed) {--}}
{{--                    $.ajax({--}}
{{--                        url:"{{ route('admin.category.destroy', 0) }}"+id,--}}
{{--                        method: 'DELETE',--}}
{{--                        headers: {--}}
{{--                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                        },--}}
{{--                        success: function(result) {--}}
{{--                            Swal.fire(--}}
{{--                                'Silindi!',--}}
{{--                                'Kategori başarılı bir şekilde silindi.',--}}
{{--                                'success'--}}
{{--                            );--}}
{{--                            window.location.reload();--}}
{{--                        }--}}

{{--                    });--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--        $('.switch').change(function() {--}}
{{--            id = $(this)[0].getAttribute('category-id');--}}
{{--            statu = $(this).prop('checked');--}}
{{--            $.get("{{url('admin/category/switch')}}/"+id, {statu:statu}, function (data,status){});--}}
{{--        });--}}
{{--    </script>--}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/simple-datatables/style.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
