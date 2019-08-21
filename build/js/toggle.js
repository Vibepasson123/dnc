

    jQuery(".glyphicon-cog").click(function() {
            var $rota = $('.glyphicon-cog'), degree = 0, timer, enabled;
            var rotate = function() {
                timer = setInterval(function() {
                    ++degree;
                    $rota.css({
                      transform: 'rotate(' + degree + 'deg)'
                    });
                },5);
            };
            $rota.on('click', function(){
               enabled = !enabled;
               enabled ? rotate() : clearInterval(timer);
            });
        });
