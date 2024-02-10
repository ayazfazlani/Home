@extends('layout')


@section('content')
    <div class="content-1">
        <div class="dashboard">
            <div class="table">
                <a href="/addnew">
                <button>Add New</button>
                </a>
                <table>
                    <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>price</th>
                        <th>view</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($data as $id => $user)
                    <tr>
                        <div class="td">
                            <td><img src="/images/{{$user->image}}" alt="" style="width: 50px; height: 50px;"></td>
                        </div>
                        <div class="td">
                            <td>{{$user->title}}</td>
                        </div>
                        <div class="td">
                            <td>{{$user->price}}$</td>
                        </div>
                        <div class="td">
                            <td><a href="/view/{{$user->id}}"><button>view</button></a></td>
                            
                        </div>
                        <div class="td">
                            <td><a href="/updat/{{$user->id}}"><button>update</button></a></td>
                        </div>
                        <div class="td">
                            <td><a href="/delete/{{$user->id}}"><button>delete</button></a></td>
                        </div>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="report">
                
            </div>
         </div>
    </div>
@endsection