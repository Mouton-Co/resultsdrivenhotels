export function navbar() {
    $('#accomodation-link')
        .on('mouseover', function () {
            $('#accomodation-dropdown').css('height', '127px');
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
}