@section('layouts.default')
@section('title', $title)

@section('content')
<div class="col-md-8 col-md-offset-2">
    <h1>{{ $title }}</h1>
    <ul class="users">
        @foreach ($users as $user)
            <li>
                <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
                <a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>
            </li>
        @endForeach
    </ul>
</div>
@endSection