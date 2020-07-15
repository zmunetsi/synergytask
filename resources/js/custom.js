  $(document).ready(function(){

    console.log("jakk");

                $(".new-task-btn").click(function(){
                    $(".created-tasks").hide();
                    $(".new-button").hide();
                    $(".new-task_panel").fadeIn(500);
                });

                $(".create-btn").click(function(){
                    $(".new-task_panel").hide();
                    $(".new-button").fadeIn(500);
                    $(".created-tasks").fadeIn(500);
                });
           
                $("#list-view").click(function(){
                    $(".completed-blocks").hide();
                    $(".completed-list").fadeIn(500);
                    $(".list-view").addClass('text-primary');
                    $(".block-view").removeClass('text-primary');
                });
           
                $("#block-view").click(function(){
                    $(".completed-list").hide();
                    $(".completed-blocks").fadeIn(500);
                    $(".list-view").removeClass('text-primary');
                    $(".block-view").addClass('text-primary');
                });

                 $('body').on('focus',".date-input", function(){
                        console.log('datepicker');
                        $(this).datepicker({
                            format: 'yyyy-mm-dd'
                        });
                    });
            });

