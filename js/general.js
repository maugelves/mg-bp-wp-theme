(function() {

    general = {

        addEventListeners: function() {

            // Add Click Listener to the Hamburguer
            u('.hamburger').on('click', function(){
                u(this).toggleClass('is-active');
                u('.main-navigation').toggleClass('main-navigation--active');
            })

        },
        init: function(){

            general.addEventListeners();

        }
        
    };

    // Initialize the general object
    general.init();

})();