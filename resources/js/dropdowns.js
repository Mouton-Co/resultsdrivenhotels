export function dropdowns() {
    $('#book-now-dropdown').on('click', function (e) {
        if ($('#book-now-dropdown-options').attr('aria-hidden') === 'true') {
            let top = openTop('book-now-dropdown') ? '-257.5px' : '56.5px';
            $(this).removeClass('border-offlightgrey').addClass('border-gold');
            $('#book-now-dropdown-options').css('top', top);
            $('#book-now-dropdown-options').attr('aria-hidden', 'false');
            $('#book-now-dropdown-options').removeClass('hidden').addClass('flex');
        } else {
            $(this).removeClass('border-gold').addClass('border-offlightgrey');
            $('#book-now-dropdown-options').attr('aria-hidden', 'true');
            $('#book-now-dropdown-options').removeClass('flex').addClass('hidden');
        }
    });

    $('#book-now-dropdown-options').on('click', function (e) {

        let options = [
            { name: 'Hotel Krige', url: 'https://book.nightsbridge.com/31851' },
            { name: '38 on Westcliff', url: 'https://book.nightsbridge.com/31529' },
            { name: 'The Manhattan on Coral', url: 'https://book.nightsbridge.com/33937' },
            { name: 'The Franschhoek Beer Company', url: 'https://franschhoekbeerco.co.za/store/' },
            { name: 'Franks Corner', url: 'https://www.dineplan.com/restaurants/franks-corner-bar-and-grill' },
            { name: 'Franschhoek Homestead & Cottages', url: 'https://book.nightsbridge.com/35766?nbid=369' }
        ];

        $(this).removeClass('border-gold').addClass('border-offlightgrey');
        $('#book-now-dropdown-options').attr('aria-hidden', 'true');
        $('#book-now-dropdown-options').removeClass('flex').addClass('hidden');

        for (const option of options) {
            console.log(e.target.innerHTML.trim().replace(/&amp;/g, '&'));
            console.log(option.name);
            if (e.target.innerHTML.trim().replace(/&amp;/g, '&') == option.name) {
                $('#book-now-dropdown-selected').text(option.name);
                $('#book-now-button').attr('href', option.url);
                break;
            }
        }
    });

    $('#brewery-book-now-dropdown').on('click', function (e) {
        if ($('#brewery-book-now-dropdown-options').attr('aria-hidden') === 'true') {
            let top = openTop('brewery-book-now-dropdown') ? '-97.5px' : '56.5px';
            $(this).removeClass('border-offlightgrey').addClass('border-gold');
            $('#brewery-book-now-dropdown-options').css('top', top);
            $('#brewery-book-now-dropdown-options').attr('aria-hidden', 'false');
            $('#brewery-book-now-dropdown-options').removeClass('hidden').addClass('flex');
        } else {
            $(this).removeClass('border-gold').addClass('border-offlightgrey');
            $('#brewery-book-now-dropdown-options').attr('aria-hidden', 'true');
            $('#brewery-book-now-dropdown-options').removeClass('flex').addClass('hidden');
        }
    });

    $('#brewery-book-now-dropdown-options').on('click', function (e) {
        let options = [
            { name: 'The Franschhoek Beer Company', url: 'https://franschhoekbeerco.co.za/store/' },
            { name: 'Franks Corner', url: 'https://www.dineplan.com/restaurants/franks-corner-bar-and-grill' }
        ];

        $(this).removeClass('border-gold').addClass('border-offlightgrey');
        $('#brewery-book-now-dropdown-options').attr('aria-hidden', 'true');
        $('#brewery-book-now-dropdown-options').removeClass('flex').addClass('hidden');

        for (const option of options) {
            if (e.target.innerHTML.trim() == option.name) {
                $('#brewery-book-now-dropdown-selected').text(option.name);
                $('#brewery-book-now-button').attr('href', option.url);
                break;
            }
        }
    });

    $('html').on('click', function (e) {

        /* exept elements with class someClass */
        if (
            $(e.target).hasClass('book-now-dropdown') ||
            $(e.target).hasClass('brewery-book-now-dropdown')
        ) {
            return;
        }

        /* but be carefull the contained links! to be clickable */
        if ($(e.target).is('a')) {
            return;
        }

        /* here you can code what to do when click on html */
        if ($('#book-now-dropdown-options').attr('aria-hidden') === 'false') {
            $('#book-now-dropdown').removeClass('border-gold').addClass('border-offlightgrey');
            $('#book-now-dropdown-options').attr('aria-hidden', 'true');
            $('#book-now-dropdown-options').removeClass('flex').addClass('hidden');
        }
        if ($('#brewery-book-now-dropdown-options').attr('aria-hidden') === 'false') {
            $('#brewery-book-now-dropdown').removeClass('border-gold').addClass('border-offlightgrey');
            $('#brewery-book-now-dropdown-options').attr('aria-hidden', 'true');
            $('#brewery-book-now-dropdown-options').removeClass('flex').addClass('hidden');
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
