<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        
        //return view('todos.todos',['todos' => $todos]);  
        //return view('todos') -> with('todos',$todos);
        return view('todos.index',compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo',$todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'todoTitle'=>'required|min:6',
        //     'todoDescription'=> 'required'
        // ]);

        //Validation
        $this->validate($request,[
            'todoTitle'=>'required',
            'todoDescription'=> 'required'
        ]);

        $todo = new Todo();
        $todo->title = $request->todoTitle;
        $todo->description = $request->input('todoDescription');
        //we did get a default value for completed got to Todo model
        $todo->save();

        $request->session()->flash('success','Todo created successfully');

        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        
        return view('todos.edit')->with('todo',$todo);

    }

    public function update(Request $request,Todo $todo)
    {
         //Validation
         $this->validate($request,[
            'todoTitle'=>'required',
            'todoDescription'=> 'required'
        ]);

        //$todo = Todo::find($todo);
        $todo ->title = $request -> get('todoTitle');
        $todo ->description = $request -> get('todoDescription');

        $todo -> save();

        $request->session()->flash('success','Todo Updated successfully');

        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        //$todo = Todo::find($todo);

        $todo->delete();

        session()->flash('success','Todo Deleted successfully');

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo -> completed = true;

        $todo -> save();

        session()->flash('success','Todo Completed successfully');

        return redirect('/todos');
    }
}
