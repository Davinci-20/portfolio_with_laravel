@extends('admin.layout.master') @section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3>Dashboard</h3>
        </div>
        <div class="card-body">
            <div class="row dash">
                <div class="col-md-5">
                    <h5>
                        Total Blogs &nbsp;
                        <b class="badge badge-danger rounded">{{
                            $pj_count
                        }}</b>
                    </h5>
                </div>
                &nbsp;
                <div class="col-md-5">
                    <h5>
                        Inbox SMS &nbsp;
                        <b class="badge badge-danger rounded">{{
                            count($contact)
                        }}</b>
                    </h5>
                </div>
                &nbsp;
                <!-- <div class="col-md-4">
                    <h5>View Count</h5>
                    <b class="num bg-white mb-3">10</b>
                </div> -->
            </div>
        </div>
        <div class="card-body">
            @foreach($contact as $c)
            <div class="card mt-3 contact">
                <div class="row">
                    <div class="col-md-11">
                        <h5>
                            {{ $c->email }}
                        </h5>
                        <i class="badge badge-warning"
                            >Sent
                            {{$c->created_at->diffForHumans()
                            }}</i
                        >
                        <p class="mt-3">{{ $c->message }}</p>
                    </div>
                    <div class="col-md-1">
                        <a
                            href="{{ url('/admin/contactdelete/'.$c->id) }}"
                            class="badge badge-sm badge-danger cx"
                            >X</a
                        >
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection()
