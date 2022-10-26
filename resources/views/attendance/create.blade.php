<x-volt-app :title="__($title)">
    <x-volt-panel title="{{ __($title) }}">
        {!! form()->bind($user)->post()->action(route('attendance.store')) !!}

        @php
            $query = 'SELECT id, location_name from mt_locations order by location_name';
        @endphp

        {!! form()->dropdownDB('location', $query, $keyColumn = 'id', $valueColumn = 'location_name')->label('location') !!}
        {!! form()->textarea('notes')->label('Notes') !!}
        {!! form()->hidden('lat')->id('lat') !!}
        {!! form()->hidden('long')->id('long') !!}

        {!! form()->action(form()->submit('Save')) !!}
        {!! form()->close() !!}
    </x-volt-panel>
</x-volt-app>


<script>
    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };

    function success(pos) {
        const crd = pos.coords;

        document.getElementById("lat").value = crd.latitude;
        document.getElementById("long").value = crd.longitude;

    }

    function error(err) {
        alert(`ERROR: ${err.message}`);
        window.location.href = `${document.location.origin}/attendance`;
    }

    navigator.geolocation.getCurrentPosition(success, error, options);
</script>
