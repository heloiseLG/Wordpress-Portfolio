( function(wp){
    var registerBlockType = wp.blocks.registerBlockType;

    var el = wp.element.createElement;

    var __ = wp.il18n.__;

    registerBlockType('firsttheme/hero',{
        title: 'Slider',
        icon: 'hammer',
        category: 'design',
        supports: {
            html: false,
        },

        edit: function(props) {
            return el(
                'p',
                {className: props.className},
                __('Hello testetst', 'firsttheme')
            );
        },

        save: function() {
            return el(
                'p',
                {},
                __('helo teste', 'firsttheme')
            );
        }
    });
})(
    window.wp
);