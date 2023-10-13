<x-layout>
    <x-card>
        <form action="{{ route('employer.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <x-label for="company_name" :required="true">Company Name</x-label>
                <x-text-input name="company_name" />
            </div>
            <x-button class="w-full">create</x-button>


    </x-card>
</x-layout>
