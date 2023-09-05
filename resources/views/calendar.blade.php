{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')

{{-- app.blade.phpの@yield('title')に'共有カレンダー'を埋め込む --}}
@section('title', '共有カレンダー')

{{-- app.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>共有カレンダー</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id='calendar'></div>
                <script src="{{ mix('js/app.js') }}"></script>
            </div>
        </div>
    </div>
@endsection