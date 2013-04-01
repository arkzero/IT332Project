$( function($) {
    $(document).ready(function() {
        var integration = true, security = false, speed = false;

        SelectTab('integration');

        $('#integration').click(function() {
            if (!integration) {
                SelectTab('integration');
                integration = true;
                if(security){
                    DeselectTab('security');
                    security = false;
                }else if (speed){
                    DeselectTab('speed');
                    speed = false;
                }
            }
        });

        $('#security').click(function() {
            if(!security){
                SelectTab('security');
                security = true;
                if(integration){
                    DeselectTab('integration');
                    integration = false;
                }else if (speed){
                    DeselectTab('speed');
                    speed = false;
                }
            }
        });

        $('#speed').click(function() {
            if(!speed){
                SelectTab('speed');
                speed = true;
                if(integration){
                    DeselectTab('integration');
                    integration = false;
                }else if(security){
                    DeselectTab('security');
                    security = false;
                }
            }
        });

        function SelectTab(name) {
            $('#' + name).addClass('selected');
            $('#' + name).animate({
                height : '+=30px'
            }, 500);

            $('#' + name + ' img').animate({
                marginTop : '+=30px'
            }, 500);
            
            $('#'+name+'Banner').animate({
                opacity: '1'
            }, 500);
        }

        function DeselectTab(name) {
            $('#' + name).removeClass('selected');
            $('#' + name).animate({
                height : '-=30px'
            }, 500);

            $('#' + name + ' img').animate({
                marginTop : '-=30px'
            }, 500);
            
            $('#'+name+'Banner').animate({
                opacity: '0'
            },500 );
        }

    });
}(jQuery));
