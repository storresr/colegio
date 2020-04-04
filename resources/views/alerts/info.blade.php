@if (session('mensaje'))
        <div class="alert alert-info">
            {{session('mensaje')}}
        </div>
        
@endif