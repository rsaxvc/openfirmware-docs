var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/memory/load.php"});mw.loader.register([["site",1493724779,[],"site"],["noscript",1493724779,[],"noscript"],["filepage",1493724779],["user.groups",1493724779,[],"user"],["user",1493724779,[],"user"],["user.cssprefs",
1493724779,[],"private"],["user.defaults",1493724779],["user.options",1493724779,[6],"private"],["user.tokens",1493724779,[],"private"],["mediawiki.language.data",1493724779,[149]],["mediawiki.skinning.elements",1493724779],["mediawiki.skinning.content",1493724779],["mediawiki.skinning.interface",1493724779],["mediawiki.skinning.content.parsoid",1493724779],["mediawiki.skinning.content.externallinks",1493724779],["jquery.accessKeyLabel",1493725055,[25,43]],["jquery.appear",1493724779],["jquery.arrowSteps",1493724779],["jquery.async",1493724779],["jquery.autoEllipsis",1493724779,[37]],["jquery.badge",1493724779,[146]],["jquery.byteLength",1493724779],["jquery.byteLimit",1493724779,[21]],["jquery.checkboxShiftClick",1493724779],["jquery.chosen",1493724779],["jquery.client",1493724779],["jquery.color",1493724779,[27]],["jquery.colorUtil",1493724779],["jquery.confirmable",1493724779,[150]],["jquery.cookie",1493724779],["jquery.expandableField",1493724779],["jquery.farbtastic",1493724779,[
27]],["jquery.footHovzer",1493724779],["jquery.form",1493724779],["jquery.fullscreen",1493724779],["jquery.getAttrs",1493724779],["jquery.hidpi",1493724779],["jquery.highlightText",1493724779,[43]],["jquery.hoverIntent",1493724779],["jquery.localize",1493724779],["jquery.makeCollapsible",1493725056],["jquery.mockjax",1493724779],["jquery.mw-jump",1493724779],["jquery.mwExtension",1493724779],["jquery.placeholder",1493724779],["jquery.qunit",1493724779],["jquery.qunit.completenessTest",1493724779,[45]],["jquery.spinner",1493724779],["jquery.jStorage",1493724779,[91]],["jquery.suggestions",1493724779,[37]],["jquery.tabIndex",1493724779],["jquery.tablesorter",1495041449,[43,151]],["jquery.textSelection",1493724779,[25]],["jquery.throttle-debounce",1493724779],["jquery.validate",1493724779],["jquery.xmldom",1493724779],["jquery.tipsy",1493724779],["jquery.ui.core",1493724779,[],"jquery.ui"],["jquery.ui.accordion",1493724779,[57,76],"jquery.ui"],["jquery.ui.autocomplete",1493724779,[65],
"jquery.ui"],["jquery.ui.button",1493724779,[57,76],"jquery.ui"],["jquery.ui.datepicker",1493724779,[57],"jquery.ui"],["jquery.ui.dialog",1493724779,[60,63,67,69],"jquery.ui"],["jquery.ui.draggable",1493724779,[57,66],"jquery.ui"],["jquery.ui.droppable",1493724779,[63],"jquery.ui"],["jquery.ui.menu",1493724779,[57,67,76],"jquery.ui"],["jquery.ui.mouse",1493724779,[76],"jquery.ui"],["jquery.ui.position",1493724779,[],"jquery.ui"],["jquery.ui.progressbar",1493724779,[57,76],"jquery.ui"],["jquery.ui.resizable",1493724779,[57,66],"jquery.ui"],["jquery.ui.selectable",1493724779,[57,66],"jquery.ui"],["jquery.ui.slider",1493724779,[57,66],"jquery.ui"],["jquery.ui.sortable",1493724779,[57,66],"jquery.ui"],["jquery.ui.spinner",1493724779,[60],"jquery.ui"],["jquery.ui.tabs",1493724779,[57,76],"jquery.ui"],["jquery.ui.tooltip",1493724779,[57,67,76],"jquery.ui"],["jquery.ui.widget",1493724779,[],"jquery.ui"],["jquery.effects.core",1493724779,[],"jquery.ui"],["jquery.effects.blind",1493724779,[77],
"jquery.ui"],["jquery.effects.bounce",1493724779,[77],"jquery.ui"],["jquery.effects.clip",1493724779,[77],"jquery.ui"],["jquery.effects.drop",1493724779,[77],"jquery.ui"],["jquery.effects.explode",1493724779,[77],"jquery.ui"],["jquery.effects.fade",1493724779,[77],"jquery.ui"],["jquery.effects.fold",1493724779,[77],"jquery.ui"],["jquery.effects.highlight",1493724779,[77],"jquery.ui"],["jquery.effects.pulsate",1493724779,[77],"jquery.ui"],["jquery.effects.scale",1493724779,[77],"jquery.ui"],["jquery.effects.shake",1493724779,[77],"jquery.ui"],["jquery.effects.slide",1493724779,[77],"jquery.ui"],["jquery.effects.transfer",1493724779,[77],"jquery.ui"],["json",1493724779,[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment",1493724779],["mediawiki.apihelp",1493724779,[112]],["mediawiki.template",1493724779],["mediawiki.template.mustache",1493724779],["mediawiki.apipretty",1493724779],["mediawiki.api",1493724779,[128]],["mediawiki.api.category",
1493724779,[123,97]],["mediawiki.api.edit",1493724779,[123,97,8]],["mediawiki.api.login",1493724779,[97]],["mediawiki.api.options",1493724779,[97]],["mediawiki.api.parse",1493724779,[97]],["mediawiki.api.watch",1493724779,[97,8]],["mediawiki.content.json",1493724779],["mediawiki.confirmCloseWindow",1493724779],["mediawiki.debug",1493724779,[32,56]],["mediawiki.debug.init",1493724779,[106]],["mediawiki.feedback",1493724779,[123,116,204]],["mediawiki.filewarning",1493724779,[204]],["mediawiki.helplink",1493724779],["mediawiki.hidpi",1493724779,[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist",1493724779,[25]],["mediawiki.htmlform",1493740210,[22,43]],["mediawiki.icon",1493724779],["mediawiki.inspect",1493724779,[21,91]],["mediawiki.messagePoster",1493724779,[97,203]],["mediawiki.messagePoster.wikitext",1493724779,[99,116]],["mediawiki.notification",1493724779,[157]],["mediawiki.notify",1493724779],["mediawiki.pager.tablePager",1493724779],["mediawiki.searchSuggest",
1493725056,[35,44,49,97]],["mediawiki.sectionAnchor",1493724779],["mediawiki.Title",1493724779,[21,128]],["mediawiki.toc",1493725843,[29]],["mediawiki.Uri",1493724779,[128]],["mediawiki.user",1493724779,[29,97,7,8]],["mediawiki.userSuggest",1493724779,[49,97]],["mediawiki.util",1493724779,[15,119]],["mediawiki.cookie",1493724779,[29]],["mediawiki.toolbar",1493724779],["mediawiki.action.edit",1493724779,[22,52,132]],["mediawiki.action.edit.styles",1493724779],["mediawiki.action.edit.collapsibleFooter",1493724779,[29,40,114]],["mediawiki.action.edit.preview",1493724779,[33,47,52,137,97,150]],["mediawiki.action.edit.stash",1493724779,[35,97]],["mediawiki.action.history",1493724779,[],"mediawiki.action.history"],["mediawiki.action.history.diff",1493724779,[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit",1493724779,[157,7]],["mediawiki.action.view.metadata",1493744888],["mediawiki.action.view.categoryPage.styles",1493724779],["mediawiki.action.view.postEdit",1493725056,[
129,150,94]],["mediawiki.action.view.redirect",1493724779,[25]],["mediawiki.action.view.redirectPage",1493724779],["mediawiki.action.view.rightClickEdit",1493724779],["mediawiki.action.edit.editWarning",1493724779,[52,105,150,7]],["mediawiki.language",1493725056,[147,9]],["mediawiki.cldr",1493724779,[148]],["mediawiki.libs.pluralruleparser",1493724779],["mediawiki.language.init",1493724779],["mediawiki.jqueryMsg",1493724779,[146,128]],["mediawiki.language.months",1495041449,[146]],["mediawiki.language.names",1493724779,[149]],["mediawiki.language.specialCharacters",1493724779,[146]],["mediawiki.libs.jpegmeta",1493724779],["mediawiki.page.gallery",1493724779,[53]],["mediawiki.page.ready",1493724779,[15,23,40,42,44]],["mediawiki.page.startup",1493724779,[128]],["mediawiki.page.patrol.ajax",1493724779,[47,123,97,157,8]],["mediawiki.page.watch.ajax",1493724779,[103,157]],["mediawiki.page.image.pagination",1493724779,[47,125]],["mediawiki.special",1493724779],["mediawiki.special.block",
1493724779,[128]],["mediawiki.special.changeemail",1493724779,[128]],["mediawiki.special.changeslist",1493724779],["mediawiki.special.changeslist.legend",1493724779],["mediawiki.special.changeslist.legend.js",1493724779,[29,40]],["mediawiki.special.changeslist.enhanced",1493724779],["mediawiki.special.edittags",1493724779,[24]],["mediawiki.special.edittags.styles",1493724779],["mediawiki.special.import",1493724779],["mediawiki.special.movePage",1493724779,[22]],["mediawiki.special.pageLanguage",1493724779],["mediawiki.special.pagesWithProp",1493724779],["mediawiki.special.preferences",1493724779,[105,146]],["mediawiki.special.recentchanges",1493724779,[161]],["mediawiki.special.search",1493744195],["mediawiki.special.undelete",1493724779],["mediawiki.special.upload",1493724779,[47,123,97,105,150,154,7,94]],["mediawiki.special.userlogin.common.styles",1493724779],["mediawiki.special.userlogin.signup.styles",1493724779],["mediawiki.special.userlogin.login.styles",1493724779],[
"mediawiki.special.userlogin.common.js",1493739472],["mediawiki.special.userlogin.signup.js",1493739472,[53,97,150]],["mediawiki.special.unwatchedPages",1493724779,[123,103]],["mediawiki.special.javaScriptTest",1493724779,[125]],["mediawiki.special.version",1493724779],["mediawiki.legacy.config",1493724779],["mediawiki.legacy.ajax",1493724779,[193]],["mediawiki.legacy.commonPrint",1493724779],["mediawiki.legacy.protect",1493724779,[22]],["mediawiki.legacy.shared",1493724779],["mediawiki.legacy.oldshared",1493724779],["mediawiki.legacy.wikibits",1493724779,[128]],["mediawiki.ui",1493724779],["mediawiki.ui.checkbox",1493724779],["mediawiki.ui.radio",1493724779],["mediawiki.ui.anchor",1493724779],["mediawiki.ui.button",1493724779],["mediawiki.ui.input",1493724779],["mediawiki.ui.icon",1493724779],["mediawiki.ui.text",1493724779],["es5-shim",1493724779,[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["oojs",1493724779,[202,91]],[
"oojs-ui",1493724779,[203,205]],["oojs-ui.styles",1493724779],["skins.vector.styles",1493724779],["skins.vector.js",1493724779,[50,53]],["skins.monobook.styles",1493724779],["skins.modern",1493724779],["skins.cologneblue",1493724779],["jquery.wikiEditor",1493724779,[52],"ext.wikiEditor"],["jquery.wikiEditor.dialogs",1493724779,[50,62,216],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config",1493724779,[49,212,123,97,150],"ext.wikiEditor"],["jquery.wikiEditor.preview",1493724779,[211,97],"ext.wikiEditor"],["jquery.wikiEditor.publish",1493724779,[212],"ext.wikiEditor"],["jquery.wikiEditor.toolbar",1493724779,[18,29,211,218],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config",1493724779,[216,153],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n",1493724779,[],"ext.wikiEditor"],["ext.wikiEditor",1493724779,[211],"ext.wikiEditor"],["ext.wikiEditor.dialogs",1493724779,[223,213],"ext.wikiEditor"],["ext.wikiEditor.preview",1493724779,[219,214],"ext.wikiEditor"],["ext.wikiEditor.publish",
1493724779,[219,215],"ext.wikiEditor"],["ext.wikiEditor.toolbar",1493724779,[219,217],"ext.wikiEditor"],["ext.wikiEditor.toolbar.styles",1493724779,[],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig",1493724779,[],"ext.wikiEditor"],["ext.cite",1493724779],["ext.rtlcite",1493724779],["ext.categoryTree",1493745431],["ext.categoryTree.css",1493724779]]);mw.config.set({"wgLoadScript":"/memory/load.php","debug":false,"skin":"vector","stylepath":"/memory/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/memory/$1","wgScriptPath":"/memory","wgScriptExtension":".php","wgScript":"/memory/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":
"http://www.macfreek.nl","wgServerName":"www.macfreek.nl","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":true,"wgVersion":"1.25.3","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Exterior Memory","5":"Exterior Memory talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Config","101":"Config talk","102":"Opinion","103":"Opinion talk","104":"Code","105":"Code talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"exterior_memory":4,"exterior_memory_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"config":100,"config_talk":101,"opinion":102,"opinion_talk":103,"code":104,
"code_talk":105,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0,100,102],"wgSiteName":"Exterior Memory","wgDBname":"memorywiki","wgAvailableSkins":{"vector":"Vector","monobook":"MonoBook","modern":"Modern","cologneblue":"CologneBlue","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/memory/extensions","wgCookiePrefix":"memorywiki","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":512,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});};if(isCompatible()){document.write(
"\u003Cscript src=\"/memory/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20151025T223423Z\"\u003E\u003C/script\u003E");};
/* cache key: memorywiki:resourceloader:filter:minify-js:7:94ba83febf950c07f0c60965b4af286f */