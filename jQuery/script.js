
/*
 * form names array
 */
var forms = ["form1.php","form2.php","form3.php"],
    formIndex = 0;

$(document).ready(function(){
 var page;
 //initaily shown form 1
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
        type: method,
       data : data,
        statusCode:{
            201: function (result) {
                formIndex++;
                console.log(result);
                if(formIndex >= 3){
                    $(".text-info").html('<h3>Last Form insert take place at form3 table</h3>').hide(1000);

                }else{
                    console.log("Loading : " + forms[formIndex])
                    $("#content").load(forms[formIndex]);
                }
            },
            404:function (r) {
                alert(r)
            }
        },
        error:function (xhr) {
            console.log(xhr.statusText);
        }
    });
        return false;
    });



});