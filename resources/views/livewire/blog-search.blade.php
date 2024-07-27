<div x-data = "{search: ''}">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Posts" x-model="search"
            @input.debounce="open = true;  $wire.updateSearch($event.target.value)">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
        </span>
    </div>


    <div class="mt-3">
        @foreach ($posts as $post)
            <a href="{{ route('single-post', $post->slug) }}" class="bg-white rounded-md">
                <p>{{ $post->title }}</p>
                <title>{{ $post->title }}</title>
            </a>
        @endforeach
    </div>


</div>
