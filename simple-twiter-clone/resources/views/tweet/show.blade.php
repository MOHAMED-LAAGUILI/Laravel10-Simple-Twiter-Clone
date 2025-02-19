@extends('layout.layout')

@section('content')
    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Left Sidebar -->
        <div class="w-full md:w-1/4 p-6 border-r md:sticky md:top-0 md:h-screen">
            @include('shared.SideBar')

        </div>

        <!-- Center Feed -->
        <div class="flex-1 p-6 min-w-[40%]">
            @include('shared.Alert_Message')

            <!-- Tweets Feed -->
            <div class="space-y-4">
                @include('shared.Tweet_Card')
            </div>
        </div>


        <!-- Right Sidebar -->
        <div class="w-full md:w-1/4 p-6 border-l md:sticky md:top-0 md:h-screen ">

            @include('shared.Search-Box')

            @include('shared.Follow-Box')


        </div>
    </div>
@endsection
