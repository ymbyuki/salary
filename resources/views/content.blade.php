@extends('layouts.main')

@section('content')

<div class="flex justify-center min-h-screen items-center bg-gray-100">
  <div class="shadow bg-white w-full sm:w-1/2 pb-4 sm:m-24 m-12">
    <div class="text-lg text-center py-2 bg-blue-500 text-white inline-block w-full">
      <p>振込日：{{ $content->date }}</p>
    </div>
    <div class="bg-white sm:px-24 px-8 sm:pt-16 pt-8 sm:text-base text-sm">
      <div class="items-center">
        <p class="">給与先：{{ $content->workplace }}</p>
        <p class="py-2">銀行　：{{ $content->bank }}</p>
        <p>金額　：{{ $content->money }}円</p>
      </div>
    </div>
    <div class="mt-4 pr-4 pb-4 flex gap-4 justify-end">
      <form action="{{ route('update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $content->id }}">
        <input class="bg-blue-200 hover:bg-blue-300 py-2 px-4 rounded" type="submit" value="更新">
      </form>
      <form action="{{ route('delete') }}" method="post" >
        @csrf
        <input type="hidden" name="id" value="{{ $content->id }}">
        <input class="bg-red-200 hover:bg-red-300 py-2 px-4 rounded" type="submit" value="削除">
      </form>
    </div>
  </div>
</div>

@endsection