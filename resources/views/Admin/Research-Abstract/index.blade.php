@extends('layouts.admin')
@section('title')
    Research Abstract
@endsection
@section('content')
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Title-->
        <div class="page-title d-flex flex-column">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                Manage Research Abstract
            </h1>
            <!--end::Title-->


            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="{{route('dashboard.index')}}" class="text-white text-hover-primary">
                        Home </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    Research Abstract </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    Record </li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--begin::Title-->

        <!--begin::Actions-->
        <div class="d-flex align-items-center flex-wrap py-2">
            <!--begin::Button-->
            <a href="#" class="btn btn-sm btn-success my-2" tooltip="New App" data-bs-toggle="modal" data-bs-target="#Create_Abstract_Modal">
               <i class="fa-duotone fa-solid fa-plus"></i>Create Abstract  
            </a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::About card-->
        <div class="card">
           
            <div class="card-body p-lg-17">
                <div class="table-responsive" id="all_abstract">
                    {{-- <table id="" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th class="pe-7">Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="border-top fw-semibold fs-6 text-gray-800">
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table> --}}
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::About card-->
    </div>
    <!--end::Post-->
</div>

{{--Insert--}}
<div class="modal fade" id="Create_Abstract_Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="abstract_close_header_btn"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
                <div class="mb-13">
                    <h1 class="text-center mb-5">Create Research Abstract</h1>
                    <form action="{{route('research-abstract.store')}}" method="POST" id="CreateAbstract"
                          enctype="multipart/form-data">
                          @csrf
                          <div class="row g-3 ">
                            <div class="col-md-12">
                                <label for="" class="form-label">Research Title <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="title" 
                                    placeholder="Research Title">
                                <span class="text-danger error-text title_error"></span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Author <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="author" placeholder="Author">
                                <span class="text-danger error-text author_error"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Adviser <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="adviser" placeholder="Adviser">
                                <span class="text-danger error-text adviser_error"></span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Course <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="course" placeholder="Course">
                                <span class="text-danger error-text course_error"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Major <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="major" placeholder="Major">
                                <span class="text-danger error-text major_error"></span>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Academic Year <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="academic_year" placeholder="Academic Year">
                                <span class="text-danger error-text academic_year_error"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Publication <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="publication" placeholder="Publication">
                                <span class="text-danger error-text publication_error"></span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="row g-3 mt-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Description <span
                                            class="login-danger">*</span></label>
                                    <textarea type="text" class="form-control form-control-solid"  name="description" placeholder="Type here . . ."
                                        cols="30" rows="10"></textarea>
                                    <span class="text-danger error-text description_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-md-12">
                                <label for="" class="form-label">Document File <span
                                        class="login-danger">*</span></label>
                                <input type="file" class="form-control form-control-solid" name="document" accept=".pdf, .doc, .docx" placeholder="Document File">
                                <span class="text-danger error-text document_error"></span>
                            </div>
                        </div>

                        <div class="mt-4 float-end">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"  id="abstract_close_btn">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" id="abstract_btn_submit">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--VIEW--}}
<div class="modal fade" id="view_abstract" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="abstract_close_header_btn"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
                <div class="mb-13">
                    <h1 class="text-center mb-5">View Research Abstract</h1>
                    <form  enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="abstract_id" id="abstract_id" readonly hidden>
                        
                        <div class="row g-3 ">
                            <div class="col-md-12">
                                <label for="" class="form-label">Research Title <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="title" id="title" 
                                    placeholder="Research Title" readonly>
                                <span class="text-danger error-text title_error"></span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Author <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="author" placeholder="Author" id="author" readonly>
                                <span class="text-danger error-text author_error"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Adviser <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="adviser" placeholder="Adviser" id="adviser" readonly>
                                <span class="text-danger error-text adviser_error"></span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Course <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="course" placeholder="Course" id="course" readonly>
                                <span class="text-danger error-text course_error"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Major <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="major" placeholder="Major" id="major" readonly>
                                <span class="text-danger error-text major_error"></span>
                            </div>
                        </div>
    
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Academic Year <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="academic_year" placeholder="Academic Year" id="academic_year" readonly>
                                <span class="text-danger error-text academic_year_error"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Publication <span
                                        class="login-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="publication" placeholder="Publication" id="publication" readonly>
                                <span class="text-danger error-text publication_error"></span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="row g-3 mt-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Description <span
                                            class="login-danger">*</span></label>
                                    <textarea type="text" class="form-control form-control-solid" id="description" name="description" placeholder="Type here . . ."
                                        cols="30" rows="10" readonly></textarea>
                                    <span class="text-danger error-text description_error"></span>
                                </div>
                            </div>
                        </div>
    
                        <div class="row g-3 mt-3">
                            <label for="documents" class="form-label">Document File <span class="login-danger">*</span></label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-solid" name="document" id="documents" placeholder="Document File" readonly>
                            </div>
                            <div class="col-md-2 ">
                                <button type="button" class="btn btn-warning btn-sm" id="view_pdf_btn" style="padding: 10px">View File</button>
                            </div>
                        </div>

                        <div class="mt-4 float-end">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_abstract_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content scroll-y pt-0 pb-15">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="edit_abstract_close_header_btn"></button>
            </div>
            <div class="modal-body">
               <div class="mb-13">
                <h1 class="text-center mb-5">Edit Research Abstract</h1>
                <form action="{{route('research-abstract.update')}}" method="POST" id="UpdateAbstract"
                    enctype="multipart/form-data">

                    <input type="text" name="edit_abstract_id" id="edit_abstract_id" readonly hidden>
                    <div class="row g-3 ">
                        <div class="col-md-12">
                            <label for="" class="form-label">Research Title <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="title" 
                                placeholder="Research Title" id="edit_title">
                            <span class="text-danger error-text title_error"></span>
                        </div>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Author <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="author" placeholder="Author" id="edit_author">
                            <span class="text-danger error-text author_error"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Adviser <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="adviser" placeholder="Adviser" id="edit_adviser">
                            <span class="text-danger error-text adviser_error"></span>
                        </div>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Course <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="course" placeholder="Course" id="edit_course">
                            <span class="text-danger error-text course_error"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Major <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="major" placeholder="Major" id="edit_major">
                            <span class="text-danger error-text major_error"></span>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Academic Year <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="academic_year" placeholder="Academic Year" id="edit_academic_year">
                            <span class="text-danger error-text academic_year_error"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Publication <span
                                    class="login-danger">*</span></label>
                            <input type="text" class="form-control form-control-solid" name="publication" placeholder="Publication" id="edit_publication">
                            <span class="text-danger error-text publication_error"></span>
                        </div>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="row g-3 mt-3">
                            <div class="col-md-12">
                                <label for="" class="form-label">Description <span
                                        class="login-danger">*</span></label>
                                <textarea type="text" class="form-control form-control-solid"  name="description" placeholder="Type here . . ."
                                    cols="30" rows="10" id="edit_description"></textarea>
                                <span class="text-danger error-text description_error"></span>
                            </div>
                        </div>
                    </div>  

                    <div class="row g-3 mt-3">
                        <div class="col-md-12">
                            <label for="" class="form-label">Document File <span
                                    class="login-danger">*</span></label>
                            <input type="file" class="form-control form-control-solid" name="document" accept=".pdf, .doc" placeholder="Document File">
                            <span class="text-danger error-text document_error"></span>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <label for="documents" class="form-label">Uploaded File <span class="login-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-solid" name="" id="edit_documents" placeholder="Document File" readonly>
                        </div>
                        <div class="col-md-2 ">
                            <button type="button" class="btn btn-warning btn-sm" id="edit_view_pdf_btn" style="padding: 10px">View File</button>
                        </div>
                    </div>

                    <div class="mt-4 float-end">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                            id="edit_abstract_close_btn">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" id="abstract_edit_btn_submit">Update</button>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>



@section('script')

<script type="text/javascript">
    $(document).ready(function() {

        //Fetch all the data in database
        AllResearchAbstract();

        function AllResearchAbstract() {
            $.ajax({
                url: '{{ route('research-abstract.allrecord') }}',
                method: 'GET',
                success: function(response) {
                    $("#all_abstract").html(response);
                    $("#all_abstract_table").DataTable({
                        "order": [
                            [0, "asc"]
                        ],
                        "language": {
                        "lengthMenu": "Show _MENU_",
                        "search": "", // Remove the default search label
                        "searchPlaceholder": "Search..." // Placeholder text for the search input
                    },
                    "dom":
                        "<'row mb-2'" +
                        "<'col-sm-6 d-flex align-items-center justify-content-start dt-toolbar'l>" +
                        "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                        ">" +

                        "<'table-responsive'tr>" +

                        "<'row'" +
                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                        ">"
                    });
                }
            });
        }

        // Create Research Abstract 
        $("#CreateAbstract").on('submit', function(e) {
            e.preventDefault();
            $("#abstract_btn_submit").html('Submitting <span class="fas fa-spinner fa-spin align-middle ms-2"></span>');
            $('#abstract_btn_submit').attr("disabled", true);
            var form = this;

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function() {

                    $(form).find('span.error-text').text('');

                },
                success: function(response) {

                    if (response.status == 0) {
                        $('#abstract_btn_submit').removeAttr("disabled");
                        $.each(response.error, function(prefix, val) {
                            $(form).find('span.' + prefix + '_error').text(val[0]);
                        });
                        $("#abstract_btn_submit").text('Submit');

                    } else {

                        $(form)[0].reset();
                        $('#abstract_btn_submit').removeAttr("disabled");
                        $('#abstract_btn_submit').text('Submit');
                        
                        AllResearchAbstract(); 

                        $("#Create_Abstract_Modal").modal('hide'); //hide the modal

                        // SWEETALERT
                        Swal.fire({
                            icon: 'success',
                            title: 'Research Abstract Created Successfully.',
                            showConfirmButton: true,
                        })
                    }

                    $('#abstract_close_btn').on('click', function() {
                        $("#CreateAbstract").find('span.text-danger').text('');
                    });

                    $('#abstract_close_header_btn').on('click', function() {
                        $("#CreateAbstract").find('span.text-danger').text('');
                    });

                }
            });
        });

        //View Research Abstract
        $(document).on('click', '.abstract_view', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('research-abstract.view') }}',
                method: 'GET',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },

                success: function(response) {
                    $('#view_abstract input, #view_abstract textarea').val('');
                    $('#view_pdf_btn').removeData('url');

                    $("#abstract_id").val(response.id);
                    $("#title").val(response.title);
                    $("#author").val(response.author);
                    $("#adviser").val(response.adviser);
                    $("#course").val(response.course);
                    $("#major").val(response.major);
                    $("#academic_year").val(response.academic_year);
                    $("#publication").val(response.publication);
                    $("#description").val(response.description);
                    $("#documents").val(response.file_name);

                    //    // Load the PDF URL into the iframe
                    // let pdfUrl = '{{ route('research-abstract.view_pdf', ':id') }}'.replace(':id', response.id);
                    // $("#pdf_viewer").attr('src', pdfUrl);

                    let pdfUrl = '{{ route('research-abstract.view_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                    $("#view_pdf_btn").attr('data-url', pdfUrl); // Set the PDF URL as data attribute
                   
                }
            });
        });



        //View the PDF Research Abstract
        $(document).on('click', '#view_pdf_btn', function(e) {
            e.preventDefault();
            let pdfUrl = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

            if (pdfUrl) { // Ensure URL is defined
                window.open(pdfUrl, '_blank'); // Open the PDF in a new tab
            }
        });


        $('#view_abstract').on('hidden.bs.modal', function (e) {
            // Clear data when the modal is hidden
            $('#view_abstract input, #view_abstract textarea').val('');
            $('#view_pdf_btn').removeData('url');
        });

         //Edit Research Abstract
        $(document).on('click', '.abstract_edit', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('research-abstract.edit') }}',
                method: 'GET',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },

                success: function(response) {

                    $('#edit_abstract_modal input, #edit_abstract_modal textarea').val('');
                    $('#edit_view_pdf_btn').removeData('url');

                    $("#edit_abstract_id").val(response.id);
                    $("#edit_title").val(response.title);
                    $("#edit_author").val(response.author);
                    $("#edit_adviser").val(response.adviser);
                    $("#edit_course").val(response.course);
                    $("#edit_major").val(response.major);
                    $("#edit_academic_year").val(response.academic_year);
                    $("#edit_publication").val(response.publication);
                    $("#edit_description").val(response.description);
                    $("#edit_documents").val(response.file_name);

                
                    let pdfUrl = '{{ route('research-abstract.view_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                    $("#edit_view_pdf_btn").attr('data-url', pdfUrl); // Set the PDF URL as data attribute
                    
                }
            });
        });

         //Edit the PDF Research Abstract
        $(document).on('click', '#edit_view_pdf_btn', function(e) {
            e.preventDefault();
            let pdfUrl = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

            if (pdfUrl) { // Ensure URL is defined
                window.open(pdfUrl, '_blank'); // Open the PDF in a new tab
            }
        });

        //Remove Data
        $('#edit_abstract_modal').on('hidden.bs.modal', function (e) {
            // Clear data when the modal is hidden
            $('#edit_abstract_modal input, #edit_abstract_modal textarea').val('');
            $('#edit_view_pdf_btn').removeData('url');

        });
 

        //Update Research Abstract
        $("#UpdateAbstract").on('submit', function(e) {
            e.preventDefault();
            $("#abstract_edit_btn_submit").html('Updating <span class="fas fa-spinner fa-spin align-middle ms-2"></span>');
            $('#abstract_edit_btn_submit').attr("disabled", true);
            var form = this;

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function() {

                    $(form).find('span.error-text').text('');

                },
                success: function(response) {

                    if (response.status == 0) {
                        $('#abstract_edit_btn_submit').removeAttr("disabled");

                        $.each(response.error, function(prefix, val) {
                            $(form).find('span.' + prefix + '_error').text(val[0]);
                        });

                        $("#abstract_edit_btn_submit").text('Update');

                    } else {

                        $(form)[0].reset();
                        $('#abstract_edit_btn_submit').removeAttr("disabled");
                        $('#abstract_edit_btn_submit').text('Update');
                        AllResearchAbstract();
                        $("#edit_abstract_modal").modal('hide'); //hide the modal

                        // SWEETALERT
                        Swal.fire({
                            icon: 'success',
                            title: 'Research Abstract Updated Successfully',
                            showConfirmButton: false,
                            timer: 1700,
                            timerProgressBar: true,

                        })
                    }

                    // Event binding for close button inside modal
                    $('#edit_abstract_close_btn').on('click', function() {
                        $("#UpdateAbstract").find('span.text-danger').text('');
                    });

                    $('#edit_abstract_close_header_btn').on('click', function() {
                        $("#UpdateAbstract").find('span.text-danger').text('');
                    });

                }
            });
        });

        //Delete
        $(document).on('click', '.abstract_delete', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('research-abstract.delete') }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(response) {
                            console.log(response);
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted Successfully.',
                                showConfirmButton: false,
                                timer: 1700,
                                timerProgressBar: true,

                            })

                            AllResearchAbstract();

                        }
                    });
                }
            })
        });

       

    });
</script>
@endsection
@endsection
