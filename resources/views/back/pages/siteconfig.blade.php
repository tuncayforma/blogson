@extends('back.layout.master')
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="{{route('admin.config.update')}}" method="POST">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Telefon Numarası</label>
                                <input type="number" id="first-name-column" class="form-control"
                                       placeholder="Telefon Numarası" value="{{$site_config->tel_no}}" name="tel_no">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Facebook Url</label>
                                <input type="text" id="first-name-column" class="form-control"
                                       placeholder="Facebook Url" value="{{$site_config->facebook}}" name="facebook">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Twitter Url</label>
                                <input type="text" id="first-name-column" class="form-control"
                                       placeholder="Facebook Url" value="{{$site_config->twitter}}" name="twitter">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Twitch Url</label>
                                <input type="text" id="first-name-column" class="form-control"
                                       placeholder="Facebook Url" value="{{$site_config->twitch}}" name="twitch">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Hakkımda yazısı</label>
                                <textarea name="about" id="description"  cols="30" rows="10">
                                    {{$site_config->about}}
                                       </textarea>
                            </div>
                        </div>


                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit"
                                    class="btn btn-primary me-1 mb-1">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('back_title')
    Site Ayarları
@endsection
@section('js')
    <script src="{{asset('back/dist')}}/assets/vendors/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });

    </script>
@endsection
