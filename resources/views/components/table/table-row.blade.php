<tr>
    <td>{{ $stt }}</td>
    <td class="fw-semibold">{{ $job->name }}</td>

    {{-- Badge Status --}}
    <td>
        @php
            $statusText = $job->getStatus();
            $badgeClass = match($job->status) {
                0 => 'bg-success',
                1 => 'bg-warning',
                2 => 'bg-info',
                3 => 'bg-danger',
                default => 'bg-secondary'
            };
        @endphp

        <span class="badge {{ $badgeClass }} px-3 py-2">
                                    {{ $statusText }}
                                </span>
    </td>
    <td>
        {{$job->updated_at_formatted}}
    </td>

    <td>
        <x-buttons.edit-button :job="$job"/>
        <x-forms.delete :job="$job" />
    </td>
</tr>
