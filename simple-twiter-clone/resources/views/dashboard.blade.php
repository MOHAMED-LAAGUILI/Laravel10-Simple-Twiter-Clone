@extends('layout.layout')

@section('content')
    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Left Sidebar -->
        <div class="w-full md:w-1/4 p-6 md:sticky md:top-0 md:h-screen">

            @include('shared.SideBar')

        </div>

        <!-- Center Feed -->
        <div class="flex-1 p-6 min-w-[50%]">
            @include('shared.Alert_Message')

            @include('shared.submit_tweet')

            <!-- Tweets Feed -->
            <div class="space-y-4">
                @foreach ($tweets as $tweet)
                    @include('shared.Tweet_Card')
                @endforeach

                <!-- Refined Pagination -->
                <div class="mt-4 flex justify-center">
                    {{ $tweets->links() }}
                </div>
            </div>
        </div>


        <!-- Right Sidebar -->
        <div class="w-full md:w-1/4 p-6 md:sticky md:top-0 md:h-screen">

            @include('shared.Search-Box')

            @include('shared.Follow-Box')

        </div>
    </div>
@endsection
