<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Apply for Birth Registration o a child & get certified , This is the Online Birth Registration System Bangladesh.">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Online Birth Registration Bangladesh | BRSBD | BirthregBD" />
    <meta property="og:description" content="Apply for Birth Registration o a child & get certified , This is the Online Birth Registration System Bangladesh." />
    <meta property="og:url" content="https://birthregbd.ml/index.php" />
    <meta property="og:section" content="Birth Registration Bangladesh" />
    <meta property="og:image" content="https://birthregbd.ml/{{asset('/')}}/images/logo.png" />



    <title>Registration|  BRSBD | BirthregBD </title>
    <link rel="stylesheet" href="{{asset('/')}}/css/style-starter.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/style-reg.css">


</head>

@include('front-end.includes.header')

<section>
    <section class="w3l-about-breadcrum" >
        <div class="py-lg-5 " align="center">
            <div class="container py-5">

                <div class="col-sm-8">

                    <!-- partial:index.partial.html -->
                    <!-- multistep form -->
                    <form id="msform" method="post"  onsubmit="return validateForm()" action="{{route('confirm')}}" reqired >
                        <!-- progressbar -->
                        @csrf
                        <ul id="progressbar">
                            <li class="active">Area Selection</li>
                            <li>Personal Info</li>
                            <li>Parents Details</li>
                        </ul>
                        <!-- fieldsets -->

                        <fieldset>

                            <h2 class="fs-title">Area Selection</h2>
                            <h3 class="fs-subtitle">Please Select Preferred Registration Area</h3>


                            <div class="form-group col-md-12">
                                <select name="division" class="form-control" >
                                    <option selected value="">Select Division</option>
                                    @foreach($div as  $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select name="district" id="district" class="form-control"  >
                                    <option selected value="">Select District</option>

                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select name="upazila" id="upazila" class="form-control">
                                    <option selected value="" >Select Upazila</option>
                                </select>
                            </div>



                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>


                        <fieldset>
                            <h2 class="fs-title">Personal Details</h2>
                            <h3 class="fs-subtitle">Tell us something more about child</h3>
                            <input type="text" name="fname" placeholder="First Name" />
                            <input type="text" name="lname" placeholder="Last Name" />


                            <div class="form-group">

                                <select name="gender" class="form-control">
                                    <option value="" >Select Gender..</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label >Select Birth Date</label>
                                    <input type="date" value="" name="bdate" max="3000-12-31"
                                           min="1900-01-01" class="form-control" >
                                </div>
                            </div>



                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>


                        <fieldset>

                            <h2 class="fs-title">Parents Details</h2>
                            <h3 class="fs-subtitle">Fill in your credentials</h3>

                            <div class="form-group">
                                <label for="inputAddress">Father</label>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="father" id="inputEmail4" placeholder="Fathers Name" required>
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="fnationality" id="inputEmail4" placeholder="Nationality" required>
                                </div>
                                <div class="form-group ">
                                    <input type="number" class="form-control" name="fnid" id="inputEmail4" placeholder="National Id Number" required>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Mother</label>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="mother" id="inputEmail4" placeholder="Mothers Name" required>
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="mnationality" id="inputEmail4" placeholder="Nationality" required>
                                </div>
                                <div class="form-group ">
                                    <input type="number" class="form-control" name="mnid" id="inputEmail4" placeholder="National Id Number" required>
                                </div>

                            </div>




                            <div class="form-group">
                                <label for="inputAddress">Present Address</label>
                                <input type="text" name="presaddress" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Permanent Address</label>
                                <input type="text" name="peraddress" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                            </div>



                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

                            <button type="submit" name="btn" class="btn action-button" >Save</button>

                        </fieldset>
                    </form>
                </div>

            </div>
        </div>

    </section>


</section>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="{{asset('/')}}/js/script-reg.js"></script>


<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });


</script>


<script type="text/javascript">

    function validateForm() {


        var div = document.forms["msform"]["division"].value;
        if (div == "") {
            alert("Division not selected .Go to previous section.");
            return false;
        }
        var dis = document.forms["msform"]["district"].value;
        if (dis == "") {
            alert("District not selected.Go to previous section.");
            return false;
        }
        var upa = document.forms["msform"]["thana"].value;
        if (upa == "") {
            alert("Thana/Upazila of Birth not selected .Go to previous section.");
            return false;
        }



        var x = document.forms["msform"]["fname"].value;
        if (x == "") {
            alert("First Name must be filled out .Go to previous section.");
            return false;
        }
        var y = document.forms["msform"]["lname"].value;
        if (y == "") {
            alert("Last Name must be filled out .Go to previous section.");
            return false;
        }
        var z = document.forms["msform"]["gender"].value;
        if (z == "") {
            alert("Gender not selected.Go to previous section.");
            return false;
        }
        var date = document.forms["msform"]["bdate"].value;
        if (date == "") {
            alert("Date of Birth not selected .Go to previous section.");
            return false;
        }


    }


</script>



<script src="{{asset('/')}}/js/bootstrap-datepicker.min.js"> </script>

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function ()
    {
        jQuery('select[name="division"]').on('change',function(){
            var divID = jQuery(this).val();
            if(divID)
            {
                jQuery.ajax({
                    url : 'registration/district/'+divID,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        console.log(data);
                        jQuery('select[name="district"]').empty();
                        jQuery.each(data, function(key,value){
                            $('select[name="district"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="district"]').empty();
            }
        });




        jQuery('select[name="district"]').on('change',function(){
            var disID = jQuery(this).val();
            if(disID)
            {
                jQuery.ajax({
                    url : 'registration/upazila/'+disID,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        console.log(data);
                        jQuery('select[name="upazila"]').empty();
                        jQuery.each(data, function(key,value){
                            $('select[name="upazila"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="upazila"]').empty();
            }
        });



    });
</script>




</body>
</html>
