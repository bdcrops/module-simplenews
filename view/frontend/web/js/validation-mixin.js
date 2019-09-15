define(function () {
    'use strict';

    var extension = {
        isValid: function () {
            return true;
        }
    };

    return function (target) {
        return target.extend(extension);
    };
});
