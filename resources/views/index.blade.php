@extends('layouts.main')

@section('content')

<main class="pb-8 sm:px-16 px-8 bg-gray-50 min-h-screen">
  <!-- 振込額確認 -->
  <h2 class="text-2xl pt-24">{{ $year ?? '' }}年度給与計算</h2>

  <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-2 mt-8">

    <div class="flex items-center py-6 px-3 bg-white border-l-8 border-red-200 rounded-lg shadow-md">
      <h2><i class="ri-calendar-2-line text-4xl text-red-400"></i></h2>
      <div class="pl-6">
        <p class="text-xl">{{ $month }}円</p>
        <p class="pt-2">今月の給与</p>
      </div>
    </div>

    <div class="flex items-center py-6 px-3 bg-white border-l-8 border-blue-200 rounded-lg shadow-md">
      <h2><i class="ri-calendar-fill text-4xl text-blue-400"></i></h2>
      <div class="pl-6">
        <p class="text-xl">{{ $total }}円</p>
        <p class="pt-2">今年度の給与</p>
      </div>
    </div>

    @if($total >= 1030000)
    <div class="flex items-center py-6 px-3 bg-red-400 text-white border-l-8 border-green-200 rounded-lg shadow-md">
      <h2><i class="ri-lock-line text-4xl text-green-400"></i></h2>
      <div class="pl-6">
        <p class="text-xl">0円</p>
        <p class="pt-2">103万まで</p>
      </div>
    </div>
    @else
    <div class="flex items-center py-6 px-3 bg-white border-l-8 border-green-200 rounded-lg shadow-md">
      <h2><i class="ri-lock-unlock-line text-4xl text-green-400"></i></h2>
      <div class="pl-6">
        <p class="text-xl">{{ 1030000 - $total }}円</p>
        <p class="pt-2">103万まで</p>
      </div>
    </div>
    @endif

    @if($total >= 1300000)
    <div class="flex items-center py-6 px-3 bg-red-400 text-white border-l-8 border-yellow-200 rounded-lg shadow-md">
      <h2><i class="ri-lock-fill text-4xl text-yellow-400"></i></h2>
      <div class="pl-6">
        <p class="text-xl">0円</p>
        <p class="pt-2">130万まで</p>
      </div>
    </div>
    @else
    <div class="flex items-center py-6 px-3 bg-white border-l-8 border-yellow-200 rounded-lg shadow-md">
      <h2><i class="ri-lock-unlock-fill text-4xl text-yellow-400"></i></h2>
      <div class="pl-6">
        <p class="text-xl">{{ 1300000 - $total }}円</p>
        <p class="pt-2">130万まで</p>
      </div>
    </div>
    @endif
  </div>

  <!-- 履歴 -->

  <div class="py-12">
    <div class="bg-blue-900 p-2 text-center text-white">
      <p>給与履歴</p>
    </div>
    @foreach($data as $item)
    <form action="{{ route('content') }}" method="post" class="shadow">
      @csrf
      <button type='submit' name='action' value='send' class="w-full">
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
    @if(count($data) === 0)
    <p class="text-center bg-white shadow">データがありません</p>
    @endif
  </div>



</main>

@endsection