<?php
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('h:i a', time());
?>
<script>
$(document).ready(function(){
//click button
    $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="d-flex align-items-baseline text-end justify-content-end mb-4">'+
        '<div class="pe-2">'+
        '<div>'+
        '<div class="card card-text d-inline-block p-2 px-3 m-1">'+ $value + '</div>'+
        '</div>'+
        '<div>'+
        '<div class="small">'+'<?php echo $mysqltime ?>'+'</div>'+
        '</div>'+
        '</div>'+
        '<div class="position-relative avatar">'+
        '<img src="res/accountimg/<?=$_SESSION['id']?>.png" class="img-fluid rounded-circle" alt="">'+
        '<span class="position-absolute bottom-0 start-100 translate-middle p-1 "> <span class="visually-hidden">New alerts</span></span>'+
        '</div>'+
        '</div>';
        $("#chatbody").append($msg);
        $("#data").val('');
        
        // start ajax code query
        $.ajax({
            url: 'code/components/chatbot/cbmp.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                $replay = '<div class="d-flex align-items-baseline mb-4">'+
                '<div class="position-relative avatar"><img src="res/accountimg/bot.png" class="img-fluid rounded-circle" alt="">'+
                ' <span class="position-absolute bottom-0 start-100 translate-middle p-1 "><span class="visually-hidden">New alerts</span></span>'+
                '</div>'+
                '<div class="pe-2">'+
                '<div>'+
                '<div class="card card-text d-inline-block p-2 px-3 m-1">' + result +
                '</div>'+
                '<div>'+
                '<div class="small" style="margin-bottom: 10px;">'+'<?php echo $mysqltime ?>'+'</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '<div style="height:10%;"></div>';
                $("#chatbody").append($replay);
                // when chat goes down the scroll bar automatically comes to the bottom
                $("#chatbody").scrollTop($("#chatbody")[0].scrollHeight);
            }
        });
    });
    
    //enter button
    $("#data").keypress(function(event) {
        if (event.keyCode === 13) {
            $("#send-btn").click();
        }
    });
});
</script>