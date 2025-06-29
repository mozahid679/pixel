@props(['job'])

<x-layout>
    <div class="space-y-10">
        <section class="my-10 text-center">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>
            <form class="mt-6" action="">
                <input class="w-full max-w-xl rounded-xl border-white/10 bg-white/5 px-5 py-4" id=" "
                    name="" type="text" placeholder="I'm looking for ...">
            </form>
        </section>
        <section>
            <x-section-heading> Featured Jobs </x-section-heading>
            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading> Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>

        </section>
        <section>
            <x-section-heading> Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
