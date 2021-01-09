@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">報修詳細資訊</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- main page -->
                    <div class="mb-3">
                        <label class="form-label">物品型號</label>
                        {{ $array['title'] ?? '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">物品類型</label>
                        {{ $array['type'] ?? '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">狀況概述</label>
                        {{ $array['sub'] ?? '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">報修者姓名</label>
                        {{ $array['name'] ?? '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">報修者聯絡電話</label>
                        {{ $array['phone'] ?? '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">報修物品地址</label>
                        {{ $array['place'] ?? '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">報修物品時間</label>
                        {{ $array['time'] ?? '' }}
                    </div>
                    <!-- /.main page -->
                </div>
            </div>
        </div>
    </section>
@endsection
