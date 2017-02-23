       <div class="ui inverted vertical footer segment">
            <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="three wide column">
                <h4 class="ui inverted header">Lorem</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Lorem</a>
                    <a href="#" class="item">Lorem</a>
                    <a href="#" class="item">Lorem</a>
                    <a href="#" class="item">Lorem</a>
                </div>
                </div>
                <div class="three wide column">
                <h4 class="ui inverted header">Lorem</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Lorem</a>
                    <a href="#" class="item">Lorem</a>
                    <a href="#" class="item">Lorem</a>
                    <a href="#" class="item">Lorem</a>
                </div>
                </div>
                <div class="seven wide column">
                <h4 class="ui inverted header">Lorem</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet magna eget iaculis sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mi nisi, aliquet non viverra eget, hendrerit eleifend enim. Praesent finibus tortor at scelerisque varius. Etiam malesuada eros lobortis neque ullamcorper, quis aliquet arcu ornare.
                </p>
                </div>
            </div>
            </div>
        </div>

        <?php


        ?>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('.ui.dropdown').dropdown();
            });

            $(document)
                .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                    once: false,
                    onBottomPassed: function() {
                        $('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function() {
                        $('.fixed.menu').transition('fade out');
                    }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

                })
            ;
        </script>
    </body>
</html>
