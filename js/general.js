(function() {

    general = {

        addEventListeners: function() {

            // Add Click Listener to the Hamburguer
            u('.hamburger').on('click', function(){
                u(this).toggleClass('is-active');
                
                // Collapse Menu
                var section = document.querySelector('.main-navigation');
                var isOpened = section.getAttribute('data-opened') === 'true';

                if( isOpened ) {

                    general.collapseSection(section);
                    section.setAttribute('data-opened', 'false');

                } else {

                    general.expandSection(section);
                }

            });




            // On Window resize close the nagigation menu
            window.addEventListener('resize', function(){

                // Execute every 10 pixels
                if( window.outerWidth%10 === 0 ) {

                    var section = document.querySelector('#site-navigation--mobile.main-navigation');
                    var isOpened = section.getAttribute('data-opened') === 'true';

                    if( isOpened ) {

                        general.collapseSection(section);
                        section.setAttribute('data-opened', 'false');
                        u('.hamburger').removeClass('is-active');

                    }

                }

            });

        },
        init: function(){

            general.addEventListeners();

        },
        collapseSection: function (element) {
            // get the height of the element's inner content, regardless of its actual size
            var sectionHeight = element.scrollHeight;

            // temporarily disable all css transitions
            var elementTransition = element.style.transition;
            element.style.transition = '';

            // on the next frame (as soon as the previous style change has taken effect),
            // explicitly set the element's height to its current pixel height, so we
            // aren't transitioning out of 'auto'
            requestAnimationFrame(function() {
                element.style.height = sectionHeight + 'px';
                element.style.transition = elementTransition;

                // on the next frame (as soon as the previous style change has taken effect),
                // have the element transition to height: 0
                requestAnimationFrame(function() {
                    element.style.height = 0 + 'px';
                });
            });

            // mark the section as "currently closed"
            element.setAttribute('data-opened', 'false');
        },
        expandSection: function(element) {

            // get the height of the element's inner content, regardless of its actual size
            var sectionHeight = element.scrollHeight;

            // have the element transition to the height of its inner content
            element.style.height = sectionHeight + 'px';

            // when the next css transition finishes (which should be the one we just triggered)
            element.addEventListener('transitionend', function(e) {
                // remove this event listener so it only gets triggered once
                element.removeEventListener('transitionend', arguments.callee);

                // remove "height" from the element's inline styles, so it can return to its initial value
                //element.style.height = null;
            });

            // mark the section as "currently opened"
            element.setAttribute('data-opened', 'true');
        }
        
    };

    // Initialize the general object
    general.init();

})();