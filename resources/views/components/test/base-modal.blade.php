<button wire:click="$set('showBaseModal', true)">
    Show modal
</button>

<x-jet-modal wire:model="showBaseModal">
    <form>
        <label for="test-name">Name</label>
        <input
            id="test-name"
            type="text"
            wire:model="data.name"
        >

        <label for="test-surname">Surname</label>
        <input
            id="test-surname"
            type="text"
            wire:model="data.surname"
        >
    </form>
</x-jet-modal>
