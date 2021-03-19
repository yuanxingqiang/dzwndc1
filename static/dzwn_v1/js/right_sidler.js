$(function(){
	$(document).scroll(function(){
            var scrTop = (document.body.scrollTop || document.documentElement.scrollTop);
            if (scrTop > 200)
            {
                $(".fix_right .back").show();
            } else
            {
                $(".fix_right .back").hide();
            }

        })
})
