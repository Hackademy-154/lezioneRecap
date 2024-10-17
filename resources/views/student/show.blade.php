<x-layout>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 py-5">Dettaglio studente {{ $student['name'] }}</h1>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            {{-- il foreach serve per ciclare i dati all'interno di una struttura dati complessa --}}
            <div class="col-12 col-md-3 d-flex justify-content-center">
                {{-- per passare dati a un componente si usa la sintassi degli attributi HTML --}}
                <x-card dataId="{{ $student['id'] }}" 
                        name="{{ $student['name'] }}" 
                        surname="{{ $student['surname'] }}"
                        subject="{{ $student['faveSubject'] }}" 
                        img="{{ $student['img'] }}">
                </x-card>
            </div>
        </div>
    </div>
</x-layout>