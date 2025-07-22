<x-layout>
    <x-page-heading>
        New Job
    </x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        <x-forms.input name="title" label="Job Title" placeholder="CEO" />
        <x-forms.input name="salary" type="number" label="Salary" placeholder="$90,000 USD" />
        <x-forms.input name="location" label="Location" placeholder="Dhaka, Bangladesh" />

        <x-forms.select name="schedule" label="Schedule">
            <option>Full Time</option>
            <option>Part Time</option>
            <option>Contract</option>
            <option>Internship</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="pixel.inc" />
        <x-forms.checkbox name="featured" label="Featured (Costs Extra)" />


        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (Comma separatod)" placeholder="pixel,inc, video" />

        <x-forms.button>Post Job</x-forms.button>

    </x-forms.form>
</x-layout>
