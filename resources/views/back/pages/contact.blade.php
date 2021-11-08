@extends('back.layout.master')
@section('content')
    <div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>İsim</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th width="30%">Mesaj</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($contacts as $contact)--}}
{{--                            <tr>--}}

{{--                                <td>{{$contact->name}}</td>--}}
{{--                                <td>{{$contact->email}}</td>--}}
{{--                                <td>{{$contact->tel_no}}</td>--}}
{{--                                <td> <i data-value="{{$contact->message}}" class="bi bi-eye-fill show-message" ></i> </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
@section('back_title')
    İletişim
@endsection
@section('js')
    <script src="{{asset('back/dist/')}}/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
{{--    <script>--}}
{{--        $('.show-message').click(function () {--}}
{{--            var message = $(this).attr('data-value');--}}
{{--            Swal.fire('<p>'+message+'</p>')--}}
{{--        })--}}
{{--    </script>--}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/simple-datatables/style.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
