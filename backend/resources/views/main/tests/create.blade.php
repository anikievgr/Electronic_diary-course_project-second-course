@extends('../main/app')
@section('style')
    @vite(['resources/css/mainTests.css'])
@endsection
@section('content')
    <form method="post" action="{{route('crudTestPage.store')}}" class="row" >
        @csrf
        <div class="col-md-8 mx-auto ">
            <div class="mainCardHeader card">
                <div class="basicDataTest">
                    <label @error('name') class="error" @enderror>Назвавние:</br><input class="mainInput" type="text" name="name" placeholder="Назвавние" value="{{old('name')}}"></label>
                    <label>Время на прохождение:</br><input class="mainInput" name="time" type="integer" placeholder="Время на прохождение в мин:"></label>
                    <button type="submit" class="addQuestion">
                        Добавить вопросы
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
