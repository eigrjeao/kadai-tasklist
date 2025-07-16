@extends('layouts.app')

@section('content')

<!-- ここにページごとのコンテンツを書く -->
  <div class="prose ml-4">
        <h2 class="text-lg">タスク新規作成ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('tasks.store') }}" class="w-1/2">
            @csrf

                <div class="form-control my-4">
                    <label for="status" class="label">
                        <span class="label-text">ステータス:</span>
                    </label>
                    <input type="text" name="status" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">タスク:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">投稿</button>
        </form>
    </div>

@endsection