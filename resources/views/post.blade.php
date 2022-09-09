<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Create Post
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  table table-dark table-striped">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6  border-b border-gray-200" >
                  <form method = "POST">
                        @csrf
                        <div class="row">
                        <div class="col-25">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="title" name="title" placeholder="Post Title">
                        </div>
                        </div>
                    
                    
                        <div class="row">
                        <div class="col-25">
                            <label for="body">Body</label>
                        </div>
                        <div class="col-75">
                            <textarea id="body" name="body" placeholder="Write Content" style="height:200px"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Post">
                        
                        </div>
                    </form>
 
                    <!-- @if(session ('message'))
                <div class="alert alert-success"> {{ session ('message')}}</div>
                @endif -->
                    @if(session()->has('status'))
                        <div class="table table-dark table-striped ">
                        {{ session('status')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>



</x-app-layout>



<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  color: black;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>