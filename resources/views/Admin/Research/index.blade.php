@extends('layouts.admin')
@section('title')
    Research Data Bank
@endsection
@section('content')
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Title-->
        <div class="page-title d-flex flex-column">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                Manage Research Data Bank
            </h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            {{-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    Home
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    Research Data Bank
                </li>
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

            </ul> --}}
            <!--end::Breadcrumb-->
        </div>
        <!--begin::Title-->

        <!--begin::Actions-->
        <div class="d-flex align-items-center flex-wrap py-2">
            <!--begin::Button-->
            <a href="#" class="btn btn-sm btn-success my-2" tooltip="New App" data-bs-toggle="modal" data-bs-target="#Add_Research_Modal">
               <i class="fa-duotone fa-solid fa-plus"></i>Add Research
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
                <div class="table-responsive" id="all_research">
                   {{--Table Appear Here--}}
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::About card-->
    </div>
    <!--end::Post-->
</div>

{{--Insert--}}
<div class="modal fade" id="Add_Research_Modal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="close_header_btn"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
                <div class="mb-13">
                    <h1 class="text-center mb-5">Add Research</h1>
                    <form action="{{route('research-databank.store')}}" method="POST" id="AddResearch"
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
                                <label for="" class="form-label">Abstract File <span
                                        class="login-danger">*</span></label>
                                <input type="file" class="form-control form-control-solid" name="abstract_document" accept=".pdf, .doc, .docx" placeholder="Abstract File">
                                <span class="text-danger error-text abstract_document_error"></span>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-md-12">
                                <label for="" class="form-label">Full Research Paper <span
                                        class="login-danger">*</span></label>
                                <input type="file" class="form-control form-control-solid" name="full_paper_file" accept=".pdf, .doc, .docx" placeholder="Full Research File">
                                <span class="text-danger error-text full_paper_file_error"></span>
                            </div>
                        </div>

                        <div class="mt-4 float-end">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"  id="close_btn">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" id="btn_submit">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--VIEW--}}
<div class="modal fade" id="view_research" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="view_close_header_btn"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
                <div class="mb-13">
                    <h1 class="text-center mb-5">View Research</h1>
                    <form  enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" id="view_id" readonly hidden>

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
                            <label for="documents" class="form-label">Abstract File <span class="login-danger">*</span></label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-solid" name="abstract_document" id="abstract_document" placeholder="Document File" readonly>
                            </div>
                            <div class="col-md-2 ">
                                <button type="button" class="btn btn-warning btn-sm" id="view_abstract_pdf_btn" style="padding: 8px">View File</button>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <label for="documents" class="form-label">Full Research Paper <span class="login-danger">*</span></label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-solid" name="full_paper_file" id="full_paper_file" placeholder="Document File" readonly>
                            </div>
                            <div class="col-md-2 ">
                                <button type="button" class="btn btn-warning btn-sm" id="view_research_paper_pdf_btn" style="padding: 8px">View File</button>
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

<div class="modal fade" id="edit_research_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content scroll-y pt-0 pb-15">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="edit_close_header_btn"></button>
            </div>
            <div class="modal-body">
               <div class="mb-13">
                <h1 class="text-center mb-5">Edit Research</h1>
                <form action="{{route('research-databank.update')}}" method="POST" id="UpdateResearch"
                    enctype="multipart/form-data">

                    <input type="text" name="id" id="edit_id" readonly hidden>
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
                                <textarea type="text" class="form-control form-control-solid"  name="description"  placeholder="Type here . . ."
                                    cols="30" rows="10" id="edit_description"></textarea>
                                <span class="text-danger error-text description_error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-12">
                            <label for="" class="form-label">Abstract File <span
                                    class="login-danger">*</span></label>
                            <input type="file" class="form-control form-control-solid" name="abstract_document" accept=".pdf, .doc, .docx" placeholder="Abstract File">
                            <span class="text-danger error-text abstract_document_error"></span>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <label for="documents" class="form-label">Uploaded Abstract File <span class="login-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-solid" name="" id="edit_abstract_document" placeholder="Document File" readonly>
                        </div>
                        <div class="col-md-2 ">
                            <button type="button" class="btn btn-warning btn-sm" id="edit_abstract_pdf_btn" style="padding: 8px">View File</button>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-12">
                            <label for="" class="form-label">Full Research Paper <span
                                    class="login-danger">*</span></label>
                            <input type="file" class="form-control form-control-solid" name="full_paper_file" accept=".pdf, .doc, .docx" placeholder="Full Research File">
                            <span class="text-danger error-text full_paper_file_error"></span>
                        </div>
                    </div>



                    <div class="row g-3 mt-3">
                        <label for="documents" class="form-label">Uploaded Full Research Paper <span class="login-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-solid" name="" id="edit_full_paper_file" placeholder="Document File" readonly>
                        </div>
                        <div class="col-md-2 ">
                            <button type="button" class="btn btn-warning btn-sm" id="edit_research_paper_pdf_btn" style="padding: 8px">View File</button>
                        </div>
                    </div>


                    <div class="mt-5 float-end">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                            id="edit_close_btn">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" id="edit_btn_submit">Update</button>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>

@push('script')

<script type="text/javascript">

    $(document).ready(function() {

        //Fetch all the data in database
        ResearchRecord();

        function ResearchRecord() {

            $.ajax({
                url: '{{ route('research-databank.record') }}',
                method: 'GET',
                success: function(response) {
                    $("#all_research").html(response);
                    $("#all_research_table").DataTable({
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
        $("#AddResearch").on('submit', function(e) {
            e.preventDefault();
            $("#btn_submit").html('Submitting <span class="fas fa-spinner fa-spin align-middle ms-2"></span>');
            $('#btn_submit').attr("disabled", true);
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

                    if (response.status == 422) {
                        $('#btn_submit').removeAttr("disabled");
                        $.each(response.error, function(prefix, val) {
                            $(form).find('span.' + prefix + '_error').text(val[0]);
                        });
                        $("#btn_submit").text('Submit');

                    } else {

                        $(form)[0].reset();
                        $('#btn_submit').removeAttr("disabled");
                        $('#btn_submit').text('Submit');

                        ResearchRecord();

                        $("#Add_Research_Modal").modal('hide'); //hide the modal

                        // SWEETALERT
                        Swal.fire({
                            icon: 'success',
                            title: 'Research Created Successfully.',
                            showConfirmButton: true,
                        })
                    }

                    $('#close_btn').on('click', function() {
                        $("#AddResearch").find('span.text-danger').text('');
                    });

                    $('#close_header_btn').on('click', function() {
                        $("#AddResearch").find('span.text-danger').text('');
                    });

                }
            });
        });


         //View Research Abstract
         $(document).on('click', '.research_view', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('research-databank.view') }}',
                method: 'GET',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },

                success: function(response) {
                    $('#view_research input, #view_research textarea').val('');
                    $('#view_abstract_pdf_btn').removeData('url');
                    $('#view_research_paper_pdf_btn').removeData('url');

                    $("#abstract_id").val(response.id);
                    $("#title").val(response.title);
                    $("#author").val(response.author);
                    $("#adviser").val(response.adviser);
                    $("#course").val(response.course);
                    $("#major").val(response.major);
                    $("#academic_year").val(response.academic_year);
                    $("#publication").val(response.publication);
                    $("#description").val(response.description);
                    $("#abstract_document").val(response.abstract_file_name);
                    $("#full_paper_file").val(response.research_paper_file_name);

                    let AbstractPdfURL = '{{ route('research-databank.view_abstract_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                    $("#view_abstract_pdf_btn").attr('data-url', AbstractPdfURL); // Set the PDF URL as data attribute


                    let ResearchFileURL = '{{ route('research-databank.view_research_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                    $("#view_research_paper_pdf_btn").attr('data-url', ResearchFileURL); // Set the PDF URL as data attribute

                }
            });
        });


        //View the PDF Research Abstract
        $(document).on('click', '#view_abstract_pdf_btn', function(e) {
            e.preventDefault();
            let AbstractPdfURL = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

            if (AbstractPdfURL) { // Ensure URL is defined
                window.open(AbstractPdfURL, '_blank'); // Open the PDF in a new tab
            }
        });


        $('#view_research').on('hidden.bs.modal', function (e) {
            // Clear data when the modal is hidden
            $('#view_research input, #view_research textarea').val('');
            $('#view_abstract_pdf_btn').removeData('url');
        });


        //View the PDF Research Paper
        $(document).on('click', '#view_research_paper_pdf_btn', function(e) {
            e.preventDefault();
            let ResearchFileURL = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

            if (ResearchFileURL) { // Ensure URL is defined
                window.open(ResearchFileURL, '_blank'); // Open the PDF in a new tab
            }
        });


        $('#view_research').on('hidden.bs.modal', function (e) {
            // Clear data when the modal is hidden
            $('#view_research input, #view_research textarea').val('');
            $('#view_research_paper_pdf_btn').removeData('url');
        });



        //edit
        $(document).on('click', '.research_edit', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('research-databank.edit') }}',
                method: 'GET',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },

                success: function(response) {
                    $('#edit_research_modal input, #edit_research_modal textarea').val('');
                    $('#edit_abstract_pdf_btn').removeData('url');
                    $('#edit_research_paper_pdf_btn').removeData('url');

                    $("#edit_id").val(response.id);
                    $("#edit_title").val(response.title);
                    $("#edit_author").val(response.author);
                    $("#edit_adviser").val(response.adviser);
                    $("#edit_course").val(response.course);
                    $("#edit_major").val(response.major);
                    $("#edit_academic_year").val(response.academic_year);
                    $("#edit_publication").val(response.publication);
                    $("#edit_description").val(response.description);
                    $("#edit_abstract_document").val(response.abstract_file_name);
                    $("#edit_full_paper_file").val(response.research_paper_file_name);

                    let AbstractPdfURL = '{{ route('research-databank.view_abstract_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                    $("#edit_abstract_pdf_btn").attr('data-url', AbstractPdfURL); // Set the PDF URL as data attribute


                    let ResearchFileURL = '{{ route('research-databank.view_research_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                    $("#edit_research_paper_pdf_btn").attr('data-url', ResearchFileURL); // Set the PDF URL as data attribute

                }
            });
        });



         //View the PDF Research Abstract
         $(document).on('click', '#edit_abstract_pdf_btn', function(e) {
            e.preventDefault();
            let AbstractPdfURL = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

            if (AbstractPdfURL) { // Ensure URL is defined
                window.open(AbstractPdfURL, '_blank'); // Open the PDF in a new tab
            }
        });


        $('#edit_research_modal').on('hidden.bs.modal', function (e) {
            // Clear data when the modal is hidden
            $('#edit_research_modal input, #edit_research_modal textarea').val('');
            $('#edit_abstract_pdf_btn').removeData('url');
        });


        //View the PDF Research Paper
        $(document).on('click', '#edit_research_paper_pdf_btn', function(e) {
            e.preventDefault();
            let ResearchFileURL = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

            if (ResearchFileURL) { // Ensure URL is defined
                window.open(ResearchFileURL, '_blank'); // Open the PDF in a new tab
            }
        });


        $('#edit_research_modal').on('hidden.bs.modal', function (e) {
            // Clear data when the modal is hidden
            $('#edit_research_modal input, #edit_research_modal textarea').val('');
            $('#edit_research_paper_pdf_btn').removeData('url');
        });


        $("#UpdateResearch").on('submit', function(e) {
            e.preventDefault();

            // Show confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to update this research record?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#edit_btn_submit").html('Updating <span class="fas fa-spinner fa-spin align-middle ms-2"></span>');
                    $('#edit_btn_submit').attr("disabled", true);
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
                            if (response.status == 422) {
                                $('#edit_btn_submit').removeAttr("disabled");
                                $.each(response.error, function(prefix, val) {
                                    $(form).find('span.' + prefix + '_error').text(val[0]);
                                });
                                $("#edit_btn_submit").text('Update');
                            } else {
                                $(form)[0].reset();
                                $('#edit_btn_submit').removeAttr("disabled");
                                $('#edit_btn_submit').text('Update');
                                ResearchRecord();
                                $("#edit_research_modal").modal('hide'); // Hide the modal

                                // SWEETALERT for success
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Research Updated Successfully',
                                    showConfirmButton: true,
                                });
                            }

                            // Event binding for close button inside modal
                            $('#edit_close_btn').on('click', function() {
                                $("#UpdateResearch").find('span.text-danger').text('');
                            });

                            $('#edit_close_header_btn').on('click', function() {
                                $("#UpdateResearch").find('span.text-danger').text('');
                            });
                        }
                    });
                } else {
                    // User canceled the action
                    $('#edit_btn_submit').removeAttr("disabled");
                    $("#edit_btn_submit").text('Update');
                }
            });
        });


        $(document).on('click', '.research_delete', function(e) {

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
                        url: '{{ route('research-databank.delete') }}',
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
                                showConfirmButton: true,

                            })

                            ResearchRecord();

                        }
                    });
                }
            })
        });









    });

</script>

@endpush



@endsection
