<?php


class Config {
//TODO:: fill in config data
//TODO:: test everything
	public const _GOOGLE_SITE_VERIFICATION_ = '<redacted>.html';
	public const _SEO_ = true;
	public const _DEVELOPMENT_ = true;
	public const _HTTPS_ = false;
	public const _HTTP_LINK_ = 'http';
	public const _LINK_ = self::_HTTP_LINK_.'://socksy.zzz.com.ua/';
	public const _NAME_ = 'SOCKSY ЛЬОН';
	public const _TITLE_ = self::_NAME_;
	public const _KEYWORDS_ = self::_NAME_ . ' - шкарпетки та текстиль';
	public const _DESCRIPTION_ = 'шкарпетки, текстиль, ' . self::_AUTHOR_;
	public const _AUTHOR_ = 'Max Patiiuk';
	public const _EMAIL_ = 'info@socksy.zzz.com.ua';
	public const _REAL_EMAIL_ = 'redacted@pati.uk';
	public const _ADMIN_EMAIL_ = 'redacted@patii.uk';
	public const _BRAND_COLOR_ = '#ffaa11';
	public const _BACKGROUND_COLOR_ = '#ffffff';
	public const _LANGUAGE_ = 'uk';
	public const _SVG_ = [
		'instagram' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="393" cy="118" r="17"/><path d="M352,0H160C71,0,0,71,0,160v192c0,88,71,160,160,160h192c88,0,160-71,160-160V160C512,71,440,0,352,0z M464,352c0,61-50,112-112,112H160c-61,0-112-50-112-112V160C48,98,98,48,160,48h192c61,0,112,50,112,112V352z"/><path d="M256,128c-70,0-128,57-128,128s57,128,128,128s128-57,128-128S326,128,256,128z M256,336c-44,0-80-35-80-80c0-44,35-80,80-80s80,35,80,80C336,300,300,336,256,336z"/></svg>',
		'facebook' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155 155"><path d="M89,155V84h23l3-27H89V39c0-7,2-13,13-13l14-0V1C115,0,106,0,96,0C75,0,61,12,61,36v20H37v27h23v70H89z"/></svg>',
		'youtube' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M490,113c-13-24-28-29-59-30C399,80,322,80,256,80c-66,0-144,0-174,2c-30,1-45,6-59,31C7,138,0,181,0,255C0,255,0,256,0,256c0,0,0,0,0,0v0c0,74,7,117,21,141c14,24,29,29,59,31C112,430,189,432,256,432c66,0,143-1,174-2c30-2,45-6,59-31C504,373,512,330,512,256c0,0,0-0,0-0c0,0,0-0,0-0C512,181,504,138,490,113z M192,352V160l160,96L192,352z"/></svg>',
	];

}