<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Task</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="card shadow-sm">
        <div class="card-body">

            <h1 class="mb-4">Create Task</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{ old('title') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>

                    <textarea
                        id="description"
                        name="description"
                        class="form-control"
                        rows="4"
                    >{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>

                    <select
                        id="status"
                        name="status"
                        class="form-select"
                        required
                    >
                        <option value="">Select a status</option>
                        <option value="Pending" {{ old('status') === 'Pending' ? 'selected' : '' }}>
                            Pending
                        </option>
                        <option value="In Progress" {{ old('status') === 'In Progress' ? 'selected' : '' }}>
                            In Progress
                        </option>
                        <option value="Completed" {{ old('status') === 'Completed' ? 'selected' : '' }}>
                            Completed
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>

                    <input
                        type="date"
                        id="due_date"
                        name="due_date"
                        class="form-control"
                        value="{{ old('due_date') }}"
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Save Task
                </button>

                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                    Cancel
                </a>
            </form>

        </div>
    </div>

</div>

</body>
</html>