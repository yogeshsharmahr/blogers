
    <div class="display-comment"  style="margin-left:40px;" >
        <strong></strong>
        <p></p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value=" " />
                <input type="hidden" name="parent_id" value=" " />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        
    </div>
