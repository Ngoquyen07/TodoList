<form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-outline-danger"
            onclick="return confirm('Are you sure to delete this job?')">
        Delete
    </button>
</form>
