@extends('layouts.main')

@section('content')

<main class="pb-8 sm:px-16 px-8 bg-gray-50 min-h-screen">
  <!-- 振込額確認 -->
  <h2 class="text-2xl pt-8">全ての給与履歴</h2>

  <!-- 履歴 -->

  <div class="py-12">
    <div class="bg-blue-900 p-2 text-center text-white">
      <p>給与履歴</p>
    </div>
    @foreach($list as $item)
    <form action="{{ route('content') }}" method="post" class="shadow" onSubmit="attention()">
      @csrf
      <button id="button" type='submit' name='action' value='send' class="w-full">
        <input type="hidden" name="id" value="{{ $item->id }}">
        <div class="text-lg text-center bg-blue-500 text-white inline-block w-full">
          <p>{{$item->date}}</p>
        </div>
        <div class="bg-white p-4 text-left hover:bg-gray-200">
          <div class="sm:grid grid-cols-6 items-center">
            <p class="col-span-4 sm:pr-2 pr-0">{{$item->workplace}}</p>
            <p class="flex-1 sm:pr-2 pr-0 text-sm sm:text-base sm:py-0 py-1">{{$item->bank}}</p>
            <p>{{$item->money}}円</p>
          </div>
        </div>
      </button>
    </form>
    @endforeach
    @if(count($list) === 0)
    <p class="text-center bg-white shadow">データがありません</p>
    @endif
  </div>



</main>

@endsection