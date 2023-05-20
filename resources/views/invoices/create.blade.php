@extends('layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakrture</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form  action="{{ route('invoices.store') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            {{ csrf_field() }}
                            <div class="form-floating mb-3">
                                <!-- <select>
                                    <option value="1">Marcin Wesel</option>
                                    <option value="2">Microsoft</option>                                    
                                </select> -->
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Wybierz klienta</label>
                                <select class="form-select" id="inputGroupSelect01" name="customer">
                                    <option selected>Wybierz...</option>
                                    @foreach ($customers as $customer)
                                        <option value=" {{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="number" type="text" name="number" placeholder="numer faktury" data-sb-validations="required" />
                                <label for="name">Numer faktury</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" name="date" type="text" placeholder="data wystawienia" data-sb-validations="required" />
                                <label for="email">Data</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div> -->
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="total" name="total" type="text" placeholder="kwota faktury" data-sb-validations="required" />
                                <label for="phone">Kwota</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div> -->
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Dodaj fakture</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        @endsection

       