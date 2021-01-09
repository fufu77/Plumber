@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">報修紀錄列表
                    </h1>
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
                        @foreach ($items as $index => $item)
                            <a href={{ route('userrepairlist', $index) }} class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $item['title'] }}</h5>
                                    <small>{{ $item['time'] }}</small>
                                </div>
                                <p class="mb-1">{{ $item['sub'] }}</p>
                                <small>{{ $item['place'] }}</small>
                            </a>
                        @endforeach
                        {{-- <a href={{ route('login') }}
                            class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">印表機</h5>
                                <small>10 minutes ago</small>
                            </div>
                            <p class="mb-1">HP M632 不能印黑白</p>
                            <small>台中西屯區</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">電視機</h5>
                                <small class="text-muted">1 days ago</small>
                            </div>
                            <p class="mb-1">沒有聲音</p>
                            <small class="text-muted">台中北屯區</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">投影機</h5>
                                <small class="text-muted">5 days ago</small>
                            </div>
                            <p class="mb-1">沒有畫面</p>
                            <small class="text-muted">台中西屯區</small>
                        </a> --}}

                    </div>
                    <!-- /.main page -->
                </div>
            </div>
        </div>
    </section>
@endsection
