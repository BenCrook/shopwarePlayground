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
         * we then call this.superclass.init.apply(this, arguments) to call the parent init function's content
         *
         * Uses `var me = this` to protect the scope and to be consistent with core and jquery-plugin-base
         */
        init: function() {
            var me = this;
            me.superclass.init.apply(me, arguments);

            me.overrideDisplayModeDefault();
        },

        /**
         * This overrides the displayMode default from the parent plugin.
         *
         * Note this does not change any functionality as the default is overridden by a data attribute
         * (data-displaymode) set on the element itself. If the data-attribute is removed from the element
         * this option will take effect. It is done this way so it can be wrapped in an if
         * statement to take the admin setting value.
         * See themes/Frontend/Responsive/frontend/_public/src/js/jquery.plugin-base.js:301 for info
         */
        overrideDisplayModeDefault: function() {
            var me = this;

            me.setOption('displayMode', 'collapsible');
        },

        /**
         * Extends the registerEvents function so we can add our own subscription
         */
        registerEvents: function() {
            var me = this;

            // Fires registerEvents from the parent plugin
            me.superclass.registerEvents.apply(me, arguments);

            // Subscribe to the add to bag event, fires me.anotherOnArticleAdded when the event is fired
            // - Why do we need to use proxy?
            // - Look into getEventName and how it works
            $.subscribe(me.getEventName('plugin/swAddArticle/onAddArticle'), $.proxy(me.anotherOnArticleAdded, me));
        },

        // Example function that fires when a product has been added to bag
        anotherOnArticleAdded: function() {
            console.log('Product has been added to bag!');
        }
    });
})(jQuery, window);