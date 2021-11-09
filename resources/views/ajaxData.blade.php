@foreach($todos as $todo)
    <li id="{{$todo->id}}">
        <a href="#" class="toggle"></a>
        <a href="#" onclick="task_done('{{$todo->id}}')" class="icon-done">Done</a>
        <span id="span_{{$todo->id}}">{{$todo->title}}</span>
        <a href="#" onclick="edit_task('{{$todo->id}}','{{$todo->title}}')" class="icon-edit">Edit</a>
        <a href="#" onclick="delete_task('{{$todo->id}}')" class="icon-delete">Delete</a>
    </li>
@endforeach
