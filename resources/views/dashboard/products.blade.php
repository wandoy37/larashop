@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Products</h4>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <livewire:product.index />
            </div>
        </div>
    </div>
</div>

@endsection