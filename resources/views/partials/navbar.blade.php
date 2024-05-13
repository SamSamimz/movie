<nav class="border-b border-gray-800">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li class="py-3 md:py-0">
                <a href="/" class="flex items-center justify-center gap-2"><box-icon color="white" name='movie-play'></box-icon> <span>Movie App</span></a>
            </li>
            <li class="py-3 md:py-0 md:ml-16">
                <a href="#">Movies</a>
            </li>
            <li class="py-3 md:py-0 md:ml-16">
                <a href="#">TV Shows</a>
            </li>
            <li class="py-3 md:py-0 md:ml-16">
                <a href="#">Actors</a>
            </li>
        </ul>
        <div class="flex items-center">
          @livewire('search-dropdown',)
        </div>
    </div>
</nav>


