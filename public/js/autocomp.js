function autocomp(){
    $('#freeword').autocomplete ({
            /**プルダウンリスト */
            source:list,
            select: function(event, ui){
                document.searchForm.submit();
 
            }
        });
    };
    

    $(window).load(function(){
            autocomp();
        });