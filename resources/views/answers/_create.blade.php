<div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Your Answer</h3>
                        <hr>
                    <form action="{{ route('questions.answers.store', $question->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                            <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" rows="7" name="body"></textarea>
                            @if($errors->has('body'))
                                <strong>
                                    {{ $errors->first('body') }}
                                </strong>
                            @endif
                        </div>
                            <div class="from-group">
                                <button class="btn btn-lg btn-outline-primary" type="submit">Submit</button>
        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>