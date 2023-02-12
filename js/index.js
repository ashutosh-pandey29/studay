$(document).ready(function () {
    $(".fa-check").on("click",function(){
     
        let task_id  = $(this).data("checked_id");
        alert( task_id);

        $("#task-item-1").addClass("complete-task");


    });




    $(".fa-edit").on("click",function(){
        alert("hello edit");
    });


    $(".fa-trash").on("click",function(){
        alert("hello delete");
    });


});