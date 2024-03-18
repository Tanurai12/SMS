@extends('layout.mainLayout')
@section('mainSection')
    <section>

        <div class="container mr-4 mt-4">
            <h2> <i class="fa fa-dashboard"></i> Dashboard</h2>
            <div class="card">
                <div class="card-body p-2 ">
                    <div class="row p-2 ">
                        <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-danger mt-5 ml-2 ">
                            <div class="card-body text-light">
                                <h4 class="card-title font-weight-bold"> <i class="fa fa-users "></i> Total Students</h4>
                                <p class="card-text counter font-weight-bold font-weight-bold text-lg"
                                    style="font-size:25px;">600000</p>

                            </div>
                        </div>
                        <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-success mt-5 ml-2">
                            <div class="card-body text-light ">
                                <h4 class="card-title font-weight-bold "> <i class="fa fa-comment w3-xxxlarge"></i> Messages
                                </h4>
                                <p class="card-text counter font-weight-bold font-weight-bold text-lg"
                                    style="font-size:25px;"> 90</p>
                            </div>
                        </div>
                        <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-warning mt-5 ml-2">
                            <div class="card-body ">
                                <h4 class="card-title font-weight-bold"> <i class="fa-regular fa-clipboard"></i>
                                    Registrations </h4>
                                <p class="card-text counter font-weight-bold font-weight-bold text-lg"
                                    style="font-size:25px;">1000</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        <div class="container mr-4  mt-4">
            <div class="row">
                <div class=" col-md-6 col-lg-6 col-sm-12 col-12  ">
                    <h2>Regions</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.5864697240286!2d82.96952977503129!3d25.351653977611758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2dcc4244f317%3A0x625041d7277edcf!2sCreataum%20Unitech%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1708940626657!5m2!1sen!2sin"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class=" col-md-6 col-lg-6 col-sm-12 col-12 feed w-100">
                    <h2>Feeds</h2>
                    <table class="table table-striped table-inverse table-responsive w-100">

                        <tbody>
                            <tr>
                                <td><i class="fa fa-user text-info text-large"></i></td>
                                <td>New record, over 90 views.</td>
                                <td><i>10 mins</i></td>

                            </tr>
                            <tr>
                                <td><i class="fa fa-bell text-danger text-large"></i></td>
                                <td>Database error.</td>
                                <td><i>15 mins</i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-users text-warning w3-large"></i></td>
                                <td>New record, over 40 users.</td>
                                <td><i>17 mins</i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-comment text-danger text-large"></i></td>
                                <td>New comments.</td>
                                <td><i>25 mins</i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-bookmark text-info text-large"></i></td>
                                <td>Check transactions.</td>
                                <td><i>28 mins</i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-laptop text-danger texta-large"></i></td>
                                <td>CPU overload.</td>
                                <td><i>35 mins</i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-share-alt text-success text-large"></i></td>
                                <td>New shares.</td>
                                <td><i>39 mins</i></td>
                            </tr>
                        </tbody>
                    </table>


                </div>


            </div>


        </div>

        <div class="container mr-4 mt-5">
            <h5>General State</h5>
            <p>New Visitors</p>
            <div class="full w-100 bg-light">
                <div class="green w-25 text-center text-light bg-success">+25%</div>
                <p class="mt-3 ">New Users</p>
                <div class="full w-100 bg-light">
                    <div class="green w-50 text-center text-light bg-warning">50%</div>
                    <p class="mt-3 ">Bounce Rate</p>
                    <div class="full w-100 bg-light">
                        <div class="green w-75 text-center text-light bg-danger">75%</div>
                    </div>


                    <div class="container mr-4  mt-5">

                        <h3>Queries</h3>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($query as $query_item)
                                    <tr>
                                        <td scope="row">{{ $query_item->name }}</td>
                                        <td>{{ $query_item->email }}</td>
                                        <td>{{ $query_item->msg }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>



                    <div class="container mr-4 mt-5">

                        <h3>Home Slider</h3>

                        <form action=" ">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">

                                        <input type="search" name="search" id="" class="form-control"
                                            placeholder="Search By Title" width="50%" value="{{ $search }}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-warning font-weight-bold">Search<i
                                            class="fa-solid fa-magnifying-glass ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped table-inverse table-responsive w-80">
                            <thead class="thead-inverse">
                                <tr width="100%">


                                    <th width="10%">Id</th>
                                    <th width="20%">Image</th>
                                    <th width="10%">Title</th>
                                    <th width="15%">Operation</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td scope="row">{{ $data->id }}</td>
                                        <td><img src="{{ asset($data->img) }}" width="50%" alt="img"></td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td><a href="editimage/{{ $data->id }}" class="btn btn-outline-primary">Edit</a>
                                            <a href="/deleteimage/{{ $data->id }}" class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure to delete?');">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <button id="upload-btn " onclick="openModal()" class="btn btn-secondary">Add Image</button>
                    </div>

                    <div class="container mr-4 mt-5">

                        <h3> Our Testimonials</h3>

                        <table class="table table-striped table-inverse table-responsive w-80">
                            <thead class="thead-inverse">
                                <tr width="100%">


                                    <th width="10%">Id</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Address</th>
                                    <th width="45%">Message</th>
                                    {{-- <th width="10%">Image</th> --}}
                                    <th width="15%">Operation</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testis as $testi)
                                    <tr>
                                        <td scope="row">{{ $testi->id }}</td>
                                        <td>{{ $testi->name }}</td>
                                        <td>{{ $testi->address }}</td>
                                        <td>{{ $testi->msg }}</td>
                                        {{-- <td><img src="{{$testi->img}}" width="50%" alt="img"></td> --}}
                                        <td><a href="editimage/{{ $testi->id }}" class="btn btn-outline-primary">Edit</a>
                                            <a href="/deleteimage/{{ $testi->id }}" class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure to delete?');">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>



                    </div>

    </section>
@endsection
