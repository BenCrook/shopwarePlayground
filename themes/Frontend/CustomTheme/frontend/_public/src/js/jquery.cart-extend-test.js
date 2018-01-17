;(function($, window) {
    'use strict';

    $.overridePlugin('swCollapseCart', {
        /**
         * You can override the defaults here
         *
         * Currently commented out due to the below:
         * -- I'm not sure if you need to paste in all the parent defaults to retain them? --
         * -- Maybe there is a way to pull them in? --
         * -- If there is no way to pull them in we can use the me.setOption(optionName, newValue) function  --
         * -- For an example of this see the overrideDisplayModeDefault function below --
         */
        // defaults: {},

        /**
         * Example on how to extend a function.
         *
         * This will override the parent ('swCollapseCart') init function,
         * we then call this.superclass.init.apply(this, arguments) to call the
         * parent init function's content
         *
         * Uses `var me = this` to protect the scope and to be consistent with core and jquery-plugin-base
         */
        init: function() {
            var me = this;
            this.superclass.init.apply(me, arguments);

            this.overrideDisplayModeDefault();
            console.log(me);
            console.log('Initialised');
        },

        /**
         * This overrides the displayMode default from the parent plugin.
         * Note this does not change any functionality as the default is overridden by a data attribute
         * (data-displaymode) set on the element itself.
         */
        overrideDisplayModeDefault: function() {
            this.setOption('displayMode', 'collapsible');
        }
    });
})(jQuery, window);