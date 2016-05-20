LarakitJs.initSelector('.js-bootstrap-switch',
    function () {
        var elem = $(this);
        if(elem.closest('.repeatPrototype').length){
            return false;
        }
        elem
            .bootstrapSwitch({
                on: elem.attr('data-on-label'),
                off: elem.attr('data-off-label'),
                onClass: elem.attr('data-on-class'),
                offClass: elem.attr('data-off-class'),
                size: elem.attr('data-tb-size')
            })
    }
);