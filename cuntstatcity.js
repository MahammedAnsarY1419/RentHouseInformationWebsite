$(function() {
    var countryOptions;
    var stateOptions;
    var districtOptions;
    $.getJSON('countries.json', function(result) {
        $.each(result, function(i, country) {
            // <option value='countrycode' name="countryname">select country</option>
            countryOptions += "<option value='" +
                country.code +
                "'>" +
                country.name +
                "</option>";
        });
        $('#country').html(countryOptions);
    });
    $("#country").change(function() {
        if ($(this).val() == "IN") {
            $.getJSON('indianStates.json', function(result) {
                $.each(result, function(stateCode, stateName) {
                    // <option value='stateCode' name="statename">stateName</option>
                    stateOptions += "<option value='" +
                        stateCode +
                        "'>" +
                        stateName +
                        "</option>";
                });
                $('#state').html(stateOptions);
            });
        }

    });
    $("#state").change(function() {
        if ($(this).val() == "KA") {
            $.getJSON('karnatakaDistrict.json', function(result) {
                $.each(result, function(i, district) {
                    //<option value='districtName' name="districtname">districtName</option>
                    districtOptions += "<option value='" +
                        district.name +
                        "'>" +
                        district.name +
                        "</option>";
                });
                $('#district').html(districtOptions);
            });
        }

    });

});