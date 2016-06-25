<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-11 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-10T20:00:00
            [end_time] => 2016-01-10T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-10 20:00:00
            [end_time] => 2016-01-10 23:00:00
        )

)

ERROR - 2016-01-11 02:00:11 --> Severity: Warning --> SoapClient::SoapClient(): php_network_getaddresses: getaddrinfo failed: Name or service not known /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-01-11 02:00:11 --> Severity: Warning --> SoapClient::SoapClient(https://entservices.totalegame.net?wsdl): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-01-11 02:00:11 --> Severity: Warning --> SoapClient::SoapClient(): I/O warning : failed to load external entity "https://entservices.totalegame.net?wsdl" /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-01-11 02:00:11 --> Severity: error --> Exception: SOAP-ERROR: Parsing WSDL: Couldn't load from 'https://entservices.totalegame.net?wsdl' : failed to load external entity "https://entservices.totalegame.net?wsdl"
 /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-01-11 02:00:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /www/game_offline/application/controllers/batch/Batch_process.php:27) /www/game_offline/system/core/Common.php 566
ERROR - 2016-01-11 02:00:11 --> Severity: Error --> SOAP-ERROR: Parsing WSDL: Couldn't load from 'https://entservices.totalegame.net?wsdl' : failed to load external entity "https://entservices.totalegame.net?wsdl"
 /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-01-11 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-10T23:00:00
            [end_time] => 2016-01-11T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-10 23:00:00
            [end_time] => 2016-01-11 02:00:00
        )

)

ERROR - 2016-01-11 05:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 05:00:02 --> MG start_date ===> 2016-01-10T23:00:00
ERROR - 2016-01-11 05:00:02 --> MG end_date ===> 2016-01-10T23:00:00
ERROR - 2016-01-11 05:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 62ec6be9-56b5-4aa9-8b21-49655ae18a93
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 05:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => aae80510-698f-4b7d-9118-878d007edabf
        )

)

ERROR - 2016-01-11 05:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => aae80510-698f-4b7d-9118-878d007edabf
        )

)

ERROR - 2016-01-11 05:00:05 --> Response Code  : Normal
ERROR - 2016-01-11 05:00:05 --> cur_page
ERROR - 2016-01-11 05:00:05 --> 2
ERROR - 2016-01-11 05:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 05:00:05 --> MG Game play update result
ERROR - 2016-01-11 05:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452434400
    [update_end_time] => 1452441600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452456005
    [reg_date] => 1452456005
)

ERROR - 2016-01-11 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-11T02:00:00
            [end_time] => 2016-01-11T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-11 02:00:00
            [end_time] => 2016-01-11 05:00:00
        )

)

ERROR - 2016-01-11 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 08:00:01 --> MG start_date ===> 2016-01-11T02:00:00
ERROR - 2016-01-11 08:00:01 --> MG end_date ===> 2016-01-11T02:00:00
ERROR - 2016-01-11 08:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a54aaf7a-ed69-4882-9d8e-03a9acadd537
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 88dff5b6-4278-44a1-b238-d3b7508f1ab9
        )

)

ERROR - 2016-01-11 08:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 88dff5b6-4278-44a1-b238-d3b7508f1ab9
        )

)

ERROR - 2016-01-11 08:00:05 --> Response Code  : Normal
ERROR - 2016-01-11 08:00:05 --> cur_page
ERROR - 2016-01-11 08:00:05 --> 2
ERROR - 2016-01-11 08:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 08:00:05 --> MG Game play update result
ERROR - 2016-01-11 08:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452445200
    [update_end_time] => 1452452400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452466805
    [reg_date] => 1452466805
)

ERROR - 2016-01-11 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-11T05:00:00
            [end_time] => 2016-01-11T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-11 05:00:00
            [end_time] => 2016-01-11 08:00:00
        )

)

ERROR - 2016-01-11 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 11:00:01 --> MG start_date ===> 2016-01-11T05:00:00
ERROR - 2016-01-11 11:00:01 --> MG end_date ===> 2016-01-11T05:00:00
ERROR - 2016-01-11 11:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 79682159-85b5-40ae-8cac-fd0b2a972cae
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 11:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6ad2d22f-be91-491b-bd7d-afd00273729a
        )

)

ERROR - 2016-01-11 11:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 6ad2d22f-be91-491b-bd7d-afd00273729a
        )

)

ERROR - 2016-01-11 11:00:04 --> Response Code  : Normal
ERROR - 2016-01-11 11:00:04 --> cur_page
ERROR - 2016-01-11 11:00:04 --> 2
ERROR - 2016-01-11 11:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 11:00:04 --> MG Game play update result
ERROR - 2016-01-11 11:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452456000
    [update_end_time] => 1452463200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452477604
    [reg_date] => 1452477604
)

ERROR - 2016-01-11 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-11T08:00:00
            [end_time] => 2016-01-11T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-11 08:00:00
            [end_time] => 2016-01-11 11:00:00
        )

)

ERROR - 2016-01-11 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 14:00:01 --> MG start_date ===> 2016-01-11T08:00:00
ERROR - 2016-01-11 14:00:01 --> MG end_date ===> 2016-01-11T08:00:00
ERROR - 2016-01-11 14:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 596a7ccd-4b7f-484d-918f-46fce46e217a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 14:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d4bbadd4-9a9e-4e11-b953-b86ac6307c56
        )

)

ERROR - 2016-01-11 14:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d4bbadd4-9a9e-4e11-b953-b86ac6307c56
        )

)

ERROR - 2016-01-11 14:00:05 --> Response Code  : Normal
ERROR - 2016-01-11 14:00:05 --> cur_page
ERROR - 2016-01-11 14:00:05 --> 2
ERROR - 2016-01-11 14:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 14:00:05 --> MG Game play update result
ERROR - 2016-01-11 14:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452466800
    [update_end_time] => 1452474000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452488405
    [reg_date] => 1452488405
)

ERROR - 2016-01-11 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-11T11:00:00
            [end_time] => 2016-01-11T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-11 11:00:00
            [end_time] => 2016-01-11 14:00:00
        )

)

ERROR - 2016-01-11 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 17:00:01 --> MG start_date ===> 2016-01-11T11:00:00
ERROR - 2016-01-11 17:00:01 --> MG end_date ===> 2016-01-11T11:00:00
ERROR - 2016-01-11 17:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 16774f59-ff59-44c2-ad58-ce41574d899d
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 17:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a519896e-4774-431b-a88c-1a16d0074b24
        )

)

ERROR - 2016-01-11 17:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => a519896e-4774-431b-a88c-1a16d0074b24
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-11 17:00:06 --> Response Code  : NotInCache
ERROR - 2016-01-11 17:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 527a2125-eddb-4d09-b609-79082f5e4bb8
        )

)

ERROR - 2016-01-11 17:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 527a2125-eddb-4d09-b609-79082f5e4bb8
        )

)

ERROR - 2016-01-11 17:00:10 --> Response Code  : Normal
ERROR - 2016-01-11 17:00:10 --> cur_page
ERROR - 2016-01-11 17:00:10 --> 2
ERROR - 2016-01-11 17:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 17:00:10 --> MG Game play update result
ERROR - 2016-01-11 17:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452477600
    [update_end_time] => 1452484800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452499210
    [reg_date] => 1452499210
)

ERROR - 2016-01-11 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-11T14:00:00
            [end_time] => 2016-01-11T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-11 14:00:00
            [end_time] => 2016-01-11 17:00:00
        )

)

ERROR - 2016-01-11 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 20:00:01 --> MG start_date ===> 2016-01-11T14:00:00
ERROR - 2016-01-11 20:00:01 --> MG end_date ===> 2016-01-11T14:00:00
ERROR - 2016-01-11 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 3f67f861-64fd-4ae3-826e-1d27bfbc49a1
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 20:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 42262222-b17e-4982-af47-4351e7a6f20c
        )

)

ERROR - 2016-01-11 20:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 42262222-b17e-4982-af47-4351e7a6f20c
        )

)

ERROR - 2016-01-11 20:00:05 --> Response Code  : Normal
ERROR - 2016-01-11 20:00:05 --> cur_page
ERROR - 2016-01-11 20:00:05 --> 2
ERROR - 2016-01-11 20:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 20:00:05 --> MG Game play update result
ERROR - 2016-01-11 20:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452488400
    [update_end_time] => 1452495600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452510005
    [reg_date] => 1452510005
)

ERROR - 2016-01-11 23:00:02 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-11 23:00:02 --> [CRON2] 에이젼트 정산 작업의 배치를 시작합니다. ===========================================================>
ERROR - 2016-01-11 23:00:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-11T17:00:00
            [end_time] => 2016-01-11T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-11 17:00:00
            [end_time] => 2016-01-11 20:00:00
        )

)

ERROR - 2016-01-11 23:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-11 23:00:02 --> Severity: Notice --> Undefined variable: option /www/game_offline/application/controllers/batch/Batch_process.php 191
ERROR - 2016-01-11 23:00:02 --> 정산시간 ======>  
ERROR - 2016-01-11 23:00:02 --> MG start_date ===> 2016-01-11T17:00:00
ERROR - 2016-01-11 23:00:02 --> MG end_date ===> 2016-01-11T17:00:00
ERROR - 2016-01-11 23:00:02 --> Severity: Notice --> Undefined variable: agent_settle /www/game_offline/application/libraries/Affiliate_service.php 453
ERROR - 2016-01-11 23:00:02 --> Severity: Warning --> Invalid argument supplied for foreach() /www/game_offline/application/libraries/Affiliate_service.php 453
ERROR - 2016-01-11 23:00:02 --> Severity: Notice --> Undefined variable: deps1_apply_level /www/game_offline/application/libraries/Affiliate_service.php 476
ERROR - 2016-01-11 23:00:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /www/game_offline/application/controllers/batch/Batch_process.php:167) /www/game_offline/system/core/Common.php 566
ERROR - 2016-01-11 23:00:02 --> Severity: Error --> Cannot access empty property /www/game_offline/application/libraries/Affiliate_service.php 476
ERROR - 2016-01-11 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 85529c5b-eb00-4fdc-947b-6494edf4a467
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-11 23:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 09c3943d-22ec-4ddb-818d-b0c01d9f707b
        )

)

ERROR - 2016-01-11 23:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 09c3943d-22ec-4ddb-818d-b0c01d9f707b
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-11 23:00:03 --> Response Code  : NotInCache
ERROR - 2016-01-11 23:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5ec1fca8-76dd-4613-b918-9ad2e0926a27
        )

)

ERROR - 2016-01-11 23:00:11 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5ec1fca8-76dd-4613-b918-9ad2e0926a27
        )

)

ERROR - 2016-01-11 23:00:11 --> Response Code  : Normal
ERROR - 2016-01-11 23:00:11 --> cur_page
ERROR - 2016-01-11 23:00:11 --> 2
ERROR - 2016-01-11 23:00:11 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-11 23:00:11 --> MG Game play update result
ERROR - 2016-01-11 23:00:11 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452499200
    [update_end_time] => 1452506400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452520811
    [reg_date] => 1452520811
)

