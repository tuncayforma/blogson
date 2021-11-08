@extends('front.layout.master')
@section('content')
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Bir mesaj kadar yakınınızdayız.</p>
                    <div class="my-5">
                        <form id="contactForm" action="">
                            <div class="form-floating">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">İsminiz</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                <label for="email">Mail Adresiniz</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="Enter your phone number..." data-sb-validations="required" />
                                <label for="phone">Telefon Numaranız</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message">Mesajınız</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <br />
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Gönder</button>
                        </form>
                        <br>
                        <strong>Telefon Numarası : </strong>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('site_header')
    İletişim
@endsection
