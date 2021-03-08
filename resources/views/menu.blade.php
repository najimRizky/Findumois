@extends('main.main')

@section('title','Menu')

@section('style')
<style>
    .nav-pills .nav-link{
        border-radius: 50px !important; 
        padding: 2px 5px;
        
    }
    .nav-pills a{
        border: 1px  solid red;
        color: black;
        font-size: 13px;
        transition: 0.3s;
        margin: 1px;
    }
    .nav-pills a:hover{
        border: 1px red;
        border: 1px  solid red;
        background: rgb(255, 201, 120);
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        color: white;
        background-color: rgb(201, 0, 0);
    }
    .nav-kategori{
        width: 320px;
        margin: auto;
        justify-content: center
    }
</style>
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center " data-aos="fade-down">Menu</h1>
        <nav class="nav nav-pills nav-kategori  nav-justified mb-5">
            <a data-aos-delay="200" data-aos="fade-down" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/appetizer') ? 'active ' : '' }}" href="/menu/appetizer" >Appetizer</a>
            <a data-aos-delay="400" data-aos="fade-up" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/main course') ? 'active ' : '' }}" href="/menu/main course">Main Course</a>
            <a data-aos-delay="600" data-aos="fade-down" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/dessert') ? 'active ' : '' }}" href="/menu/dessert">Dessert</a>
            <a data-aos-delay="800" data-aos="fade-up" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/drink') ? 'active ' : '' }}" href="/menu/drink" type="button"></i>Drink</a>
        </nav>
        <div class="row align-items-center justify-content-center">
            @foreach ($menus as $item) 
                @include('components.card',['item' => $item])
            @endforeach
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
            $('[data-toggle="popover"]').on('click', function(e) {e.preventDefault(); return true;});
        });
    </script>
@endsection