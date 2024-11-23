$(function(){ 
    

    $.validator.addMethod( "mail", function( value, element ) {
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value);
    }, "Please enter a valid email address." );

    $.validator.addMethod( "whitespace", function( value, element ) {
      return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );
    }, "symbols not allowed" );
    
    jQuery.validator.addMethod("notEqual", function(value, element, param) {
      return this.optional(element) || value != $(param).val();
    }, "Another number");
    
    $.validator.addMethod("endGreaterThanBegin", function(value, element, param) {
        return this.optional(element) || value > $(param).val();
    }, "Given Year Must Be Greater Than Previous Year");
    /*$.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "Value must not equal arg.");*/
    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param * 1000000)
    }, 'File size must be less than {0} MB');

    jQuery.validator.addMethod("zipcode", function(value, element) {
      return this.optional(element) || /^[1-9][0-9]{5}$/.test(value);
    }, "Please provide a valid zipcode.");

    $.validator.addMethod("greaterThan", function( value, element, param ) {
        return this.optional( element ) || value > param;
    }, "The value must be greater than {0}")
  
});


 jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});


$(function(){
  $('.confirm_form').validate({

    onfocusin: function (element) {
        $(element).valid();
      },

      onfocusout: function (element) {
        $(element).valid();
      },

     ignore: '*:not([name])',

    rules:{
      name:{
        required: true,
      },
      email:{
        required: true,
        mail:true
      },
      mobile_n:{
        required: true,
        number: true,
        minlength:10,
        maxlength:10
      },
      message:{
        required: true,
      },      
    },
    messages:{
      name:{
        required:'Enter Your Name',
      },
      email:{
        required: 'Please enter your mail id' 
      },
      mobile_n:{
        required: 'Please enter the Mobile Number',
        number: 'Number only allowed'
      },
      message:{        
        required: 'Please leave your short description',
      },    
    }
  });
});

function contact_form(){
		//alert()
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var phone = document.getElementById('mobile_n').value;
			var mess = document.getElementById('message').value;
            
			if($('.confirm_form').valid() == true){
			    //alert("asd" + name)
				$(".contact .cont_wrapper .cont_form .feild_box .output").show();
			    $(".contact .cont_wrapper .cont_form .feild_box .spin").show();
				 $.ajax({
	                url:"ajax/college/forms.php",
	                type:'post',
	                data:{
	                		name:name,
	                		email:email,
	                        phone:phone,
                            mess:mess,
                            
	                    },
	                success:function(result){
	                    //alert(result);
	                    $(".contact .cont_wrapper .cont_form .feild_box .spin").hide();
	                    
	                    $('.contact .cont_wrapper .cont_form .feild_box .output').html(result);
	                  	
                       
	                  setTimeout(function() {
	                         $(".contact .cont_wrapper .cont_form .feild_box .output").hide();
	                  }, 10000);

	                }
	              });
	              
	              
			}
		}