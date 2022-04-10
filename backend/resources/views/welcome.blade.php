@extends("layouts.noLogin")
@section("title","トップ")

@section('header')
@parent
@endsection
@section('content')
<div class="w-full flex items-center justify-center" style="min-height: calc(100vh - 110px);">
    <div>

        <h1 class="text-center mb-6 font-bold">kotohazi.me</h1>

        <div class="flex justify-center gap-4 mb-8">
            @guest
            ログイン。会員登録
            @else
            ダッシュボード
            @endguest
        </div>

        <div class="wrapper">

        </div>
    </div>
</div>

@endsection
