@extends("layouts.noLogin")
@section("title","トップ")

@section('header')
@parent
@endsection
@section('content')
<div class="w-full flex items-center justify-center" style="min-height: calc(100vh - 110px);">
    <div>

        <h1 class="text-center mb-6 font-bold">api.kotohazi.me</h1>

        <div class="flex justify-center gap-4 mb-8">
            <p>コトハジメのAPIです。</p>
        </div>

        <div class="wrapper">

        </div>
    </div>
</div>

@endsection
