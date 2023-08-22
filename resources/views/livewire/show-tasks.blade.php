<div>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Task</th>
                <th scope="col">End Date</th>
                <th scope="col">Priority</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th>{{ $task->title }}</th>
                    <td>{{ $task->end_date }}</td>
                    <td>{{ $task->priority }}</td>
                    <td>{{ $task->status }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tasks->links() }}
</div>
