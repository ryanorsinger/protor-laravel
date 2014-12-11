@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
  @endif

  @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
  @endif

  @if (Session::has('warningMessage'))
    <div class="alert alert-warning">{{{ Session::get('warningMessage') }}}</div>
  @endif

  @if (Session::has('infoMessage'))
    <div class="alert alert-info">{{{ Session::get('infoMessage') }}}</div>
  @endif
