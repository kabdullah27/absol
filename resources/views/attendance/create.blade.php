<x-volt-app :title="__($title)">
    <x-volt-panel title="{{ __($title) }}">
        {!! form()->bind($user)->post()->action(route('attendance.store')) !!}

        @php
            $query = 'SELECT id, location_name from mt_locations order by location_name';
        @endphp
        
        {!! form()->dropdownDB('location', $query, $keyColumn = 'id', $valueColumn = 'location_name')->label('location') !!}
        {!! form()->textarea('notes')->label('Notes'); !!}

        {!! form()->action(form()->submit('Save')) !!}
        {!! form()->close() !!}
    </x-volt-panel>
</x-volt-app>
