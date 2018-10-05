@extends('layouts.app')

@section('content')

    <div id="contentarea" class="is-container container">

    <!-- This is just a sample existing content (content can be loaded from a database) -->
        <div class="row clearfix">
            <div class="column full">
                <div class="center">
                    <i class="icon ion-leaf size-48"></i>
                    <h1 style="font-size: 1.3em">BEAUTIFUL CONTENT</h1>
                    <div class="display">
                        <h1>LOREM IPSUM IS SIMPLY DUMMY TEXT</h1>
                    </div>
                 </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="column full">
                <hr>
            </div>
        </div>
        <div class="row clearfix">
            <div class="column half">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
            </div>
            <div class="column half">
                <img src="editor/assets/minimalist-basic/e09-1.jpg" alt="">
            </div>
        </div>

    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif                               

                        <div>   
                            <a href="#" class="button button-default">Administrador de contenido</a>
                        </div>                
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
