{{--  add code nav --}}
 <div class="container mt-5 mr-4 ">
            <h3></h3>

            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Add Navbar </h4>
                    <p class="card-text">



                    <form action="formNav" method="post" class="text-center">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group row">
                                    <label for="label" class="col-sm-1-12 col-form-label">Navigation Name:</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="label" id="label" placeholder="">
                                    </div>
                                </div>
                            </div>

                            {{-- start --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item p-2" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">URL</button>
                                </li>
                                <li class="nav-item p-2" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                        type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Pages</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="form-group row mt-5">
                                        <label for="url" class="col-sm-1-12 col-form-label">Add Url Name: </label>
                                        <div class="col-sm-1-12">
                                            <input type="text" class="form-control" name="url" id="url"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group row mt-5">
                                        <label for="label" class="col-sm-1-12 col-form-label">Add Pages: </label>
                                        <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <select name="pageselect" id="" class="form-control">
                                                    <option value=0 selected>Select</option>
                                                    @foreach ($pages as $page)
                                                        <option value="{{$page->slug}}" name="page">
                                                            {{ $page->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                {{-- end here --}}

                                <div class="form-group row">
                                    <label for="label" class="col-sm-1-12 col-form-label">Menu:</label>
                                    <div class="col-sm-1-12">
                                        <div class="form-group">
                                            <select name="menuselect" id="" class="form-control">
                                                <option value=0 selected>As Main Menu</option>
                                                @foreach ($datas as $data)
                                                    <option value="{{ $data->id }}">{{ $data->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add Nav</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group  mt-5">
                                        <label for="label" class="col-sm-1-12 col-form-label">Add Pages: </label>
                                        <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <select name="pageselect" id="" class="form-control">
                                                    <option value=0 selected>Select</option>
                                                    @foreach ($pages as $page)
                                                        <option value="{{ $page->slug }}" name="page">
                                                            {{ $page->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            {{-- end here --}}

                        </div>
                    </form>

                    </p>




                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Menu</th>
                            <th>URL</th>
                            <th>Parent Id</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->url }}</td>
                                <td>{{ $data->parent_id }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
