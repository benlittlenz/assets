



@csrf

<div>
    <label for="">Title</label>
    <div>
        <input 
            class="input bg-transparent" 
            type="text" 
            name="title" 
            value={{$snippet->title}}>
    </div>
</div>

<div>
    <label for="">Description</label>
    <div>
        <textarea type="text" name="description">{{$snippet->description}}</textarea>
    </div>
</div>

<div>
    <label for="">Code</label>
    <div>
        <textarea type="text" name="code">{{$snippet->code}}</textarea>
    </div>
</div>

<div>
    <div>
        <button class="button is-button" type="submit">{{$buttonText}}</button>
        <a href="{{$snippet->path()}}">Back</a>
    </div>
</div>
