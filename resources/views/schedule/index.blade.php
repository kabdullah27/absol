<x-volt-app :title="__('List Schedule')">

    <x-slot name="actions">
        <x-volt-link-button
                :url="route('schedule.create')"
                icon="plus"
                :label="__('Create Schedule')"/>
    </x-slot>

    @livewire(\App\Http\Livewire\Table\ScheduleTable::class)

</x-volt-app>
