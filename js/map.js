//get current location of user then store to session
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.

var map;

var lat = 0;
var lon = 0;

if (nokia.maps.positioning.Manager) {
    var positioning = new nokia.maps.positioning.Manager()
    // Get the current position. If available, the first callback is run,
    // otherwise the second.
    nokia.Settings.set("app_id", "wScDqULZdhwRKBl6uT56");
    nokia.Settings.set("app_code", "OHzXFtZctm12TKOqE5i1Bg");

    positioning.getCurrentPosition(
        function (position) {
            var coords = position.coords;
            lat = coords.latitude;
            lon = coords.longitude;
        },
        // Handle errors (display message):
        function (error) {
            var errorMsg = "Location could not be determined: ";

            // Determine what caused the error and show error message:
            if (error.code == 1)
                errorMsg += "PERMISSION_DENIED";
            else if (error.code == 2)
                errorMsg += "POSITION_UNAVAILABLE";
            else if (error.code == 3)
                errorMsg += "TIMEOUT";
            else errorMsg += "UNKNOWN_ERROR";

            alert(errorMsg);
        }
    );
}