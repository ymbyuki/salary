@extends('layouts.main')

@section('content')

<div class="flex justify-center min-h-screen items-center bg-gray-100">
    <div class="w-full pb-12 bg-white sm:m-24 m-12">
        <div class="text-lg text-center py-2 bg-blue-500 text-white inline-block w-full">
            <p>給与登録</p>
        </div>
        <form class="w-10/12 mx-auto md:max-w-md" action="" method="post" onSubmit="attention()">
            <!-- CSRF保護 -->
            @csrf
            <div class="mb-8 mt-8">
                <label for="date" class="text-sm block mb-2 mt-2">振込日</label>
                <input type="date" name="date"
                    class="w-full py-2 border-b focus:outline-none focus:border-b-2 focus:border-indigo-500 placeholder-gray-500 placeholder-opacity-50"
                    required value="{{old('date')}}" />
            </div>
            <div class="mb-8">
                <label for="bank" class="text-sm bloc mb-2">銀行</label>
                <input type="text" name="bank"
                    class="w-full py-2 border-b focus:outline-none focus:border-b-2 focus:border-indigo-500 placeholder-gray-500 placeholder-opacity-50"
                    placeholder="○○銀行" required value="{{old('bank')}}" />
            </div>
            <div class="mb-8">
                <label for="address" class="text-sm block mb-2">給与先</label>
                <input type="text" name="workplace"
                    class="w-full py-2 border-b focus:outline-none focus:border-b-2 focus:border-indigo-500 placeholder-gray-500 placeholder-opacity-50"
                    placeholder="株式会社○○" required value="{{old('workplace')}}" />
            </div>
            <div class="mb-8">
                <label for="money" class="text-sm block mb-2">金額</label>
                @error('money')
                <div class="text-sm bg-red-200 p-1 my-1 rounded-md flex"><i
                        class="ri-file-warning-line pr-2"></i>{{ $message }}</div>
                @enderror
                <input type="text" name="money"
                    class="w-full py-2 border-b focus:outline-none focus:border-b-2 focus:border-indigo-500 placeholder-gray-500 placeholder-opacity-50"
                    placeholder="10000" required />
            </div>
            <div class="text-right">
                <button id="button" type="submit" class="bg-blue-200 px-4 py-2 rounded">送信</button>
            </div>
        </form>
    </div>
</div>

<script>
    function attention() {
        document.getElementById('button').disabled = true;
    }
</script>
@endsection