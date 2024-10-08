@if ($errors->any())
<div class="alert alert-danger">
    <ol>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ol>
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{ session()->get('error') }}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{ session()->get('danger') }}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
