<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input name="email" type="email" label="Email" />
        <x-forms.input name="password" type="password" label="Password" />

        <x-forms.divider />


        <x-forms.button>Login</x-forms.button>
    </x-forms.form>

    <x-forms.divider />

    {{-- <x-forms.form method="GET" action="/register">
        <x-forms.button>Register</x-forms.button>
    </x-forms.form> --}}
</x-layout>
