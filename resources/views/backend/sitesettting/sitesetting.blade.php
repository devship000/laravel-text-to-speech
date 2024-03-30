@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">


    <div class="row profile-body">
        <!-- left wrapper start -->

        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Update Admin Profile </h6>

                        <form method="POST" action="" class="forms-sample" enctype="multipart/form-data">
                            @csrf




                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                <input type="text" name="email" class="form-control" id="exampleInputUsername1" value=" {{$siteSettings->email }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone </label>
                                <input type="text" name="phone" class="form-control" id="exampleInputUsername1" value="{{ $siteSettings->phone }}">
                            </div>



                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address </label>
                                <input type="text" name="address" class="form-control" id="exampleInputUsername1" value="{{ $siteSettings->address }}">
                            </div>



                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Photo </label>
                                <input class="form-control" name="logo" type="file" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> </label>
                                <img id="showImage" class="wd-80" src="{{ (!empty($siteSettings->logo)) ? url('upload/admin_images/'.$siteSettings->logo) : url('upload/no_image.jpg') }}" alt="profile">
                            </div>





                            <button type=" submit" class="btn btn-primary me-2">Save Changes </button>
                        </form>

                    </div>
                </div>




            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->

        <!-- right wrapper end -->
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection