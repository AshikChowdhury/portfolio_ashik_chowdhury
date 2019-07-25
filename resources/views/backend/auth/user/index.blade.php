@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-sm-5">
                                    <h4>{{ __('labels.backend.access.users.management') }}
                                        <small class="text-muted">{{ __('labels.backend.access.users.active') }}</small>
                                    </h4>
                                </div>
                                <div class="col-sm-7">
                                    @include('backend.auth.user.includes.header-buttons')
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>@lang('labels.backend.access.users.table.last_name')</th>
                                        <th>@lang('labels.backend.access.users.table.first_name')</th>
                                        <th>@lang('labels.backend.access.users.table.email')</th>
{{--                                        <th>@lang('labels.backend.access.users.table.confirmed')</th>--}}
                                        <th>@lang('labels.backend.access.users.table.roles')</th>
{{--                                        <th>@lang('labels.backend.access.users.table.other_permissions')</th>--}}
{{--                                        <th>@lang('labels.backend.access.users.table.social')</th>--}}
{{--                                        <th>@lang('labels.backend.access.users.table.last_updated')</th>--}}
                                        <th>@lang('labels.general.actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->email }}</td>
{{--                                            <td>{!! $user->confirmed_label !!}</td>--}}
                                            <td>{!! $user->roles_label !!}</td>
{{--                                            <td>{!! $user->permissions_label !!}</td>--}}
{{--                                            <td>{!! $user->social_buttons !!}</td>--}}
{{--                                            <td>{{ $user->updated_at->diffForHumans() }}</td>--}}
                                            <td>{!! $user->action_buttons !!}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-7">
                        <div class="float-left">
                            {!! $users->total() !!} {{ trans_choice('labels.backend.access.users.table.total', $users->total()) }}
                        </div>
                    </div><!--col-->
                    <div class="col-5">
                        <div class="float-right">
                            {!! $users->render() !!}
                        </div>
                    </div><!--col-->
                </div>
                </div><!--row-->
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
