$(document).ready(function(){

 var page;
    page = $(this).attr('href');
    $("#content").load('form1.php');

    /*when you click menu then show */
    $('ul#menu li a').click(function(e){
        e.preventDefault();

       page =  $(this).attr('href');
        $('#content').load(page);
    });


    /*save and next data of form*/
    $('#formSave').submit(function (event) {

        var name = $('#name').val(),
            email = $('#email').val(),
            phone = $('#phone').val(),
            allData = {};

        data['name'] = name;
        data['email'] = email;
        data['phone'] = phone;

        $.ajax({
           url : "insert.php",
           type : 'post',
           data : allData,
            success : function (result) {
                alert(result);
            },
            error: function (xhr) {
                console.log('Error. Details :: ' + xhr);
            }
        });

    });
    

});