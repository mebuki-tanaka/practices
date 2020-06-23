{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile,blade.phpの@yield('title')に’Myprofile’を埋め込む --}}
@section('title', 'Myprofile')

{{--  profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>My プロフィール</h2>
        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

          @if (count($errors) > 0 )
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2" for="name">氏名</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ old('title') }}">
            </div>
            <label class="col-md-2" for="gender">性別</label>
            <div class="col-md-2">
              <input type="radio" name="性別"  value="男"/>男
              <input type="radio" name="性別" value="女"/>女
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection