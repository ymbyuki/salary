@extends('layouts.main')

@section('content')



<div class="flex justify-center min-h-screen items-center bg-gray-100">
    <div class="shadow bg-white">
        <div class="text-lg text-center py-2 bg-blue-500 text-white inline-block w-full">
            <p>登録完了</p>
        </div>
        <div class="bg-white sm:px-24 px-16 sm:py-16 py-8">
            <div class="items-center">
                <p class="py-2">振込日：{{ $data->date }}</p>
                <p class="">給与先：{{ $data->workplace }}</p>
                <p class="py-2">銀行　：{{ $data->bank }}</p>
                <p>金額　：{{ $data->money }}円</p>
            </div>
        </div>
        <div class="p-4 text-right">
            <a href="/index" class="bg-blue-200 p-3 rounded-md hover:bg-blue-300">ホーム</a>
        </div>
    </div>
</div>
@endsection