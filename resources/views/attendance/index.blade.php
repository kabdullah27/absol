<x-volt-app title="List Attendance">

    <x-slot name="actions">
        <x-volt-link-button :label="__('Checkin')" url="{{ route('attendance.create') }}" icon="plus">
        </x-volt-link-button>
    </x-slot>

    {{-- @livewire(\App\Http\Livewire\Table\Attendance::class)  --}}

    <table class="ui attached table unstackable responsive m-b-0" aria-label="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Employee</th>
                <th>Checkin</th>
                <th>Shift</th>
                <th>In Location</th>
                <th>Leave In Desc</th>
                <th>Check Out</th>
                <th>Leave Out Desc</th>
            </tr>
        </thead>
        @foreach($datas as $key=>$data)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->user->employee->employee_name }}</td>
                <td>{{ $data->attendance_date_check_in }}</td>
                <td>{{ $data->schedule->shift->shift_name }}</td>
                <td>{{ $data->location_checkin->location_name }}</td>
                <td>{{ $data->attendace_desc_check_in }}</td>
                <td>{{ $data->attendance_date_check_out }}</td>
                <td>{{ $data->attendace_desc_check_out }}</td>
            </tr>
        @endforeach
    </table>
    
</x-volt-app>