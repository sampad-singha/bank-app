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
        $('.Dashboard').show();

        $('.btn_Dashboard').click(function (){
            $('.content').hide();
            $('.Dashboard').show();
        });
        $('.btn_Transactions').click(function (){
            $('.content').hide();
            $('.Transactions').show();
        });
        $('.btn_Withdraw').click(function (){
            $('.content').hide();
            $('.Withdraw').show();
        });
        $('btn_transactions').click(function (){
            $('.content').hide();
            $('.Transactions').show();
        });
    });

})(jQuery);
