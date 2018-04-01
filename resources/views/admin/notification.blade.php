@if(session('notification'))
    <div class="card-panel green" role="alert" >
        <p class="white-text"><i class="material-icons">done</i> {{ session('notification') }}</p>
    </div>
@endif