<div>
    @if ($successMessage)
        <div  
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        x-transition
        class="text-green-600 mb-4 font-semibold"style="color: green; margin-bottom: 10px;">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="subscribe">
        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" wire:model.live.debounce.100="name" 
            class="border border-black-500 rounded px-5 py-1">
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" wire:model.live.debounce.100="email" 
            class="border border-black-500 rounded px-5 py-1">
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Subscribe</button>
    </form>
</div>