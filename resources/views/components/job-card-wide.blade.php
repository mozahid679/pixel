@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex flex-1 flex-col">
        <a class="self-start text-sm text-gray-400 transition-colors duration-300"
            href="#">{{ $job->employer->name }}</a>

        <h3 class="mt-3 text-xl font-bold group-hover:text-blue-800"> <a href="{{ $job->url }}">
                {{ $job->title }}
            </a></h3>

        <p class="mt-auto text-sm text-gray-400">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
