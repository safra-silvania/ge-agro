/*

this.countLoading = 0;
function loading(flag, element = "#planning-table") {
    var $el = $(element);
    if (flag === true) {
        this.countLoading += 1;
        $el.trigger("loading-overlay:show");
    } else {
        this.countLoading -= 1;
        $el.trigger("loading-overlay:hide");
    }
}

function setMasks() {
    $(".decimal").mask("000.000.000,00", { reverse: true });
    $(".short-integer").mask("000");
    $(".cpf").mask("000.000.000-00");

    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, "").length === 11
                ? "(00) 00000-0000"
                : "(00) 0000-00009";
        },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            },
        };

    $(".phone").mask(SPMaskBehavior, spOptions);
}

$(document).ready(function () {
    setMasks();
});

*/
