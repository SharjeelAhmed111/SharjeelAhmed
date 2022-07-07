$(document).ready(()=>{


    // --->>>  cake dropdown
    $('#cake_dd').mouseover(()=>{
        $('.cake_dd').css('display','block');
    });

    $('#cake_dd').mouseleave(()=>{
        $('.cake_dd').css('display','none');
    });

    $('.cake_dd').mouseover(()=>{
        $('.cake_dd').css('display','block');
    });

    $('.cake_dd').mouseleave(()=>{
        $('.cake_dd').css('display','none');
    });


    // --->>> photo cake dropdown
    $('#photo_cake_DD').mouseover(()=>{
        $('.photo_cake_DD').css('display','block');
    });

    $('#photo_cake_DD').mouseleave(()=>{
        $('.photo_cake_DD').css('display','none');
    });

    $('.photo_cake_DD').mouseover(()=>{
        $('.photo_cake_DD').css('display','block');
    });

    $('.photo_cake_DD').mouseleave(()=>{
        $('.photo_cake_DD').css('display','none');
    });


    
            // --->>> photo cake dropdown --->>  Cakes by Design
            $('#Cakes_by_Design').mouseover(()=>{
                $('.Cakes_by_Design').css('display','block');
            });

            $('#Cakes_by_Design').mouseleave(()=>{
                $('.Cakes_by_Design').css('display','none');
            });

            $('.Cakes_by_Design').mouseover(()=>{
                $('.Cakes_by_Design').css('display','block');
            });
        
            $('.Cakes_by_Design').mouseleave(()=>{
                $('.Cakes_by_Design').css('display','none');
            });


            // --->>> photo cake dropdown --->>  For Boys
            $('#Carz_cakes').mouseover(()=>{
                $('.Carz_cakes').css('display','block');
            });

            $('#Carz_cakes').mouseleave(()=>{
                $('.Carz_cakes').css('display','none');
            });

            $('.Carz_cakes').mouseover(()=>{
                $('.Carz_cakes').css('display','block');
            });
        
            $('.Carz_cakes').mouseleave(()=>{
                $('.Carz_cakes').css('display','none');
            });


            // --->>> photo cake dropdown --->>  For Girls
            $('#Frozen_cakes').mouseover(()=>{
                $('.Frozen_cakes').css('display','block');
            });

            $('#Frozen_cakes').mouseleave(()=>{
                $('.Frozen_cakes').css('display','none');
            });

            $('.Frozen_cakes').mouseover(()=>{
                $('.Frozen_cakes').css('display','block');
            });
        
            $('.Frozen_cakes').mouseleave(()=>{
                $('.Frozen_cakes').css('display','none');
            });


            
    // --->>>Custom_Cakes 
    $('#Custom_Cakes').mouseover(()=>{
        $('.Custom_Cakes').css('display','block');
    });
    
    $('#Custom_Cakes').mouseleave(()=>{
        $('.Custom_Cakes').css('display','none');
    });
    
    $('.Custom_Cakes').mouseover(()=>{
        $('.Custom_Cakes').css('display','block');
    });
            
    $('.Custom_Cakes').mouseleave(()=>{
        $('.Custom_Cakes').css('display','none');
    });


    // --->>> What_New
    $('#What_New').mouseover(()=>{
        $('.What_New').css('display','block');
    });
    
    $('#What_New').mouseleave(()=>{
        $('.What_New').css('display','none');
    });
    
    $('.What_New').mouseover(()=>{
        $('.What_New').css('display','block');
    });
            
    $('.What_New').mouseleave(()=>{
        $('.What_New').css('display','none');
    });


    // --->>> Premium
    $('#Premium').mouseover(()=>{
        $('.Premium').css('display','block');
    });
    
    $('#Premium').mouseleave(()=>{
        $('.Premium').css('display','none');
    });
    
    $('.Premium').mouseover(()=>{
        $('Premium').css('display','block');
    });
            
    $('.Premium').mouseleave(()=>{
        $('.Premium').css('display','none');
    });


    // ************************************************************
    //  +++++++++++   Mobile navigation  ++++++++++++++++++++++++++

    $(".mob_cake").click(()=>{
        $('.mob_cake >.mob_sub_d').toggle();
    });

    $(".mob_photo_cake").click(()=>{
        $('.mob_photo_cake > .mob_sub_d').toggle();
    });

    $(".mob_custom_cake").click(()=>{
        $('.mob_custom_cake > .mob_sub_d').toggle();
    });


    // **************  popup mobile menu 
    $('.mon_menu_icon').click(()=>{

        $('.mobile_nav_bar').css('left','0');
        $(".overlay").css('background-color','rgba(0,0,0,0.5)');

    });

    $('.close').click(()=>{

        $('.mobile_nav_bar').css('left','-350px');

    });


    // **************  popup acc menu 
    $('.acc_icon').click(()=>{

        $('.acc_bar').css('right','0');
        $(".overlay").css('background-color','rgba(0,0,0,0.5)');

    });

    $('.close').click(()=>{

        $('.acc_bar').css('right','-350px');

    });




    $('.acc_icon').mouseover(()=>{

        $('.acc_bar').css('right','0');
        $(".overlay").css('background-color','rgba(0,0,0,0.5)');

    });

    $('.acc_bar').mouseleave(()=>{

        $('.acc_bar').css('right','-350px');

    });
    

});