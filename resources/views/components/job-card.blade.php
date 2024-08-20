@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 transition-colors duration-300 text-xl font-bold">
            <a href="{{ $job->url }}" target="_blank"> {{ $job->title }}</a>
        </h3>
        <p class="mt-4 text-sm">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach

        </div>
        <x-employer-logo :employer="$job->employer" />
    </div>
</x-panel>
