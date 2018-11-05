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

    $(document).on('submit','form',function () {
        // console.log('Starting transfer');
 var form = $(this);
    url = form.attr('action');
    method = form.attr('method');
    data = {};

    form.find('[name]').each(function (index, value) {
        var input = $(this),
       name = input.attr('name'),
           value = input.val();
       data[name]= value;
    });

    $.ajax({
       url : url,
       type : method,
       data : data,
        success : function (response) {
           $('.text-info').text(response);
        },
        error:function (xhr) {
            console.log(xhr.statusText);
        }
    });
        return false;
    });



});