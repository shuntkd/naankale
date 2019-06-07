function autocomp(){
    $('#freeword').autocomplete ({
            /**プルダウンリスト */
            source:list
        });
    };
    

    $(window).load(function(){
            autocomp();
        });