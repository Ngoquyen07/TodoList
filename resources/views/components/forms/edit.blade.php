<form action="{{ route('jobs.update', $job) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3" >
        <label>Job Name</label>
        <input type="text" name="name" class="form-control" value="{{ $job->name }}  " disabled >
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" rows="3" class="form-control">{{ $job->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select">
            <option value="0" @selected($job->status == 0)>Active</option>
            <option value="1" @selected($job->status == 1)>Drop</option>
            <option value="2" @selected($job->status == 2)>Done</option>
            <option value="3" @selected($job->status == 3)>Ignore</option>
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
