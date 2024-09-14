@extends('layouts.admin')
@section('title')
    Research
@endsection
@section('content')

<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column">
            <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                Manage Complete Research 
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="{{route('dashboard.index')}}" class="text-white text-hover-primary">
                        Home 
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-white opacity-75">
                    Complete Research  
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-white opacity-75">
                    Record
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center flex-wrap py-2">
            <a href="#" class="btn btn-sm btn-success my-2" tooltip="New App" data-bs-toggle="modal" data-bs-target="#insert_complete_research_modal">
                <i class="fa-duotone fa-solid fa-plus"></i> Create Research
            </a>
        </div>
    </div>
</div>

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
            <div class="card-body p-lg-17">
                <div class="table-responsive" id="all_complete_research">
                    {{--Table Will Appear Here --}}
                </div>
            </div>
        </div>
    </div>
</div>


{{--Insert Modal--}}
<div class="modal fade" id="insert_complete_research_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" id="complete_research_close_header_btn"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
               <div class="mb-13">
                    <h1 class="text-center mb-5">Create Research</h1>
                    <form action="{{route('complete-research.store')}}" method="POST" id="CreateCompleteResearch"
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
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                                id="complete_research_close_btn">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm" id="complete_research_btn_submit">Submit</button>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>

{{-- View Modal --}}
<div class="modal fade" id="view_complete_research" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
                <div class="mb-13">
                    <h1 class="text-center mb-5">View Research</h1>
                    <form  enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="complete_research_id" id="complete_research_id" readonly hidden>
                        
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
                                <button type="button" class="btn btn-warning btn-sm" id="view_pdf" style="padding: 10px">View File</button>
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

{{-- Edit Modal --}}
<div class="modal fade" id="edit_complete_research_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="edit_research_close_header_btn"></button>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
                <div class="mb-13">
                    <h1 class="text-center mb-5">Edit Research</h1>
                    <form action="{{route('complete-research.update')}}" method="POST" id="UpdateCompleteResearch"
                        enctype="multipart/form-data">
                        @csrf
                        
                        <input type="text" name="edit_research_id" id="edit_research_id" readonly hidden>

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
                                <button type="button" class="btn btn-warning" id="view_pdf_file" style="padding: 10px">View File</button>
                            </div>
                        </div>

                        <div class="mt-4 float-end">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                                id="edit_research_close_btn">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm" id="research_edit_btn_submit">Update</button>
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
            AllCompleteResearch();

            function AllCompleteResearch() {
                $.ajax({
                    url: '{{ route('complete-research.allresearchrecord') }}',
                    method: 'GET',
                    success: function(response) {
                        $("#all_complete_research").html(response);
                    
                        $("#all_complete_research_table").DataTable({
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

            // Create Research  
            $("#CreateCompleteResearch").on('submit', function(e) {
                e.preventDefault();
                $("#complete_research_btn_submit").html('Submitting <span class="fas fa-spinner fa-spin align-middle ms-2"></span>');
                $('#complete_research_btn_submit').attr("disabled", true);
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
                            $('#complete_research_btn_submit').removeAttr("disabled");
                            $.each(response.error, function(prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val[0]);
                            });
                            $("#complete_research_btn_submit").text('Submit');

                        } else {

                            $(form)[0].reset(); //Reset the form
                            $('#complete_research_btn_submit').removeAttr("disabled");
                            $('#complete_research_btn_submit').text('Submit');
                            
                            AllCompleteResearch();

                            $("#insert_complete_research_modal").modal('hide'); //hide the modal

                            // SWEETALERT
                            Swal.fire({
                                icon: 'success',
                                title: 'Research Created Successfully.',
                                showConfirmButton: true,
                            })
                        }

                        $('#complete_research_btn_submit').on('click', function() {
                            $("#CreateCompleteResearch").find('span.text-danger').text('');
                        });

                        $('#complete_research_close_header_btn').on('click', function() {
                            $("#CreateCompleteResearch").find('span.text-danger').text('');
                        });

                    }
                });
            });

            //View Research Abstract
            $(document).on('click', '.complete_research_view', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: '{{ route('complete-research.view') }}',
                    method: 'GET',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(response) {

                        $('#view_complete_research input, #view_complete_research textarea').val('');
                        $('#view_pdf').removeData('url');

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

                        let pdfUrl = '{{ route('complete-research.view_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                        $("#view_pdf").attr('data-url', pdfUrl); // Set the PDF URL as data attribute
                    }   
                });
            });

            // Handle the PDF file view
            $(document).on('click', '#view_pdf', function(e) {
                e.preventDefault();
                let pdfUrl = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

                if (pdfUrl) { // Ensure URL is defined
                    window.open(pdfUrl, '_blank'); // Open the PDF in a new tab
                } else {
                    console.error('PDF URL is not defined');
                }
            });
           
            $('#view_complete_research').on('hidden.bs.modal', function (e) {
                // Clear data when the modal is hidden
                $('#view_complete_research input, #view_complete_research textarea').val('');
                $('#view_pdf').removeData('url');
            });

            //Edit Research Abstract
            $(document).on('click', '.complete_research_edit', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: '{{ route('complete-research.edit') }}',
                    method: 'GET',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(response) {

                        $("#edit_research_id").val(response.id);
                        $("#edit_title").val(response.title);
                        $("#edit_author").val(response.author);
                        $("#edit_adviser").val(response.adviser);
                        $("#edit_course").val(response.course);
                        $("#edit_major").val(response.major);
                        $("#edit_academic_year").val(response.academic_year);
                        $("#edit_publication").val(response.publication);
                        $("#edit_description").val(response.description);
                        $("#edit_documents").val(response.file_name);


                        let pdfUrl = '{{ route('complete-research.view_pdf', ':id') }}'.replace(':id', response.id) + '?t=' + new Date().getTime();
                        $("#view_pdf_file").attr('data-url', pdfUrl); // Set the PDF URL as data attribute
                        
                    }
                });
            });

            $(document).on('click', '#view_pdf_file', function(e) {
                e.preventDefault();
                let pdfUrl = $(this).data('url'); // Retrieve the PDF URL from the data-url attribute

                if (pdfUrl) { // Ensure URL is defined
                    window.open(pdfUrl, '_blank'); // Open the PDF in a new tab
                } else {
                    console.error('PDF URL is not defined');
                }
            });

            $('#edit_complete_research_modal').on('hidden.bs.modal', function (e) {
                // Clear data when the modal is hidden
                $('#edit_complete_research_modal input, #edit_complete_research_modal textarea').val('');
                $('#view_pdf_file').removeData('url');
            });

            //Update Research Abstract
            $("#UpdateCompleteResearch").on('submit', function(e) {
                e.preventDefault();
                $("#research_edit_btn_submit").html('Updating <span class="fas fa-spinner fa-spin align-middle ms-2"></span>');
                $('#research_edit_btn_submit').attr("disabled", true);
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
                            $('#research_edit_btn_submit').removeAttr("disabled");

                            $.each(response.error, function(prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val[0]);
                            });

                            $("#research_edit_btn_submit").text('Update');

                        } else {

                            $(form)[0].reset();
                            $('#research_edit_btn_submit').removeAttr("disabled");
                            $('#research_edit_btn_submit').text('Update');
                            AllCompleteResearch();
                            $("#edit_complete_research_modal").modal('hide'); //hide the modal

                            // SWEETALERT
                            Swal.fire({
                                icon: 'success',
                                title: 'Research Updated Successfully',
                                showConfirmButton: false,
                                timer: 1700,
                                timerProgressBar: true,

                            })
                        }

                        // Event binding for close button inside modal
                        $('#edit_research_close_btn').on('click', function() {
                            $("#UpdateCompleteResearch").find('span.text-danger').text('');
                        });

                        $('#edit_research_close_header_btn').on('click', function() {
                            $("#UpdateCompleteResearch").find('span.text-danger').text('');
                        });

                    }
                });
            });

            //Delete
            $(document).on('click', '.complete_research_delete', function(e) {
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
                            url: '{{ route('complete-research.delete') }}',
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

                                AllCompleteResearch();

                            }
                        });
                    }
                })
            });
        
        });
    </script>
@endsection
@endsection
