@extends('layouts.layout')
@section('content')


        <section class="ftco-section bg-light">
      <div class="container-xl">

        <div class="row no-gutters justify-content-center">
          <div class="col-lg-10">
            @if(Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="wrapper">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 style="font-weight: 700">Register Here</h3>
                    <p class="mb-4">Insert Your Data's Here</p>

                    <form
                      id="contactForm"
                      name="contactForm"
                      class="contactForm"
                      action="{{ route('registerPost') }}" method="post"
                    >
                    @csrf
                    @method('POST')
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              name="fullname"
                              id="fullname"
                              placeholder="Fullname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <select class="form-control" name='gender'>
                              <option value="" disabled selected>Gender</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              name="middleschool"
                              id="middleschool"
                              placeholder="From Middleschool"
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <select name="major" id="" class="form-control">
                              <option value="" disabled selected>Major</option>
                              <option value="pplg">PPLG</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <button
                              type="submit"
                              value="Send Message"
                              class="btn btn-primary"
                              >Register</button>
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


