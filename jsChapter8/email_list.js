$(document).ready( () =>{
    //set focus on email input
    $("#email").focus();

    //handle submit event on email form
    $("#email_form").submit( (event) =>{
        //retrieve values
        const email = $("#email").val(); //val() is a getter
        let isValid = true;

        //validate email address
        if(email === ""){
            $("#email").next("This field is required.");
            isValid = false;
        } else {
            $("#email").next().text("");
        }

        //submit the form only if all form entries are valid (isValid = true)
        if(isValid){
            $("#email_form").submit();
        } else {
            event.preventDefault();
        }
    });

    //handle click on reset button
    $("#reset_button").click( () => {
        //clear text box
        $("#email").val("");
        //reset span elements
        $("#email").next().text("*");
        $("#email").focus();
    });
});

//look at source code for JQuery stuff before test