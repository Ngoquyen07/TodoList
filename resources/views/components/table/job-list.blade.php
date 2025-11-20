<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0 text-center align-middle">
            <thead class="table-primary">
                <x-table.table-header/>
            </thead>
            <tbody>
                @php $stt = 1; @endphp
                @foreach ($jobs as $job)
                    <x-table.table-row :job="$job" :stt="$stt"/>
                    @php $stt ++; @endphp
                @endforeach
                {{--In case no job --}}
                <x-table.zero-job  :jobs="$jobs"/>
            </tbody>
        </table>
    </div>
</div>
