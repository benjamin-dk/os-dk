��T<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:1243:"SELECT 
			e.post_id,
			e.timezone_name,
			e.recurrence_rules,
			e.exception_rules,
			e.allday,
			e.instant_event,
			e.recurrence_dates,
			e.exception_dates,
			e.venue,
			e.country,
			e.address,
			e.city,
			e.province,
			e.postal_code,
			e.show_map,
			e.contact_name,
			e.contact_phone,
			e.contact_email,
			e.contact_url,
			e.cost,
			e.ticket_url,
			e.ical_feed_url,
			e.ical_source_url,
			e.ical_organizer,
			e.ical_contact,
			e.ical_uid,
			e.longitude,
			e.latitude,
			e.show_coordinates,
			GROUP_CONCAT( ttc.term_id ) AS categories,
			GROUP_CONCAT( ttt.term_id ) AS tags
		, IF( aei.start IS NOT NULL, aei.start, e.start ) as start,  IF( aei.start IS NOT NULL, aei.end,   e.end )   as end 
			FROM wp_ai1ec_events e
				LEFT JOIN wp_term_relationships tr
					ON ( e.post_id = tr.object_id )
				LEFT JOIN wp_term_taxonomy ttc
					ON (
						tr.term_taxonomy_id = ttc.term_taxonomy_id AND
						ttc.taxonomy = 'events_categories'
					)
				LEFT JOIN wp_term_taxonomy ttt
					ON (
						tr.term_taxonomy_id = ttt.term_taxonomy_id AND
						ttt.taxonomy = 'events_tags'
					)
				LEFT JOIN wp_ai1ec_event_instances aei ON aei.id = 0 AND e.post_id = aei.post_id 
			WHERE e.post_id = 58
			GROUP BY e.post_id";s:11:"last_result";a:1:{i:0;O:8:"stdClass":33:{s:7:"post_id";s:2:"58";s:13:"timezone_name";N;s:16:"recurrence_rules";s:0:"";s:15:"exception_rules";s:0:"";s:6:"allday";s:1:"0";s:13:"instant_event";s:1:"0";s:16:"recurrence_dates";s:0:"";s:15:"exception_dates";s:0:"";s:5:"venue";s:0:"";s:7:"country";s:0:"";s:7:"address";s:60:"Copenhagen Business School, Howitzvej 60, 2000 Frederiksberg";s:4:"city";s:0:"";s:8:"province";s:0:"";s:11:"postal_code";s:0:"";s:8:"show_map";s:1:"0";s:12:"contact_name";s:0:"";s:13:"contact_phone";s:0:"";s:13:"contact_email";s:0:"";s:11:"contact_url";s:0:"";s:4:"cost";s:0:"";s:10:"ticket_url";s:0:"";s:13:"ical_feed_url";s:50:"http://www.sslug.dk/adict/ical.php?organizer=SSLUG";s:15:"ical_source_url";s:0:"";s:14:"ical_organizer";N;s:12:"ical_contact";N;s:8:"ical_uid";s:16:"SSLUG20131218fo0";s:9:"longitude";s:17:"0.000000000000000";s:8:"latitude";s:17:"0.000000000000000";s:16:"show_coordinates";s:1:"0";s:10:"categories";N;s:4:"tags";s:1:"8";s:5:"start";s:10:"1387386000";s:3:"end";s:10:"1387404000";}}s:8:"col_info";a:33:{i:0;O:8:"stdClass":13:{s:4:"name";s:7:"post_id";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:13:"timezone_name";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:16:"recurrence_rules";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:15:"exception_rules";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:6:"allday";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:13:"instant_event";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:16:"recurrence_dates";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:15:"exception_dates";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:5:"venue";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:7:"country";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:7:"address";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:60;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:4:"city";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:8:"province";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:11:"postal_code";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:8:"show_map";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:12:"contact_name";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:13:"contact_phone";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:13:"contact_email";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:11:"contact_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:4:"cost";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:10:"ticket_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:13:"ical_feed_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:15:"ical_source_url";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:23;O:8:"stdClass":13:{s:4:"name";s:14:"ical_organizer";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:24;O:8:"stdClass":13:{s:4:"name";s:12:"ical_contact";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:25;O:8:"stdClass":13:{s:4:"name";s:8:"ical_uid";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:16;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:26;O:8:"stdClass":13:{s:4:"name";s:9:"longitude";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:17;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:4:"real";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:27;O:8:"stdClass":13:{s:4:"name";s:8:"latitude";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:17;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:4:"real";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:28;O:8:"stdClass":13:{s:4:"name";s:16:"show_coordinates";s:5:"table";s:1:"e";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:29;O:8:"stdClass":13:{s:4:"name";s:10:"categories";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:30;O:8:"stdClass":13:{s:4:"name";s:4:"tags";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:31;O:8:"stdClass":13:{s:4:"name";s:5:"start";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:10;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:32;O:8:"stdClass":13:{s:4:"name";s:3:"end";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:10;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}