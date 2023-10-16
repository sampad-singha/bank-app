(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

    $(document).ready(function() {

        if (sessionStorage.getItem('class') == null) {
            // $('.content').hide();
            $('.li_btn').removeClass('active');
            $('.btn_Dashboard').parent().addClass('active');
            $('.Dashboard').show();
        }else {
            // $('.content').hide();
            $('.li_btn').removeClass('active');
            $('.btn_'+sessionStorage.getItem('class')).parent().addClass('active');
            $('.'+sessionStorage.getItem('class')).show();
        }

        $('.btn_Dashboard').click(function (){
            $('.content').hide();
            $('.Dashboard').show();
            $('.li_btn').removeClass('active');
            $('.btn_Dashboard').parent().addClass('active');
            sessionStorage.setItem('class', 'Dashboard');
        });
        $('.btn_Transactions').click(function (){
            $('.content').hide();
            $('.Transactions').show();
            $('.li_btn').removeClass('active');
            $('.btn_Transactions').parent().addClass('active');
            sessionStorage.setItem('class', 'Transactions');
        });
        $('.btn_Withdraw').click(function (){
            $('.content').hide();
            $('.Withdraw').show();
            $('.li_btn').removeClass('active');
            $('.btn_Withdraw').parent().addClass('active');
            sessionStorage.setItem('class', 'Withdraw');
        });
        // $('btn_transactions').click(function (){
        //     $('.content').hide();
        //     $('.Transactions').show();
        // });
    });

})(jQuery);
