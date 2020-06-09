@extends('mainLayout')

@section('content')
  <h1>Ciao, sono la home</h1>

  @isset($numBox)
    <h2>{{ $messaggio }}</h2>
    <div class="boxes">
      @for ($i=1; $i <= $numBox; $i++)
        <div class="box">
          {{ $i }}
        </div>
      @endfor
    </div>
  @endisset
@endsection
