export function dropdowns() {
    $('#book-now-dropdown').on('click', function (e) {
        if ($('#book-now-dropdown-options').attr('aria-hidden') === 'true') {
            let top = openTop('book-now-dropdown') ? '-217.5px' : '56.5px';
            $(this).removeClass('border-[#555555]').addClass('border-gold');
            $('#book-now-dropdown-options').css('top', top);
            $('#book-now-dropdown-options').attr('aria-hidden', 'false');
            $('#book-now-dropdown-options').removeClass('hidden').addClass('flex');
        } else {
            $(this).removeClass('border-gold').addClass('border-[#555555]');
            $('#book-now-dropdown-options').attr('aria-hidden', 'true');
            $('#book-now-dropdown-options').removeClass('flex').addClass('hidden');
        }
    });

    $('#book-now-dropdown-options').on('click', function (e) {

        let options = [
            { name: 'Hotel Krige', url: 'https://book.nightsbridge.com/31851' },
            { name: '38 on Westcliff', url: 'https://book.nightsbridge.com/31529' },
            { name: 'The Manhattan on Coral', url: 'https://book.nightsbridge.com/33937' },
            { name: 'The Franchoek Beer Company', url: 'https://franschhoekbeerco.co.za/store/' },
            { name: 'Franks Corner', url: 'https://www.dineplan.com/restaurants/franks-corner-bar-and-grill' }
        ];

        $(this).removeClass('border-gold').addClass('border-[#555555]');
        $('#book-now-dropdown-options').attr('aria-hidden', 'true');
        $('#book-now-dropdown-options').removeClass('flex').addClass('hidden');

        for (const option of options) {
            if (e.target.innerHTML.trim() == option.name) {
                $('#book-now-dropdown-selected').text(option.name);
                $('#book-now-button').attr('href', option.url);
                break;
            }
        }
    });

    $('html').on('click', function (e) {

        /* exept elements with class someClass */
        if ($(e.target).hasClass('book-now-dropdown')) {
            return;
        }

        /* but be carefull the contained links! to be clickable */
        if ($(e.target).is('a')) {
            return;
        }

        /* here you can code what to do when click on html */
        if ($('#book-now-dropdown-options').attr('aria-hidden') === 'false') {
            $('#book-now-dropdown').removeClass('border-gold').addClass('border-[#555555]');
            $('#book-now-dropdown-options').attr('aria-hidden', 'true');
            $('#book-now-dropdown-options').removeClass('flex').addClass('hidden');
        }

    });

    function openTop(id) {
        let dropdownFromTop = document.getElementById(id);

        if (dropdownFromTop == undefined || dropdownFromTop == null) {
            return true;
        }

        return dropdownFromTop.getBoundingClientRect().top > $(window).height() / 2;
    }
}

dropdowns();
