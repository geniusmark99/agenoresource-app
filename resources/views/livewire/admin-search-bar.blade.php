<div>
    <input 
        type="text" 
        placeholder="Search users..." 
        class="border p-2 rounded w-full"
        wire:model="searchTerm"
    />

    @if($users)
        <ul class="border rounded mt-2 w-full bg-white shadow">
            @foreach($users as $user)
                <li class="p-2 hover:bg-gray-200 cursor-pointer">
                    {{ $user->firstname }} {{ $user->lastname }} ({{ $user->email }}) - UUID: {{ $user->uuid }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
