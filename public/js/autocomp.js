function autocomp(){
    $('#freeword').autocomplete ({
            /**プルダウンリスト */
            source:list,
            select: function(event, ui){
                $("#searchform").submit();
            }
        });
    };
    

    $(window).load(function(){
            autocomp();
        });