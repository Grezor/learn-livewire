<div class="container mx-auto">
    @if (session('success'))
        <span class="w-100 py-3 bg-green-300 text-dark rounded">{{ session('success') }}</span>
    @endif
    <form class="p-5" wire:submit="createNewUser" action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" 
            wire:model="name" type="text" name="" id="" placeholder="name">
            @error('name')
                <span class="text-red-500 text-xs">
                    {{ $message }}
                </span>
            @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" 
            wire:model="email" type="email" name="" id="" placeholder="email">
            @error('email')
                <span class="text-red-500 text-xs">
                    {{ $message }}
                </span>
            @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" 
            wire:model="password" type="password" name="" id="" placeholder="password">
            @error('password')
                <span class="text-red-500 text-xs">
                    {{ $message }}
                </span>
            @enderror
        <button class="block w-auto rounded border border-gray-400 text-dark" 
            wire:click.prevent="createNewUser">Create</button>
    </form>
    <hr>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    {{ $users->links() }}
</div>
