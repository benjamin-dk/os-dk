UȒT<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:1637:"SELECT DISTINCT p.*, e.post_id, i.id AS instance_id, i.start AS start, i.end AS end, e.allday AS event_allday, e.recurrence_rules, e.exception_rules, e.ticket_url, e.instant_event, e.recurrence_dates, e.exception_dates, e.venue, e.country, e.address, e.city, e.province, e.postal_code, e.show_map, e.contact_name, e.contact_phone, e.contact_email, e.cost, e.ical_feed_url, e.ical_source_url, e.ical_organizer, e.ical_contact, e.ical_uid, e.timezone_name FROM wp_ai1ec_events e INNER JOIN wp_posts p ON e.post_id = p.ID INNER JOIN wp_ai1ec_event_instances i ON e.post_id = i.post_id 
			LEFT JOIN `wp_term_relationships` AS `term_relationships_events_categories`
			    ON ( `e` . `post_id` = `term_relationships_events_categories` . `object_id` )
			LEFT JOIN `wp_term_taxonomy` AS `term_taxonomy_events_categories`
			    ON (
			        `term_relationships_events_categories` . `term_taxonomy_id` =
			            `term_taxonomy_events_categories` . `term_taxonomy_id`
			        AND `term_taxonomy_events_categories` . taxonomy = 'events_categories'
			    )
		 
			LEFT JOIN `wp_term_relationships` AS `term_relationships_events_tags`
			    ON ( `e` . `post_id` = `term_relationships_events_tags` . `object_id` )
			LEFT JOIN `wp_term_taxonomy` AS `term_taxonomy_events_tags`
			    ON (
			        `term_relationships_events_tags` . `term_taxonomy_id` =
			            `term_taxonomy_events_tags` . `term_taxonomy_id`
			        AND `term_taxonomy_events_tags` . taxonomy = 'events_tags'
			    )
		WHERE post_type = 'ai1ec_event' AND  i.end > 1418905502 AND post_status = 'publish' ORDER BY i.start ASC, post_title ASC LIMIT 0, 10";s:11:"last_result";a:10:{i:0;O:8:"stdClass":51:{s:2:"ID";s:3:"112";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:08:19";s:13:"post_date_gmt";s:19:"2013-11-18 14:08:19";s:12:"post_content";s:0:"";s:10:"post_title";s:16:"Hacking for Thor";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:18:"hacking-for-thor-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:08:19";s:17:"post_modified_gmt";s:19:"2013-11-18 14:08:19";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:64:"http://os.benway.dk/ai1ec_event/hacking-for-thor-2/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"112";s:11:"instance_id";s:3:"199";s:5:"start";s:10:"1418914800";s:3:"end";s:10:"1418936400";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:20:"FREQ=WEEKLY;BYDAY=TH";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:16:"20130102T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"rm0opblgv8va67h3qd6s3hfkb8@google.com";s:13:"timezone_name";N;}i:1;O:8:"stdClass":51:{s:2:"ID";s:3:"183";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-25 15:13:00";s:13:"post_date_gmt";s:19:"2013-11-25 14:13:00";s:12:"post_content";s:0:"";s:10:"post_title";s:26:"Ubuntu/Linux Randers møde";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"ubuntulinux-randers-mode";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-25 15:13:00";s:17:"post_modified_gmt";s:19:"2013-11-25 14:13:00";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:70:"http://os.benway.dk/ai1ec_event/ubuntulinux-randers-mode/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"183";s:11:"instance_id";s:3:"816";s:5:"start";s:10:"1418925600";s:3:"end";s:10:"1418936400";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:31:"FREQ=WEEKLY;INTERVAL=2;BYDAY=TH";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:0:"";s:5:"venue";s:23:"Husarvej 20 i kælderen";s:7:"country";s:0:"";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:107:"http://www.google.com/calendar/ical/l7ideb96plgkkja81oque38m84%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"rc09upj2meja8v7q02rpg5d05o@google.com";s:13:"timezone_name";N;}i:2;O:8:"stdClass":51:{s:2:"ID";s:3:"124";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:09:12";s:13:"post_date_gmt";s:19:"2013-11-18 14:09:12";s:12:"post_content";s:32:"Det ugentlige hackerspace-møde.";s:10:"post_title";s:13:"Tirsdags Hack";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"tirsdags-hack";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:09:12";s:17:"post_modified_gmt";s:19:"2013-11-18 14:09:12";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:59:"http://os.benway.dk/ai1ec_event/tirsdags-hack/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"124";s:11:"instance_id";s:3:"624";s:5:"start";s:10:"1419345000";s:3:"end";s:10:"1419370200";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:28:"FREQ=WEEKLY;BYDAY=TU;WKST=MO";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:33:"20121231T230000Z,20121224T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:19:"OSAA, Bryggervej 30";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"diaejhc2tis0ea491h2mkb82qg@google.com";s:13:"timezone_name";N;}i:3;O:8:"stdClass":51:{s:2:"ID";s:3:"194";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-25 15:13:19";s:13:"post_date_gmt";s:19:"2013-11-25 14:13:19";s:12:"post_content";s:0:"";s:10:"post_title";s:27:"Ubuntu/Linux Favrskov Møde";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:25:"ubuntulinux-favrskov-mode";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-25 15:13:19";s:17:"post_modified_gmt";s:19:"2013-11-25 14:13:19";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:71:"http://os.benway.dk/ai1ec_event/ubuntulinux-favrskov-mode/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"194";s:11:"instance_id";s:3:"929";s:5:"start";s:10:"1419444000";s:3:"end";s:10:"1419451200";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:31:"FREQ=WEEKLY;INTERVAL=2;BYDAY=WE";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:0:"";s:5:"venue";s:25:"Bogfinkevej 27 i Hinnerup";s:7:"country";s:0:"";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:107:"http://www.google.com/calendar/ical/l7ideb96plgkkja81oque38m84%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"2c72ts47po8vl04p1t7b1rf1b0@google.com";s:13:"timezone_name";N;}i:4;O:8:"stdClass":51:{s:2:"ID";s:3:"112";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:08:19";s:13:"post_date_gmt";s:19:"2013-11-18 14:08:19";s:12:"post_content";s:0:"";s:10:"post_title";s:16:"Hacking for Thor";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:18:"hacking-for-thor-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:08:19";s:17:"post_modified_gmt";s:19:"2013-11-18 14:08:19";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:64:"http://os.benway.dk/ai1ec_event/hacking-for-thor-2/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"112";s:11:"instance_id";s:3:"200";s:5:"start";s:10:"1419519600";s:3:"end";s:10:"1419541200";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:20:"FREQ=WEEKLY;BYDAY=TH";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:16:"20130102T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"rm0opblgv8va67h3qd6s3hfkb8@google.com";s:13:"timezone_name";N;}i:5;O:8:"stdClass":51:{s:2:"ID";s:3:"124";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:09:12";s:13:"post_date_gmt";s:19:"2013-11-18 14:09:12";s:12:"post_content";s:32:"Det ugentlige hackerspace-møde.";s:10:"post_title";s:13:"Tirsdags Hack";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"tirsdags-hack";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:09:12";s:17:"post_modified_gmt";s:19:"2013-11-18 14:09:12";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:59:"http://os.benway.dk/ai1ec_event/tirsdags-hack/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"124";s:11:"instance_id";s:3:"625";s:5:"start";s:10:"1419949800";s:3:"end";s:10:"1419975000";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:28:"FREQ=WEEKLY;BYDAY=TU;WKST=MO";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:33:"20121231T230000Z,20121224T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:19:"OSAA, Bryggervej 30";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"diaejhc2tis0ea491h2mkb82qg@google.com";s:13:"timezone_name";N;}i:6;O:8:"stdClass":51:{s:2:"ID";s:3:"112";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:08:19";s:13:"post_date_gmt";s:19:"2013-11-18 14:08:19";s:12:"post_content";s:0:"";s:10:"post_title";s:16:"Hacking for Thor";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:18:"hacking-for-thor-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:08:19";s:17:"post_modified_gmt";s:19:"2013-11-18 14:08:19";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:64:"http://os.benway.dk/ai1ec_event/hacking-for-thor-2/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"112";s:11:"instance_id";s:3:"201";s:5:"start";s:10:"1420124400";s:3:"end";s:10:"1420146000";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:20:"FREQ=WEEKLY;BYDAY=TH";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:16:"20130102T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"rm0opblgv8va67h3qd6s3hfkb8@google.com";s:13:"timezone_name";N;}i:7;O:8:"stdClass":51:{s:2:"ID";s:3:"183";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-25 15:13:00";s:13:"post_date_gmt";s:19:"2013-11-25 14:13:00";s:12:"post_content";s:0:"";s:10:"post_title";s:26:"Ubuntu/Linux Randers møde";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"ubuntulinux-randers-mode";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-25 15:13:00";s:17:"post_modified_gmt";s:19:"2013-11-25 14:13:00";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:70:"http://os.benway.dk/ai1ec_event/ubuntulinux-randers-mode/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"183";s:11:"instance_id";s:3:"817";s:5:"start";s:10:"1420135200";s:3:"end";s:10:"1420146000";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:31:"FREQ=WEEKLY;INTERVAL=2;BYDAY=TH";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:0:"";s:5:"venue";s:23:"Husarvej 20 i kælderen";s:7:"country";s:0:"";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:107:"http://www.google.com/calendar/ical/l7ideb96plgkkja81oque38m84%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"rc09upj2meja8v7q02rpg5d05o@google.com";s:13:"timezone_name";N;}i:8;O:8:"stdClass":51:{s:2:"ID";s:3:"124";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:09:12";s:13:"post_date_gmt";s:19:"2013-11-18 14:09:12";s:12:"post_content";s:32:"Det ugentlige hackerspace-møde.";s:10:"post_title";s:13:"Tirsdags Hack";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"tirsdags-hack";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:09:12";s:17:"post_modified_gmt";s:19:"2013-11-18 14:09:12";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:59:"http://os.benway.dk/ai1ec_event/tirsdags-hack/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"124";s:11:"instance_id";s:3:"626";s:5:"start";s:10:"1420554600";s:3:"end";s:10:"1420579800";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:28:"FREQ=WEEKLY;BYDAY=TU;WKST=MO";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:33:"20121231T230000Z,20121224T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:19:"OSAA, Bryggervej 30";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"diaejhc2tis0ea491h2mkb82qg@google.com";s:13:"timezone_name";N;}i:9;O:8:"stdClass":51:{s:2:"ID";s:3:"120";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-11-18 15:08:59";s:13:"post_date_gmt";s:19:"2013-11-18 14:08:59";s:12:"post_content";s:155:"Kom og hør spændende foredrag med teknisk islæt!
Vi sælger øl, vand og sodavand.. og også kaffe... Hvis vejret tillader der bliver der også grillet!";s:10:"post_title";s:18:"Tech Talk Tuesday!";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"tech-talk-tuesday";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-18 15:08:59";s:17:"post_modified_gmt";s:19:"2013-11-18 14:08:59";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:63:"http://os.benway.dk/ai1ec_event/tech-talk-tuesday/?instance_id=";s:10:"menu_order";s:1:"0";s:9:"post_type";s:11:"ai1ec_event";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:7:"post_id";s:3:"120";s:11:"instance_id";s:3:"357";s:5:"start";s:10:"1420567200";s:3:"end";s:10:"1420574400";s:12:"event_allday";s:1:"0";s:16:"recurrence_rules";s:30:"FREQ=MONTHLY;BYDAY=1TU;WKST=MO";s:15:"exception_rules";s:0:"";s:10:"ticket_url";s:0:"";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:16:"20121231T230000Z";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:31:"Bryggervej 30, i OSAA's lokaler";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:4:"cost";s:0:"";s:13:"ical_feed_url";s:108:"https://www.google.com/calendar/ical/18vc4vdr0hr9h551agftdcoluk%40group.calendar.google.com/public/basic.ics";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:37:"r6dmdm40h5qkqb093umkfp55o4@google.com";s:13:"timezone_name";N;}}s:8:"col_info";a:51:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:155;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:27;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:6;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:25;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:71;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:11;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:23;O:8:"stdClass":13:{s:4:"name";s:7:"post_id";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:24;O:8:"stdClass":13:{s:4:"name";s:11:"instance_id";s:5:"table";s:1:"i";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:25;O:8:"stdClass":13:{s:4:"name";s:5:"start";s:5:"table";s:1:"i";s:3:"def";s:0:"";s:10:"max_length";i:10;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:26;O:8:"stdClass":13:{s:4:"name";s:3:"end";s:5:"table";s:1:"i";s:3:"def";s:0:"";s:10:"max_length";i:10;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:27;O:8:"stdClass":13:{s:4:"name";s:12:"event_allday";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:28;O:8:"stdClass":13:{s:4:"name";s:16:"recurrence_rules";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:31;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:29;O:8:"stdClass":13:{s:4:"name";s:15:"exception_rules";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:30;O:8:"stdClass":13:{s:4:"name";s:10:"ticket_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:31;O:8:"stdClass":13:{s:4:"name";s:13:"instant_event";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:32;O:8:"stdClass":13:{s:4:"name";s:16:"recurrence_dates";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:33;O:8:"stdClass":13:{s:4:"name";s:15:"exception_dates";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:33;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:34;O:8:"stdClass":13:{s:4:"name";s:5:"venue";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:25;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:35;O:8:"stdClass":13:{s:4:"name";s:7:"country";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:36;O:8:"stdClass":13:{s:4:"name";s:7:"address";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:31;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:37;O:8:"stdClass":13:{s:4:"name";s:4:"city";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:38;O:8:"stdClass":13:{s:4:"name";s:8:"province";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:39;O:8:"stdClass":13:{s:4:"name";s:11:"postal_code";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:40;O:8:"stdClass":13:{s:4:"name";s:8:"show_map";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:41;O:8:"stdClass":13:{s:4:"name";s:12:"contact_name";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:42;O:8:"stdClass":13:{s:4:"name";s:13:"contact_phone";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:43;O:8:"stdClass":13:{s:4:"name";s:13:"contact_email";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:44;O:8:"stdClass":13:{s:4:"name";s:4:"cost";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:45;O:8:"stdClass":13:{s:4:"name";s:13:"ical_feed_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:108;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:46;O:8:"stdClass":13:{s:4:"name";s:15:"ical_source_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:47;O:8:"stdClass":13:{s:4:"name";s:14:"ical_organizer";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:48;O:8:"stdClass":13:{s:4:"name";s:12:"ical_contact";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:49;O:8:"stdClass":13:{s:4:"name";s:8:"ical_uid";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:37;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:50;O:8:"stdClass":13:{s:4:"name";s:13:"timezone_name";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:10;s:10:"return_val";i:10;}