export function navbar() {
    // desktop
    $('#accomodation-link')
        .on('mouseover', function () {
            $('#accomodation-dropdown').css('height', '130px');
        }
        ).on('mouseout', function () {
            $('#accomodation-dropdown').css('height', '0px');
        });
    $('#brewery-link')
        .on('mouseover', function () {
            $('#brewery-dropdown').css('height', '94px');
        }
        ).on('mouseout', function () {
            $('#brewery-dropdown').css('height', '0px');
        });
    $('#experiences-link')
        .on('mouseover', function () {
            $('#experiences-dropdown').css('height', '259px');
        }
        ).on('mouseout', function () {
            $('#experiences-dropdown').css('height', '0px');
        });

    // mobile
    $('#accomodation-link-mobile').on('click', function () {
        if ($('#accomodation-dropdown-mobile').attr('aria-hidden') === 'true') {
            $('#accomodation-dropdown-mobile').attr('aria-hidden', 'false');
            $('#accomodation-dropdown-mobile').css('height', '166px');
            $(this).removeClass('text-[#f5f5f5]').addClass('text-gold');
        } else {
            $('#accomodation-dropdown-mobile').attr('aria-hidden', 'true');
            $('#accomodation-dropdown-mobile').css('height', '0px');
            $(this).removeClass('text-gold').addClass('text-[#f5f5f5]');
        }
    });
    $('#brewery-link-mobile').on('click', function () {
        if ($('#brewery-dropdown-mobile').attr('aria-hidden') === 'true') {
            $('#brewery-dropdown-mobile').attr('aria-hidden', 'false');
            $('#brewery-dropdown-mobile').css('height', '108px');
            $(this).removeClass('text-[#f5f5f5]').addClass('text-gold');
        } else {
            $('#brewery-dropdown-mobile').attr('aria-hidden', 'true');
            $('#brewery-dropdown-mobile').css('height', '0px');
            $(this).removeClass('text-gold').addClass('text-[#f5f5f5]');
        }
    });
    $('#experiences-link-mobile').on('click', function () {
        if ($('#experiences-dropdown-mobile').attr('aria-hidden') === 'true') {
            $('#experiences-dropdown-mobile').attr('aria-hidden', 'false');
            $('#experiences-dropdown-mobile').css('height', '378px');
            $(this).removeClass('text-[#f5f5f5]').addClass('text-gold');
        } else {
            $('#experiences-dropdown-mobile').attr('aria-hidden', 'true');
            $('#experiences-dropdown-mobile').css('height', '0px');
            $(this).removeClass('text-gold').addClass('text-[#f5f5f5]');
        }
    });

    // mobile menu
    $('#mobile-menu-open').on('click', function () {
        $('#mobile-menu').css('width', '354px');
        $('#curtain').show();
    });
    $('#mobile-menu-close, #curtain').on('click', function () {
        $('#mobile-menu').css('width', '0px');
        $('#curtain').hide();
    });

}