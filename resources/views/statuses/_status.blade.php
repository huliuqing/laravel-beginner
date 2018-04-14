<li id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $status->user_id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar" />
    </a>

    <span class="user">
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    </span>

    <span class="timestamp">
        {{ $status->created_at->diffForHumans() }}
    </span>

    <span class="content">
        {{ $status->content }}
    </span>
</li>