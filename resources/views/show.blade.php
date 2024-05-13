@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="show-info border-b border-gray-800">
            <div class="container mx-auto px-4 py-16 md:flex">
                <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="Poster" class="w-96 mx-auto md:mx-0 pb-3 md:pb-0" width="24rem">
                <div class="ml-24">
                    <h2 class="text-4xl font-semobold">{{$movie['original_title']}}</h2>
                    <div class="mt-2">
                        <div class="md:flex items-center text-gray-400">
                        <span class="flex">
                            <box-icon type="solid" name="star" color="orange"></box-icon>
                            <box-icon type="solid" name="star" color="orange"></box-icon>
                            <box-icon type="solid" name="star" color="orange"></box-icon>
                            <box-icon type="solid" name="star" color="orange"></box-icon>
                            <box-icon type="solid" name="star-half" color="orange"></box-icon>
                        </span>
                        <span class="ml-1">{{$movie['vote_average'] * 10}}%</span>
                        <span class="mx-2">|</span>
                        <span class="mx-2">{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        <span class="mx-2">|</span>
                        <div class="text-gray-400">
                        @foreach ($movie['genres'] as $genre)
                            {{$genre['name']}}@if (!$loop->last) , @endif
                        @endforeach
                        </div>
                    </div>
                    <p class="text-gray-300 mt-8">
                        {{$movie['overview']}}
                    </p>
                </div>
                <div class="mt-12">
                    <h2 class="text-white text-2xl font-semibold">Featured Cast</h2>
                    <div class="grid grid-cols-2">
                    @foreach ($movie['credits']['crew'] as $item)

                        @if ($loop->index < 4)
                        <div class="mt-4">
                                <div>{{$item['name']}}</div>
                                <div class="text-sm text-gray-400">{{$item['job']}}</div>
                        </div>
                        
                        @endif
                        @endforeach
                    </div>
                </div>
                @if (count($movie['videos']['results']) > 0)
                <div class="mt-12">
                    <a target="__blank" href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <box-icon name="play-circle"></box-icon> <span class="pl-3">Play Trailer</span>
                    </a>
                </div>
                @endif
            </div>
            </div>
        </div>


        {{-- Movie Cast --}}
        <div class="movie-cast border-b border-gray-800">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Cast</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($movie['credits']['cast'] as $item)
                    @if($loop->index < 8)
                    <div class="mt-8">
                        <a href="">
                            <img src="https://image.tmdb.org/t/p/w500/{{$item['profile_path']}}" class="hover:opacity-75 transition ease-in-out" alt="parasite">
                        </a>
                        <div class="mt-2">
                            <h3 class="text-xl">{{$item['original_name']}}</h3>
                            <h4 class="text-md text-gray-500">{{$item['character']}}</h4>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>


        {{-- Image --}}
        <div class="movie-image border-b border-gray-800">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Image </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($movie['images']['backdrops'] as $item)
                    @if($loop->index < 14)
                    <div class="mt-8">
                        <a href="">
                            <img src="https://image.tmdb.org/t/p/w500/.{{$item['file_path']}}" class="hover:opacity-75 transition ease-in-out" alt="parasite">
                        </a>
                    </div>
                    @endif
                    @endforeach
          
                </div>
            </div>
        </div>
    </div>
@endsection

