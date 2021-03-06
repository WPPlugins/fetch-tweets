<?php 
/**
	Admin Page Framework v3.8.11b02 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/fetch-tweets>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class FetchTweets_AdminPageFramework_Form_View___Script_OptionStorage extends FetchTweets_AdminPageFramework_Form_View___Script_Base {
    static public function getScript() {
        return <<<JAVASCRIPTS
(function ( $ ) {
            
    $.fn.aFetchTweets_AdminPageFrameworkInputOptions = {}; 
                            
    $.fn.storeFetchTweets_AdminPageFrameworkInputOptions = function( sID, vOptions ) {
        var sID = sID.replace( /__\d+_/, '___' );	// remove the section index. The g modifier is not used so it will replace only the first occurrence.
        $.fn.aFetchTweets_AdminPageFrameworkInputOptions[ sID ] = vOptions;
    };	
    $.fn.getFetchTweets_AdminPageFrameworkInputOptions = function( sID ) {
        var sID = sID.replace( /__\d+_/, '___' ); // remove the section index
        return ( 'undefined' === typeof $.fn.aFetchTweets_AdminPageFrameworkInputOptions[ sID ] )
            ? null
            : $.fn.aFetchTweets_AdminPageFrameworkInputOptions[ sID ];
    }

}( jQuery ));
JAVASCRIPTS;
        
    }
}
