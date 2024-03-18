@extends('layout.mainLayout')
@section('mainSection')
    <section title="addnav">

        <div class="container mr-4 mt-5 w-100 ">
            <div class="row  ">
                <div class="col-md-6">
                    {{-- <h2 class="text-center mb-4">Add Navigation</h2> --}}

                    <div class="card text-left " style="border:15px solid white; box-shadow:0px 0px 3px 3px white">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Add Navigation</h4>
                            <p class="card-text">

                            <form method="post" action="formNav">
                            @csrf
                                <div class="mb-3">
                                    <label for="label" class="form-label">Navigation Name:</label>
                                    <input type="text" class="form-control" id="label" name="label" required>
                                </div>
                                <div class="mb-3">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item p-2" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-toggle="tab"
                                                data-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">URL</button>
                                        </li>
                                        <li class="nav-item p-2" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-toggle="tab"
                                                data-target="#profile" type="button" role="tab" aria-controls="profile"
                                                aria-selected="false">Pages</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="form-group row mt-5">
                                                <label for="url" class=" form-label ml-3">Add Url: </label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="url" id="url"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="form-group row mt-5">
                                                <label for="label" class="col-sm-1-12 col-form-label ml-3">Add Page:
                                                </label>
                                                <div class="col-12 col-md-12 col-lg-12 col-sm-12">
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



                                        {{-- end here --}}


                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="menu" class="form-label">Menu </label>
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
                                <div class="form-group row">
                                    <div class="offset-sm-5 col-sm-10">
                                        <button type="submit" class="btn btn-dark">Add Nav</button>
                                    </div>
                                </div>
                            </form>

                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card text-left" style="border:15px solid white; box-shadow:0px 0px 3px 3px white">
                        <div class="card-body">
                            <h4 class="card-title">Total Menus on Home Pages</h4>
                            <p class="card-text">
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

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-5 font-weight-bold font-italic p-1 ">
     <p>{{$datas->links ('pagination::bootstrap-5')}}</p>
    </div>
@endsection
