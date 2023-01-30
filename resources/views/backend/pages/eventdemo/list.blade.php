@extends('backend.layouts.app')
@section('section')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">

            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">
                        {{ $header['title']}}
                    </span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <a href="javascript:;" class="btn green add-new-event">
                            Add New Event
                        </a>
                    </div>
                </div>
            </div>

            <div class="portlet-body">@csrf
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="event-demo" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Text</th>
                            <th>Event Date-Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>

</div>
@endsection
