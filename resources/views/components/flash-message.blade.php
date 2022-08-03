@if (session()->has('message'))
<div class="alert alert-success" role="alert">
    <p>
        {{session('message')}}
    </p>
</div>
@endif