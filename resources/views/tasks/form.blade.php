<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $task->title ?? '') }}" required>
    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Due Date</label>
    <input type="datetime-local" name="due_date" class="form-control" value="{{ old('due_date', isset($task) ? $task->due_date->format('Y-m-d\TH:i') : '') }}" required>
    @error('due_date') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
        <option value="Pending" {{ old('status', $task->status ?? '') == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Completed" {{ old('status', $task->status ?? '') == 'Completed' ? 'selected' : '' }}>Completed</option>
        <option value="Overdue" {{ old('status', $task->status ?? '') == 'Overdue' ? 'selected' : '' }}>Overdue</option>
    </select>
    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
</div>
