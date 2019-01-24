

<!-- Modal -->
<div class="modal fade" id="task-complete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Completed Tasks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               @if(count($completes))
                   <!--Table-->
                       <table class="table table-hover">

                           <!--Table head-->
                           <thead>
                           <tr>
                               <th>Task</th>
                               <th>Completed at</th>
                               <th>  </th>
                           </tr>
                           </thead>
                           <!--Table head-->

                           <!--Table body-->
                           <tbody>

                           @foreach($completes as $complete)
                               <tr>

                                   <td>{{$complete->task}}</td>
                                   <td>{{$complete->deleted_at->diffForHumans()}}</td>
                                   <td><a href="/clear/{{$complete->id}}"><span class="badge purple darken-2">Clear</span></a></td>

                               </tr>
                           @endforeach

                           </tbody>
                           <!--Table body-->

                       </table>
                       <!--Table-->

                   @else
                        <h3>No Task completed Yet</h3>

               @endif


            </div>
        </div>
    </div>
</div>