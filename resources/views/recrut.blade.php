@if(auth()->user()->id)
<form method="post" action="{{route('groups.join',$group->id)}}">
    @csrf
    @method('PUT')
    <select class="form-select" name="class" aria-label="Default select example">
        <option selected>Choose your character</option>
        
        @foreach($character as $option)
        <option value="{{ $option->id }}" name={{$group->id}}> 
            {{ $option->id}}-{{ $option->name }}  ({{ $option->class }})
        </option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Join</button>