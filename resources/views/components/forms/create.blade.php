<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf

            {{-- Job Name --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Job Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter job name" required>
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="description" rows="4" class="form-control" placeholder="Enter job description"></textarea>
            </div>

            {{-- Status --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select">
                    <option value="0">Active</option>
                    <option value="1">Drop</option>
                    <option value="2">Done</option>
                    <option value="3">Ignore</option>
                </select>
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save"></i> Save
            </button>

        </form>

    </div>
</div>
