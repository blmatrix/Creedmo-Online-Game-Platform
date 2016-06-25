<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-22 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-21T20:00:00
            [end_time] => 2016-01-21T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-21 20:00:00
            [end_time] => 2016-01-21 23:00:00
        )

)

ERROR - 2016-01-22 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 02:00:01 --> MG start_date ===> 2016-01-21T20:00:00
ERROR - 2016-01-22 02:00:01 --> MG end_date ===> 2016-01-21T20:00:00
ERROR - 2016-01-22 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => cf12f28b-221e-4ec8-9cf1-a7f61ec34441
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 02:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 70d1be23-7e22-4782-aed2-f1daf9b57074
        )

)

ERROR - 2016-01-22 02:00:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 70d1be23-7e22-4782-aed2-f1daf9b57074
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-22 02:00:02 --> Response Code  : NotInCache
ERROR - 2016-01-22 02:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ccb9aca2-8245-4895-b17c-33b1f3b85346
        )

)

ERROR - 2016-01-22 02:00:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => ccb9aca2-8245-4895-b17c-33b1f3b85346
        )

)

ERROR - 2016-01-22 02:00:05 --> Response Code  : Normal
ERROR - 2016-01-22 02:00:05 --> cur_page
ERROR - 2016-01-22 02:00:05 --> 2
ERROR - 2016-01-22 02:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 02:00:05 --> MG Game play update result
ERROR - 2016-01-22 02:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453374000
    [update_end_time] => 1453381200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453395605
    [reg_date] => 1453395605
)

ERROR - 2016-01-22 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-21T23:00:00
            [end_time] => 2016-01-22T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-21 23:00:00
            [end_time] => 2016-01-22 02:00:00
        )

)

ERROR - 2016-01-22 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 05:00:01 --> MG start_date ===> 2016-01-21T23:00:00
ERROR - 2016-01-22 05:00:01 --> MG end_date ===> 2016-01-21T23:00:00
ERROR - 2016-01-22 05:00:19 --> Severity: Warning --> SoapClient::__doRequest(): SSL: Connection reset by peer /www/game_offline/application/libraries/Microgame.php 63
ERROR - 2016-01-22 05:00:19 --> Exception.method_name => IsAuthenticate ===>
ERROR - 2016-01-22 05:00:19 --> Exception.method_name => IsAuthenticate ===>
ERROR - 2016-01-22 05:00:19 --> Exception.method_name => IsAuthenticate ===>SoapFault Object
(
    [message:protected] => Error Fetching http headers
    [string:Exception:private] => 
    [code:protected] => 0
    [file:protected] => /www/game_offline/application/libraries/Microgame.php
    [line:protected] => 63
    [trace:Exception:private] => Array
        (
            [0] => Array
                (
                    [function] => __doRequest
                    [class] => SoapClient
                    [type] => ->
                    [args] => Array
                        (
                            [0] => <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="https://entservices.totalegame.net"><SOAP-ENV:Body><ns1:IsAuthenticate><ns1:loginName>MMCashier181029</ns1:loginName><ns1:pinCode>ce6d8b</ns1:pinCode></ns1:IsAuthenticate></SOAP-ENV:Body></SOAP-ENV:Envelope>

                            [1] => https://entservices.totalegame.net/EntServices.asmx
                            [2] => https://entservices.totalegame.net/IsAuthenticate
                            [3] => 1
                            [4] => 0
                        )

                )

            [1] => Array
                (
                    [function] => __call
                    [class] => SoapClient
                    [type] => ->
                    [args] => Array
                        (
                            [0] => IsAuthenticate
                            [1] => Array
                                (
                                    [0] => Array
                                        (
                                            [loginName] => MMCashier181029
                                            [pinCode] => ce6d8b
                                        )

                                )

                        )

                )

            [2] => Array
                (
                    [function] => IsAuthenticate
                    [class] => SoapClient
                    [type] => ->
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [loginName] => MMCashier181029
                                    [pinCode] => ce6d8b
                                )

                        )

                )

            [3] => Array
                (
                    [file] => /www/game_offline/application/libraries/Microgame.php
                    [line] => 63
                    [function] => call_user_func_array
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [0] => SoapClient Object
                                        (
                                            [compression] => 32
                                            [_soap_version] => 1
                                            [sdl] => Resource id #65
                                            [httpurl] => Resource id #70
                                            [__soap_fault] => SoapFault Object
 *RECURSION*
                                        )

                                    [1] => IsAuthenticate
                                )

                            [1] => Array
                                (
                                    [0] => Array
                                        (
                                            [loginName] => MMCashier181029
                                            [pinCode] => ce6d8b
                                        )

                                )

                        )

                )

            [4] => Array
                (
                    [file] => /www/game_offline/application/libraries/Game_play_service.php
                    [line] => 158
                    [function] => invoke
                    [class] => Microgame
                    [type] => ->
                    [args] => Array
                        (
                            [0] => IsAuthenticate
                            [1] => Array
                                (
                                    [0] => Array
                                        (
                                            [loginName] => MMCashier181029
                                            [pinCode] => ce6d8b
                                        )

                                )

                        )

                )

            [5] => Array
                (
                    [file] => /www/game_offline/application/controllers/batch/Batch_process.php
                    [line] => 46
                    [function] => fetch_mg_game_play
                    [class] => Game_play_service
                    [type] => ->
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [mg] => Array
                                        (
                                            [start_time] => 2016-01-21T23:00:00
                                            [end_time] => 2016-01-22T01:00:00
                                        )

                                    [pt] => Array
                                        (
                                            [start_time] => 2016-01-21 23:00:00
                                            [end_time] => 2016-01-22 02:00:00
                                        )

                                )

                            [1] => db
                        )

                )

            [6] => Array
                (
                    [function] => fetch_game_play
                    [class] => Batch_process
                    [type] => ->
                    [args] => Array
                        (
                        )

                )

            [7] => Array
                (
                    [file] => /www/game_offline/system/core/CodeIgniter.php
                    [line] => 508
                    [function] => call_user_func_array
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [0] => Batch_process Object
                                        (
                                            [benchmark] => CI_Benchmark Object
                                                (
                                                    [marker] => Array
                                                        (
                                                            [total_execution_time_start] => 1453406401.7119
                                                            [loading_time:_base_classes_start] => 1453406401.7119
                                                            [loading_time:_base_classes_end] => 1453406401.7216
                                                            [controller_execution_time_( Batch_process / fetch_game_play )_start] => 1453406401.7221
                                                        )

                                                )

                                            [hooks] => CI_Hooks Object
                                                (
                                                    [enabled] => 1
                                                    [hooks] => Array
                                                        (
                                                            [post_controller_constructor] => Array
                                                                (
                                                                    [0] => Array
                                                                        (
                                                                            [class] => SessionInitializer
                                                                            [function] => initialize
                                                                            [filename] => SessionInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                    [1] => Array
                                                                        (
                                                                            [class] => LanguageInitializer
                                                                            [function] => initialize
                                                                            [filename] => LanguageInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                    [2] => Array
                                                                        (
                                                                            [class] => CookieInitializer
                                                                            [function] => initialize
                                                                            [filename] => CookieInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                    [3] => Array
                                                                        (
                                                                            [class] => LoggingInitializer
                                                                            [function] => initialize
                                                                            [filename] => LoggingInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                )

                                                        )

                                                    [_objects:protected] => Array
                                                        (
                                                            [SessionInitializer] => SessionInitializer Object
                                                                (
                                                                    [CI] => Batch_process Object
 *RECURSION*
                                                                )

                                                            [LanguageInitializer] => LanguageInitializer Object
                                                                (
                                                                )

                                                            [CookieInitializer] => CookieInitializer Object
                                                                (
                                                                )

                                                            [LoggingInitializer] => LoggingInitializer Object
                                                                (
                                                                )

                                                        )

                                                    [_in_progress:protected] => 
                                                )

                                            [config] => CI_Config Object
                                                (
                                                    [config] => Array
                                                        (
                                                            [base_url] => http://localhost/
                                                            [index_page] => 
                                                            [uri_protocol] => AUTO
                                                            [url_suffix] => 
                                                            [language] => english
                                                            [charset] => UTF-8
                                                            [enable_hooks] => 1
                                                            [subclass_prefix] => MY_
                                                            [composer_autoload] => 
                                                            [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                            [allow_get_array] => 1
                                                            [enable_query_strings] => 
                                                            [controller_trigger] => c
                                                            [function_trigger] => m
                                                            [directory_trigger] => d
                                                            [log_threshold] => 1
                                                            [log_path] => 
                                                            [log_file_extension] => 
                                                            [log_file_permissions] => 420
                                                            [log_date_format] => Y-m-d H:i:s
                                                            [error_views_path] => 
                                                            [cache_path] => 
                                                            [cache_query_string] => 
                                                            [encryption_key] => asdedefrgfrtg1212fefkhh
                                                            [sess_driver] => files
                                                            [sess_cookie_name] => ci_session
                                                            [sess_expiration] => 7200
                                                            [sess_save_path] => 
                                                            [sess_match_ip] => 
                                                            [sess_time_to_update] => 300
                                                            [sess_expire_on_close] => 1
                                                            [cookie_prefix] => 
                                                            [cookie_domain] => 
                                                            [cookie_path] => /
                                                            [cookie_secure] => 
                                                            [cookie_httponly] => 
                                                            [standardize_newlines] => 
                                                            [global_xss_filtering] => 
                                                            [csrf_protection] => 
                                                            [csrf_token_name] => csrf_test_name
                                                            [csrf_cookie_name] => csrf_cookie_name
                                                            [csrf_expire] => 7200
                                                            [csrf_regenerate] => 1
                                                            [csrf_exclude_uris] => Array
                                                                (
                                                                )

                                                            [compress_output] => 
                                                            [time_reference] => local
                                                            [rewrite_short_tags] => 1
                                                            [proxy_ips] => 
                                                        )

                                                    [is_loaded] => Array
                                                        (
                                                        )

                                                    [_config_paths] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                        )

                                                )

                                            [log] => CI_Log Object
                                                (
                                                    [_log_path:protected] => /www/game_offline/application/logs/
                                                    [_file_permissions:protected] => 420
                                                    [_threshold:protected] => 1
                                                    [_threshold_max:protected] => 0
                                                    [_threshold_array:protected] => Array
                                                        (
                                                        )

                                                    [_date_fmt:protected] => Y-m-d H:i:s
                                                    [_file_ext:protected] => php
                                                    [_enabled:protected] => 1
                                                    [_levels:protected] => Array
                                                        (
                                                            [ERROR] => 1
                                                            [DEBUG] => 2
                                                            [INFO] => 3
                                                            [ALL] => 4
                                                        )

                                                )

                                            [utf8] => CI_Utf8 Object
                                                (
                                                )

                                            [uri] => CI_URI Object
                                                (
                                                    [keyval] => Array
                                                        (
                                                        )

                                                    [uri_string] => batch/batch_process/fetch_game_play
                                                    [segments] => Array
                                                        (
                                                            [1] => batch
                                                            [2] => batch_process
                                                            [3] => fetch_game_play
                                                        )

                                                    [rsegments] => Array
                                                        (
                                                            [1] => batch_process
                                                            [2] => fetch_game_play
                                                        )

                                                    [_permitted_uri_chars:protected] => a-z 0-9~%.:_\-
                                                    [config] => CI_Config Object
                                                        (
                                                            [config] => Array
                                                                (
                                                                    [base_url] => http://localhost/
                                                                    [index_page] => 
                                                                    [uri_protocol] => AUTO
                                                                    [url_suffix] => 
                                                                    [language] => english
                                                                    [charset] => UTF-8
                                                                    [enable_hooks] => 1
                                                                    [subclass_prefix] => MY_
                                                                    [composer_autoload] => 
                                                                    [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                                    [allow_get_array] => 1
                                                                    [enable_query_strings] => 
                                                                    [controller_trigger] => c
                                                                    [function_trigger] => m
                                                                    [directory_trigger] => d
                                                                    [log_threshold] => 1
                                                                    [log_path] => 
                                                                    [log_file_extension] => 
                                                                    [log_file_permissions] => 420
                                                                    [log_date_format] => Y-m-d H:i:s
                                                                    [error_views_path] => 
                                                                    [cache_path] => 
                                                                    [cache_query_string] => 
                                                                    [encryption_key] => asdedefrgfrtg1212fefkhh
                                                                    [sess_driver] => files
                                                                    [sess_cookie_name] => ci_session
                                                                    [sess_expiration] => 7200
                                                                    [sess_save_path] => 
                                                                    [sess_match_ip] => 
                                                                    [sess_time_to_update] => 300
                                                                    [sess_expire_on_close] => 1
                                                                    [cookie_prefix] => 
                                                                    [cookie_domain] => 
                                                                    [cookie_path] => /
                                                                    [cookie_secure] => 
                                                                    [cookie_httponly] => 
                                                                    [standardize_newlines] => 
                                                                    [global_xss_filtering] => 
                                                                    [csrf_protection] => 
                                                                    [csrf_token_name] => csrf_test_name
                                                                    [csrf_cookie_name] => csrf_cookie_name
                                                                    [csrf_expire] => 7200
                                                                    [csrf_regenerate] => 1
                                                                    [csrf_exclude_uris] => Array
                                                                        (
                                                                        )

                                                                    [compress_output] => 
                                                                    [time_reference] => local
                                                                    [rewrite_short_tags] => 1
                                                                    [proxy_ips] => 
                                                                )

                                                            [is_loaded] => Array
                                                                (
                                                                )

                                                            [_config_paths] => Array
                                                                (
                                                                    [0] => /www/game_offline/application/
                                                                )

                                                        )

                                                )

                                            [router] => CI_Router Object
                                                (
                                                    [config] => CI_Config Object
                                                        (
                                                            [config] => Array
                                                                (
                                                                    [base_url] => http://localhost/
                                                                    [index_page] => 
                                                                    [uri_protocol] => AUTO
                                                                    [url_suffix] => 
                                                                    [language] => english
                                                                    [charset] => UTF-8
                                                                    [enable_hooks] => 1
                                                                    [subclass_prefix] => MY_
                                                                    [composer_autoload] => 
                                                                    [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                                    [allow_get_array] => 1
                                                                    [enable_query_strings] => 
                                                                    [controller_trigger] => c
                                                                    [function_trigger] => m
                                                                    [directory_trigger] => d
                                                                    [log_threshold] => 1
                                                                    [log_path] => 
                                                                    [log_file_extension] => 
                                                                    [log_file_permissions] => 420
                                                                    [log_date_format] => Y-m-d H:i:s
                                                                    [error_views_path] => 
                                                                    [cache_path] => 
                                                                    [cache_query_string] => 
                                                                    [encryption_key] => asdedefrgfrtg1212fefkhh
                                                                    [sess_driver] => files
                                                                    [sess_cookie_name] => ci_session
                                                                    [sess_expiration] => 7200
                                                                    [sess_save_path] => 
                                                                    [sess_match_ip] => 
                                                                    [sess_time_to_update] => 300
                                                                    [sess_expire_on_close] => 1
                                                                    [cookie_prefix] => 
                                                                    [cookie_domain] => 
                                                                    [cookie_path] => /
                                                                    [cookie_secure] => 
                                                                    [cookie_httponly] => 
                                                                    [standardize_newlines] => 
                                                                    [global_xss_filtering] => 
                                                                    [csrf_protection] => 
                                                                    [csrf_token_name] => csrf_test_name
                                                                    [csrf_cookie_name] => csrf_cookie_name
                                                                    [csrf_expire] => 7200
                                                                    [csrf_regenerate] => 1
                                                                    [csrf_exclude_uris] => Array
                                                                        (
                                                                        )

                                                                    [compress_output] => 
                                                                    [time_reference] => local
                                                                    [rewrite_short_tags] => 1
                                                                    [proxy_ips] => 
                                                                )

                                                            [is_loaded] => Array
                                                                (
                                                                )

                                                            [_config_paths] => Array
                                                                (
                                                                    [0] => /www/game_offline/application/
                                                                )

                                                        )

                                                    [routes] => Array
                                                        (
                                                            [404_override] => 
                                                            [admin] => admin/index/index
                                                        )

                                                    [class] => batch_process
                                                    [method] => fetch_game_play
                                                    [directory] => batch/
                                                    [default_controller] => Index
                                                    [translate_uri_dashes] => 
                                                    [enable_query_strings] => 
                                                    [uri] => CI_URI Object
                                                        (
                                                            [keyval] => Array
                                                                (
                                                                )

                                                            [uri_string] => batch/batch_process/fetch_game_play
                                                            [segments] => Array
                                                                (
                                                                    [1] => batch
                                                                    [2] => batch_process
                                                                    [3] => fetch_game_play
                                                                )

                                                            [rsegments] => Array
                                                                (
                                                                    [1] => batch_process
                                                                    [2] => fetch_game_play
                                                                )

                                                            [_permitted_uri_chars:protected] => a-z 0-9~%.:_\-
                                                            [config] => CI_Config Object
                                                                (
                                                                    [config] => Array
                                                                        (
                                                                            [base_url] => http://localhost/
                                                                            [index_page] => 
                                                                            [uri_protocol] => AUTO
                                                                            [url_suffix] => 
                                                                            [language] => english
                                                                            [charset] => UTF-8
                                                                            [enable_hooks] => 1
                                                                            [subclass_prefix] => MY_
                                                                            [composer_autoload] => 
                                                                            [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                                            [allow_get_array] => 1
                                                                            [enable_query_strings] => 
                                                                            [controller_trigger] => c
                                                                            [function_trigger] => m
                                                                            [directory_trigger] => d
                                                                            [log_threshold] => 1
                                                                            [log_path] => 
                                                                            [log_file_extension] => 
                                                                            [log_file_permissions] => 420
                                                                            [log_date_format] => Y-m-d H:i:s
                                                                            [error_views_path] => 
                                                                            [cache_path] => 
                                                                            [cache_query_string] => 
                                                                            [encryption_key] => asdedefrgfrtg1212fefkhh
                                                                            [sess_driver] => files
                                                                            [sess_cookie_name] => ci_session
                                                                            [sess_expiration] => 7200
                                                                            [sess_save_path] => 
                                                                            [sess_match_ip] => 
                                                                            [sess_time_to_update] => 300
                                                                            [sess_expire_on_close] => 1
                                                                            [cookie_prefix] => 
                                                                            [cookie_domain] => 
                                                                            [cookie_path] => /
                                                                            [cookie_secure] => 
                                                                            [cookie_httponly] => 
                                                                            [standardize_newlines] => 
                                                                            [global_xss_filtering] => 
                                                                            [csrf_protection] => 
                                                                            [csrf_token_name] => csrf_test_name
                                                                            [csrf_cookie_name] => csrf_cookie_name
                                                                            [csrf_expire] => 7200
                                                                            [csrf_regenerate] => 1
                                                                            [csrf_exclude_uris] => Array
                                                                                (
                                                                                )

                                                                            [compress_output] => 
                                                                            [time_reference] => local
                                                                            [rewrite_short_tags] => 1
                                                                            [proxy_ips] => 
                                                                        )

                                                                    [is_loaded] => Array
                                                                        (
                                                                        )

                                                                    [_config_paths] => Array
                                                                        (
                                                                            [0] => /www/game_offline/application/
                                                                        )

                                                                )

                                                        )

                                                )

                                            [output] => CI_Output Object
                                                (
                                                    [final_output] => 
                                                    [cache_expiration] => 0
                                                    [headers] => Array
                                                        (
                                                        )

                                                    [mimes] => Array
                                                        (
                                                            [hqx] => Array
                                                                (
                                                                    [0] => application/mac-binhex40
                                                                    [1] => application/mac-binhex
                                                                    [2] => application/x-binhex40
                                                                    [3] => application/x-mac-binhex40
                                                                )

                                                            [cpt] => application/mac-compactpro
                                                            [csv] => Array
                                                                (
                                                                    [0] => text/x-comma-separated-values
                                                                    [1] => text/comma-separated-values
                                                                    [2] => application/octet-stream
                                                                    [3] => application/vnd.ms-excel
                                                                    [4] => application/x-csv
                                                                    [5] => text/x-csv
                                                                    [6] => text/csv
                                                                    [7] => application/csv
                                                                    [8] => application/excel
                                                                    [9] => application/vnd.msexcel
                                                                    [10] => text/plain
                                                                )

                                                            [bin] => Array
                                                                (
                                                                    [0] => application/macbinary
                                                                    [1] => application/mac-binary
                                                                    [2] => application/octet-stream
                                                                    [3] => application/x-binary
                                                                    [4] => application/x-macbinary
                                                                )

                                                            [dms] => application/octet-stream
                                                            [lha] => application/octet-stream
                                                            [lzh] => application/octet-stream
                                                            [exe] => Array
                                                                (
                                                                    [0] => application/octet-stream
                                                                    [1] => application/x-msdownload
                                                                )

                                                            [class] => application/octet-stream
                                                            [psd] => Array
                                                                (
                                                                    [0] => application/x-photoshop
                                                                    [1] => image/vnd.adobe.photoshop
                                                                )

                                                            [so] => application/octet-stream
                                                            [sea] => application/octet-stream
                                                            [dll] => application/octet-stream
                                                            [oda] => application/oda
                                                            [pdf] => Array
                                                                (
                                                                    [0] => application/pdf
                                                                    [1] => application/force-download
                                                                    [2] => application/x-download
                                                                    [3] => binary/octet-stream
                                                                )

                                                            [ai] => Array
                                                                (
                                                                    [0] => application/pdf
                                                                    [1] => application/postscript
                                                                )

                                                            [eps] => application/postscript
                                                            [ps] => application/postscript
                                                            [smi] => application/smil
                                                            [smil] => application/smil
                                                            [mif] => application/vnd.mif
                                                            [xls] => Array
                                                                (
                                                                    [0] => application/vnd.ms-excel
                                                                    [1] => application/msexcel
                                                                    [2] => application/x-msexcel
                                                                    [3] => application/x-ms-excel
                                                                    [4] => application/x-excel
                                                                    [5] => application/x-dos_ms_excel
                                                                    [6] => application/xls
                                                                    [7] => application/x-xls
                                                                    [8] => application/excel
                                                                    [9] => application/download
                                                                    [10] => application/vnd.ms-office
                                                                    [11] => application/msword
                                                                )

                                                            [ppt] => Array
                                                                (
                                                                    [0] => application/powerpoint
                                                                    [1] => application/vnd.ms-powerpoint
                                                                    [2] => application/vnd.ms-office
                                                                    [3] => application/msword
                                                                )

                                                            [pptx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.presentationml.presentation
                                                                    [1] => application/x-zip
                                                                    [2] => application/zip
                                                                )

                                                            [wbxml] => application/wbxml
                                                            [wmlc] => application/wmlc
                                                            [dcr] => application/x-director
                                                            [dir] => application/x-director
                                                            [dxr] => application/x-director
                                                            [dvi] => application/x-dvi
                                                            [gtar] => application/x-gtar
                                                            [gz] => application/x-gzip
                                                            [gzip] => application/x-gzip
                                                            [php] => Array
                                                                (
                                                                    [0] => application/x-httpd-php
                                                                    [1] => application/php
                                                                    [2] => application/x-php
                                                                    [3] => text/php
                                                                    [4] => text/x-php
                                                                    [5] => application/x-httpd-php-source
                                                                )

                                                            [php4] => application/x-httpd-php
                                                            [php3] => application/x-httpd-php
                                                            [phtml] => application/x-httpd-php
                                                            [phps] => application/x-httpd-php-source
                                                            [js] => Array
                                                                (
                                                                    [0] => application/x-javascript
                                                                    [1] => text/plain
                                                                )

                                                            [swf] => application/x-shockwave-flash
                                                            [sit] => application/x-stuffit
                                                            [tar] => application/x-tar
                                                            [tgz] => Array
                                                                (
                                                                    [0] => application/x-tar
                                                                    [1] => application/x-gzip-compressed
                                                                )

                                                            [z] => application/x-compress
                                                            [xhtml] => application/xhtml+xml
                                                            [xht] => application/xhtml+xml
                                                            [zip] => Array
                                                                (
                                                                    [0] => application/x-zip
                                                                    [1] => application/zip
                                                                    [2] => application/x-zip-compressed
                                                                    [3] => application/s-compressed
                                                                    [4] => multipart/x-zip
                                                                )

                                                            [rar] => Array
                                                                (
                                                                    [0] => application/x-rar
                                                                    [1] => application/rar
                                                                    [2] => application/x-rar-compressed
                                                                )

                                                            [mid] => audio/midi
                                                            [midi] => audio/midi
                                                            [mpga] => audio/mpeg
                                                            [mp2] => audio/mpeg
                                                            [mp3] => Array
                                                                (
                                                                    [0] => audio/mpeg
                                                                    [1] => audio/mpg
                                                                    [2] => audio/mpeg3
                                                                    [3] => audio/mp3
                                                                )

                                                            [aif] => Array
                                                                (
                                                                    [0] => audio/x-aiff
                                                                    [1] => audio/aiff
                                                                )

                                                            [aiff] => Array
                                                                (
                                                                    [0] => audio/x-aiff
                                                                    [1] => audio/aiff
                                                                )

                                                            [aifc] => audio/x-aiff
                                                            [ram] => audio/x-pn-realaudio
                                                            [rm] => audio/x-pn-realaudio
                                                            [rpm] => audio/x-pn-realaudio-plugin
                                                            [ra] => audio/x-realaudio
                                                            [rv] => video/vnd.rn-realvideo
                                                            [wav] => Array
                                                                (
                                                                    [0] => audio/x-wav
                                                                    [1] => audio/wave
                                                                    [2] => audio/wav
                                                                )

                                                            [bmp] => Array
                                                                (
                                                                    [0] => image/bmp
                                                                    [1] => image/x-bmp
                                                                    [2] => image/x-bitmap
                                                                    [3] => image/x-xbitmap
                                                                    [4] => image/x-win-bitmap
                                                                    [5] => image/x-windows-bmp
                                                                    [6] => image/ms-bmp
                                                                    [7] => image/x-ms-bmp
                                                                    [8] => application/bmp
                                                                    [9] => application/x-bmp
                                                                    [10] => application/x-win-bitmap
                                                                )

                                                            [gif] => image/gif
                                                            [jpeg] => Array
                                                                (
                                                                    [0] => image/jpeg
                                                                    [1] => image/pjpeg
                                                                )

                                                            [jpg] => Array
                                                                (
                                                                    [0] => image/jpeg
                                                                    [1] => image/pjpeg
                                                                )

                                                            [jpe] => Array
                                                                (
                                                                    [0] => image/jpeg
                                                                    [1] => image/pjpeg
                                                                )

                                                            [png] => Array
                                                                (
                                                                    [0] => image/png
                                                                    [1] => image/x-png
                                                                )

                                                            [tiff] => image/tiff
                                                            [tif] => image/tiff
                                                            [css] => Array
                                                                (
                                                                    [0] => text/css
                                                                    [1] => text/plain
                                                                )

                                                            [html] => Array
                                                                (
                                                                    [0] => text/html
                                                                    [1] => text/plain
                                                                )

                                                            [htm] => Array
                                                                (
                                                                    [0] => text/html
                                                                    [1] => text/plain
                                                                )

                                                            [shtml] => Array
                                                                (
                                                                    [0] => text/html
                                                                    [1] => text/plain
                                                                )

                                                            [txt] => text/plain
                                                            [text] => text/plain
                                                            [log] => Array
                                                                (
                                                                    [0] => text/plain
                                                                    [1] => text/x-log
                                                                )

                                                            [rtx] => text/richtext
                                                            [rtf] => text/rtf
                                                            [xml] => Array
                                                                (
                                                                    [0] => application/xml
                                                                    [1] => text/xml
                                                                    [2] => text/plain
                                                                )

                                                            [xsl] => Array
                                                                (
                                                                    [0] => application/xml
                                                                    [1] => text/xsl
                                                                    [2] => text/xml
                                                                )

                                                            [mpeg] => video/mpeg
                                                            [mpg] => video/mpeg
                                                            [mpe] => video/mpeg
                                                            [qt] => video/quicktime
                                                            [mov] => video/quicktime
                                                            [avi] => Array
                                                                (
                                                                    [0] => video/x-msvideo
                                                                    [1] => video/msvideo
                                                                    [2] => video/avi
                                                                    [3] => application/x-troff-msvideo
                                                                )

                                                            [movie] => video/x-sgi-movie
                                                            [doc] => Array
                                                                (
                                                                    [0] => application/msword
                                                                    [1] => application/vnd.ms-office
                                                                )

                                                            [docx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                                                    [1] => application/zip
                                                                    [2] => application/msword
                                                                    [3] => application/x-zip
                                                                )

                                                            [dot] => Array
                                                                (
                                                                    [0] => application/msword
                                                                    [1] => application/vnd.ms-office
                                                                )

                                                            [dotx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                                                    [1] => application/zip
                                                                    [2] => application/msword
                                                                )

                                                            [xlsx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
                                                                    [1] => application/zip
                                                                    [2] => application/vnd.ms-excel
                                                                    [3] => application/msword
                                                                    [4] => application/x-zip
                                                                )

                                                            [word] => Array
                                                                (
                                                                    [0] => application/msword
                                                                    [1] => application/octet-stream
                                                                )

                                                            [xl] => application/excel
                                                            [eml] => message/rfc822
                                                            [json] => Array
                                                                (
                                                                    [0] => application/json
                                                                    [1] => text/json
                                                                )

                                                            [pem] => Array
                                                                (
                                                                    [0] => application/x-x509-user-cert
                                                                    [1] => application/x-pem-file
                                                                    [2] => application/octet-stream
                                                                )

                                                            [p10] => Array
                                                                (
                                                                    [0] => application/x-pkcs10
                                                                    [1] => application/pkcs10
                                                                )

                                                            [p12] => application/x-pkcs12
                                                            [p7a] => application/x-pkcs7-signature
                                                            [p7c] => Array
                                                                (
                                                                    [0] => application/pkcs7-mime
                                                                    [1] => application/x-pkcs7-mime
                                                                )

                                                            [p7m] => Array
                                                                (
                                                                    [0] => application/pkcs7-mime
                                                                    [1] => application/x-pkcs7-mime
                                                                )

                                                            [p7r] => application/x-pkcs7-certreqresp
                                                            [p7s] => application/pkcs7-signature
                                                            [crt] => Array
                                                                (
                                                                    [0] => application/x-x509-ca-cert
                                                                    [1] => application/x-x509-user-cert
                                                                    [2] => application/pkix-cert
                                                                )

                                                            [crl] => Array
                                                                (
                                                                    [0] => application/pkix-crl
                                                                    [1] => application/pkcs-crl
                                                                )

                                                            [der] => application/x-x509-ca-cert
                                                            [kdb] => application/octet-stream
                                                            [pgp] => application/pgp
                                                            [gpg] => application/gpg-keys
                                                            [sst] => application/octet-stream
                                                            [csr] => application/octet-stream
                                                            [rsa] => application/x-pkcs7
                                                            [cer] => Array
                                                                (
                                                                    [0] => application/pkix-cert
                                                                    [1] => application/x-x509-ca-cert
                                                                )

                                                            [3g2] => video/3gpp2
                                                            [3gp] => video/3gp
                                                            [mp4] => video/mp4
                                                            [m4a] => audio/x-m4a
                                                            [f4v] => video/mp4
                                                            [webm] => video/webm
                                                            [aac] => audio/x-acc
                                                            [m4u] => application/vnd.mpegurl
                                                            [m3u] => text/plain
                                                            [xspf] => application/xspf+xml
                                                            [vlc] => application/videolan
                                                            [wmv] => Array
                                                                (
                                                                    [0] => video/x-ms-wmv
                                                                    [1] => video/x-ms-asf
                                                                )

                                                            [au] => audio/x-au
                                                            [ac3] => audio/ac3
                                                            [flac] => audio/x-flac
                                                            [ogg] => audio/ogg
                                                            [kmz] => Array
                                                                (
                                                                    [0] => application/vnd.google-earth.kmz
                                                                    [1] => application/zip
                                                                    [2] => application/x-zip
                                                                )

                                                            [kml] => Array
                                                                (
                                                                    [0] => application/vnd.google-earth.kml+xml
                                                                    [1] => application/xml
                                                                    [2] => text/xml
                                                                )

                                                            [ics] => text/calendar
                                                            [ical] => text/calendar
                                                            [zsh] => text/x-scriptzsh
                                                            [7zip] => Array
                                                                (
                                                                    [0] => application/x-compressed
                                                                    [1] => application/x-zip-compressed
                                                                    [2] => application/zip
                                                                    [3] => multipart/x-zip
                                                                )

                                                            [cdr] => Array
                                                                (
                                                                    [0] => application/cdr
                                                                    [1] => application/coreldraw
                                                                    [2] => application/x-cdr
                                                                    [3] => application/x-coreldraw
                                                                    [4] => image/cdr
                                                                    [5] => image/x-cdr
                                                                    [6] => zz-application/zz-winassoc-cdr
                                                                )

                                                            [wma] => Array
                                                                (
                                                                    [0] => audio/x-ms-wma
                                                                    [1] => video/x-ms-asf
                                                                )

                                                            [jar] => Array
                                                                (
                                                                    [0] => application/java-archive
                                                                    [1] => application/x-java-application
                                                                    [2] => application/x-jar
                                                                    [3] => application/x-compressed
                                                                )

                                                            [svg] => Array
                                                                (
                                                                    [0] => image/svg+xml
                                                                    [1] => application/xml
                                                                    [2] => text/xml
                                                                )

                                                            [vcf] => text/x-vcard
                                                        )

                                                    [mime_type:protected] => text/html
                                                    [enable_profiler] => 
                                                    [_zlib_oc:protected] => 
                                                    [_compress_output:protected] => 
                                                    [_profiler_sections:protected] => Array
                                                        (
                                                        )

                                                    [parse_exec_vars] => 1
                                                )

                                            [security] => CI_Security Object
                                                (
                                                    [filename_bad_chars] => Array
                                                        (
                                                            [0] => ../
                                                            [1] => <!--
                                                            [2] => -->
                                                            [3] => <
                                                            [4] => >
                                                            [5] => '
                                                            [6] => "
                                                            [7] => &
                                                            [8] => $
                                                            [9] => #
                                                            [10] => {
                                                            [11] => }
                                                            [12] => [
                                                            [13] => ]
                                                            [14] => =
                                                            [15] => ;
                                                            [16] => ?
                                                            [17] => %20
                                                            [18] => %22
                                                            [19] => %3c
                                                            [20] => %253c
                                                            [21] => %3e
                                                            [22] => %0e
                                                            [23] => %28
                                                            [24] => %29
                                                            [25] => %2528
                                                            [26] => %26
                                                            [27] => %24
                                                            [28] => %3f
                                                            [29] => %3b
                                                            [30] => %3d
                                                        )

                                                    [charset] => UTF-8
                                                    [_xss_hash:protected] => 
                                                    [_csrf_hash:protected] => 
                                                    [_csrf_expire:protected] => 7200
                                                    [_csrf_token_name:protected] => ci_csrf_token
                                                    [_csrf_cookie_name:protected] => ci_csrf_token
                                                    [_never_allowed_str:protected] => Array
                                                        (
                                                            [document.cookie] => [removed]
                                                            [document.write] => [removed]
                                                            [.parentNode] => [removed]
                                                            [.innerHTML] => [removed]
                                                            [-moz-binding] => [removed]
                                                            [<!--] => &lt;!--
                                                            [-->] => --&gt;
                                                            [<![CDATA[] => &lt;![CDATA[
                                                            [<comment>] => &lt;comment&gt;
                                                        )

                                                    [_never_allowed_regex:protected] => Array
                                                        (
                                                            [0] => javascript\s*:
                                                            [1] => (document|(document\.)?window)\.(location|on\w*)
                                                            [2] => expression\s*(\(|&\#40;)
                                                            [3] => vbscript\s*:
                                                            [4] => wscript\s*:
                                                            [5] => jscript\s*:
                                                            [6] => vbs\s*:
                                                            [7] => Redirect\s+30\d
                                                            [8] => (["'])?data\s*:[^\1]*?base64[^\1]*?,[^\1]*?\1?
                                                        )

                                                )

                                            [input] => CI_Input Object
                                                (
                                                    [ip_address] => 
                                                    [_allow_get_array:protected] => 1
                                                    [_standardize_newlines:protected] => 
                                                    [_enable_xss:protected] => 
                                                    [_enable_csrf:protected] => 
                                                    [headers:protected] => Array
                                                        (
                                                        )

                                                    [_input_stream:protected] => 
                                                    [security] => CI_Security Object
                                                        (
                                                            [filename_bad_chars] => Array
                                                                (
                                                                    [0] => ../
                                                                    [1] => <!--
                                                                    [2] => -->
                                                                    [3] => <
                                                                    [4] => >
                                                                    [5] => '
                                                                    [6] => "
                                                                    [7] => &
                                                                    [8] => $
                                                                    [9] => #
                                                                    [10] => {
                                                                    [11] => }
                                                                    [12] => [
                                                                    [13] => ]
                                                                    [14] => =
                                                                    [15] => ;
                                                                    [16] => ?
                                                                    [17] => %20
                                                                    [18] => %22
                                                                    [19] => %3c
                                                                    [20] => %253c
                                                                    [21] => %3e
                                                                    [22] => %0e
                                                                    [23] => %28
                                                                    [24] => %29
                                                                    [25] => %2528
                                                                    [26] => %26
                                                                    [27] => %24
                                                                    [28] => %3f
                                                                    [29] => %3b
                                                                    [30] => %3d
                                                                )

                                                            [charset] => UTF-8
                                                            [_xss_hash:protected] => 
                                                            [_csrf_hash:protected] => 
                                                            [_csrf_expire:protected] => 7200
                                                            [_csrf_token_name:protected] => ci_csrf_token
                                                            [_csrf_cookie_name:protected] => ci_csrf_token
                                                            [_never_allowed_str:protected] => Array
                                                                (
                                                                    [document.cookie] => [removed]
                                                                    [document.write] => [removed]
                                                                    [.parentNode] => [removed]
                                                                    [.innerHTML] => [removed]
                                                                    [-moz-binding] => [removed]
                                                                    [<!--] => &lt;!--
                                                                    [-->] => --&gt;
                                                                    [<![CDATA[] => &lt;![CDATA[
                                                                    [<comment>] => &lt;comment&gt;
                                                                )

                                                            [_never_allowed_regex:protected] => Array
                                                                (
                                                                    [0] => javascript\s*:
                                                                    [1] => (document|(document\.)?window)\.(location|on\w*)
                                                                    [2] => expression\s*(\(|&\#40;)
                                                                    [3] => vbscript\s*:
                                                                    [4] => wscript\s*:
                                                                    [5] => jscript\s*:
                                                                    [6] => vbs\s*:
                                                                    [7] => Redirect\s+30\d
                                                                    [8] => (["'])?data\s*:[^\1]*?base64[^\1]*?,[^\1]*?\1?
                                                                )

                                                        )

                                                    [uni] => CI_Utf8 Object
                                                        (
                                                        )

                                                )

                                            [lang] => CI_Lang Object
                                                (
                                                    [language] => Array
                                                        (
                                                            [slot_main_category_title] => 슬롯 게임 리스트
                                                            [profile_category_title] => 내 정보
                                                            [e_wallet_category_title] => 전자지갑
                                                            [comp_category_title] => 콤프 포인트
                                                            [coupons_category_title] => 쿠폰
                                                            [affiliate_category_title] => 파트너
                                                            [about_us_category_title] => About Us
                                                            [help_category_title] => HELP
                                                            [terms_of_service_category_title] => Terms of Service
                                                            [privacy_policy_category_title] => Privacy Policy
                                                            [promotion_category_title] => 이벤트
                                                            [vip_club_category_title] => VIP Club
                                                            [site_map_category_title] => Site Map
                                                            [contact_us_category_title] => Contact Us
                                                            [bao8bet_casino] => Max Live
                                                            [live_casino] => 라이브 게임
                                                            [mg_slot] => MG 슬롯
                                                            [pt_slot] => PT 슬롯
                                                            [log_in] => 로그인
                                                            [log_out] => 로그아웃
                                                            [join_now] => 회원가입
                                                            [promotion] => 이벤트
                                                            [vip_club] => VIP Club
                                                            [help] => help
                                                            [lost_login] => Lost Login?
                                                            [e_wallet] => 전자지갑
                                                            [wallet] => 전자지갑
                                                            [mg] => MG Casino
                                                            [pt] => PT Casino
                                                            [deposit] => 입금신청
                                                            [withdraw] => 출금신청
                                                            [withdrawal] => 출금
                                                            [transfer] => 머니이동
                                                            [cny] => 원
                                                            [amount] => 금액
                                                            [member] => Member
                                                            [my_profile] => 내정보
                                                            [coupons] => 쿠폰
                                                            [affiliate] => 파트너
                                                            [jackpots] => JACKPOTS
                                                            [play_now] => 플레이
                                                            [need_help] => 도움이 필요하세요?
                                                            [call_us] => 전화
                                                            [about_us] => About Us
                                                            [banking] => 은행
                                                            [affiliate_program] => 파트너 프로그램
                                                            [contact_us] => Contact Us
                                                            [qq] => 라인
                                                            [skype] => SKYPE
                                                            [live_chat] => 실시간 채팅
                                                            [copyright] => Copyright 2015 © <strong>MAX Live.</strong> All Rights Reserved.
                                                            [terms_of_service] => Terms of Service
                                                            [privacy_policy] => Privacy Policy
                                                            [site_map] => Site Map
                                                            [bronze] => 브론즈
                                                            [silver] => 실버
                                                            [gold] => 골드
                                                            [platinum] => 플레티넘
                                                            [level] => 레벨
                                                            [level_point] => 레벨 포인트
                                                            [comp_point] => 콤프 포인트
                                                            [country] => Country
                                                            [member_since] => Member Since
                                                            [last_log_in] => Last log in
                                                            [email] => e-mail
                                                            [user_name] => 유저 ID
                                                            [gender] => 성별
                                                            [messenger] => 메신저
                                                            [mobile_number] => 휴대폰번호
                                                            [cancel] => 취소
                                                            [history] => 히스토리
                                                            [view_all] => 전체보기
                                                            [type] => 타입
                                                            [bonus] => 보너스
                                                            [date] => Date
                                                            [status] => 상태
                                                            [action] => Action
                                                            [your_balance] => 보유금액
                                                            [tos_contents] => 
								
								
								<h2>Welcome to BaoFa Casino. </h2>
								
								<br>We want you to enjoy the time you spend here. As this is an online gaming and gambling website, there are a number of laws and regulations that regulate our activities. <br>
								These rules are explained as clearly as possible in these Terms of Service (‘the Rules’).<br>
								This is how we let you know what you can and can&#39;t do on BaoFa Entertainment Limited, how we will use your personal information and how we manage the Site. <br>
								
								<h3>The Basics</h3>
								The Rules are a binding agreement between us and by clicking that you accept the Rules when creating your account you agree that you have read and accepted the Rules. If you do not agree with the Rules, you should not register or continue to use the Website. <br>
								Everything changes and we may change these Rules at any time. Where that change limits your current rights we will contact you and inform you of the new Rules. <br>
								If the change does not limit your current rights then we will make the change to the Rules on the Site and if you keep using the Site after that change, this provides your deemed acceptance of the new Rules.
								<br><br>

								<h4>1. Definitions</h4>
								You will see the following terms used throughout the Rules:<br>

								<table width="720" id="tabledText" class="table_bottom" border="0" cellspacing="0" cellpadding="0">
									<tbody><tr>
										<td width="180" align="left" valign="top">Games</td> 
										<td align="left" valign="top">are Casino, Live Casino, any other game on our Site (including mobile or any other platform) and ’Game’ can mean any one of them. We can remove or add Games to the Site at any time;</td> 
									</tr>									
									<tr>
										<td align="left" valign="top">Rules</td>	
										<td align="left" valign="top">are these terms, conditions and rules which you agree to when using the Site;</td>			
									</tr>									
									<tr>
										<td align="left" valign="top">Site</td>
										<td align="left" valign="top">Our any other website;</td>
									</tr>									
									<tr>	
										<td align="left" valign="top">Username and Password</td>
										<td align="left" valign="top">&nbsp;the username and password which you choose on registration with the Online Casino;</td>
									</tr>									
									<tr>	
										<td align="left" valign="top">We</td>
										<td align="left" valign="top">The Site is run by BaoFa Group Limited, a company registered in Cambodia;</td>
									</tr>									
									<tr> 
										<td align="left" valign="top">You</td>
										<td align="left" valign="top">is you using the Site. “Your” has its usual meaning in relation to you;</td> 
									</tr>									
									<tr> 
										<td align="left" valign="top">Your Account</td>
										<td align="left" valign="top"> is your player account on the Sit;</td> 
									</tr>									
									</tbody></table>
								
								<h4>2. Licenses</h4>
								
								As we provide online gaming, by law, we need to tell you the following:<br>
								We are licensed and regulated in Philippine and Cambodia<br><br>

								<h4>3. Who Can Play</h4>
								To play the Games on the Site, you must be:<br><br>

								•	over 18 years of age or above the legal age for gambling in the country you are playing from;<br>
								•	an actual person. You cannot be a company or other legal entity;<br>
								•	playing the Games for yourself and in a non-professional capacity;<br>
								•	legally allowed to play Games on the Site;<br>
								•	not resident in USA, Korea, Philippine, Cambodia, Thailand <br><br>
								
								<h4>4. How you can play</h4>
								4.1 Register<br><br>

								4.1.1 Click on the “Register” tab.<br><br>

								4.1.2 Accurately complete the registration form including:<br>
								✔ Your User ID;<br>
								✔ Your full name;<br>
								✔ Your valid e-mail address;<br>
								✔ Your mobile number;<br>
								✔ Your gender;<br>
								✔ Select and confirm password; and<br><br>

								4.1.3 Click on “Open Account” tab to confirm that the registration information in the form is the correct information and that you agree to the Rules.<br><br>

								4.1.4 You will then have to verify your e-mail address by clicking on the link received in your registration e-mail inbox.<br><br>

								4.1.5 You can now log-in using your registered log-in details.<br><br>

								4.2 Pay<br><br>

								When you are ready to play, you need to deposit money into Your Account. You do this by:<br>
								✔ Clicking on “Deposit” on the Site;<br>
								✔ Selecting Your payment method;<br>
								✔ Completing the information required for that payment method;<br>
								✔ Confirming that information is accurate by clicking on “Deposit”.<br><br>

								4.3 Play<br><br>

								4.3.1 We have a lot of games on the Site. Simply go to the games lobby and start playing by clicking on the game of your choice.<br><br>

								4.3.2 You must always play the Games on the Site in line with these Rules and any special Rules that apply to Games offered on the Site. <br>
								Different Rules apply to different Games…. (Where such Rules apply, please click on the link for each Game to see to the rules that apply to that Game):<br>
								✔ Casino https://www.baofa88.com/<br>
								✔ Live casino https://www.baofa88.com/live/<br><br>

								4.4 Cancellation<br><br>

								4.4.1 We do not accept cancellations of bets or stakes on any Games except for in exceptional circumstances. Such cancellation is solely at our discretion.<br><br>

								4.4.2 We do not issue refunds except for in exceptional circumstances. This is solely at our discretion.<br><br>
								
								<h4>5. General Rules for You</h4>
								
								5.1 You must register and play on your own behalf only and not on behalf of anyone else.<br><br>

								5.2 You must keep your login details secure and not share them with anyone. If you share them, even unintentionally, you are responsible for any abuse or misuse of your account.<br><br>

								5.3 You must keep you registration information up to date at all times.<br><br>

								5.4 If you realise that the information provided at registration is incorrect, you must tell us immediately or immediately amend your information.<br><br>

								5.5 It is your responsibility to know if your activity on the Site is legal in the country from which you are playing.<br><br>

								5.6 You are only allowed one account on this Site. If you have more than one account you must immediately tell us.<br><br>

								5.7 Only one account for each household is allowed. If you realise that there is more than one account at your household, you must immediately tell us.<br><br>

								5.8 You may play any game on the Site, as long as you have enough money on your account.<br><br>

								5.9 You are not allowed to transfer or receive funds from one account to another and /or to transfer, sell or buy accounts.<br><br>

								5.10 You agree that we can check you are who you claim to be. You agree to give us all documents we request to prove your registration information and payment details, such as (by way of example only) a copy of your passport, utility bills or bank statements.<br><br>

								5.11 You cannot use any technical error or vulnerability to your advantage. We will be entitled to cancel and reclaim all winnings gained in this manner.<br><br>

								5.12 You will not be involved in any fraudulent, collusive, fixing or other unlawful activity in relation to your (or third party) use of the Site. You shall not use any software assisted methods or techniques or hardware devices in aid of your participation of the Games on the Site.<br><br>

								5.13 You agree that we may also share your information with other people or businesses in order to carry out our business and deliver the Site to you.<br><br>
								
								<h4>6. What we can do</h4>
								
								6.1 We can refuse to open an account for any reason.

								6.2 We can suspend or close your account for any breach or suspected breach of this Agreement or other valid reason. Upon closure of Your Account, the full balance in Your Account will be paid to you unless there is a reason for such funds to be confiscated.<br><br>

								Whilst we understand that mistakes and typos happen, if we find the information given at the time of registration to be incorrect, this gives us the right to close Your Account and keep any funds in it. Likewise, if you fail to pass any personal identification verification procedures we will also close your account and withhold any winnings.<br><br>

								6.4 If we find there is more than one account registered for your household we will block or close any accounts for that household.<br><br>

								<h4>7. Payment Rules</h4>
								
								7.1 Making Deposits<br><br>

								Payment methods can be found under both “My Account” and “Deposit” pages of the Site. The payment methods made available to you may change. Some payment methods may not be available in all countries.<br>

								When choosing a payment method you agree to the terms of that payment method and agree to any charges that apply and that the payment method is valid and that the payment account or card belongs to you and you have the right to use the payment method.<br>

								We do not accept cash directly or cash delivered to any payment solution provider.<br><br>

								7.2 Payouts<br><br>

								When the outcome of a Game you take part in is determined or, when we confirm the result of an event, any winnings will be made available to you on Your Account.<br>

								If we mistakenly credit Your Account with winnings that do not belong to you for any reason, these will be taken back from Your Account. 
								If you have withdrawn these winnings before we become aware of this error, you must immediately inform us and will be required to pay this back. If you do not we will take all legal action available to us to recover this debt.<br><br>

								7.3 Withdrawals<br><br>

								You may withdraw any amount up to the “Available to Bet” balance in Your Account by issuing a valid notice of withdrawal. Notices for withdrawals must be made on the Site only.<br>

								If you want to withdraw all your funds, you must first cancel any outstanding stakes.<br>

								You agree that funds in Your Account must only be used for playing the Games found on the Site. If you request a withdrawal without turning over an amount that is equal or more than the amount deposited we can charge a fee on this withdrawal.<br>
								We can reject a withdrawal request if we suspect that funds are being withdrawn for any fraudulent or money laundering reasons.<br>

								We may request that you redirect your withdrawal or cancel it or request that it is redirected to a different method of withdrawal in accordance with anti-money laundering polices and/or regulation.<br>
								Cancellation of a withdrawal (whether this was made by you or us) does not entitle you to any compensation should you choose to play with the funds in Your Account before any withdrawal is completed.<br><br>

								7.4 Chargebacks<br><br>

								If a chargeback on a card or depositing method you have used is requested by the payment method provider, we may take the following steps:<br>
								✔ We may block Your Account;<br>
								✔ We may take any such action as we are entitled to by law;<br>
								✔ A chargeback notice may be issued and sent to you, using your registration details;<br>
								✔ We will use the same payment method as chosen by you when placing a deposit in order to issue the chargeback;<br><br>
								If we are unable to confirm your identity and the payment method used in order to credit the account in question, we will send out two reminder emails and these will be subject to an administrative fee of hundred (100) CNY each, withdrawn from Your Account funds which are unrelated to the chargeback.
								The balance of Your Account may turn negative in cases of chargeback.<br><br>
								
								<h4>8. Closing Your Account</h4>
								
								8.1 You can close Your Account at any time, by contacting support directly on support@baofa88.com<br><br>

								8.2 When you close our Account:<br>
								✔ You must first cancel any outstanding offers for stakes that you have made;<br>
								✔ You must contact support and specifically request for the closing of Your Account;<br>
								✔ We will transfer all funds from Your Account (subject to the deduction of relevant withdrawal charges).<br><br>

								8.3 If you want to recover funds from closed, blocked or excluded accounts, you need to contact support.<br><br>

								8.4 If you are closing Your Account because you have a problem with gambling addiction please refer to our responsible gamingrules.<br><br>
								
								<h4>9. Dormant & Inactive Accounts</h4>
								
								9.1 An inactive account is an account, having a real money balance that has not been accessed for an uninterrupted period of 12 months.<br><br>

								9.2 A dormant account is an account, having a real money balance that has not been accessed for an uninterrupted period of 30 Months.<br><br>

								9.3 If, after we began charging Your Account with the administrative fee, you log-in before Your Account becomes dormant, Your Account will no longer be charged the administrative fee. You may also request a full refund of the administrative fees charged up until then by contacting support. The period of inactivity starts to run again from your last log-in date.<br><br>

								9.4 If, Your Account becomes dormant, and we are still unable to reach you, we, if required in accordance with the applicable law (depending on where you are resident), shall transfer your remaining balance to the relevant regulatory body.<br><br>
								
								<h4>10. Bonuses and Freespins</h4>
								
								10.1 You can only receive one Bonuses/Freespins per person, family, household,  e-mail address, credit card number and / or IP address.<br><br>

								10.2 Deposit and reload bonuses must be manually activated by you in Your Account. You can do this after logging into Your Account and depositing the amount required to access the bonus. <br>
								Reload or deposit bonuses can only be activated when real money is available in Your Account. If you wager any real money deposited prior to activating the bonus it will no longer be possible to activate the bonus.<br><br>

								10.3 When you claim any Bonus or Free spins any deposit, the Bonus and / or Free Spins and all winnings generated from them will remain as bonus money and may not be withdrawn or wagered on other products until wagering requirements are met.<br>
								All Bonus and / or Free Spins must be wagered a minimum of 35 times within 7 days of the Bonus and / or Free spins being claimed unless stated otherwise in the terms related to that bonus. Risk-free bets on any Game (i.e. betting in proportions on different outcomes in the same hand to create "action" without risk) do not qualify for this wagering requirement. <br>
								Examples of risk-free bets include betting on red and black simultaneously in Roulette, and betting player and banker simultaneously in Baccarat. Any players found to be colluding, for example, one person betting on the player, the other betting on the banker will have their accounts closed indefinitely, and all money frozen. Failure to meet these wagering requirements will result in the forfeit of the Bonus and any winnings that have resulted from the Bonus.<br><br>

								10.4 If you cancel the Bonus / Free Spins you will lose the Bonus / Free spins and all winnings generated from the Bonus / Free Spins.<br><br>

								10.5 We have the right to refuse any player the right to Bonus or to alter the Bonus (including cancellation), if we believe that:<br>
								• the Bonus is being abused (our definition of abuse includes a player making use of promotional offers without ever risking their own funds);<br>
								• technical issues have occurred in relation to the Bonus;<br>
								• the Bonus is, for any reason, not able to be conducted as planned.<br><br>

								10.6 If there is any evidence of abuse or fraud, we will close Your Account and confiscate any existing funds.<br><br>
								
								<h4>11. How to Complain</h4>
								
								11.1 Our aim is to give the best customer experience in the industry, therefore we hope that you should have no complaints. However, if in the off chance that you do, this is the way to do it.<br>
								✔ E-mail us on: support@baofa88.com;<br><br>

								11.2 So that we can deal with your complaint quickly, the complaint must contain clear information about your identity as well as all relevant details giving rise to the complaint. We will use best efforts to promptly resolve a reported matter and reach an amicable settlement.<br><br>

								11.3 Any claim you might have regarding any transaction must be made within six months after the transaction, payment and/or settlement took place/should have taken place; otherwise we will not consider the claim. Once a claim is received, we will review any queried or disputed transactions and let you know the outcome. Our decision on this is final, in simple terms, what we say goes.<br><br>

								11.4 If for some reason you don’t like what we say in relation to your complaint:<br><br>
								
								<h4>12. Privacy Policy</h4>
								
								You can read our Privacy Statement here. You should be aware that by acceptance of the Rules includes full acceptance of the terms of our Privacy Statement. We therefore ask that you read the Privacy Statement carefully.<br><br>
								
								<h4>13. Your Liability to Us</h4>
								
								13.1 You enter the Site and participate in the Games at your own risk. The Site and the Games are provided ’as is’. The only promises we make in relation to the Site are detailed in these rules. We do not warrant (in simple language, we do not legally promise) that:<br>

								✔ The software or the Site is fit for purpose and free from errors;<br>
								✔ The Site and/or Games will be accessible without interruptions;<br><br>

								13.2 We shall not be liable for anything, this includes any loss, costs, expenses or damages, whether direct, indirect, special, consequential, incidental or otherwise arising in relation to your use of the Site or your participation in the Games.<br><br>

								13.3 You hereby agree to fully indemnify us (in simple language, compensate us for any loss) and directors, employees, partners, and service providers for any cost, expense, loss, damages, claims and liabilities howsoever caused that may arise in relation to your use of the Site or participation in the Games. If you don’t agree to this, you should not use the Site.
								
								<h4>14. Breaches, penalties and termination</h4>
								
								14.1 If we suspect that you have breached these Rules, we may refuse to open, suspend or close Your Account. We may also withhold any money in Your Account (including the deposit) and set off any money or damages due to us against the money in Your Account.<br><br>

								14.2 We also have the right to freeze or terminate Your Account or cancel any stakes if:<br>

								• We suspect that you are engaged in illegal or fraudulent activities;<br>
								• You are having problems with creditors or otherwise which are detrimental to our business.<br><br>

								14.3 Our decision is final.<br><br>
								
								<h4>15. NOTICES</h4>
								
								You agree to receive communications from us in an electronic form. Electronic communications may be posted on the pages within the Website and/or the messages/help files of your client application, and/or delivered to your e-mail address. All communications in either electronic or paper format will be considered to be in "writing" and to have been received no later than five business days after posting or dissemination, whether or not you have received or retrieved the Communication. We reserve the right, but assume no obligation, to provide communications in paper format. 

								
								
								
								
								

								<br><br>
								
								

								<br><br>




                                                        )

                                                    [is_loaded] => Array
                                                        (
                                                            [message_lang.php] => english
                                                            [terms_of_service_lang.php] => english
                                                        )

                                                )

                                            [load] => CI_Loader Object
                                                (
                                                    [_ci_ob_level:protected] => 0
                                                    [_ci_view_paths:protected] => Array
                                                        (
                                                            [/www/game_offline/application/views/] => 1
                                                        )

                                                    [_ci_library_paths:protected] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                            [1] => /www/game_offline/system/
                                                        )

                                                    [_ci_model_paths:protected] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                        )

                                                    [_ci_helper_paths:protected] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                            [1] => /www/game_offline/system/
                                                        )

                                                    [_ci_cached_vars:protected] => Array
                                                        (
                                                        )

                                                    [_ci_classes:protected] => Array
                                                        (
                                                            [benchmark] => Benchmark
                                                            [hooks] => Hooks
                                                            [config] => Config
                                                            [log] => Log
                                                            [utf8] => Utf8
                                                            [uri] => URI
                                                            [router] => Router
                                                            [output] => Output
                                                            [security] => Security
                                                            [input] => Input
                                                            [lang] => Lang
                                                            [loader] => Loader
                                                            [session] => Session
                                                            [session_manager] => Session_manager
                                                            [agent] => User_agent
                                                            [model] => Model
                                                            [game_play_service] => Game_play_service
                                                            [microgame] => Microgame
                                                            [exceptions] => Exceptions
                                                        )

                                                    [_ci_models:protected] => Array
                                                        (
                                                            [0] => game_play_update_log
                                                            [1] => user
                                                            [2] => game_play
                                                            [3] => wallet
                                                            [4] => CCP
                                                        )

                                                    [_ci_helpers:protected] => Array
                                                        (
                                                            [baofa_helper] => 1
                                                            [cookie_helper] => 1
                                                            [language_helper] => 1
                                                            [url_helper] => 1
                                                            [file_helper] => 1
                                                        )

                                                    [_ci_varmap:protected] => Array
                                                        (
                                                            [unit_test] => unit
                                                            [user_agent] => agent
                                                        )

                                                )

                                            [session] => CI_Session Object
                                                (
                                                    [userdata] => 
                                                    [_driver:protected] => files
                                                    [_config:protected] => 
                                                )

                                            [session_manager] => Session_manager Object
                                                (
                                                    [CI:Session_manager:private] => Batch_process Object
 *RECURSION*
                                                    [user_session_keys] => Array
                                                        (
                                                            [0] => user_no
                                                            [1] => user_id
                                                            [2] => user_name
                                                            [3] => user_level
                                                            [4] => user_type
                                                            [5] => ip
                                                            [6] => login_time
                                                            [7] => login_status
                                                            [8] => lang
                                                            [9] => pt_login_session
                                                            [10] => mg_login_session
                                                            [11] => session_id
                                                        )

                                                    [admin_session_keys] => Array
                                                        (
                                                            [0] => admin_id
                                                            [1] => admin_name
                                                            [2] => ip
                                                            [3] => login_time
                                                            [4] => login_status
                                                        )

                                                    [game_session_keys] => Array
                                                        (
                                                            [0] => mg_session_status
                                                            [1] => pt_session_status
                                                        )

                                                )

                                            [agent] => CI_User_agent Object
                                                (
                                                    [agent] => 
                                                    [is_browser] => 
                                                    [is_robot] => 
                                                    [is_mobile] => 
                                                    [languages] => Array
                                                        (
                                                            [0] => Undefined
                                                        )

                                                    [charsets] => Array
                                                        (
                                                        )

                                                    [platforms] => Array
                                                        (
                                                        )

                                                    [browsers] => Array
                                                        (
                                                        )

                                                    [mobiles] => Array
                                                        (
                                                        )

                                                    [robots] => Array
                                                        (
                                                        )

                                                    [platform] => 
                                                    [browser] => 
                                                    [version] => 
                                                    [mobile] => 
                                                    [robot] => 
                                                    [referer] => 
                                                )

                                            [db] => CI_DB_mysqli_driver Object
                                                (
                                                    [dbdriver] => mysqli
                                                    [compress] => 
                                                    [delete_hack] => 1
                                                    [stricton] => 
                                                    [_escape_char:protected] => `
                                                    [return_delete_sql:protected] => 
                                                    [reset_delete_data:protected] => 
                                                    [qb_select:protected] => Array
                                                        (
                                                        )

                                                    [qb_distinct:protected] => 
                                                    [qb_from:protected] => Array
                                                        (
                                                        )

                                                    [qb_join:protected] => Array
                                                        (
                                                        )

                                                    [qb_where:protected] => Array
                                                        (
                                                        )

                                                    [qb_groupby:protected] => Array
                                                        (
                                                        )

                                                    [qb_having:protected] => Array
                                                        (
                                                        )

                                                    [qb_keys:protected] => Array
                                                        (
                                                        )

                                                    [qb_limit:protected] => 
                                                    [qb_offset:protected] => 
                                                    [qb_orderby:protected] => Array
                                                        (
                                                        )

                                                    [qb_set:protected] => Array
                                                        (
                                                        )

                                                    [qb_aliased_tables:protected] => Array
                                                        (
                                                        )

                                                    [qb_where_group_started:protected] => 
                                                    [qb_where_group_count:protected] => 0
                                                    [qb_caching:protected] => 
                                                    [qb_cache_exists:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_select:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_from:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_join:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_where:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_groupby:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_having:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_orderby:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_set:protected] => Array
                                                        (
                                                        )

                                                    [qb_no_escape:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_no_escape:protected] => Array
                                                        (
                                                        )

                                                    [dsn] => 
                                                    [username] => root
                                                    [password] => DF0Oc$as8H
                                                    [hostname] => 52.193.101.231
                                                    [database] => db_offline
                                                    [subdriver] => 
                                                    [dbprefix] => 
                                                    [char_set] => utf8
                                                    [dbcollat] => utf8_general_ci
                                                    [autoinit] => 1
                                                    [encrypt] => 
                                                    [swap_pre] => 
                                                    [port] => 
                                                    [pconnect] => 
                                                    [conn_id] => mysqli Object
                                                        (
                                                            [affected_rows] => -1
                                                            [client_info] => 5.5.41-MariaDB
                                                            [client_version] => 50541
                                                            [connect_errno] => 0
                                                            [connect_error] => 
                                                            [errno] => 0
                                                            [error] => 
                                                            [error_list] => Array
                                                                (
                                                                )

                                                            [field_count] => 0
                                                            [host_info] => 52.193.101.231 via TCP/IP
                                                            [info] => 
                                                            [insert_id] => 0
                                                            [server_info] => 5.6.28
                                                            [server_version] => 50628
                                                            [stat] => Uptime: 3145551  Threads: 1  Questions: 472261  Slow queries: 0  Opens: 487  Flush tables: 1  Open tables: 113  Queries per second avg: 0.150
                                                            [sqlstate] => 00000
                                                            [protocol_version] => 10
                                                            [thread_id] => 106857
                                                            [warning_count] => 0
                                                        )

                                                    [result_id] => mysqli_result Object
                                                        (
                                                            [current_field] => 0
                                                            [field_count] => 5
                                                            [lengths] => 
                                                            [num_rows] => 1
                                                            [type] => 0
                                                        )

                                                    [db_debug] => 1
                                                    [benchmark] => 0.0011959075927734
                                                    [query_count] => 1
                                                    [bind_marker] => ?
                                                    [save_queries] => 1
                                                    [queries] => Array
                                                        (
                                                            [0] => SELECT *
FROM `comp_conversion_policy`
                                                        )

                                                    [query_times] => Array
                                                        (
                                                            [0] => 0.0011959075927734
                                                        )

                                                    [data_cache] => Array
                                                        (
                                                        )

                                                    [trans_enabled] => 1
                                                    [trans_strict] => 1
                                                    [_trans_depth:protected] => 1
                                                    [_trans_status:protected] => 1
                                                    [_trans_failure:protected] => 
                                                    [cache_on] => 
                                                    [cachedir] => 
                                                    [cache_autodel] => 
                                                    [CACHE] => CI_DB_Cache Object
                                                        (
                                                            [CI] => Batch_process Object
 *RECURSION*
                                                            [db] => CI_DB_mysqli_driver Object
 *RECURSION*
                                                        )

                                                    [_protect_identifiers:protected] => 1
                                                    [_reserved_identifiers:protected] => Array
                                                        (
                                                            [0] => *
                                                        )

                                                    [_like_escape_str:protected] =>  ESCAPE '%s' 
                                                    [_like_escape_chr:protected] => !
                                                    [_random_keyword:protected] => Array
                                                        (
                                                            [0] => RAND()
                                                            [1] => RAND(%d)
                                                        )

                                                    [_count_string:protected] => SELECT COUNT(*) AS 
                                                    [failover] => Array
                                                        (
                                                        )

                                                )

                                            [game_play_update_log] => Game_play_update_log Object
                                                (
                                                    [table] => game_play_update_log
                                                )

                                            [user] => User Object
                                                (
                                                    [table] => user
                                                )

                                            [game_play] => Game_play Object
                                                (
                                                    [table] => game_play
                                                )

                                            [wallet] => Wallet Object
                                                (
                                                    [table] => wallet
                                                )

                                            [CCP] => Comp_conversion_policy Object
                                                (
                                                    [table] => comp_conversion_policy
                                                )

                                            [game_play_service] => Game_play_service Object
                                                (
                                                    [CI] => Batch_process Object
 *RECURSION*
                                                    [message] => 
                                                    [update_row_count] => 0
                                                    [comp_conversion_policy] => stdClass Object
                                                        (
                                                            [comp_conversion_policy_no] => 6
                                                            [slot_conversion_1p] => 1
                                                            [non_slot_conversion_1p] => 1.1
                                                            [live_conversion_1p] => 1
                                                            [reg_date] => 1449989040
                                                        )

                                                )

                                            [microgame] => Microgame Object
                                                (
                                                    [url] => https://entservices.totalegame.net?wsdl
                                                    [client] => SoapClient Object
                                                        (
                                                            [compression] => 32
                                                            [_soap_version] => 1
                                                            [sdl] => Resource id #65
                                                            [httpurl] => Resource id #70
                                                            [__soap_fault] => SoapFault Object
 *RECURSION*
                                                        )

                                                    [is_set_header] => 
                                                    [sessionGUID] => 
                                                    [remote_addr] => 
                                                    [CI] => Batch_process Object
 *RECURSION*
                                                    [error_code] => 
                                                    [result] => 
                                                    [exception] => 
                                                    [agent_accunt] => 
                                                    [agent_account] => Array
                                                        (
                                                            [0] => Array
                                                                (
                                                                    [loginName] => MMCashier181029
                                                                    [pinCode] => ce6d8b
                                                                )

                                                        )

                                                    [params] => Array
                                                        (
                                                            [0] => Array
                                                                (
                                                                    [loginName] => MMCashier181029
                                                                    [pinCode] => ce6d8b
                                                                )

                                                        )

                                                )

                                        )

                                    [1] => fetch_game_play
                                )

                            [1] => Array
                                (
                                )

                        )

                )

            [8] => Array
                (
                    [file] => /www/game_offline/index.php
                    [line] => 292
                    [args] => Array
                        (
                            [0] => /www/game_offline/system/core/CodeIgniter.php
                        )

                    [function] => require_once
                )

        )

    [previous:Exception:private] => 
    [faultstring] => Error Fetching http headers
    [faultcode] => HTTP
)

ERROR - 2016-01-22 05:00:19 --> MG API error -------------------------------------------------------------------------------------->
ERROR - 2016-01-22 05:00:19 --> Server Error. No Response Object
ERROR - 2016-01-22 05:00:19 --> Severity: Notice --> Undefined variable: count /www/game_offline/application/controllers/batch/Batch_process.php 49
ERROR - 2016-01-22 05:00:21 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 05:00:21 --> MG start_date ===> 2016-01-21T23:00:00
ERROR - 2016-01-22 05:00:21 --> MG end_date ===> 2016-01-21T23:00:00
ERROR - 2016-01-22 05:00:23 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 2f208352-9708-48f7-a0e5-5960fe073cb6
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 05:00:26 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 24be652a-7d24-4925-958a-c8ea346da076
        )

)

ERROR - 2016-01-22 05:00:30 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 24be652a-7d24-4925-958a-c8ea346da076
        )

)

ERROR - 2016-01-22 05:00:30 --> Response Code  : Normal
ERROR - 2016-01-22 05:00:30 --> cur_page
ERROR - 2016-01-22 05:00:30 --> 2
ERROR - 2016-01-22 05:00:30 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 05:00:30 --> MG Game play update result
ERROR - 2016-01-22 05:00:30 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453384800
    [update_end_time] => 1453392000
    [update_status] => Y
    [auto_attempt_count] => 2
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453406430
    [reg_date] => 1453406430
)

ERROR - 2016-01-22 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T02:00:00
            [end_time] => 2016-01-22T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 02:00:00
            [end_time] => 2016-01-22 05:00:00
        )

)

ERROR - 2016-01-22 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 08:00:01 --> MG start_date ===> 2016-01-22T02:00:00
ERROR - 2016-01-22 08:00:01 --> MG end_date ===> 2016-01-22T02:00:00
ERROR - 2016-01-22 08:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a1cff333-5216-48ba-86b5-faed59e566bd
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d223272b-fa56-4cbc-b9d6-084ab4d07126
        )

)

ERROR - 2016-01-22 08:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => d223272b-fa56-4cbc-b9d6-084ab4d07126
        )

)

ERROR - 2016-01-22 08:00:04 --> Response Code  : Normal
ERROR - 2016-01-22 08:00:04 --> cur_page
ERROR - 2016-01-22 08:00:04 --> 2
ERROR - 2016-01-22 08:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 08:00:04 --> MG Game play update result
ERROR - 2016-01-22 08:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453395600
    [update_end_time] => 1453402800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453417204
    [reg_date] => 1453417204
)

ERROR - 2016-01-22 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T05:00:00
            [end_time] => 2016-01-22T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 05:00:00
            [end_time] => 2016-01-22 08:00:00
        )

)

ERROR - 2016-01-22 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 11:00:01 --> MG start_date ===> 2016-01-22T05:00:00
ERROR - 2016-01-22 11:00:01 --> MG end_date ===> 2016-01-22T05:00:00
ERROR - 2016-01-22 11:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 13c00fe0-1a6c-4169-8a37-778ba2ab2f8c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 11:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5fdcea7e-aab9-4e2e-95b3-5fdb8c136915
        )

)

ERROR - 2016-01-22 11:00:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 5fdcea7e-aab9-4e2e-95b3-5fdb8c136915
        )

)

ERROR - 2016-01-22 11:00:08 --> Response Code  : Normal
ERROR - 2016-01-22 11:00:08 --> cur_page
ERROR - 2016-01-22 11:00:08 --> 2
ERROR - 2016-01-22 11:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 11:00:08 --> MG Game play update result
ERROR - 2016-01-22 11:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453406400
    [update_end_time] => 1453413600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453428008
    [reg_date] => 1453428008
)

ERROR - 2016-01-22 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T08:00:00
            [end_time] => 2016-01-22T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 08:00:00
            [end_time] => 2016-01-22 11:00:00
        )

)

ERROR - 2016-01-22 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 14:00:01 --> MG start_date ===> 2016-01-22T08:00:00
ERROR - 2016-01-22 14:00:01 --> MG end_date ===> 2016-01-22T08:00:00
ERROR - 2016-01-22 14:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e09f22e9-ca22-488b-bb54-e67b4f736bd8
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 14:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b6ef4127-4c39-41d4-9c76-b14d014be306
        )

)

ERROR - 2016-01-22 14:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => b6ef4127-4c39-41d4-9c76-b14d014be306
        )

)

ERROR - 2016-01-22 14:00:03 --> Response Code  : Normal
ERROR - 2016-01-22 14:00:03 --> cur_page
ERROR - 2016-01-22 14:00:03 --> 2
ERROR - 2016-01-22 14:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 14:00:03 --> MG Game play update result
ERROR - 2016-01-22 14:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453417200
    [update_end_time] => 1453424400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453438803
    [reg_date] => 1453438803
)

ERROR - 2016-01-22 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T11:00:00
            [end_time] => 2016-01-22T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 11:00:00
            [end_time] => 2016-01-22 14:00:00
        )

)

ERROR - 2016-01-22 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 17:00:01 --> MG start_date ===> 2016-01-22T11:00:00
ERROR - 2016-01-22 17:00:01 --> MG end_date ===> 2016-01-22T11:00:00
ERROR - 2016-01-22 17:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a3ebf523-ce65-4618-a112-7529bf7ce0ca
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 17:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b73b586f-d375-4544-9fec-d3531970cc13
        )

)

ERROR - 2016-01-22 17:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => b73b586f-d375-4544-9fec-d3531970cc13
        )

)

ERROR - 2016-01-22 17:00:03 --> Response Code  : Normal
ERROR - 2016-01-22 17:00:03 --> cur_page
ERROR - 2016-01-22 17:00:03 --> 2
ERROR - 2016-01-22 17:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 17:00:03 --> MG Game play update result
ERROR - 2016-01-22 17:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453428000
    [update_end_time] => 1453435200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453449603
    [reg_date] => 1453449603
)

ERROR - 2016-01-22 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T14:00:00
            [end_time] => 2016-01-22T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 14:00:00
            [end_time] => 2016-01-22 17:00:00
        )

)

ERROR - 2016-01-22 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 20:00:01 --> MG start_date ===> 2016-01-22T14:00:00
ERROR - 2016-01-22 20:00:01 --> MG end_date ===> 2016-01-22T14:00:00
ERROR - 2016-01-22 20:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b7c6a7f7-285d-47a8-999e-3d9c370ce806
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 20:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 54141893-0926-45eb-832d-20046b40bfd3
        )

)

ERROR - 2016-01-22 20:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 54141893-0926-45eb-832d-20046b40bfd3
        )

)

ERROR - 2016-01-22 20:00:03 --> Response Code  : Normal
ERROR - 2016-01-22 20:00:03 --> cur_page
ERROR - 2016-01-22 20:00:03 --> 2
ERROR - 2016-01-22 20:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 20:00:03 --> MG Game play update result
ERROR - 2016-01-22 20:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453438800
    [update_end_time] => 1453446000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453460403
    [reg_date] => 1453460403
)

ERROR - 2016-01-22 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-22 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T17:00:00
            [end_time] => 2016-01-22T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 17:00:00
            [end_time] => 2016-01-22 20:00:00
        )

)

ERROR - 2016-01-22 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-22 23:00:01 --> MG start_date ===> 2016-01-22T17:00:00
ERROR - 2016-01-22 23:00:01 --> MG end_date ===> 2016-01-22T17:00:00
ERROR - 2016-01-22 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 435ce91f-c7b6-4ef5-b103-049f1e1ef330
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-22 23:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => de47e94f-b83e-45a8-a17e-38bf0dca651c
        )

)

ERROR - 2016-01-22 23:00:15 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => de47e94f-b83e-45a8-a17e-38bf0dca651c
        )

)

ERROR - 2016-01-22 23:00:15 --> Response Code  : Normal
ERROR - 2016-01-22 23:00:15 --> cur_page
ERROR - 2016-01-22 23:00:15 --> 2
ERROR - 2016-01-22 23:00:15 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-22 23:00:15 --> MG Game play update result
ERROR - 2016-01-22 23:00:15 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453449600
    [update_end_time] => 1453456800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453471215
    [reg_date] => 1453471215
)

