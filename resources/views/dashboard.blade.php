<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Show All Blogs
                </div>
                            @if(session()->has('status'))
                                    <div class="table table-dark table-striped ">
                                    {{ session('status')}}
                                    </div>
                                @endif
                <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($posts as $post )
                          
                        <tr>
                            <td> {{$post -> user -> name}} </td>
                            <td> {{$post -> title}}</td>
                            <td> {{$post -> body}}</td>
                            <td>    
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="{{url ('post/edit' , $post->id) }}" class="btn btn-success btn-sm rounded-0" type="a" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fab fa-edit"></i>Edit</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{url ('post/delete' , $post->id) }}" class="btn btn-danger btn-sm rounded-0" type="a" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fab fa-trash"></i>Delete</a>
                                                </li>
                                            </ul>
                            </td>
                        </tr>
                         @endforeach
                       
                      
                        </tbody>
                    </table>
                   
                   
                     <!-- for paginataion link  -->
                    <div>  
                        {{ $posts -> links()}}
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>


