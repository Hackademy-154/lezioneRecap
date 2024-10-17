<div class="card shadow" style="width: 18rem;">
    <img src="{{ $img }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"> {{ $name }} {{ $surname }}</h5>
        <p class="card-text">Materia preferita(finora): {{ $subject }} </p>
        <div class="text-center">
            @if(Route::currentRouteName() == 'studentIndex')
                <a href="{{ route('studentShow', ['id' => $dataId]) }}" class="btn btn-primary">Dettaglio studente</a>
            @elseif(Route::currentRouteName() == 'studentShow')
                <a href="{{ route('studentIndex')}}" class="btn btn-primary">Torna indietro</a>
            @endif
            {{-- <a href="" class="btn btn-primary">Dettaglio studente</a> --}}
        </div>
    </div>
</div>