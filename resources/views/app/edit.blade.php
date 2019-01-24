
<div class="card hoverable p-sm-3 sticky-top">
    <!-- Default form contact -->
    <form action="/update/{{!empty($data->id)? $data->id : ''}}" method="post" >
        <p class="h4 text-center mb-4">Description</p>
    {{ csrf_field() }}
    <!-- Default input subject -->
        <label for="defaultFormContactSubjectEx" class="grey-text">Task Name</label>
        <input type="text" id="defaultFormContactSubjectEx" class="form-control" name="task" value="{{!empty($data)? $data->task : ''}}">

        <br>

        <!-- Default textarea message -->
        <label for="defaultFormContactMessageEx" class="grey-text">Description</label>
        <textarea type="text" id="defaultFormContactMessageEx" name="description" class="form-control" rows="3">{{!empty($data)? $data->description : ''}}</textarea>

        <div class="text-center mt-4">
            <button class="btn btn-outline-dark" type="submit">Update<i class="fa fa-save ml-2"></i></button>
        </div>
    </form>
    <!-- Default form contact -->
</div>
