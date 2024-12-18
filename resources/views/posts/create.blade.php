
@extends('layouts.app')

@section('title', '投稿詳細')

@section('content')
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

              <div class="mb-2">
                <a href="{{ route('posts.index') }}" class="text-decoration-none">&lt; 戻る</a>
              </div>

      <form action="{{ route('posts.store') }}" method="POST">
            @csrf
              <div class="form-group mb-3">
                <label for="title">タイトル</label>
                <input class="form-control"  type="text" id="title" name="title" value="{{ old('title') }}">
              </div>

          <div class="form-group mb-3">
            <label for="content">本文</label>
            <textarea class="form-control" name="content" id="content">{{ old('conten')}}</textarea>
          </div>
            <button class="btn btn-outline-primary" type="submit">投稿</button>
      
        </form>
@endsection