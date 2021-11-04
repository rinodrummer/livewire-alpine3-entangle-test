<button wire:click="$set('showCustomModal', true)">
    Show customized modal
</button>

<x-jet-custom-modal wire:model="showCustomModal">
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
</x-jet-custom-modal>
