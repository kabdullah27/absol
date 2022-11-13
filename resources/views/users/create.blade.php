<x-volt-app :title="__('laravolt::menu.add_user')">

    <x-slot name="actions">
        <x-volt-backlink :url="route('users.index')"/>
    </x-slot>

    <x-volt-panel title="Form Tambah Pengguna" icon="user-plus">
        {!! form()->open()->post()->action(route('users.store'))->horizontal() !!}
        {!! form()->text('name')->label('User Name')->required() !!}
        {!! form()->text('email')->label(trans('laravolt::users.email'))->required() !!}
        {!! form()->input('password')->appendButton(trans('laravolt::action.generate_password'), 'randomize')->label(trans('laravolt::users.password'))->required() !!}
        @php
            $query = 'SELECT me.id, me.employee_name from mt_employees me where not exists (select * from users u where u.employee_id = me.id) order by employee_name';
        @endphp

        {!! form()->dropdownDB('employee_id', $query, $keyColumn = 'id', $valueColumn = 'employee_name')->label('Nama Karyawan')->required() !!}

        @if($multipleRole)
            {!! form()->checkboxGroup('roles', $roles)->label(trans('laravolt::users.roles')) !!}
        @else
            {!! form()->radioGroup('roles', $roles)->label(trans('laravolt::users.roles')) !!}
        @endif

        {!! form()->hidden('status', 'ACTIVE') !!}
        {!! form()->select('timezone', $timezones, config('app.timezone'))->label(__('laravolt::users.timezone')) !!}

        <div class="ui divider section"></div>


        {!! form()->action(form()->submit(__('Save')), form()->link(__('Cancel'), route('users.index'))) !!}
        {!! form()->close() !!}

    </x-volt-panel>

    @push('body')
        <script>
            $(function () {
                $('.randomize').on('click', function (e) {
                    $(e.currentTarget).prev().val(Math.random().toString(36).substr(2, 8));
                });
            });
        </script>
    @endpush

</x-volt-app>


