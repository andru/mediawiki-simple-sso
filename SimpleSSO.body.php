<?php
class SimpleSSO{
	public static function loginToEdit($editpage){
	    global $wgUser, $sso_redirect_on_edit;
	    if($wgUser->isAllowed( 'edit' )){
	        return true;
	    }
	    if(!$sso_redirect_on_edit){
	    		return true;
	    }
	    //user doesn't have permission, so we redirect to login
	    SimpleSSO_AuthPlugin::getInstance()->redirectToLogin($editpage->getArticle());
	}
}