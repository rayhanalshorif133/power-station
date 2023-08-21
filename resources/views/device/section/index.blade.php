@extends('layouts.admin.admin')


@section('head')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card shadow-none">
            <div class="card-body p-0 pb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">
                            <div class="row flex-between-end">
                                <div class="col-auto align-self-center">
                                    <h5 class="mb-0">Device Section</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-end my-3">
                            <div id="bulk-select-replace-element">
                                <button class="btn btn-falcon-success btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#createSection">
                                    <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                    <span class="ms-1">New</span>
                                </button>
                            </div>
                            <div class="d-none ms-3" id="bulk-select-actions">
                                <div class="d-flex">
                                    <select class="form-select form-select-sm sectionActionSelect"
                                        aria-label="Bulk actions">
                                        <option selected="selected" disabled>Actions</option>
                                        <option value="delete">Delete</option>
                                    </select>
                                    <button class="btn btn-falcon-danger btn-sm ms-2 sectionApplyBtn"
                                        type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table mb-0 customDataTable">
                        <thead class="text-black bg-200">
                            <tr>
                                <th class="align-middle white-space-nowrap">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox"
                                            data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' />
                                    </div>
                                </th>
                                <th class="align-middle">Section Name</th>
                                <th class="align-middle">AddedBy</th>
                                <th class="align-middle">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="bulk-select-body">
                            @foreach ($deviceSections as $deviceSection)
                            <tr id="{{$deviceSection->id}}">
                                <td class="align-middle white-space-nowrap">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input sectionCheckInput" type="checkbox"
                                            id="checkbox-1" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <td class="align-middle sectionName">{{$deviceSection->name}}</td>
                                <td class="align-middle sectionAddedBy">{{$deviceSection->addedBy->name}}</td>
                                <td class="align-middle">
                                    <div class="btn-group btn-group-sm btn-group-flush" role="group"
                                        aria-label="Basic example">
                                        <button class="btn btn-falcon-primary btn-sm editDeviceSectionBtn" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><span
                                                class="fas fa-pencil-alt"></span></button>
                                        <button class="btn btn-falcon-success btn-sm checkDeviceSectionBtn d-none"
                                            type="button" data-toggle="tooltip" data-placement="top" title="Edit"><span
                                                class="fas fa-check"></span></button>
                                        <button class="btn btn-falcon-danger btn-sm deleteDeviceSectionBtn"
                                            type="button" data-toggle="tooltip" data-placement="top"
                                            title="Delete"><span class="fas fa-trash"></span></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('device.section.create')
@endsection


@section('scripts')
<script src="{{asset('js/device/section.js')}}"></script>
@endsection