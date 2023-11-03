@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
    $tags = array_map('trim', $tags);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li >
        <a class="flex bg-black text-white rounded-xl px-3 py-1 mr-2" href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>