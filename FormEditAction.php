<?php
class SimpleSSO_FormEditAction extends SFFormEditAction{
    public function show( ){
        global $wgUser, $sso_redirect_on_edit;
        
        if($wgUser->isAllowed( 'edit' ) || !$sso_redirect_on_edit){
            self::displayForm($this, $this->page);
            return;
        }
        //user doesn't have permission, so we redirect
        SimpleSSO::getInstance()->redirectToLogin($this->page);
    }   
}