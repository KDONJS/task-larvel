<div>
    <section class="flex flex-col items-center space-y-4 py-12">
        <h1 class="text-3xl font-bold">
            {{ $welcome }}
        </h1>

        @if(session()->has('message'))
            <h3 class="bg-emerald-300 font-bold mb-4 rounded text-center text-sm text-white p-2">{{ session('message') }}</h3>
        @endif

        <livewire:task/>

    </section>
</div>
