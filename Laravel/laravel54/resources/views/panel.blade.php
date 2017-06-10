<article class="message is-success">
    <div class="message-header">
        <p>{{ $heading ?? 'Default Value' }}</p>
        <button class="delete"></button>
    </div>
    <div class="message-body">
        {{ $slot }}
    </div>
</article>
