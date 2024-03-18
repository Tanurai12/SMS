@extends('layout.mainLayout')
@section('mainSection')
      <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-bold">
                            Add Page
                        </div>
                        <div class="card-body">


                            <form method="post" action="savepage">
                                @csrf
                                <!-- title Field -->
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    <span class="text-danger">
                                        @error('title')
                                            {{ '*' . $message }}
                                        @enderror
                                    </span>
                                </div>

                                {{-- <div id="editor" name"content">This is some sample content.</div> --}}
                                <div class="form-group">
                                    <label for="content">Content:</label>
                                    <textarea id="editor" name="content"></textarea>
                                    <span class="text-danger">
                                        @error('content')
                                            {{ '*' . $message }}
                                        @enderror
                                    </span>
                                </div>


                                <button type="submit" name="submit" id=""
                                    class="btn btn-warning btn-lg btn-block">Add</button>


                            </form>
                            <!-- End Registration Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @endsection
