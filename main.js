$(()=>{
    $('.ltog').on('click',()=>{
        let mainpage = document.querySelector('.nav1sh');
        let ltog = document.querySelector('.lltog');
        if(mainpage.classList.value.includes('shift')){
            mainpage.classList.remove('shift')
            ltog.classList.remove('cancel')
            ltog.classList.add('lltogg')
        }
        else{
            mainpage.classList.add('shift')
            ltog.classList.add('cancel')
            ltog.classList.remove('lltogg')
        }
        
    })

    
    $('#open').on('click',()=>{
        
        if($('.openwidth').length == 0){
            $('#more').addClass('openwidth');
            $('#open').text('close');
        }
        else{
            $('#more').removeClass('openwidth');
            $('#open').text('open');
        }
        
    })

   
    $('.c').on('click',()=>{
        
        $('.join').trigger('click');
        

})
})
