@if (session()->has('message'))
<div x-data="{show:true}" x-init="setTimeout(()=> show = false,3000)" x-show ="show" class="flex flex-col h-screen justify-center items-center">
    <p>
        {{session('message')}}
    </p>
</div>
@endif