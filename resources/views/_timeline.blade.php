<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_post')
    @empty
        <p class="p-4">No Posts yet.</p>
    @endforelse

    {{ $tweets->links() }}
</div>
