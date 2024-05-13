<div class="mt-8">
    <a href="{{route('movies.show',$movie['id'])}}">
        <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" class="hover:opacity-75 transition ease-in-out" alt="poster">
    </a>
    <div class="mt-2">
        <a href="" class="text-lg mt-2 hover:text-gray-300">{{$movie['original_title']}}</a>
        <span class="flex">
            <box-icon type="solid" name="star" color="orange"></box-icon>
            <box-icon type="solid" name="star" color="orange"></box-icon>
            <box-icon type="solid" name="star" color="orange"></box-icon>
            <box-icon type="solid" name="star" color="orange"></box-icon>
            <box-icon type="solid" name="star-half" color="orange"></box-icon>
        </span>
        <div class="flex items-center text-gray-400">
            <span class="ml-1">{{$movie['vote_average'] * 10}}%</span>
            <span class="mx-2">|</span>
            <span class="mx-2">{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
        </div>
        <div class="text-gray-400">
            @foreach ($movie['genre_ids'] as $genre)
                {{$genres->get($genre)}}@if (!$loop->last) , @endif
            @endforeach
        </div>
    </div>
</div>