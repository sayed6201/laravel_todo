
<div class="modal fade left" id="add-task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!--Modal: Contact form-->
    <div class="modal-dialog modal-full-height modal-left modal-md" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header primary-color white-text">
                <h4 class="title">
                    <i class="fa fa-pencil"></i> Add Task</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">

                <form action="/create" method="post">
                {{ csrf_field() }}
                    <!-- Material input subject -->
                    <div class="md-form form-sm">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="materialFormSubjectModalEx1" name="task" class="form-control form-control-sm">
                        <label for="materialFormSubjectModalEx1">Task name</label>
                    </div>

                    <!-- Material textarea message -->
                    <div class="md-form form-sm">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="materialFormMessageModalEx1" name="description" class="md-textarea form-control"></textarea>
                        <label for="materialFormMessageModalEx1">Description</label>
                    </div>

                    <div class="text-center mt-4 mb-2">
                        <button class="btn btn-primary">Add
                            <i class="fa fa-save ml-2"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--/.Content-->
    </div>
    <!--/Modal: Contact form-->
</div>
