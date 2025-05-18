@extends('site.layouts.header')
@section('title','file upload')
@section('body')

<div class="w-full h-screen flex justify-center items-center relative">
    @session('success')
    <p class="fixed top-24 right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
        {{session('success')}} 
    </p>
    @endsession
    @session('error')
    <p class="fixed top-24 right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[crimson]">
        {{session('success')}} 
    </p>
    @endsession
    <form method="POST" action="{{ route('upload_request') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label id="label" class="px-4 rounded-sm cursor-pointer bg-[#808080bb] py-2" for="img_file">Select a file </label>
            <input onchange="previewPhoto()" type="file" name="img_file" id="img_file" class="hidden"> </br>
            @error('img_file')
                <small class=" text-[crimson]">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div id="container" class=" hidden">
            <img id="noimage" class=" w-28   h-24" src="" alt=""> </br>
            <button class="px-2 rounded-sm cursor-pointer py-1 bg-[#808080bb]" type="submit">
                Compress file
            </button>
        </div>
    </form>
</div>

<script src="{{ asset('js/preview.js') }}"></script>
@endsection
