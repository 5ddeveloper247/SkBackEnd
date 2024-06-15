@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }
</style>
@endpush

@section('content')
<!-- Display Success Message -->

<!-- Display Error Message -->
<section id="deliveries">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li><a href="{{ url('admin/testimonials/view')}}">Dashboard</a></li>
            <li>Testimonials</li>
        </ul>






        {{-- ______________________tab listings end _______________________________--- --}}

        {{--___________________________________ edit property resonse message___________________________________ --}}


        <!-- Display Error Message -->


        <!-- Display Validation Errors -->

        {{--___________________________________ edit property resonse message___________________________________ --}}

        {{-- edit testimonial popup --}}
        <div class="popup lg" data-popup="edit-data-popup" id="edit-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_inquiry_form" action="{{ route('admin.inquiry.update') }}">
                                    <input type="hidden" name="property_id_edit" id="property_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit Testimonial</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_id" id="edit_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="email" name="testimonial_name_edit"
                                                            id="testimonial_name_edit" class="text_box" maxlength="15">
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Title<sup>*</sup></h6>
                                                        <input type="text" name="testimonial_title_edit"
                                                            id="testimonial_title_edit" class="text_box" placeholder=""
                                                            maxlength="15">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Description<sup>*</sup></h6>
                                                        <textarea name="testimonial_description_edit"
                                                            id="testimonial_description_edit" class="text_box"
                                                            placeholder=""></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Profile Pic<sup></sup></h6>
                                                        <input type="file" name="testimonial_pic_edit"
                                                            id="testimonial_pic_edit" class="text_box" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long testimonial_update_btn"
                                                    id="testimonial_update_btn">Update</button>
                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- delete modal start  -->
        <div class="popup sm" data-popup="delete-data-popup" id="delete_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn close_delete_modal_default_btn"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="testimonial_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="inquiry_close_delete_modal_btn"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete modal end  -->









        <div class="tab-content">
            {{-- ______________________tab <All> start_______________________________--- --}}
                <div id="All" class="tab-pane fade in active">
                    <div class="top_head">
                        <div class="card_blk" id="showAddTestimonialPopUpBtn">
                            <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                            </div>
                            <strong>Add Testimonial</strong>
                            <a type="button"></a>
                        </div>
                      
                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box inquiry_search_box"
                                placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        <div class="tbl_blk">
                            <table id="testimonials_table" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>name</th>
                                        <th>title</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody id="testimonials_table_body">


                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <ul class="pagination">
                        <li><a href="?" class="prev"></a></li>
                        <li><a href="?" class="active">1</a></li>
                        <li><a href="?">2</a></li>
                        <li><a href="?">3</a></li>
                        <li><a href="?" class="next"></a></li>
                    </ul> --}}
                </div>
                {{-- ______________________tab <All> end_______________________________--- --}}

        </div>
    </div>
</section>




@endsection

@push('scripts')
<script>
    $('.testimonial_search_box').on("keyup", function (e) {
  
  var tr = $('.testimonial_data_row');
  if ($(this).val().length >= 1) {//character limit in search box.
      var noElem = true;
      var val = $.trim(this.value).toLowerCase();
      el = tr.filter(function () {
          return $(this).find('.grid-p-searchby').text().toLowerCase().match(val);
      });
      if (el.length >= 1) {
          noElem = false;
      }
      tr.not(el).hide();
      el.fadeIn().show();
  } else {
      tr.fadeIn().show();
  }
}); 
</script>



{{-- ______________________________________table searching script _______________________________ --}}
<script>
    function loadTestimonialList() {
        let url = '/admin/testimonials/view/ajax';
        let type = 'GET';
        SendAjaxRequestToServer(type, url, '', '', loadTestimonialsResponse, '', '');
    }

    function loadTestimonialsResponse(response) {
        console.log(response);
        var testimonialsListingTable = $('#testimonials_table_body');
        testimonialsListingTable.empty();
        console.log(response.data);
        var testimonials = response.data;
        $.each(testimonials, function (index, testimonial) {
        var testimonialRow =`<tr class="_data_row"> 
                                    <td class="nowrap grid-p-searchby">${index + 1}</td>
                                    <td class="grid-p-searchby">${testimonial.name}</td>
                                    <td class="grid-p-searchby">${testimonial.title}</td>
                                    <td class="grid-p-searchby">${testimonial.description}</td>
                                    <td class="nowrap grid-p-searchby">${formatDate(testimonial.created_at)}</td>
                                    <td class="nowrap grid-p-searchby" data-center>
                                        <div class="act_btn">
                                            <button type="button" class="edit pop_btn testimonial_edit_btn" title="Edit" data-popup="edit-data-popup" data-id="${testimonial.id}" data-testimonial='${JSON.stringify(testimonial)}'></button>
                                            <button type="button" class="del pop_btn testimonial_delete_btn" title="Delete" data-popup="delete-data-popup" data-id="${testimonial.id}" data-testimonial='${JSON.stringify(testimonial)}'></button>
                                        </div>
                                    </td>
                                </tr>`;
            testimonialsListingTable.append(testimonialRow);
        });
    }




    $(document).on('click','.testimonial_edit_btn', function () {
        alert("hello")
        var id = $(this).attr('data-id');
        var testimonial = JSON.parse($(this).attr('data-testimonial'));
        $('#edit_id').val(testimonial.id);
        $('#testimonial_name_edit').val(testimonial.name);
        $('#testimonial_title_edit').val(testimonial.title);
        $('#testimonial_description_edit').val(testimonial.description);
        // Add your edit logic here, e.g., populate a form with testimonial details for editing
    });

    function getpropertydataResponse(response) {
        console.log(response.propertyInfo);
        if (response.propertyInfo) {
            var property = response.propertyInfo;
            $('#inquiry_id_edit').val(property.id);
            $('#inquiry_name_edit').val(property.pInfo_fName);
            $('#edit-data-popup').show();
        }
    }  

    // _________________________________Delete functions_______________________________
    $(document).on('click', '.testimonial_delete_btn', function () {
        var del_id = $(this).attr('data-id');
        
        $('#testimonial_delete_confirmed_btn').attr('data-id', del_id);
    });

    $('#testimonial_close_delete_modal_btn').click(function () {
        $('.close_delete_modal_default_btn').click();
        $('#testimonial_delete_confirmed_btn').attr('data-id', '');
    });

    $('#testimonial_delete_confirmed_btn').click(function () { 
        var del_id = $(this).attr('data-id');
        let url = '/admin/testimonial/delete';
        let type = 'POST';
        let data = new FormData();
        data.append('del_id', del_id);
        SendAjaxRequestToServer(type, url, data, '', deleteTestimonialResponse, '', '');
    });

    function deleteTestimonialResponse(response) {
        $('#testimonial_close_delete_modal_btn').click(); // Close the modal in all cases

        if (response.status == 200) {
            $('#delete_modal').hide();
            window.location.reload(); // Reload the page
        } else {
            $('#delete_modal').hide();
            // toastr.error(response.message, '', { timeOut: 3000 });
        }
    }

    $(document).ready(function () {
        loadTestimonialList();
    });
</script>

{{-- _____________________________-loading testimonials ended____________________ --}}



<script>
    $(document).ready(function() {
    $('#showAddTestimonialPopUpBtn').on('click', function() {
        $('#popupAddAdminUrl').show();
    });
});  
  
</script>













@endpush