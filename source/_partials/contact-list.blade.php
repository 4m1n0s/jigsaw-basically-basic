<ul class="contact-list">
    @if( $page->email )
    <li>
        <a href="mailto:{{ $page->email }}">
            <span class="icon icon--email"><svg xmlns="http://www.w3.org/2000/svg" viewBox="313.1 3.7 16 16"><path d="M318.5 8.9c0-.2.2-.4.4-.4h4.5c.2 0 .4.2.4.4s-.2.4-.4.4h-4.5c-.3 0-.4-.2-.4-.4zm.4 2.1h4.5c.2 0 .4-.2.4-.4s-.2-.4-.4-.4h-4.5c-.2 0-.4.2-.4.4s.1.4.4.4zm3.5 1.2c0-.2-.2-.4-.4-.4h-3.1c-.2 0-.4.2-.4.4s.2.4.4.4h3.1c.2.1.4-.1.4-.4zm-1.5-8.4l-1.7 1.4c-.2.1-.2.4 0 .6s.4.2.6 0l1.4-1.2 1.4 1.2c.2.1.4.1.6 0s.1-.4 0-.6l-1.7-1.4c-.3-.1-.5-.1-.6 0zm7.8 6.2c.1.1.1.2.1.3v7.9c0 .8-.7 1.5-1.5 1.5h-12.5c-.8 0-1.5-.7-1.5-1.5v-7.9c0-.1.1-.2.1-.3l1.6-1.3c.2-.1.4-.1.6 0s.1.4 0 .6l-1.2 1 1.8 1.3v-4c0-.6.5-1.1 1.1-1.1h7.5c.6 0 1.1.5 1.1 1.1v4l1.8-1.3-1.2-1c-.2-.1-.2-.4 0-.6s.4-.2.6 0l1.6 1.3zm-11.6 2.2l4 2.8 4-2.8V7.6c0-.1-.1-.2-.2-.2h-7.5c-.1 0-.2.1-.2.2v4.6zm10.9-1l-4.7 3.4 3.4 2.6c.2.1.2.4.1.6-.1.2-.4.2-.6.1l-3.6-2.8-1.2.8c-.1.1-.3.1-.5 0l-1.2-.8-3.6 2.8c-.2.1-.4.1-.6-.1-.1-.2-.1-.4.1-.6l3.4-2.6-4.7-3.4v7.1c0 .4.3.6.6.6h12.5c.4 0 .6-.3.6-.6v-7.1z"/></svg></span>
            <span class="label">Email</span>
        </a>
    </li>
    @endif

    @foreach($page->socials as $key => $values)
        <li>
            <a href="{{ $values->link }}" target="{{ $values->target ? $values->target : '_blank' }}">
                <span class="icon icon--{{ $key }}"><i class="{{ $values->icon }}"></i></span>
                <span class="label">{{ $values->label }}</span>
            </a>
        </li>
    @endforeach

    {{-- Once we have rss feed --}}
    {{--<li>--}}
        {{--<a href="{{ site.feed.path | default: 'feed.xml' | relative_url }}" title="Atom Feed">--}}
            {{--<span class="icon icon--rss">{% include icon-rss.svg %}</span>--}}
            {{--<span class="label">{{ site.data.theme.t.subscribe | default: 'Subscribe' }}</span>--}}
        {{--</a>--}}
    {{--</li>--}}
</ul>
