$( document ).ready(function() {
    $("#input").val('');
    print_to_body();
    print_to_subject();
    heading_1_button();
    heading_2_button();
    heading_3_button();
    bold_button();
    italics_button();
    underline_button();
    align_left_button();
    align_middle_button();
    align_right_button();
});

//Prints text from input box to output div
function print_to_subject(){
    $("#subject_text").bind('input propertychange', function() {
        $("#subject").text($("#subject_text").val());
    });
}

//Prints text from input box to output div
function print_to_body(){

    $("#input").bind('input propertychange', function() {
        $("#output").html($("#input").val().replace(/\n/g, '<br />'));
    });
}

//Function for Heading 1
function heading_1_button(){
    $("#heading_1").click( function() {
        if ($("#heading_1").hasClass('active') == true){
            $("#heading_1").removeClass('active');
            $("#input").val($("#input").val() + '</H1>');
        }else{
            $("#heading_1").addClass('active');
            $("#input").val($("#input").val() + '<H1>');
        }
    });
}

//Function for Heading 2
function heading_2_button(){
    $("#heading_2").click( function() {
        if ($("#heading_2").hasClass('active') == true){
            $("#heading_2").removeClass('active');
            $("#input").val($("#input").val() + '</H2>');
        }else{
            $("#heading_2").addClass('active');
            $("#input").val($("#input").val() + '<H2>');
        }
    });
}

//Function for Heading 3
function heading_3_button(){
    $("#heading_3").click( function() {
        if ($("#heading_3").hasClass('active') == true){
            $("#heading_3").removeClass('active');
            $("#input").val($("#input").val() + '</H3>');
        }else{
            $("#heading_3").addClass('active');
            $("#input").val($("#input").val() + '<H3>');
        }
    });
}

//Function for Bold
function bold_button(){
    $("#bold").click( function() {
        if ($("#bold").hasClass('active') == true){
            $("#bold").removeClass('active');
            $("#input").val($("#input").val() + '</b>');
        }else{
            $("#bold").addClass('active');
            $("#input").val($("#input").val() + '<b>');
        }
    });
}

//Function for italics
function italics_button(){
    $("#italic").click( function() {
        if ($("#italic").hasClass('active') == true){
            $("#italic").removeClass('active');
            $("#input").val($("#input").val() + '</i>');
        }else{
            $("#italic").addClass('active');
            $("#input").val($("#input").val() + '<i>');
        }
    });
}

//Function for underline
function underline_button(){
    $("#underline").click( function() {
        if ($("#underline").hasClass('active') == true){
            $("#underline").removeClass('active');
           // $("input").val($("#input").val() + '</u>');
        }else{
            $("#underline").addClass('active');
           // $("#input").val($("#input").val() + '<u>');
        }
    });
}

//Function for align left
function align_left_button(){
    $("#align_left").click( function() {
        if ($("#align_left").hasClass('active') == true){
            $("#align_left").removeClass('active');
            $("input").val($("#input").val() + '</p>');
        }else{
            $("#align_left").addClass('active');
            $("#input").val($("#input").val() + '<p class="text-left">');
        }
    });
}
//Function for align middle
function align_middle_button(){
    $("#align_middle").click( function() {
        if ($("#align_middle").hasClass('active') == true){
            $("#align_middle").removeClass('active');
            $("#input").val($("#input").val() + '</p>');
        }else{
            $("#align_middle").addClass('active');
            $("#input").val($("#input").val() + '<p class="text-center">');
        }
    });
}
//Function for align right
function align_right_button(){
    $("#align_right").click( function() {
        if ($("#align_right").hasClass('active') == true){
            $("#align_right").removeClass('active');
            $("#input").val($("#input").val() + '</p>');
        }else{
            $("#align_right").addClass('active');
            $("#input").val($("#input").val() + '<p class="text-right">');
        }
    });
}