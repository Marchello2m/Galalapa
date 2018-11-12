<div class="container">
        <div class="row justify-content-center app--header align-items-center">
            <div class="col-12 col-sm-9 col-md-5 text-md-center">
                <h2>Vienkārš darāmo lietu saraksts</h2>
            </div>
            <div class="col-12 col-sm-3 col-md-1 text-md-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNote">Add New</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card-columns">

@foreach($todos as $single_todo)

                    <div class="card">
                        <div class="card-body {{ ( $single_todo->is_done == true ) ? 'is-done':''}}">
                            <button type="button" class="close" aria-label="Close">
                                <a href="/delete/{{ $single_todo->id}}"><span aria-hidden="true">&times;</span></a>
                            </button>
                            <blockquote class="blockquote mb-0">
                                <p class="todotext">{{ $single_todo->title }}</p>
                            </blockquote>
                            <p class="card-text">
                            	<small class="text-muted">Last updated 3 mins ago</small>
                               
                                
                            	<a href="/update/{{ $single_todo->id}}" class="doneTask">Done</a>
                            </p>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="addnew">
@csrf
                    <div class="modal-body">
                        <textarea name="note" class="form-control" id="noteTextArea" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Add Note</button>
                    </div>
                </form>

            </div>
        </div>
    </div>