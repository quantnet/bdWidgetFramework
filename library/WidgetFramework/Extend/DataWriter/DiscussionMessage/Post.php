<?php
class WidgetFramework_Extend_DataWriter_DiscussionMessage_Post extends XFCP_WidgetFramework_Extend_DataWriter_DiscussionMessage_Post {
	protected function _postSaveAfterTransaction() {
		parent::_postSaveAfterTransaction();
		
		if  (!$this->isDiscussionFirstMessage()) {
			WidgetFramework_Core::clearCachedWidgetByClass('WidgetFramework_WidgetRenderer_Threads');
			WidgetFramework_Core::clearCachedWidgetByClass('WidgetFramework_WidgetRenderer_Poll');
		}
	}
	
	protected function _messagePostDelete() {
		parent::_messagePostDelete();
		
		WidgetFramework_Core::clearCachedWidgetByClass('WidgetFramework_WidgetRenderer_Threads');
		WidgetFramework_Core::clearCachedWidgetByClass('WidgetFramework_WidgetRenderer_Poll');
	}
}