@extends('layouts.app') 

@section('content')
      <!-- Portfolio Section-->
        <section class="masthead page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista klientow</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa klienta</th>
            <th scope="col">adres</th>
            <th scope="col">nip</th>
            <th scope="col">akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td><a href="{{ route('customers.show', ['klienci' => $customer->id]) }}" ">{{ $customer->name }}</a></td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->adres}}</td>
                    <td>{{$customer->nip}}</td>
                    <td><a href="{{ route('customers.edit', ['klienci' => $customer->id]) }}" class="btn btn-primary">Edytuj</a>
                    
                    <form action="{{ route('customers.destroy', ['klienci' => $customer->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"  class="btn btn-danger">Usun</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
        </table>
            </div>
        </section>
@endsection
 