@extends('layouts.app')

@section('content')

    <div class="flex justify-between">

        <div class="w-auto" >
            @include('_sidebar-links')
        </div>

        <div class="flex-1 mx-10 style='max-width:700px'">

            @include('_publish-tweets')



        <div class="border border-gray-300 rounded-lg">

          @foreach ($tweets as $tweet)

             @include('_tweet')

          @endforeach

        </div>
    </div>

        <div class="bg-blue-100 rounded-lg p-4">
            @include('_friends-list')
        </div>

    </div>
@endsection
