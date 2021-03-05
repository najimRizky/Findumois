@extends('main.main')

@section('title')
    Menu
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center" data-aos="fade-down">Menu</h1>
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