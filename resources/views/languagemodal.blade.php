<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Select Language</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <form action="{{route('english')}}" method="Get">
        <button type="submit" class="btn btn-secondary" style="width:100%">English</button>
      </form>
    </div>
    <div class="col-md-3">
        <form action="{{route('tagalog')}}" method="Get">
            <button type="submit" class="btn btn-secondary" style="width:100%">Filipino</button>
        </form>
    </div>
    <div class="col-md-3">
        <form action="{{route('bisaya')}}" method="Get">
            <button type="submit" class="btn btn-secondary" style="width:100%">Bisaya</button>
        </form>
    </div>
  </div>
</div>

    </div>
  </div>
</div>