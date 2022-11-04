<x-volt-app :title="__('Schedule')">
    <x-slot name="actions">
        <x-volt-backlink url="{{ route('schedule.index') }}">Kembali ke Index
        </x-volt-backlink>
    </x-slot>
    <x-volt-panel title="{{ __('Schedule') }}">
        {!! form()->bind($user)->post()->action(route('schedule.import_excel')) !!}

        {!! form()->uploader('file')->extensions(['xls', 'xlsx'])->ajax(false)->label('Upload Excel') !!}
        {!! form()->textarea('schedule_upload_notes')->label('Notes') !!}

        {!! form()->action(form()->submit('Save')) !!}
        {!! form()->close() !!}
    </x-volt-panel>
</x-volt-app>
