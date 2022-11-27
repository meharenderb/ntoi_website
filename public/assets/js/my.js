$("document").ready(function () {
    $("#hwRow").attr("hidden", true);

    $('#inlineCheckbox2').change(function () {
        if ($(this).is(':checked')) {
            $("#hwRow").attr("hidden", false);
        } else {
            $("#hwRow").attr("hidden", true);
        }
    });

    // $('#dob').change(function () {
    //     let dob = $('#dob').val();
    //     // let dobDate = new Date(dob);
    //     let today = new Date();
    //     const yyyy = today.getFullYear();
    //     let mm = today.getMonth() + 1; // Months start at 0!
    //     let dd = today.getDate();

    //     if (dd < 10) dd = '0' + dd;
    //     if (mm < 10) mm = '0' + mm;

    //     const formattedToday = yyyy + '-' + mm + '-' + dd;

    //     // let calulatedAge =  ;
    //     // console.log(calulatedAge);

    //     if(dob === formattedToday){
    //         $('#dob_error').html("Correct D.O.B only!");
    //         error++;
    //     }
    // });

    // $('#regForm').on('submit', (e) => {
    //     e.preventDefault();
    //     const name = $("#name").val();
    //     const father_name = $("#father_name").val();
    //     const mother_name = $("#mother_name").val();
    //     const mobile_no = $("#mobile_no").val();
    //     const alt_mobile = $("#alt_mobile").val();
    //     const email = $("#email").val();
    //     const dob = $("#dob").val();
    //     const age = $("#age").val();
    //     const gender = $("#gender").val();
    //     const qualification = $("#qualification").val();
    //     const state = $("#state").val();
    //     const city = $("#city").val();
    //     const pincode = $("#pincode").val();
    //     const skills = $("#skills").val();
    //     const fbl = $("#fbl").val();
    //     const igl = $("#igl").val();
    //     const weight = $("#weight").val();
    //     const height = $("#height").val();
    //     const links = $("#links").val();
    //     const address = $("#address").val();
    //     const category = document.querySelectorAll('.cate');
    
    //     let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     let mobileRegex = /^[0-9]{10}$/;
    //     let ageRegex = /^[0-9]{2}$/;
    //     let hwRegex = /^[0-9]{3}$/;
        
    //     let today = new Date();
    //     const yyyy = today.getFullYear();
    //     let mm = today.getMonth() + 1; // Months start at 0!
    //     let dd = today.getDate();

    //     if (dd < 10) dd = '0' + dd;
    //     if (mm < 10) mm = '0' + mm;

    //     const formattedToday = yyyy + '-' + mm + '-' + dd;

    //     let error = 0;
    
    //     let categoryChecked = 0;
    //     category.forEach(e => {
    //         if (e.checked==true) {
    //             categoryChecked++;
    //         }
    //     });
    
    
    //     if ((categoryChecked === 0)) {
    //         $('#category_error').html("Please select a category");
    //         error++;
    //     } else {
    //         $('#category_error').html("");
    //         category.forEach(element => {
    //             if (element.checked) {
    //                 if (element.value == "modeling") {
    //                     if (!weight) {
    //                         $('#weight_error').html("Weight field is required");
    //                         error++;
    //                     } else if (weight == 0) {
    //                         $('#weight_error').html("Weight can't be zero");
    //                         error++;
    //                     } else {
    //                         $('#weight_error').html('');
    //                     }
    
    //                     if (!height) {
    //                         $('#height_error').html("Height field is required");
    //                         error++;
    //                     } else if (height == 0) {
    //                         $('#height_error').html("Height can't be zero");
    //                         error++;
    //                     } else {
    //                         $('#height_error').html('');
    //                     }
    //                 } else {
    //                     $('#height_error').html('');
    //                     $('#weight_error').html('');
    //                 }
    //             }
    //         });
    //     }
    
    
    //     if (!name) {
    //         $('#name_error').html("Name field is required");
    //         error++;
    //     } else {
    //         $('#name_error').html('');
    //     }
    
    //     if (!mobile_no) {
    //         $('#mobile_error').html("Mobile No. field is required");
    //         error++;
    //     } else if (mobileRegex.test(mobile_no) == false) {
    //         $('#mobile_error').html("Mobile No. is not valid");
    //         error++;
    //     } else {
    //         $('#mobile_error').html('');
    //     }
    
    //     if (alt_mobile) {
    //         if (mobileRegex.test(alt_mobile) == false) {
    //             $('#alt_mobile_error').html("Alt Mobile No. is not valid");
    //             error++;
    //         } else {
    //             $('#alt_mobile_error').html('');
    //         }
    //     } else {
    //         $('#alt_mobile_error').html('');
    //     }
    
    //     if (!email) {
    //         $('#email_error').html("Email field is required");
    //         error++;
    //     } else if (emailRegex.test(email) == false) {
    //         $('#email_error').html("Email is not valid");
    //         error++;
    //     } else {
    //         $('#email_error').html('');
    //     }
    
    //     if (!dob) {
    //         $('#dob_error').html("DOB is required");
    //         error++;
    //     } else if(dob === formattedToday){
    //         $('#dob_error').html("Correct D.O.B only!");
    //         error++;
    //     }else {
    //         $('#dob_error').html('');
    //     }
    
    //     if (!gender) {
    //         $('#gender_error').html("Gender is required");
    //         error++;
    //     } else {
    //         $('#gender_error').html('');
    //     }
    
    //     if (!state) {
    //         $('#state_error').html("State is required");
    //         error++;
    //     } else {
    //         $('#state_error').html('');
    //     }
    
    //     if (!father_name) {
    //         $('#fname_error').html("Father Name field is required");
    //         error++;
    //     } else {
    //         $('#fname_error').html('');
    //     }
    
    //     if (!mother_name) {
    //         $('#mname_error').html("Mother Name field is required");
    //         error++;
    //     } else {
    //         $('#mname_error').html('');
    //     }
    
    //     if (age == '') {
    //         $('#age_error').html("Age field is required");
    //         error++;
    //     } else {
    //         $('#age_error').html('');
    //     }
    
    //     if (!skills) {
    //         $('#skills_error').html("Skills field is required");
    //         error++;
    //     } else {
    //         $('#skills_error').html('');
    //     }
    
    //     if (!fbl) {
    //         $('#fbl_error').html("Facebook link field is required");
    //         error++;
    //     } else {
    //         $('#fbl_error').html('');
    //     }
    
    //     if (!igl) {
    //         $('#igl_error').html("Instagram link field is required");
    //         error++;
    //     } else {
    //         $('#igl_error').html('');
    //     }
    
    //     if (!qualification) {
    //         $('#qual_error').html("Qualification field is required");
    //         error++;
    //     } else {
    //         $('#qual_error').html('');
    //     }
    
    //     if (!city) {
    //         $('#city_error').html("City field is required");
    //         error++;
    //     } else {
    //         $('#city_error').html('');
    //     }
    
    //     if (!pincode) {
    //         $('#pincode_error').html("Pincode field is required");
    //         error++;
    //     } else {
    //         $('#pincode_error').html('');
    //     }
    
    //     if (!pincode) {
    //         $('#pincode_error').html("Pincode field is required");
    //         error++;
    //     } else {
    //         $('#pincode_error').html('');
    //     }
    
    
    
    //     if (!address) {
    //         $('#address_error').html("Address field is required");
    //         error++;
    //     } else {
    //         $('#address_error').html('');
    //     }
    
    
    //     // $(".regSubmit").attr("disabled", true);
    
    
    //     if ((error != 0)) {
    //         return false
    //     }
    
    //     $(".regSubmit").attr("disabled", true);
    
    //     $('#regForm')[0].submit();

    //     // if(error == 0){
    //     //     $(".regSubmit").attr("disabled", false);
    //     // }else{
    //     //     $(".regSubmit").attr("disabled", true);
    //     // }
    //     // $(".regSubmit").html(
    //     //     '<i class="fas fa-spinner fa-spin"></i> Please wait...'
    //     // );
    
    //     // $.ajax({
    //     //     url: "http://localhost/ntoi/register",
    //     //     type: "POST",
    //     //     data: new FormData(document.getElementById("regForm")),
    //     //     cache: false,
    //     //     processData: false,
    //     //     contentType: false,
    //     //     success: (res) => {
    //     //         const response = JSON.parse(res);
    //     //         if (response.status == "SUCCESS") {
    //     //             $("#regForm").trigger("reset");
    //     //             $(".regSubmit").attr("disabled", false);
    
    //     //             $("#successMsg").removeClass("d-none");
    //     //             $("#successMsg").html(response.message);
    //     //             setTimeout(function(){
    //     //                 $("#successMsg").hide();
    //     //             },8000)                
    //     //         } else {
    //     //             // location.reload();
    //     //             $("#regForm").trigger("reset");
    //     //             $(".regSubmit").attr("disabled", false);
                    
    //     //             $("#errorMsg").removeClass("d-none");
    //     //             $("#errorMsg").html(response.message);
    //     //             setTimeout(function(){
    //     //                 $("#errorMsg").hide();
    //     //             },8000)
    //     //         }
    //     //     },
    //     //     error: () => {
    //     //         $("#regForm").trigger("reset");
    //     //         $(".regSubmit").attr("disabled", false);
                
    //     //         $("#errorMsg").removeClass("d-none");
    //     //         $("#errorMsg").html("Sorry! Something went wrong.");
    //     //         setTimeout(function(){
    //     //             $("#errorMsg").hide();
    //     //         },8000)
    //     //     },
    //     // });
    
    // });
    
});

setTimeout(function () {
    $('#hideAlert').hide();
}, 10000);

// $('#otpForm').on('submit', (e) => {
//     e.preventDefault();
//     const otp = $("#otp").val();

//     let otpRegex = /^[0-9]{6}$/;

//     let error = 0;


//     if (!otp) {
//         $('#otp_error').html("OTP field is required");
//         error++;
//     } else if (otpRegex.test(otp) == false) {
//         $('#otp_error').html("OTP is not valid");
//         error++;
//     } else {
//         $('#otp_error').html('');
//     }

//     if ((error != 0)) {
//         return false
//     }


//     $(".otpSubmit").attr("disabled", true);
//     // $(".regSubmit").html(
//     //     '<i class="fas fa-spinner fa-spin"></i> Please wait...'
//     // );

//     // $('#otpForm')[0].submit();


//     $.ajax({
//         url: "http://localhost/ntoi/otp-verification",
//         type: "POST",
//         data: new FormData(document.getElementById("otpForm")),
//         cache: false,
//         processData: false,
//         contentType: false,
//         success: (res) => {
//             const response = JSON.parse(res);
//             if (response.status == "SUCCESS") {
//                 $("#otpForm").trigger("reset");
//                 $(".otpSubmit").attr("disabled", false);

//                 $("#successMsg").removeClass("d-none");
//                 $("#successMsg").html(response.message);
//                 setTimeout(function(){
//                     $("#successMsg").hide();
//                 },8000)                
//             }
//             // else {
//             //     $("#otpForm").trigger("reset");
//             //     $(".otpSubmit").attr("disabled", false);
                
//             //     $("#errorMsg").removeClass("d-none");
//             //     $("#errorMsg").html(response.message);
//             //     setTimeout(function(){
//             //         $("#errorMsg").hide();
//             //     },8000)
//             // }
//         },
//         error: (err) => {
//             error = JSON.parse(err);
//             console.log(error);
//             $("#otpForm").trigger("reset");
//             $(".otpSubmit").attr("disabled", false);
            
//             $("#errorMsg").removeClass("d-none");
//             $("#errorMsg").html("Sorry! Something went wrong.");
//             setTimeout(function(){
//                 $("#errorMsg").hide();
//             },8000)
//         },
//     });

// });