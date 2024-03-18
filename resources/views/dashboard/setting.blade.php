@extends('layout.mainLayout')
@section('mainSection')
    <section>

        <div class="container mr-4 mt-3">


            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center ">Home Page Setting</h4>
                    <p class="card-text">
                    <form method="post" action="updatesetting" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="color" class=" col-form-label">Choose site theme color: (click on the
                                        color icon to select color)</label>
                                    
                                        <input type="color" name="site_color" value="{{ $infos->theme_setting}} " class="ml-5">
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">

                                <div class="form-group ">
                                    <label for="collegename" class="col-sm-1-12 col-form-label">College Name</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="collegename" id="collegename"
                                            value="{{ $infos->collegename }}" placeholder="">
                                    </div>
                                </div>



                            </div>

                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group ">
                                    <label for="affiliate" class="col-sm-1-12 col-form-label">Affiliated</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="affiliate" id="affiliate"
                                            value="{{ $infos->affiliate }}" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">

                                <div class="form-group ">
                                    <label for="address" class="col-sm-1-12 col-form-label">College Address</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="" value="{{ $infos->address }}">
                                    </div>

                                </div>



                            </div>

                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group ">
                                    <label for="since" class="col-sm-1-12 col-form-label">Since</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="since" id="since"
                                            placeholder="" value="{{ $infos->since }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">

                                <div class="form-group ">
                                    <label for="mail1" class="col-sm-1-12 col-form-label">Email Address</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="mail1" id="mail1"
                                            placeholder="" value="{{ $infos->mail1 }}">
                                    </div>

                                </div>



                            </div>

                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group ">
                                    <label for="mail2" class="col-sm-1-12 col-form-label"> Supportive Email</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="mail2" id="mail2"
                                            placeholder="" value="{{ $infos->mail2 }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">

                                <div class="form-group ">
                                    <label for="phone1" class="col-sm-1-12 col-form-label">Phone Number</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="phone1" id="phone1"
                                            placeholder="" value="{{ $infos->phone1 }}">
                                    </div>

                                </div>



                            </div>

                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group ">
                                    <label for="phone2" class="col-sm-1-12 col-form-label"> Supportive Phone
                                        Number</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="phone2" id="phone2"
                                            placeholder="" value="{{ $infos->phone2 }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">

                                <div class="form-group ">
                                    <label for="map" class="col-sm-1-12 col-form-label">Map</label>
                                    <div class="col-sm-1-12">
                                        <input type="file" class="form-control" name="map" id="map"
                                            value="{{ $infos->map }}">
                                        <iframe class="mt-4" src="{{ $infos->map }}" width="50%" height="60px"
                                            style="border:7;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>

                                </div>



                            </div>

                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group ">
                                    <label for="logo" class="col-sm-1-12 col-form-label"> College Logo</label>
                                    <div class="col-sm-1-12">
                                        <input type="file" class="form-control" name="logo" id="logo"
                                            placeholder="" value="{{ $infos->logo }}">
                                        <img src="{{ $infos->logo }}" height="50px;">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group ">
                            <div class="offset-sm-6 col-sm-12">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

                </p>

            </div>


        </div>

    </section>
@endsection
