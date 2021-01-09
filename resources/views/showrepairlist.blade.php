@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">報修物品列表</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- main page -->
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-dark"
                           aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">維修列表</h5>
                            </div>
                        </a>
                    </div>
                    <div class="list-group">
                        @foreach ($items as $item)
                            <a href={{ route('login') }} class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $item['title'] }}</h5>
                                <small>{{ $item['time'] }}</small>
                            </div>
                            <p class="mb-1">{{ $item['sub'] }}</p>
                            <small>{{ $item['dis'] }}</small>
                            </a>
                        @endforeach
                    </div>


                    <!-- /.main page -->
                </div>
            </div>
        </div>
    </section>
@endsection
