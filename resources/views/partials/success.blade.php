@if(\Illuminate\Support\Facades\Session::has('flesh_message'))
    <div class="alert alert-success">
        <p> {{ \Illuminate\Support\Facades\Session::get('flesh_message') }}</p>
    </div>
@endif