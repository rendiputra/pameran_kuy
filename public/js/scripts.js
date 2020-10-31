/*********************************************************************************

	Template Name: Blazen - Event and Exhibition Bootstrap4 Template
	Description: A perfect multi-concept template for event or event management websites. It comes with nice and clean design.
	Version: 1.0

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================
			[ INDEX ]
=================================================================================

    Header Style 1 Sticky Header
    Header Style 2 Sticky Header
    Progress Bar Effect
    Breadcrumb Padding
    Portfolio Load More

=================================================================================
			[ END INDEX ]
================================================================================*/

(function ($) {
    'use strict';

    /* Header Style 1 Sticky Header */
    if($('.header-style-1.sticky-header').length){
        
        $(window).on('scroll', function () {

            var scrollPos = $(this).scrollTop();
              
            if (scrollPos > 300) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }

        });

    }

    /* Header Style 2 Sticky Header */
    if($('.header-style-2.sticky-header').length){
        var headerOffset = $('.header-style-2').offset().top;

        $(window).on('scroll', function () {

            var scrollPos = $(this).scrollTop();

            if (scrollPos > headerOffset + 500) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }

        });

    }




    /* Progress Bar Effect */
    $(window).on('scroll', function () {

        function winScrollPosition() {
            var scrollPos = $(window).scrollTop(),
                winHeight = $(window).height();
            var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
            return scrollPosition;
        }


        var trigger = $('.progress-bar');
        if (trigger.length) {
            var triggerPos = Math.round(trigger.offset().top);
            if (triggerPos < winScrollPosition()) {
                trigger.each(function () {
                    $(this).addClass('fill');
                });
            }
        }

    });






    /* Breadcrumb Padding */
    var winWidth = $(window).width();
    if(winWidth > 991){
        if( $('.cr-breadcrumb-area').length && $('.header-transparent').length ){
            var transparentHeaderHeight = $('.header-transparent').innerHeight();
            $('.cr-breadcrumb-area').css('padding-top', transparentHeaderHeight + 'px');
        }
    }



    /* Portfolio Load More */
    function portfolioLoadMore() {

        var portfolioGrid = $('.portfolios-loadmore-active');
        var portfolioSingleItem = '.portfolio-single-item';

        var portfolioInitialItems = portfolioGrid.data('portfolio-show');
        var portfolioNextItems = portfolioGrid.data('portfolio-load');
        var portfolioLoadMoreBtn = $('.portfolio-loadmore-button');

        /*-- Function that Show items when page is loaded --*/
        function portfolioShowNextItems(portfolioPagination) {
            var portfolioItemsMax = $('.portfolio-single-item.hidden').length;
            var portfoliotemsCount = 0;

            $('.portfolio-single-item.hidden').each(function () {
                if (portfoliotemsCount < portfolioPagination) {
                    $(this).removeClass('hidden');
                    portfoliotemsCount++;
                }
            });

            if (portfoliotemsCount >= portfolioItemsMax) {
                portfolioLoadMoreBtn.hide();
            }

        }

        /*-- Function that hides items when page is loaded --*/
        function portfolioHideItems(portfolioPagination) {
            var portfolioItemsMax = $(portfolioSingleItem).length;
            var portfoliotemsCount = 0;

            $(portfolioSingleItem).each(function () {
                if (portfoliotemsCount >= portfolioPagination) {
                    $(this).addClass('hidden');
                }
                portfoliotemsCount++;
            });

            if (portfoliotemsCount < portfolioItemsMax || portfolioInitialItems >= portfolioItemsMax) {
                portfolioLoadMoreBtn.hide();
            }

        }

        /*-- Function that Load items when Button is Click --*/
        portfolioLoadMoreBtn.on('click', function (e) {
            e.preventDefault();
            portfolioShowNextItems(portfolioNextItems);
        });

        portfolioHideItems(portfolioInitialItems);

    }
    portfolioLoadMore();



})(jQuery);