@extends('layout.master') @section('content')
<div class="row d-flex justify-content-between" id="head">
    <div class="col-md-6 mt-5">
        <div class="para" id="left-pa">
            <h4 class="title mb-2">
                <b>I'm <span class="name">Kaung Set Hein</span></b>
            </h4>
            <span>
                Hello, I'm Kaung Set Hein from Computer University Monywa.
            </span>
            <span class="info">
                I'm also junior Web Developer and studying new technologies &
                web design.I can use github well and work hard.And then, I can
                learn new knowledge from the seniors.
            </span>
        </div>

        <br />

        <div class="btn btn-sm btn-outline-info mt-2 rounded" id="viewall">
            <a href="{{ url('/project') }}"
                >View Projects &nbsp;<i class="fa fa-arrow-right"></i
            ></a>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-end mt-5" id="image">
        <img src="/images/bllogo4.png" alt="" />
    </div>
</div>
@endsection()
