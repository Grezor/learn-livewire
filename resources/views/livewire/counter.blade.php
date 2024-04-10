<div>
    <h1>{{ $title }}</h1>
    <h1>{{ $count }}</h1>
    <h1>{{ $username }}</h1>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <button wire:click="createNewUser">
        Create new User
    </button>
    <hr>
    <!-- <h1>{{ $users }}</h1> -->
</div>
