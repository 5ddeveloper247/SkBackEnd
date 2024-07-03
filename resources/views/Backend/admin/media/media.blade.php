@extends('Backend.includes.common-template')


@push('styles')
<style>
    .btnRow {
        display: flex;
        flex-wrap: nowrap;

    }

    .btnRow>a {
        margin: 2px;

    }

    <style>

    /* Modal styling */
    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        background-color: #007bff;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    .modal-body form .mb-3 {
        margin-bottom: 20px;
    }

    .modal-body form .form-label {
        font-weight: bold;
    }

    /* Input styling */
    .form-control {
        border-radius: 8px;
    }

    /* Text area styling */
    .form-control-textarea {
        border-radius: 8px;
        resize: none;
    }

    /* Table styling */
    .createBtn {
        text-align: right;
    }

    .table {
        border-radius: 10px;
    }

    .table thead th {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .table tbody td {
        vertical-align: middle;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .modal-header {
        background-color: #007bff;
        color: white;
    }

    .modal-header .btn-close {
        filter: invert(1);
    }

    .form-check-input {
        transform: scale(1.5);
    }

    .form-check {
        padding-left: 0;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>



@endpush

@section('content')





{{-- pop up for add mediaURL --}}
<section class="popup lg" id="popupAddMediaUrl" data-popup="search" style="display: none;">
    <div class="table_dv">
        <div class="table_cell">
            <div class="contain">
                <div class="_inner">
                    <button class="x_btn" id="closeCustomModalButton"></button>
                    <div class="modal-body">

                        <form action="" id="addMediaFormUrl" method="POST">
                            <fieldset>
                                <div class="blk">
                                    <h5 class="color">Media Information</h5>
                                    <div class="form_row row">
                                        <div class="col-xs-6">
                                            <div class="form_blk">
                                                <h6>title<sup>*</sup></h6>
                                                <input type="text" name="mediaUrlTitle" id="mediaUrlTitle"
                                                    class="text_box" placeholder="title">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form_blk">
                                                <h6>Video Media URL</h6>
                                                <input type="text" name="mediaUrl" id="mediaUrl" class="text_box"
                                                    placeholder="Video Media must be youtube URL">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form_blk">
                                                <h6>description<sup></sup></h6>
                                                <textarea type="text" name="mediaUrlDescription"
                                                    id="mediaUrlDescription" class="text_box"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>


                                </div>
                                <div class="btn_blk form_btn text-right">

                                    <button type="button" id="AddMediaUrlSubmitBtn"
                                        class="site_btn long">Submit</button>
                                </div>
                            </fieldset>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- pop up for add medi pictures --}}
<section class="popup lg" id="popupAddMediaOnly" data-popup="search" style="display: none;">
    <div class="table_dv">
        <div class="table_cell">
            <div class="contain">
                <div class="_inner">
                    <button class="x_btn" id="closeCustomModalButton"></button>
                    <div class="modal-body">

                        <form action="" id="addMediaFormOnly" method="POST">
                            <fieldset>
                                <div class="blk">
                                    <h5 class="color">Media Information</h5>
                                    <div class="form_row row">
                                        <div class="col-xs-12">
                                            <div class="form_blk">
                                                <h6>title<sup>*</sup></h6>
                                                <input type="text" name="mediaOnlyTitle" id="mediaOnlyTitle"
                                                    class="text_box" placeholder="title">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="_inner">
                                                <button type="button" class="x_btn"></button>
                                                <h4>Upload Media</h4>

                                                <div class="form_row row">
                                                    <div class="col-sm-12">
                                                        <div class="form_blk">

                                                            <input type="file" name="mediaOnlyfile" id="mediaOnlyfile"
                                                                class="text_box ng-pristine ng-valid"
                                                                style="padding: 0.85vw;">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-12">
                                            <div class="form_blk">
                                                <h6>description<sup></sup></h6>
                                                <textarea type="text" name="mediaOnlyDescription"
                                                    id="mediaUrlDescription" class="text_box"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>


                                </div>
                                <div class="btn_blk form_btn text-right">

                                    <button type="button" id="AddMediaOnlySubmitBtn"
                                        class="site_btn long">Submit</button>
                                </div>
                            </fieldset>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section id="deliveries">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li><a href="">Dashboard</a></li>
            <li>Media</li>
        </ul>
        <ul class="tab_list">
            <li id="tab_list_video" class="active"><a href="#All" data-toggle="tab">Video Media</a></li>
            {{-- <li><a href="#AddMediaUrl" data-toggle="tab">Add Media Url</a></li> --}}
            <li id="tab_list_picture"><a href="#AddMedia" data-toggle="tab">Image Media</a></li>
            {{-- <li><a href="#Tracking" data-toggle="tab">Delivery Tracking</a></li> --}}
        </ul>

        <div class="tab-content">



            {{-- ______________________________Add Media Url Tab________________________________ --}}

            <div id="All" class="tab-pane fade in active">
                <div class="top_head">
                    <h4>Media</h4>
                    <div class="card_blk">
                        <div class="icon"><img src="{{asset('images/icon-upload.svg')}}" alt="">
                        </div>
                        <strong>Add Video</strong>
                        <a type="button" id="showMediaUrlPopUpBtn"></a>
                    </div>
                </div>

                <div class="blk">
                    <div class="tbl_blk">
                        <section id="leasing_dash">
                            <div class="contain-fluid">
                                <ul class="crumbs">
                                    <li><a href="">Dashboard</a></li>
                                    <li>Media</li>
                                </ul>
                                <br>
                                <div class="main_row flex_row">
                                    @if(count($mediaUrl))
                                    @foreach ($mediaUrl as $index=>$mediaRecord )

                                    <div class="col">
                                        <div class="item_blk">
                                            <div class="image" style="padding: 0px !important">
                                                @if(isset($mediaRecord->url) && !empty($mediaRecord->url))
                                                <iframe width="320" height="220" src="{{$mediaRecord->url}}"
                                                    frameborder="0" allowfullscreen></iframe>
                                                @else
                                                <p>Video not available</p>
                                                @endif
                                                <div class="overlay p-0">
                                                    <ul class="social_links">
                                                        <li><a
                                                                href="{{ url('/').'/admin/media/delete/mediaurl/'.$mediaRecord->id }}"><img
                                                                    id="video_delete"
                                                                    src="{{ asset('images/icons-delete.png')}}"
                                                                    alt=""></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <h5 class="title">{{ $mediaRecord->title }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div style="width:100%; text-align:center;">
                                        <p>No record found...</p>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>





            {{-- ______________________________Add Media Only Tab________________________________ --}}

            <div id="AddMedia" class="tab-pane fade">
                <div class="top_head">
                    <h4>Media only</h4>


                    <div class="card_blk">
                        <div class="icon"><img src="{{asset('images/icon-upload.svg')}}" alt="">
                        </div>
                        <strong>Add Image </strong>
                        <a type="button" id="showMediaPopUpBtn"></a>
                    </div>
                </div>
                <div class="blk">
                    <div class="tbl_blk">
                        <section id="leasing_dash">
                            <div class="contain-fluid">
                                <ul class="crumbs">
                                    <li><a href="">Dashboard</a></li>
                                    <li>Media</li>
                                </ul>
                                <br>
                                <div class="main_row flex_row">
                                    @if(count($mediaOnlyRecords))
                                    @foreach ($mediaOnlyRecords as $index=>$mediaOnlyRecord )

                                    <div class="col">
                                        <div class="item_blk">
                                            <div class="image">
                                                <img src="{{ asset($mediaOnlyRecord->url) }}" alt="">
                                                <div class="overlay">
                                                    <ul class="social_links">
                                                        <li><a
                                                                href="{{ url('/').'/admin/media/delete/mediaonly/'.$mediaOnlyRecord->id }}"><img
                                                                    id="picture_delete"
                                                                    src="{{ asset('images/icons-delete.png')}}"></a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="txt">
                                                <h5 class="title"><a href="#">{{$mediaOnlyRecord->title}}</a></h5>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div style="width:100%; text-align:center;">
                                        <p>No record found...</p>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </section>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>











@endsection



@push('scripts')

<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true
            , serverSide: true
            , ajax: "{{ route('user.list') }}"
            , columns: [{
                    data: 'id'
                    , name: 'id'
                }
                , {
                    data: 'name'
                    , name: 'name'
                }
                , {
                    data: 'email'
                    , name: 'email'
                }
                , {
                    data: 'action'
                    , name: 'action'
                    , orderable: false
                    , searchable: false
                }
            , ]
        });

    });

</script>



<script>
    // Define the functaion
    function handleCreateUserx() {


        var formData = $('#createUserForm').serialize();
        const uri = '/admin/dashboard/user/user';

        $.ajax({
            type: 'POST'
            , url: uri, // Add quotes around the URL
            data: formData
            , headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , success: function(response) {
                toastr.success("Submitted Successfully");
                window.location.reload();
                // Handle success response 
                // Close the modal if needed  
                $('#showCreateModal').modal('hide');
            }
            , error: function(xhr, status, error) {
                toastr.error('Error submitting form:', error, '', {
                    timeOut: 3000
                });
                var errorMessages = "";
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    for (var key in errors) {
                        toastr.error(errors[key][0] + '<br>'); // Concatenate error messages
                    }
                    // toastr.error(errorMessages);
                } else {
                    toastr.error('Error:', error);
                }
                $('#showCreateModal').modal('show');
                console.error('Error submitting form:', error);
            }
        });
    }









    ///////////////////////////////

    // Event delegation for handling click events on action buttons
    $(document).on('click', '.view', function() {
        // Get user data from the button's data attributes
        var userData = $(this).data('user');

        // Populate the modal with user data
        $('#viewFullName').text(userData.name);
        $('#viewEmail').text(userData.email);
        $('#viewPhone').text(userData.phone);
        $('#viewStatus').text(userData.status ? 'Active' : 'Inactive');

        // Show the modal

        $('#popupView').css('display', 'block');

    });




    $(document).on('click', '.edit', function() {
        // Handle edit button click
        var userId = $(this).data('id');
        var userData = $(this).data('user');
    });



    $(document).on('click', '.delete', function() {

        // Handle delete button click
        var userId = $(this).data('id');
        var userData = $(this).data('user');
        // Perform actions for deleting user data
        // For example, send an AJAX request to delete the user
        $.ajax({
            type: 'GET'
            , url: '/admin/users/user/destroy/' + userId, // Adjust the URL according to your route configuration
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , success: function(response) {
                toastr.success("User deleted successfully");
                // Reload the DataTable or update it to reflect the changes
                // For example, you can use DataTables API to redraw the table
                $('.data-table').DataTable().ajax.reload();
            }
            , error: function(xhr, status, error) {
                toastr.error("Error deleting user");
            }
        });
    });

</script>


{{-- ________________________add media url ___________________________ --}}
<script>
    $(document).ready(function() {

$('#showMediaUrlPopUpBtn').on('click',function(e){
  
    $('#popupAddMediaUrl').css('display', 'block');

});


    $('#AddMediaUrlSubmitBtn').on('click', function(e) {
      
        e.preventDefault(); // Prevent the default form submission

        var formData = {
            mediaUrlTitle: $('#mediaUrlTitle').val(),
            mediaUrl: $('#mediaUrl').val(),
            mediaUrlDescription: $('#mediaUrlDescription').val(),
            
        };

        $.ajax({
            type: 'POST',
            url: '/admin/dashboard/media/url', // Use the form's action attribute
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function(response) {
                toastr.success("Media added successfully");
                window.location.reload();
                // Optionally, you can reset the form or perform other actions
                $('#addMediaForm')[0].reset();
            },
            error: function(xhr, status, error) {
                var errorMessages = "";
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    for (var key in errors) {
                        errorMessages += errors[key] + "<br>";
                    }
                } else {
                    errorMessages = 'An error occurred while adding the media.';
                }
                toastr.error(errorMessages, '', {
                    timeOut: 3000
                });
                console.error('Error submitting form:', error);
            }
        });
    });
});

</script>










{{-- ________________________add media only ___________________________ --}}
<script>
    $(document).ready(function() {

$('#showMediaPopUpBtn').on('click',function(e){
  
    $('#popupAddMediaOnly').css('display', 'block');

});

$('#AddMediaOnlySubmitBtn').on('click', function(e) {
    e.preventDefault(); // Prevent the default form submission

    const form = $('#addMediaFormOnly'); // Use the correct ID of the form
    const formData = new FormData(form[0]);
    const uri='/admin/dashboard/media/upload'

    $.ajax({
        type: 'POST',
        url: uri, // Use the form's action attribute
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        processData: false, // Add this line to prevent jQuery from processing the data
        contentType: false, // Add this line to prevent jQuery from setting the content type
        success: function(response) {
            toastr.success("Media added successfully");
            window.location.reload();
            // Optionally, you can reset the form or perform other actions
            form[0].reset();
        },
        error: function(xhr, status, error) {
            var errorMessages = "";
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                var errors = xhr.responseJSON.errors;
                for (var key in errors) {
                    errorMessages += errors[key] + "<br>";
                }
            } else {
                errorMessages = 'An error occurred while adding the media.';
            }
            toastr.error(errorMessages, '', {
                timeOut: 3000
            });
            console.error('Error submitting form:', error);
        }
    });
});



});

</script>



{{-- opening current image tab after submission imge --}}
<script>
    $(document).ready(function() {
        $('#AddMediaOnlySubmitBtn').click(function() {
            // Set a flag in local storage
            localStorage.setItem('showPopup', 'true');
            //alert('Flag set to true before submitting the form');
        });
    });
</script>


<script>
    $(document).ready(function() {
        const flagVideoVal = window.localStorage.getItem('video_delete') === 'true';
        const flagPictureVal = window.localStorage.getItem('picture_delete') === 'true';

        console.log('Video Flag:', flagVideoVal);  // Debugging log
        console.log('Picture Flag:', flagPictureVal);  // Debugging log

        if (flagPictureVal) {
            console.log('Picture flag is true');
            $('#tab_list_video').removeClass('active');
            $('#All').removeClass('active');
            $('#All').removeClass('in');
            $('#tab_list_picture').addClass('active');
            $('#AddMedia').addClass('in');
            $('#AddMedia').addClass('active');
            window.localStorage.removeItem('picture_delete');
            window.localStorage.removeItem('video_delete');
        } else if (flagVideoVal) {
            console.log('Video flag is true');
            $('#tab_list_picture').removeClass('active');
            $('#AddMedia').removeClass('active');
            $('#AddMedia').removeClass('in');
            $('#tab_list_video').addClass('active');
            $('#All').addClass('in');
            $('#All').addClass('active');
            window.localStorage.removeItem('picture_delete');
            window.localStorage.removeItem('video_delete');
        } else {
            console.log('No flags set, defaulting to video');
            // Default to video if no flags are set
            $('#tab_list_video').addClass('active');
            $('#All').addClass('in');
            $('#All').addClass('active');
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#video_delete').click(function() {
            window.localStorage.setItem('video_delete', 'true');
            window.localStorage.setItem('picture_delete', 'false');
            console.log('Set video_delete to true and picture_delete to false');  // Debugging log

            $('#tab_list_picture').removeClass('active');
            $('#AddMedia').removeClass('active');
            $('#AddMedia').removeClass('in');
            $('#tab_list_video').addClass('active');
            $('#All').addClass('in');
            $('#All').addClass('active');
        });

        $('#picture_delete').click(function() {
            window.localStorage.setItem('picture_delete', 'true');
            window.localStorage.setItem('video_delete', 'false');
            console.log('Set picture_delete to true and video_delete to false');  // Debugging log

            $('#tab_list_video').removeClass('active');
            $('#All').removeClass('active');
            $('#All').removeClass('in');
            $('#tab_list_picture').addClass('active');
            $('#AddMedia').addClass('in');
            $('#AddMedia').addClass('active');
        });
    });
</script>






@endpush