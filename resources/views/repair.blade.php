@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">報修物品</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- main page -->
                    <form action="{{ route('repair:new') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">物品型號</label>
                            <input type="text" id="model" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">物品類型</label>
                            <input type="text" id="type" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">狀況概述</label>
                            <input type="text" id="depiction" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">報修者姓名</label>
                            <input type="text" id="user-name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">報修者聯絡電話</label>
                            <input type="text" id="user-phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">報修物品地址</label>
                            <input type="text" id="user-address" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">提交</button>
                    </form>
                    <!-- /.main page -->
                </div>
            </div>
        </div>
    </section>
@endsection
