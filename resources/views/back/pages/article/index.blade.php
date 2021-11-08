@extends('back.layout.master')
@section('content')
    <div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th width="20%">Fotoğraf</th>
                            <th width="20%">Kategori</th>
                            <th width="30%">Başlık</th>
                            <th width="10%">Aktiflik</th>
                            <th width="20%">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><img width="100%" height="100%" src=""></td>
                                <td>Teknoloji</td>
                                <td>Başlık</td>
                                <td><input class="switch" type="checkbox" article-id="" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success"  data-toggle="toggle"></td>
                                <td>
                                    <a href=""><i class="bi bi-pencil-fill"></i></a>
                                    <i id="" class="bi bi-trash-fill delete-button"></i>
                                    <i class="bi bi-eye-fill"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
@section('back_title')
    Makaleler
@endsection
@section('js')
    <script src="{{asset('back/dist/')}}/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
{{--    <script>--}}
{{--        $('.delete-button').click(function () {--}}
{{--            let id = $(this).attr('id');--}}
{{--            Swal.fire({--}}
{{--                title: 'Emin misin?',--}}
{{--                text: "Makale silinecek emin misin?",--}}
{{--                icon: 'warning',--}}
{{--                showCancelButton: true,--}}
{{--                confirmButtonColor: '#3085d6',--}}
{{--                cancelButtonColor: '#d33',--}}
{{--                confirmButtonText: 'Evet,sil!'--}}
{{--            }).then((result) => {--}}
{{--                if (result.isConfirmed) {--}}
{{--                    $.ajax({--}}
{{--                        url:"{{ route('admin.article.destroy', 0) }}"+id,--}}
{{--                        method: 'DELETE',--}}
{{--                        headers: {--}}
{{--                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                        },--}}
{{--                        success: function(result) {--}}
{{--                            Swal.fire(--}}
{{--                                'Silindi!',--}}
{{--                                'Makale başarılı bir şekilde silindi.',--}}
{{--                                'success'--}}
{{--                            )--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            })--}}
{{--        });--}}
{{--        $('.switch').change(function() {--}}
{{--            id = $(this)[0].getAttribute('article-id');--}}
{{--            statu = $(this).prop('checked');--}}
{{--            $.get("{{url('admin/article/switch')}}/"+id, {statu:statu}, function (data,status){});--}}
{{--        });--}}
{{--    </script>--}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/simple-datatables/style.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
