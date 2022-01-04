<?php

class LanguageLoader
{
	function initialize() {
		$ci =& get_instance();
		$ci->load->helper('language');
		$ci->load->library('session');
		$ci->load->helper('url');

		$site_lang = $ci->session->userdata('site_lang');
		if ($site_lang) {
			$ci->lang->load('base',$ci->session->userdata('site_lang'));
		} else {
			$ci->lang->load('base','english');
		}
	}
}
