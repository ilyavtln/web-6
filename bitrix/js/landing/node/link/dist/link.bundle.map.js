{"version":3,"file":"link.bundle.map.js","names":["this","BX","Landing","exports","landing_node","main_core","trim","Utils","isPlainObject","isString","textToPlaceholders","create","escapeText","decodeDataValue","Link","Node","constructor","options","super","type","isGrouped","Event","bind","node","onClick","isAllowInlineEdit","Dom","attr","Loc","getMessage","onChange","Runtime","debounce","onContentUpdate","History","getInstance","push","getField","setValue","getValue","isMenuMode","manifest","menuMode","event","preventDefault","stopPropagation","UI","Button","ColorAction","hideAll","Panel","StylePanel","isShown","show","data","preventSave","preventHistory","startValue","containsImage","field","hrefInput","text","includes","getPlaceholderData","href","then","placeholdersData","innerHTML","replace","name","catch","containsHtml","skipContent","setAttrValue","target","attrs","hasOwn","firstElementChild","tagName","value","getAttribute","startsWith","preventAdjustValue","html","allowedTypes","Field","LinkUrl","TYPE_BLOCK","TYPE_PAGE","TYPE_CRM_FORM","TYPE_CRM_PHONE","Main","params","TYPE_STORE","TYPE_CATALOG","features","TYPE_DISK_FILE","title","selector","content","siteId","site_id","landingId","id","makeDisplayedHrefValue","setHrefTypeSwitcherValue","getHrefStringType","removeHrefTypeFromHrefString"],"sources":["link.bundle.js"],"mappings":"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"}