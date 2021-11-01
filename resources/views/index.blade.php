@extends('layouts.main')
@section('content')
    <section class="mb-6">
        <div class="max-w-screen-md mx-auto">
            <form action="{{url('/todo')}}" method="POST">
                @csrf
                <div class="flex justify-center shadow-rounded">
                    <input type="text" name="title" id="title" class="w-full rounded-l px-4 py-2 outline-none">
                    <input type="submit" value="Create" class="bg-green-500 px-4 py-2 text-white rounded-r">
                </div>
                @error('title')
                    <p class="text-red-500">Please fill out the title</p>
                @enderror
            </form>
        </div>
    </section>

    <section>
     <div class="max-w-screen-md mx-auto">
         @foreach($todos as $todo)
         <div class="bg-white p-4 rounded-xl shadow mb-3 flex justify-between">
             <div class="title">
                 {{$todo->title}}
             </div>
             <form action="{{ route('todo.destroy', $todo)}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="text-red-500 ">Delete</button>
             </form>
         </div>
         @endforeach
     </div>
 </section>
@endsection   
