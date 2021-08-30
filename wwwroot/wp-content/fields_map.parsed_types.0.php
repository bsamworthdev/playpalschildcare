<?php return array (
  '' => 
  array (
  ),
  'wp_users' => 
  array (
    'ID' => 
    array (
      'type' => 'primary_id',
    ),
    'display_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_activation_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_email' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_login' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_nicename' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_pass' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_registered' => 
    array (
      'type' => 'date',
    ),
    'user_status' => 
    array (
      'type' => 'int',
    ),
    'user_url' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_usermeta' => 
  array (
    'meta_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'meta_value' => 
    array (
      'type' => 'nvarchar',
    ),
    'umeta_id' => 
    array (
      'type' => 'primary_id',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_terms' => 
  array (
    'name' => 
    array (
      'type' => 'nvarchar',
    ),
    'slug' => 
    array (
      'type' => 'nvarchar',
    ),
    'term_group' => 
    array (
      'type' => 'int',
    ),
    'term_id' => 
    array (
      'type' => 'primary_id',
    ),
  ),
  'wp_term_taxonomy' => 
  array (
    'count' => 
    array (
      'type' => 'int',
    ),
    'description' => 
    array (
      'type' => 'nvarchar',
    ),
    'parent' => 
    array (
      'type' => 'int',
    ),
    'taxonomy' => 
    array (
      'type' => 'nvarchar',
    ),
    'term_id' => 
    array (
      'type' => 'int',
    ),
    'term_taxonomy_id' => 
    array (
      'type' => 'primary_id',
    ),
  ),
  'wp_term_relationships' => 
  array (
    'object_id' => 
    array (
      'type' => 'primary_id',
    ),
    'term_order' => 
    array (
      'type' => 'int',
    ),
    'term_taxonomy_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_commentmeta' => 
  array (
    'comment_id' => 
    array (
      'type' => 'int',
    ),
    'meta_id' => 
    array (
      'type' => 'primary_id',
    ),
    'meta_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'meta_value' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_comments' => 
  array (
    'comment_ID' => 
    array (
      'type' => 'primary_id',
    ),
    'comment_agent' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_approved' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author_IP' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author_email' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author_url' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_content' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_date' => 
    array (
      'type' => 'date',
    ),
    'comment_date_gmt' => 
    array (
      'type' => 'date',
    ),
    'comment_karma' => 
    array (
      'type' => 'int',
    ),
    'comment_parent' => 
    array (
      'type' => 'int',
    ),
    'comment_post_ID' => 
    array (
      'type' => 'int',
    ),
    'comment_type' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_links' => 
  array (
    'link_description' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_id' => 
    array (
      'type' => 'primary_id',
    ),
    'link_image' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_notes' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_owner' => 
    array (
      'type' => 'int',
    ),
    'link_rating' => 
    array (
      'type' => 'int',
    ),
    'link_rel' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_rss' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_target' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_updated' => 
    array (
      'type' => 'date',
    ),
    'link_url' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_visible' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_options' => 
  array (
    'autoload' => 
    array (
      'type' => 'nvarchar',
    ),
    'option_id' => 
    array (
      'type' => 'primary_id',
    ),
    'option_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'option_value' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_postmeta' => 
  array (
    'meta_id' => 
    array (
      'type' => 'primary_id',
    ),
    'meta_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'meta_value' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_posts' => 
  array (
    'ID' => 
    array (
      'type' => 'primary_id',
    ),
    'comment_count' => 
    array (
      'type' => 'int',
    ),
    'comment_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'guid' => 
    array (
      'type' => 'nvarchar',
    ),
    'menu_order' => 
    array (
      'type' => 'int',
    ),
    'ping_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'pinged' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_author' => 
    array (
      'type' => 'int',
    ),
    'post_content' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_content_filtered' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_date' => 
    array (
      'type' => 'date',
    ),
    'post_date_gmt' => 
    array (
      'type' => 'date',
    ),
    'post_excerpt' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_mime_type' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_modified' => 
    array (
      'type' => 'date',
    ),
    'post_modified_gmt' => 
    array (
      'type' => 'date',
    ),
    'post_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_parent' => 
    array (
      'type' => 'int',
    ),
    'post_password' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_title' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_type' => 
    array (
      'type' => 'nvarchar',
    ),
    'to_ping' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_users ADD KEY user_login_key' => 
  array (
  ),
  'wp_users ADD KEY user_nicename' => 
  array (
  ),
  'wp_usermeta ADD KEY user_id' => 
  array (
  ),
  'wp_usermeta ADD KEY meta_key' => 
  array (
  ),
  'wp_terms ADD UNIQUE KEY slug' => 
  array (
  ),
  'wp_terms ADD KEY name' => 
  array (
  ),
  'wp_term_taxonomy ADD UNIQUE KEY term_id_taxonomy' => 
  array (
  ),
  'wp_term_taxonomy ADD KEY taxonomy' => 
  array (
  ),
  'wp_term_relationships ADD KEY term_taxonomy_id' => 
  array (
  ),
  'wp_commentmeta ADD KEY comment_id' => 
  array (
  ),
  'wp_commentmeta ADD KEY meta_key' => 
  array (
  ),
  'wp_comments ADD KEY comment_post_ID' => 
  array (
  ),
  'wp_comments ADD KEY comment_approved_date_gmt' => 
  array (
  ),
  'wp_comments ADD KEY comment_date_gmt' => 
  array (
  ),
  'wp_comments ADD KEY comment_parent' => 
  array (
  ),
  'wp_comments ADD KEY comment_author_email' => 
  array (
  ),
  'wp_links ADD KEY link_visible' => 
  array (
  ),
  'wp_options ADD UNIQUE KEY option_name' => 
  array (
  ),
  'wp_postmeta ADD KEY post_id' => 
  array (
  ),
  'wp_postmeta ADD KEY meta_key' => 
  array (
  ),
  'wp_posts ADD KEY post_name' => 
  array (
  ),
  'wp_posts ADD KEY type_status_date' => 
  array (
  ),
  'wp_posts ADD KEY post_parent' => 
  array (
  ),
  'wp_posts ADD KEY post_author' => 
  array (
  ),
  'wp_gv_responsive_slider' => 
  array (
    'createdon' => 
    array (
      'type' => 'date',
    ),
    'custom_link' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'image_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
    'title' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_relevanssi' => 
  array (
    'author' => 
    array (
      'type' => 'int',
    ),
    'category' => 
    array (
      'type' => 'int',
    ),
    'comment' => 
    array (
      'type' => 'int',
    ),
    'content' => 
    array (
      'type' => 'int',
    ),
    'customfield' => 
    array (
      'type' => 'int',
    ),
    'customfield_detail' => 
    array (
      'type' => 'nvarchar',
    ),
    'doc' => 
    array (
      'type' => 'int',
    ),
    'excerpt' => 
    array (
      'type' => 'int',
    ),
    'item' => 
    array (
      'type' => 'int',
    ),
    'link' => 
    array (
      'type' => 'int',
    ),
    'mysqlcolumn' => 
    array (
      'type' => 'int',
    ),
    'mysqlcolumn_detail' => 
    array (
      'type' => 'nvarchar',
    ),
    'tag' => 
    array (
      'type' => 'int',
    ),
    'taxonomy' => 
    array (
      'type' => 'int',
    ),
    'taxonomy_detail' => 
    array (
      'type' => 'nvarchar',
    ),
    'term' => 
    array (
      'type' => 'nvarchar',
    ),
    'term_reverse' => 
    array (
      'type' => 'nvarchar',
    ),
    'title' => 
    array (
      'type' => 'int',
    ),
    'type' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_relevanssi_stopwords' => 
  array (
    'stopword' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_relevanssi_log' => 
  array (
    'hits' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'int',
    ),
    'ip' => 
    array (
      'type' => 'nvarchar',
    ),
    'query' => 
    array (
      'type' => 'nvarchar',
    ),
    'time' => 
    array (
      'type' => 'timestamp',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfls_2fa_secrets' => 
  array (
    'ctime' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'mode' => 
    array (
      'type' => 'nvarchar',
    ),
    'recovery' => 
    array (
      'type' => 'blob',
    ),
    'secret' => 
    array (
      'type' => 'tinyblob',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
    'vtime' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfls_settings' => 
  array (
    'autoload' => 
    array (
      'type' => 'nvarchar',
    ),
    'name' => 
    array (
      'type' => 'primary_id',
    ),
    'value' => 
    array (
      'type' => 'longblob',
    ),
  ),
  'wp_wfblocks7' => 
  array (
    'IP' => 
    array (
      'type' => 'binary(16)',
    ),
    '`blockedHits`' => 
    array (
      'type' => 'int',
    ),
    '`blockedTime`' => 
    array (
      'type' => 'int',
    ),
    '`expiration`' => 
    array (
      'type' => 'int',
    ),
    '`lastAttempt`' => 
    array (
      'type' => 'int',
    ),
    '`reason`' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'parameters' => 
    array (
      'type' => 'nvarchar',
    ),
    'type' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfconfig' => 
  array (
    'autoload' => 
    array (
      'type' => 'nvarchar',
    ),
    'name' => 
    array (
      'type' => 'primary_id',
    ),
    'val' => 
    array (
      'type' => 'longblob',
    ),
  ),
  'wp_wfcrawlers' => 
  array (
    'IP' => 
    array (
      'type' => 'primary_id',
    ),
    '`PTR`' => 
    array (
      'type' => 'nvarchar',
    ),
    '`lastUpdate`' => 
    array (
      'type' => 'int',
    ),
    '`patternSig`' => 
    array (
      'type' => 'binary(16)',
    ),
    '`status`' => 
    array (
      'type' => 'char(8)',
    ),
  ),
  'wp_wffilechanges' => 
  array (
    'file' => 
    array (
      'type' => 'nvarchar',
    ),
    'filenameHash' => 
    array (
      'type' => 'primary_id',
    ),
    'md5' => 
    array (
      'type' => 'char(32)',
    ),
  ),
  'wp_wfhits' => 
  array (
    '6)' => 
    array (
      'type' => 'unsigned',
    ),
    'IP' => 
    array (
      'type' => 'binary(16)',
    ),
    'UA' => 
    array (
      'type' => 'nvarchar',
    ),
    'URL' => 
    array (
      'type' => 'nvarchar',
    ),
    'action' => 
    array (
      'type' => 'nvarchar',
    ),
    'actionData' => 
    array (
      'type' => 'nvarchar',
    ),
    'actionDescription' => 
    array (
      'type' => 'nvarchar',
    ),
    'attackLogTime' => 
    array (
      'type' => 'double(17',
    ),
    'ctime' => 
    array (
      'type' => 'double(17',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'isGoogle' => 
    array (
      'type' => 'int',
    ),
    'jsRun' => 
    array (
      'type' => 'int',
    ),
    'newVisit' => 
    array (
      'type' => 'int',
    ),
    'referer' => 
    array (
      'type' => 'nvarchar',
    ),
    'statusCode' => 
    array (
      'type' => 'int',
    ),
    'userID' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfissues' => 
  array (
    'data' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'ignoreC' => 
    array (
      'type' => 'char(32)',
    ),
    'ignoreP' => 
    array (
      'type' => 'char(32)',
    ),
    'lastUpdated' => 
    array (
      'type' => 'int',
    ),
    'longMsg' => 
    array (
      'type' => 'nvarchar',
    ),
    'severity' => 
    array (
      'type' => 'int',
    ),
    'shortMsg' => 
    array (
      'type' => 'nvarchar',
    ),
    'status' => 
    array (
      'type' => 'nvarchar',
    ),
    'time' => 
    array (
      'type' => 'int',
    ),
    'type' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wfpendingissues' => 
  array (
    'data' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'ignoreC' => 
    array (
      'type' => 'char(32)',
    ),
    'ignoreP' => 
    array (
      'type' => 'char(32)',
    ),
    'lastUpdated' => 
    array (
      'type' => 'int',
    ),
    'longMsg' => 
    array (
      'type' => 'nvarchar',
    ),
    'severity' => 
    array (
      'type' => 'int',
    ),
    'shortMsg' => 
    array (
      'type' => 'nvarchar',
    ),
    'status' => 
    array (
      'type' => 'nvarchar',
    ),
    'time' => 
    array (
      'type' => 'int',
    ),
    'type' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wftrafficrates' => 
  array (
    'IP' => 
    array (
      'type' => 'binary(16)',
    ),
    '`hitType`' => 
    array (
      'type' => 'nvarchar',
    ),
    'eMin' => 
    array (
      'type' => 'primary_id',
    ),
    'hits' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wflocs' => 
  array (
    '7)' => 
    array (
      'type' => 'DEFAULT',
    ),
    'IP' => 
    array (
      'type' => 'primary_id',
    ),
    '`city`' => 
    array (
      'type' => 'nvarchar',
    ),
    '`countryCode`' => 
    array (
      'type' => 'char(2)',
    ),
    '`countryName`' => 
    array (
      'type' => 'nvarchar',
    ),
    '`ctime`' => 
    array (
      'type' => 'int',
    ),
    '`failed`' => 
    array (
      'type' => 'int',
    ),
    '`lat`' => 
    array (
      'type' => 'float(10',
    ),
    '`lon`' => 
    array (
      'type' => 'float(10',
    ),
    '`region`' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wflogins' => 
  array (
    '6)' => 
    array (
      'type' => 'unsigned',
    ),
    'IP' => 
    array (
      'type' => 'binary(16)',
    ),
    'UA' => 
    array (
      'type' => 'nvarchar',
    ),
    'action' => 
    array (
      'type' => 'nvarchar',
    ),
    'ctime' => 
    array (
      'type' => 'double(17',
    ),
    'fail' => 
    array (
      'type' => 'int',
    ),
    'hitID' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'userID' => 
    array (
      'type' => 'int',
    ),
    'username' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wfreversecache' => 
  array (
    'IP' => 
    array (
      'type' => 'primary_id',
    ),
    'host' => 
    array (
      'type' => 'nvarchar',
    ),
    'lastUpdate' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfstatus' => 
  array (
    '6)' => 
    array (
      'type' => 'unsigned',
    ),
    'ctime' => 
    array (
      'type' => 'double(17',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'level' => 
    array (
      'type' => 'int',
    ),
    'msg' => 
    array (
      'type' => 'nvarchar',
    ),
    'type' => 
    array (
      'type' => 'char(5)',
    ),
  ),
  'wp_wfhoover' => 
  array (
    'host' => 
    array (
      'type' => 'nvarchar',
    ),
    'hostKey' => 
    array (
      'type' => 'varbinary(124)',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'owner' => 
    array (
      'type' => 'nvarchar',
    ),
    'path' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wffilemods' => 
  array (
    'SHAC' => 
    array (
      'type' => 'binary(32)',
    ),
    '`isSafeFile`' => 
    array (
      'type' => 'nvarchar',
    ),
    '`stoppedOnPosition`' => 
    array (
      'type' => 'int',
    ),
    '`stoppedOnSignature`' => 
    array (
      'type' => 'nvarchar',
    ),
    'filename' => 
    array (
      'type' => 'nvarchar',
    ),
    'filenameMD5' => 
    array (
      'type' => 'primary_id',
    ),
    'knownFile' => 
    array (
      'type' => 'int',
    ),
    'newMD5' => 
    array (
      'type' => 'binary(16)',
    ),
    'oldMD5' => 
    array (
      'type' => 'binary(16)',
    ),
  ),
  'wp_wfblockediplog' => 
  array (
    'IP' => 
    array (
      'type' => 'primary_id',
    ),
    '`blockCount`' => 
    array (
      'type' => 'int',
    ),
    '`blockType`' => 
    array (
      'type' => 'nvarchar',
    ),
    '`countryCode`' => 
    array (
      'type' => 'nvarchar',
    ),
    '`unixday`' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfsnipcache' => 
  array (
    'IP' => 
    array (
      'type' => 'nvarchar',
    ),
    'body' => 
    array (
      'type' => 'nvarchar',
    ),
    'count' => 
    array (
      'type' => 'int',
    ),
    'expiration' => 
    array (
      'type' => 'timestamp',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'type' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wfknownfilelist' => 
  array (
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'path' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wfnotifications' => 
  array (
    'category' => 
    array (
      'type' => 'nvarchar',
    ),
    'ctime' => 
    array (
      'type' => 'int',
    ),
    'html' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'links' => 
    array (
      'type' => 'nvarchar',
    ),
    'new' => 
    array (
      'type' => 'int',
    ),
    'priority' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wflivetraffichuman' => 
  array (
    'IP' => 
    array (
      'type' => 'primary_id',
    ),
    '`identifier`' => 
    array (
      'type' => 'binary(32)',
    ),
    'expiration' => 
    array (
      'type' => 'int',
    ),
  ),
)
 ?>