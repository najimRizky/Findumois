@extends('main.main')

@section('title','Menu')

@section('style')
<style>
    .nav-kategori .nav-link{
        border-radius: 50px !important; 
        padding: 2px 5px;
    }
    .nav-kategori a{
        color: black;
        font-size: 15px;
        transition: 0.3s;
        margin: 10px;
        background-color: #16C79A;
        padding: 10px;
        width: 200px;
    }
    
    .nav-kategori .nav-link.active, .nav-kategori .show>.nav-link{
        color: white;
        background-color: red;
    }
    .nav-kategori{
        width: 100%;
        margin: auto;
        justify-content: center;
    }
    .button{
        text-align: center;
        width: 150px;
        border-radius: 12px;
    }

    .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    }

    .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
    }

    .button:hover span {
    padding-right: 25px;
    }

    .button:hover span:after {
    opacity: 1;
    right: 0;
    }

    /* @media only screen and (max-width 600px){
        .nav-kategori{
            width: 100%;
            margin: auto;
            justify-content: center;
        }
    } */

</style>
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container align-items-center justify-content-center">
        <div class="rounded" style="text-align: center; background-color: #EE99A0; padding: 70px; margin: 20px">
            <h1 style="color: #D3E0EA">OUR MENU</h1>
        </div>
        <nav class="nav nav-pills nav-kategori  nav-justified mb-5">
                    <a data-aos-delay="200" data-aos="fade-down" class="button text-sm-center " href="/menu/appetizer" type="button"><span>Appetizer</span></a>
                    <a data-aos-delay="400" data-aos="fade-down" class="button text-sm-center " href="/menu/main course" type="button"><span>Main Course</span></a>
                    <a data-aos-delay="600" data-aos="fade-down" class="button text-sm-center " href="/menu/dessert" type="button"><span>Dessert</span></a>
                    <a data-aos-delay="800" data-aos="fade-down" class="button text-sm-center " href="/menu/drink" type="button"><span>Drink</span></a>
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

        function showTotal(harga,id){
            jml = document.getElementById("jumlah"+id).value;
            total = harga*jml;
            if(jml>=0 && jml<=50){
                document.getElementById('total'+id).innerHTML = "Rp"+total.toLocaleString('en-US', {maximumFractionDigits:2});
                var a = document.getElementById('cart'+id);
                a.href = "keranjang/"+id+"/"+jml;
            }else if(jml>50){
                document.getElementById('total'+id).innerHTML = "Maksimal 50";
            }
            else{
                document.getElementById('total'+id).innerHTML = "Minimal jumlah 1";
            }
        }
    </script>
@endsection